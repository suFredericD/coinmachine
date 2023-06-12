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
    $strSiteLogo = $strMediaPath . "logos/CML_transparent.png";
?>
        <header id="site-header" class="offset-xl-1 col-xl-10">
            <div class="row">
                <div id="site-logo" class="col-xl-1">
                    <a href="<?php echo $strIndexFile;?>"><img src="<?php echo $strSiteLogo;?>" alt="CoinMachine logo"></a>
                </div>
                <div id="site-title" class="col-xl-11">
                    <h1>CoinMachine</h1>
                    <h2>Blockchain & Cryptocurrency</h2>
                </div>
            </div>
        </header>
<?php
}