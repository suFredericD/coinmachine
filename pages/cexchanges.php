<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : cexchanges.php
// Role         : CeXchanges presentation page
// Author       : CoinMachine
// Creation     : 2023-06-16
// Last update  : 2023-06-17
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabCexchanges = getCexchangesInfos();                  // Get the list of the CeXchanges

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="cex-master" class="col-11">
            <div class="row">
                <h1 class="col-12">CeXchanges dashboard</h1>
<?php   for($i = 0; $i < count($tabCexchanges); $i++){
            $strLogo = "../media/logos/" . $tabCexchanges[$i]['Logo'];
?>
                <article id="cex<?php echo $tabCexchanges[$i]['OrderId'];?>" class="col-12">
                    <div class="row">
                        <a class="cex-link-img col-4" href="<?php echo $tabCexchanges[$i]['Url'];?>" title="<?php echo $tabCexchanges[$i]['Tooltip'];?>" target="_blank">
                            <img class="" src="<?php echo $strLogo;?>" alt="<?php echo $tabCexchanges[$i]['Name'];?> logo" /></a>
                        <div class="col-8">
                            <div class="row">
                                <a class="cex-name col-8" href="<?php echo $tabCexchanges[$i]['Url'];?>" title="<?php echo $tabCexchanges[$i]['Tooltip'];?>" target="_blank">
                                    <h2><?php echo $tabCexchanges[$i]['Name'];?></h2></a>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Twitter'];?>" title="Compte Twitter de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="twitter-icon fa-brands fa-twitter-square"></span></a>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Youtube'];?>" title="Chaîne YouTube de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="youtube-icon fa-brands fa-youtube-square"></span></a>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Meta'];?>" title="Compte Facebook de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="facebook-icon fa-brands fa-facebook-square"></span></a>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Linkedin'];?>" title="Compte LinkedIn de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="linkedin-icon fa-brands fa-linkedin"></span></a>
                                <div class="description-bloc col-12">
                                    <div class="row container-fluid">
<?php       $tabDescription = explode("<br>", $tabCexchanges[$i]['Description']);
                for($j = 0; $j < count($tabDescription); $j++){ ?>
                                        <p class="cex-description col-12"><?php echo $tabDescription[$j];?></p>
<?php           } ?>
                                    </div>
                                </div>
                            </div>
<?php       if($tabCexchanges[$i]['Name'] == "Binance"){ ?>
                            <a class="cex-tutos col-12" href="web3tutorials.php" target="_blank" title="Vers la page des tutoriels">Découvrez nos tutos sur Binance<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
<?php       } ?>
                        </div>   
                    </div>
                </article>
<?php   } ?>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>