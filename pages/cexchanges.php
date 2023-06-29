<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : cexchanges.php
// Role         : CeXchanges presentation page
// Author       : CoinMachine
// Creation     : 2023-06-16
// Last update  : 2023-06-29
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabCexchanges = getCexchangesInfos();                  // Get the list of the CeXchanges
$tabCeXFirms = getCeXFirmsInfos($tabCexchanges);        // Get the list of the CeXchanges firms
$tabCEOs = getCeXCeosInfos($tabCeXFirms);               // Get the list of the CeXchanges CEOs

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="cex-master" class="col-11">
            <div class="row">
                <h1 class="col-12">CeXchanges dashboard<span class="fa-solid fa-chart-line"></span></h1>
<?php   for($i = 0; $i < count($tabCexchanges); $i++){
            $strLogo = "../media/logos/" . $tabCexchanges[$i]['Logo'];
            $strSubscribe = "S'inscire sur " . $tabCexchanges[$i]['Name'] . "<span class=\"fa-solid fa-arrow-up-right-from-square\"></span>";
            $strSubscribeTitle = "Vers la page d'inscription de " . $tabCexchanges[$i]['Name'] . "...";
?>
                <article id="cex<?php echo $tabCexchanges[$i]['OrderId'];?>" class="col-11">
                    <div class="row">
                        <a class="cex-link-img col-12 col-md-3 col-lg-3 col-xl-4" href="<?php echo $tabCexchanges[$i]['Url'];?>" title="<?php echo $tabCexchanges[$i]['Tooltip'];?>" target="_blank">
                            <img class="" src="<?php echo $strLogo;?>" alt="<?php echo $tabCexchanges[$i]['Name'];?> logo" /></a>
                        <div class="col-12 col-md-9 col-lg-9 col-xl-8">
                            <div class="row">
                                <a class="cex-name col-7" href="<?php echo $tabCexchanges[$i]['Url'];?>" title="<?php echo $tabCexchanges[$i]['Tooltip'];?>" target="_blank">
                                    <h2><?php echo $tabCexchanges[$i]['Name'];?></h2></a>
<?php       if($tabCexchanges[$i]['Twitter'] != ""){ ?>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Twitter'];?>" title="Compte Twitter de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="twitter-icon fa-brands fa-twitter-square"></span></a>
<?php       } 
            if($tabCexchanges[$i]['Youtube'] != ""){?>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Youtube'];?>" title="Chaîne YouTube de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="youtube-icon fa-brands fa-youtube-square"></span></a>
<?php       } 
            if($tabCexchanges[$i]['Meta'] != ""){?>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Meta'];?>" title="Compte Facebook de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="facebook-icon fa-brands fa-facebook-square"></span></a>
<?php       } 
            if($tabCexchanges[$i]['Linkedin'] != ""){?>
                                <a class="col-1" href="<?php echo $tabCexchanges[$i]['Linkedin'];?>" title="Compte LinkedIn de <?php echo $tabCexchanges[$i]['Name'];?>" target="_blank">
                                    <span class="linkedin-icon fa-brands fa-linkedin"></span></a>
<?php       } ?>
                                <div class="description-bloc col-12">
                                    <div class="row container-fluid">
<?php       $tabDescription = explode("<br>", $tabCexchanges[$i]['Description']);
                for($j = 0; $j < count($tabDescription); $j++){ ?>
                                        <p class="cex-description col-12"><?php echo $tabDescription[$j];?></p>
<?php           } ?>
                                    </div>
                                </div>
                                <a class="cex-tutos col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" href="<?php echo $tabCexchanges[$i]['Url'];?>" target="_blank" title="<?php echo $strSubscribeTitle;?>"><?php echo $strSubscribe;?></a>

                            </div>
<?php       if($tabCexchanges[$i]['Name'] == "Binance"){ ?>
                            <a class="cex-tutos col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" href="web3tutorials.php" target="_blank" title="Vers la page des tutoriels">Découvrir nos tutos à propos de Binance<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
<?php       } ?>
                        </div>
<?php       foreach($tabCeXFirms as $firm){
                if($firm['Name'] == $tabCexchanges[$i]['Name']){
                    foreach($tabCEOs as $ceos){
                        if($ceos['FirmId'] == $firm['Id']){
                            $strCeoName = $ceos['FirstName'] . " " . $ceos['LastName'];
                            $strCeoLink = "web3humans.php#" . $strCeoName;
                            $strCeoLinkTitle = "Consulter le profil de " . $strCeoName . "...";
                            $strCeoImg = "../media/people/" . $ceos['Picture'];
                            $strCeoImgAlt = "Picture of " . $strCeoName;
                            $strCountryFlag = "../media/flags/" . $ceos['CountryFlag'];
                            $strCountryFlagTitle = "Flag of " . $ceos['Country'];
                            $datBirthDate = new DateTime($ceos['Birth']);
                            if($datBirthDate->format('Y') > 0){
                                $strBirthDate = $datBirthDate->format('d/m/Y');
                                $datNow = new DateTime();
                                $intAge = $datNow->diff($datBirthDate);
                                $strAge = $intAge->format('%y ans');

                            } else {
                                $strBirthDate = "<span class=\"fa-solid fa-ban\"></span>";
                                $strAge = "<span class=\"fa-solid fa-ban\"></span>";
                            }
                        }
                    } ?>
                        <div class="cex-ceo-details col-12">
                            <div class="row">
                                <img class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-2" src="<?php echo $strCeoImg;?>" alt="<?php echo $strCeoImgAlt;?>" />
                                <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-10">
                                    <div class="row">
                                        <label class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2"><span class="fa-solid fa-user-tie"></span>Ceo :</label>
                                        <h4 class="col-12 col-sm-12 col-md-9 col-lg-3 col-xl-3"><?php echo $strCeoName;?></h4>
                                        <a class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7" title="<?php echo $strCeoLinkTitle;?>" href="<?php echo $strCeoLink;?>" target="_blank">Consulter son profil<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                        <label class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2"><span class="fa-regular fa-calendar-days"></span>Age :</label>
                                        <h4 class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10"><?php echo $strAge;?></h4>
                                        <label class="col-9 col-sm-10 col-md-4 col-lg-3 col-xl-3">Birth country :</label>
<?php               if($ceos['Country'] != ""){ ?>
                                        <img class="col-3 col-sm-2 col-md-1 col-lg-1 col-xl-1" src="<?php echo $strCountryFlag;?>" alt="<?php echo $strCountryFlagTitle;?>" />
<?php               } else { ?>
                                        <h4 class="col-2 col-sm-2 col-md-9 col-lg-10 col-xl-10"><span class="fa-solid fa-ban"></span></h4>
<?php               } ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
<?php           }
            } ?>
                    </div>
                </article>
<?php   } ?>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>