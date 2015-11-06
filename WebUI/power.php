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
  if ($lockState != "Not Encrypted") { 

$currentWallet = ArchCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BitBean;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BlackCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BottleCaps;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = CASH;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Clams;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Crave;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = DarkTron;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Diamond;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Equilibrium;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = FlutterCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = GoldPieces;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HoboNickels;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HYPER;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HyperStake;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = LiteDoge;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = MintCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Navajo;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NetCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NovaCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Pandacoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PeerCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PhilosopherStone;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = RATECoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = ShadowCash;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Sprouts;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = TekCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();
  }
    exec("python /var/www/html/webui/WebUI/libs/reboot.py");  
    print '<h2>Your StakeBox is rebooting ...</h2>';  
}  
if ($status == "shutdown"){ 
  if ($lockState != "Not Encrypted") { 

$currentWallet = ArchCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BitBean;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BlackCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BottleCaps;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = CASH;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Clams;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Crave;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = DarkTron;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Diamond;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Equilibrium;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = FlutterCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = GoldPieces;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HoboNickels;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HYPER;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HyperStake;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = LiteDoge;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = MintCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Navajo;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NetCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NovaCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Pandacoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PeerCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PhilosopherStone;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = RATECoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = ShadowCash;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Sprouts;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = TekCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();
  }
    exec("python /var/www/html/webui/WebUI/libs/shutdown.py");  
    print '<h2>Your StakeBox is shutting down ...</h2>';  
} 
?>
</div>
</div>
<?php include ("footer.php"); ?>