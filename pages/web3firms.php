<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3firms.php
// Role         : web3 firms presentation page
// Author       : CoinMachine
// Creation     : 2023-07-16
// Last update  : 2021-07-16
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script
require('../scripts/php/tools.php');                    // Include the utilitary functions script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabMinNavAlphabet = ['A', 'N', 'B', 'O', 'C', 'P', 'D', 'Q', 'E', 'R',
                      'F', 'S', 'G', 'T', 'H', 'U', 'I', 'V', 'J', 'W',
                      'K', 'X', 'L', 'Y', 'M', 'Z'];
$tabAlphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                'U', 'V', 'W', 'X', 'Y', 'Z'];

$tabFirmsOrderedByAlphaName = getFirmsOrderedByAlphaName();
$tabFirmsCeos = getFirmsCeos();

$strPreviousLetter = "";
$tabAlphaFirms = [];
$tabAlphaFirmsCount = [];
for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
    $letter = $tabMinNavAlphabet[$i];
    $intFirmsCount = 0;
    foreach($tabFirmsOrderedByAlphaName as $firm) {
        $tabNameLetters = str_split($firm['Name']);
        if($tabNameLetters[0] == $letter) {
            if(isset($tabAlphaFirms[$i])){
                $tabAlphaFirms[$i] .= ", " . $firm['Name'];
                $intFirmsCount++;
            } else {
                $tabAlphaFirms[$i] = $firm['Name'];
                $intFirmsCount++;
            }
        }
    }
    $tabAlphaFirmsCount[$i] = $intFirmsCount;
}

// =====================================================================================================
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="humans-container" class="col-11">
            <div class="row">
                <div class="col-12">
                    <h1 id="firms-main-title">Web3 : compagnies<span class="fa-solid fa-building"></span></h1>
                </div>
<!-- --- --- --- MINI NAVIGATION MENU --- --- --- -->
                <nav id="firms-mini-nav" class="col-2">
                    <div class="row">
<?php   for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
            if(isset($tabAlphaFirms[$i])){
                $strMiniNavTitle = $tabAlphaFirms[$i];
            } else {
                $strMiniNavTitle = "Aucune compagnie répertoriée pour cette lettre";
            }
            $strDisplayLink = $tabMinNavAlphabet[$i] . " <span class=\"firms-count\">(" . $tabAlphaFirmsCount[$i] . ")</span>";
?>
                        <a class="col-6" href="#<?php echo $tabMinNavAlphabet[$i];?>" title="<?php echo $strMiniNavTitle;?>"><?php echo $strDisplayLink;?></a>
<?php   } ?>
                    </div>
                </nav>
<!-- --- --- --- MAIN CONTENT --- --- --- -->
                <section id="firms-main-content" class="offset-2 col-10">
                    <div clas="row">
<?php   foreach($tabFirmsOrderedByAlphaName as $firm) {
            foreach($tabFirmsCeos as $ceo) {
                if($ceo['FirmId'] == $firm['Id']) {
                    $strCeoName = $ceo['FirstName'] . " " . $ceo['LastName'];
                    $strCeoLink = "<a href=\"web3humans.php#" . $strCeoName . "\" title=\"Consulter le profil de ". $strCeoName ."...\" target=\"_blank\">";
                    $strCeoLink .= $strCeoName . "</a>";
                    break;
                } else {
                    $strCeoLink = "<span class=\"fa-solid fa-ban\"></span>";
                }
            }
            $strFirmLinkDisplay = "Visiter le site web de ";
            $strFirstLetter = substr($firm['Name'], 0, 1);
            if($strFirstLetter == "A" || $strFirstLetter == "E" || $strFirstLetter == "I" || $strFirstLetter == "O" || $strFirstLetter == "U" || $strFirstLetter == "Y") {
                $strFirmLinkDisplay .= "l'";
            }
            $strFirmLinkDisplay .= $firm['Name'] . "<span class=\"fa-solid fa-external-link\"></span>";
?>
                        <article class="firm-item col-12">
                            <div class="row">
                                <h2 class="firm-name col-9 col-sm-9 col-md-9 col-lg-10 col-xl-10"><?= $firm['Name'] ?></h2>
                                <h3 class="firm-birthyear col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2"><?= $firm['BirthYear'] ?></h3>
                                <img class="firm-logo col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4" src="../media/logos/<?= $firm['LogoFile'] ?>">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                    <div class="row">
                                        <div class="firm-ceo-label col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">CEO :</div>
                                        <div class="firm-ceo col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9"><?= $strCeoLink ?></div>
                                        <p class="firm-description col-12"><?= $firm['Description'] ?></p>
                                        <a class="firm-website col-12" href="<?= $firm['Website'] ?>" title="Visiter le site web de <?= $firm['Name'] ?>..." target="_blank"><?= $strFirmLinkDisplay ?></a>
                                        <div class="firm-socials col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                    <div class="row">
<?php       if($firm['Twitter'] == "" && $firm['Meta'] == "" && $firm['Linkedin'] == ""){ ?>
                                        <h3 class="nodata col-12 col-sm-6">Unknown</h3>
<?php       } else {
                if($firm['Twitter'] != ""){ ?>
                                        <a class="socials col-2" href="<?php echo $firm['Twitter'];?>" title="Compte Twitter de <?= $firm['Name'] ?>" target="_blank">
                                            <span class="twitter-icon fa-brands fa-twitter-square"></span></a>
<?php           } 
                if($firm['Meta'] != ""){?>
                                        <a class="socials col-2" href="<?php echo $firm['Meta'];?>" title="Compte Facebook de <?= $firm['Name'] ?>" target="_blank">
                                            <span class="facebook-icon fa-brands fa-facebook-square"></span></a>
<?php           } 
                if($firm['Linkedin'] != ""){?>
                                        <a class="socials col-2" href="<?php echo $firm['Linkedin'];?>" title="Compte LinkedIn de <?= $firm['Name'] ?>" target="_blank">
                                            <span class="linkedin-icon fa-brands fa-linkedin"></span></a>
<?php           }
            } ?>
                                    </div>
                                </div>
                                    </div>
                                </div>

                            </div>
                        </article>
<?php   } ?>
                    </div>
                </section>
            </div>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>