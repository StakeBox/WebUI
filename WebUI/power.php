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
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="power" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="reboot">Restart StakeBox</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="power.php" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="shutdown">Shut Down StakeBox</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<?php  
$status = $_POST["status"];  
  
if ($status == "reboot"){  
    $newLockState = "Locked";
    changeLockState();
    exec("python /var/www/html/webui/WebUI/libs/reboot.py");  
    print '<h2>Your StakeBox is rebooting ...</h2>';  
}  
if ($status == "shutdown"){ 
    $newLockState = "Locked"; 
    changeLockState();
    exec("python /var/www/html/webui/WebUI/libs/shutdown.py");  
    print '<h2>Your StakeBox is shutting down ...</h2>';  
} 
?>
</div>
</div>
<?php include ("footer.php"); ?>