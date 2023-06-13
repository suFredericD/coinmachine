<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3dashboard.php
// Role         : known and used blockchains informations
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-13
// =====================================================================================================
// Include the HTML header builder
require('..\scripts\paging\html_header.php');
// Include the page header builder
require('..\scripts\paging\page_header.php');
// Include the HTML footer builder
require('..\scripts\paging\html_footer.php');
// Include the menu builder script
require('..\scripts\paging\main_menu.php');
// Include the database access script
require('..\admin\db_access.php');
// Include the database request builder script
require('..\admin\db_requestBuilder.php');

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabBlockchainsInfos = getBlockchainsList();

// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>

        <label id ="bc-dashboard-label" for="bc-dashboard" class="col-10">Blockchains dashboard</label>
        <section id ="bc-dashboard" class="col-11">
            <div class="row">
<!-- Little menu -->
                <nav id="bcd-mini-menu" class="col-3">
                    <h4><a href="#">Blockchains</a></h4>
                    <ul>
<?php   for($i = 0; $i < count($tabBlockchainsInfos); $i++){ ?>
                        <li><a href="#<?php echo $tabBlockchainsInfos[$i]['OrderId'];?>"><?php echo $tabBlockchainsInfos[$i]['Name'];?></a></li>
<?php   } ?>
                    </ul>
                </nav>
<!-- Main content -->
                <section id="bc-main-content" class="offset-3 col-9">
                    <div id="bc-blockchains-list" class="row">
<?php   for($i = 0; $i < count($tabBlockchainsInfos); $i++){
            $strLogoFile = "../media/tokens/" . $tabBlockchainsInfos[$i]['LogoFile'];    
?>
                        <article class="col-12">
                            <div class="row">
                                <img class="bc-token-logo col-2" src="<?php echo $strLogoFile;?>" alt="<?php echo $tabBlockchainsInfos[$i]['Name'];?> logo" />
                                <div class="col-10">
                                    <div class="row">
                                        <h3 class="col-7"><a class="bc-article-titles" id="<?php echo $tabBlockchainsInfos[$i]['OrderId'];?>"><?php echo $tabBlockchainsInfos[$i]['Name'];?></a></h3>
                                        <h4 class="col-4"><?php echo $tabBlockchainsInfos[$i]['Consensus'];?></h4>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Whitepaper :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['Whitepaper'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['Whitepaper'];?></a>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Explorateur de blocs :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['Blockscan'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['Blockscan'];?></a>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Code source :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['SourceCode'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['SourceCode'];?></a>
                                        <p class="bc-description col-12"><?php echo $tabBlockchainsInfos[$i]['Description'];?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
<?php   } ?>
                    </div>
                </section>














            </div>
        </section>


<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>