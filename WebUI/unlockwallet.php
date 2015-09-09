<?php
include ("header.php");
include ("pass.php");
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
    $coin->walletpassphrase($_POST['password'],9999999);
    echo "<p class='bg-success'><b>Your Wallet is unlocked for sending, for security reasons you should not leave it that way indefinitely.</b></p>";
    $newLockState = "Unlocked For Sending";
    changeLockState();
} catch(Exception $e) {
    echo "<p class='bg-danger'><b>Error: Something went wrong...  Perhaps you entered the wrong password, or your wallet is already unlocked.</b></p>";
}		
?>
</div>
<?php include ("footer.php"); ?>