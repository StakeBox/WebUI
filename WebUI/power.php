<?php
include ("header.php");
include ("pass.php");
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
    exec("python /var/www/html/webui/WebUIlibs/reboot.py");  
    print '<h2>Your StakeBox is rebooting ...</h2>';  
}  
if ($status == "shutdown"){  
    exec("python /var/www/html/webui/WebUI/libs/shutdown.py");  
    print '<h2>Your StakeBox is shutting down ...</h2>';  
} 
?>
</div>
</div>
<?php include ("footer.php"); ?>