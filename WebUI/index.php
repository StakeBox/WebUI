<?php 
include ("header.php"); 
include ("pass.php"); 
$info = $coin->getinfo(); 
$y = array_reverse(
$info); $bal1 = $coin->getbalance("*", 6); 
$bal2 = $coin->getbalance("*", 0); 
$bal3 = abs(
$bal1 - $bal2); 
$bal4 = abs("{$y['stake']}");
$address = $coin->listaddressgroupings();
$addressArray = $address[0][0][0]; 
if ($currentWallet == ArchCoin || $currentWallet == BlackCoin || $currentWallet == Clams || $currentWallet == Crave || $currentWallet == FlutterCoin || $currentWallet == GoldPieces || $currentWallet == Navajo || $currentWallet == NetCoin || $currentWallet == PayCon || $currentWallet == RATECoin || $currentWallet == ShadowCash){
	$stakinginfo = $coin->getstakinginfo(); 
	$x = array_reverse($stakinginfo); 
	$time = $x['expectedtime']; 
}
if ($currentWallet == BitBean || $currentWallet == Equilibrium || $currentWallet == DarkTron){
	$stakinginfo = $coin->getstakinginfo(); 
	$x = array_reverse($stakinginfo); 
	$time = $x['Expected Time']; 
}
if ($currentWallet == PhilosopherStone){
	$stakinginfo = $coin->getmininginfo(); 
	$x = array_reverse($stakinginfo); 
	$time = $x['Expected Time']; 
}
if ($currentWallet == BottleCaps || $currentWallet == HoboNickels || $currentWallet == PayCoin || $currentWallet == PhilosopherStone || $currentWallet == VeriCoin){
	$stakinginfo = $coin->getmininginfo(); 
	$x = array_reverse($stakinginfo); 
	$w = array_reverse($x['stakeweight']); 
}
	$days = floor($time / 86400); 
	$hours = floor(($time / 3600) % 24); 
	$minutes = floor(($time / 60) % 60); 
	$fiatValue = ($bal2 * $price * $fiatBTC); 
	$fiatValue = sprintf("%01.2f", $fiatValue); 
	$btcValue = ($bal2 * $price); 
	$btcValue = sprintf("%01.8f", $btcValue); 
	$address = $coin->getaccountaddress(""); 
	$img = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $address"); $imgData = "data:image/png;base64," . base64_encode($img); 
?>
<div class="row">
	<div class="col-lg-6">
		<h3>Available Balance: <font color='green'><?php echo $bal1; ?></font> <?php echo $currentWallet; ?></h3>
		<h4>Unconfirmed Balance: <font color='red'><?php echo $bal3; ?></font> <?php echo $currentWallet; ?></h4>
		<h4>Unavailable Due To Staking: <font color='red'><?php echo $bal4; ?></font> <?php echo $currentWallet; ?></h4>
		<h4>BTC Value: <font color='green'><?php echo "{$btcValue}"; ?></font></h4>
		<h4><?php echo $longCurrency; ?> Value: <font color='green'><?php echo "{$symbol}{$fiatValue}"; ?></font></h4>
	</div>
	<div class="col-lg-3">
		<?php if (isset($_POST['show'])){
			$privKey = $coin->dumpprivkey($address); 
			$privKeyImg = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $privKey"); 
			$privKeyImgData = "data:image/png;base64," . base64_encode($privKeyImg); 
		?>
		<center><img class="emrQRCode" src="<?=$privKeyImgData?>"height="30%" />
		<h4>Private Key</h4></center>
		<?php 
		}
		else {
		?>
		<center><h4>In order to</h4>
			<form name="sql-data" method="post" action="<?php $_SERVER['PHP_SELF']?>">
				<button class='btn btn-default' type="submit" name="show" value="show">Show private key</button>
			</form>
		<h4>wallet must be unlocked for sending, or not encrypted.</h4></center>
		<?php 
		}
		?>
	</div>
	<div class="col-lg-3">
		<center><img class="emrQRCode" src="<?=$imgData?>"height="30%" />
		<h4>Public Key</h4></center>
	</div>
</div>
</div>
<div class="well">
	<p>Your main wallet address is <?php print_r($addressArray); ?>.
	<p>The network is currently on block <?php print_r($coin->getblockcount()); ?>.
	<?php if ($currentWallet == ArchCoin || $currentWallet == BitBean || $currentWallet == BlackCoin || $currentWallet == BottleCaps || $currentWallet == Clams || $currentWallet == DarkTron || $currentWallet == Equilibrium || $currentWallet == FlutterCoin || $currentWallet == GoldPieces || $currentWallet == HoboNickels || $currentWallet == Navajo || $currentWallet == NetCoin || $currentWallet == PayCon || $currentWallet == PayCoin || $currentWallet == RATECoin || $currentWallet == ShadowCash || $currentWallet == VeriCoin): ?>
		<?php echo "<p>Your stake weight is {$w['combined']}{$sw['combined']}{$x['weight']}{$x['Weight']}.</p>" ?>
		<?php echo "<p>The network stake weight is {$x['netstakeweight']}{$x['Net Stake Weight']}.</p>" ?>
	<?php endif; ?>
	<?php if ($currentWallet == Philosopherstone): ?>
		<?php echo "<p>Your stake weight is {$x['stakeweight']}.</p>"?>
	<?php endif; ?>
	<?php if ($currentWallet == ArchCoin || $currentWallet == BitBean || $currentWallet == BlackCoin || $currentWallet == Clams || $currentWallet == Crave || $currentWallet == DarkTron || $currentWallet == Equilibrium || $currentWallet == FlutterCoin || $currentWallet == GoldPieces || $currentWallet == Navajo || $currentWallet == NetCoin || $currentWallet == PayCon || $currentWallet == RATECoin || $currentWallet == ShadowCash || $currentWallet == VeriCoin): ?>
		<?php echo "<p>Your estimated time to earn rewards is "?>
		<?php if ($hours < 1 && $days < 1)echo "$minutes minutes.</p>"?>
		<?php if ($hours == 1 && $days < 1)echo "$hours hour $minutes minutes.</p>"?>
		<?php if ($hours > 1 && $days < 1)echo "$hours hours $minutes minutes.</p>"?>
		<?php if ($hours == 0 && $days == 1)echo "$days day $hours hour $minutes minutes"?>
		<?php if ($hours == 1 && $days == 1)echo "$days day $hours hours $minutes minutes"?>
		<?php if ($hours < 1 && $days == 1)echo "$days day $hours hours $minutes minutes"?>
		<?php if ($hours == 0 && $days > 1)echo "$days days $hours hours $minutes minutes"?>
		<?php if ($hours == 1 && $days > 1)echo "$days days $hours hour $minutes minutes"?>
		<?php if ($hours > 1 && $days > 1)echo "$days days $hours hours $minutes minutes"?>
	<?php endif; ?>
		</p></p></div>
<?php include ("footer.php"); ?>
