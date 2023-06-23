<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : page_header.php
// Role         : script creating the page header
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-12
// =====================================================================================================
function createPageheader($fileName){
    if($fileName == '/index.php'){
        $strMediaPath = "media/";
        $strIndexFile = "index.php";
    } else {
        $strMediaPath = "../media/";
        $strIndexFile = "../index.php";
    }
    $strSiteLogo = $strMediaPath . "logos/CoinMachine_green_001.png";
?>
        <header id="site-header" class="col-xs-11 col-sm-11 col-md-10 col-10">
            <div class="row">
                <div id="site-logo" class="col-xs-4 col-sm-4 col-md-3 col-2">
                    <a href="<?php echo $strIndexFile;?>"><img src="<?php echo $strSiteLogo;?>" alt="CoinMachine logo"></a>
                </div>
                <div id="site-title" class="col-xs-8 col-sm-8 col-md-9 col-10">
                    <h1>CoinMachine</h1>
                    <h2>IT & Web3</h2>
                    <h3>Blockchain &&nbsp;
                        <div class="scroller">
                            <span>
                                Cryptocurrency<br />
                                Wallets<br />
                                DeFi<br />
                                CeFi<br />
                                Farming<br />
                                Staking
                            </span>
                        </div>    
                    </h3>
                </div>
            </div>
        </header>
<?php
}