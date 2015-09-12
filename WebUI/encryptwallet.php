<?php
include ("header.php");
include ("pass.php");
$password = $_POST['password'];
$lockStateLocation = "/home/stakebox/UI/".$currentWallet."lockstate.php";

function changeLockState(){

	global $lockStateLocation;
	global $newLockState;
	if(!file_exists("$lockStateLocation")){
		$file = fopen("$lockStateLocation","w");
		fwrite($file,"");
		fclose($file);
	}   
	if (is_readable($lockStateLocation) == FALSE) 
		die ("The lock state file must be writable.") ; 

	// Open the file and erase the contents if any
	$fp = fopen($lockStateLocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$lockState='$newLockState';\n?>");	  	
  	// Close the file
  	fclose($fp);
}

try {
	$coin->encryptwallet($password);
		echo "<p class='bg-success'><b>Your wallet is now encrypted, your password is $password, do not forget it, there is no way of recovering it. This process will stop the wallet, you must restart your StakeBox before you can access it again.</b></p> ";
		$newLockState = "Locked";
                changeLockState();
	} catch(Exception $e) {
		echo "<p class='bg-danger'><b>Error: Something went wrong...  Is your wallet already encrypted?</b></p>";
	}
?>
</div>
<?php include ("footer.php");?>