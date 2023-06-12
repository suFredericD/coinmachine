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
        <header id="site-header" class="col-xs-10 col-sm-10 col-md-10 col-10">
            <div class="row">
                <div id="site-logo" class="col-xs-2 col-sm-2 col-md-2 col-2">
                    <a href="<?php echo $strIndexFile;?>"><img src="<?php echo $strSiteLogo;?>" alt="CoinMachine logo"></a>
                </div>
                <div id="site-title" class="col-xs-10 col-sm-10 col-md-10 col-10">
                    <h1>CoinMachine</h1>
                    <h2>IT & Web3</h2>
                    <h3>Blockchain & Cryptocurrency</h3>
                </div>
            </div>
        </header>
<?php
}