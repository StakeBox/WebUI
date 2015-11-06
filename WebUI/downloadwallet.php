<?php
include ("header.php");
include ("pass.php");
$destination = "/var/www/html/webui/WebUI/".$currentWallet."wallet.dat";
$coin->backupwallet($destination);
exec("sudo chmod g+r /var/www/html/webui/WebUI/".$currentWallet."wallet.dat");
header("Location: http://stakebox.local/".$currentWallet."wallet.dat");
exit;
?>

