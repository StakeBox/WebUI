<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="update" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="webui">Update WebUI</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="update" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="wallet">Update Wallet Version</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<?php  
$status = $_POST["status"];  
  
if ($status == "webui"){
  try{  
    exec("cd /var/www/html/webui && git pull"); 
    print '<h2>You have updated the UI</h2>';
  }catch(exception $e){
    echo "<p><b>Something went wrong contact <a"href="mailto:support@stakebox.net">support@stakebox.com</a></b></p>";
  }  
}  
if ($status == "wallet"){ 
  try{    
    chdir($walletDir);
    exec("git pull"); 
    print '<h2>You have updated the current wallet. Reboot now in order to use the new version.</h2>';
  }catch(exception $e){
    echo "<p><b>Something went wrong contact <a"href="mailto:support@stakebox.net">support@stakebox.com</a></b></p>";
  } 
} 
?>
</div>
</div>
<?php include ("footer.php"); ?>