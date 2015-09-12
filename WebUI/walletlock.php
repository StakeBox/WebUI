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
   $newLockState = "Locked";
   changeLockState();

$coin->walletlock();
?>
<p><b>Your wallet is now locked, You WILL NOT stake while locked.</b><p/>
</div>
<?php include ("footer.php"); ?>