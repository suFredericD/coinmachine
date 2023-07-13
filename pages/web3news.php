<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3news.php
// Role         : known fresh informations about web3
// Author       : CoinMachine
// Creation     : 2023-06-24
// Last update  : 2021-07-13
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabNewsInfos = getLastThirtyNewsList();                // Get the last 30 news from the database
$tabMonths = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet",
              "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>

        <label id ="web3-news-label" for="web3-news" class="col-10">Breaking News<span class="fa-solid fa-radio"></span></label>
        <section id ="web3-news" class="col-11">
            <div class="row">
<!-- Main content -->
                <section id="web3-news-main-content" class="col-11">
                    <div id="web3-news-list" class="row">
<?php   for($i=0; $i<5; $i++) {
            $dateNews = new DateTime($tabNewsInfos[$i]['Date']);
            $strDateNews = "[" . $dateNews->format('d/m/Y') . "] - <span class=\"news-source\">" . $tabNewsInfos[$i]['SourceName'] . "</span>";
            $strImageUrl = "../media/thumbnews/" . $tabNewsInfos[$i]['Thumbnail'];
            $strLogoSource = "../media/logos/" . $tabNewsInfos[$i]['SourceLogo'];
            $strNewsLinkTitle = "Lire l'article complet sur " . $tabNewsInfos[$i]['SourceName'] . "...";
?>
                        <article class="news-container col-12">
                            <div class="row">
                                <img class="img-news col-xl-4" src="<?= $strImageUrl ?>" alt="<?= $tabNewsInfos[$i]['Title'] ?>">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <p class="news-date col-10 col-sm-11 col-md-11 col-xl-11"><?= $strDateNews ?></p>
                                        <img class="news-source-logo col-2 col-sm-1 col-md-1 col-xl-1" src="<?= $strLogoSource?>" alt="<?= $tabNewsInfos[$i]['SourceName'] ?>">
                                        <h3 class="news-title col-12"><?= $tabNewsInfos[$i]['Title'] ?></h3>
                                        <p class="news-text col-12"><?= $tabNewsInfos[$i]['Text'] ?></p>
                                        <a class="news-link col-12" href="<?= $tabNewsInfos[$i]['Url'] ?>" target="_blank"><span class="fa-solid fa-arrow-up-right-from-square"></span><?= $strNewsLinkTitle ?></a>
                                    </div>
                                </div>
                            </div>
                        </article>
<?php   } ?>
                        <section id="old-news" class="col-12">
                            <div id="old-news-row" class="row">
<?php   $intLastMonth = 0;
        for($i=5; $i<count($tabNewsInfos); $i++) {
            $dateNews = new DateTime($tabNewsInfos[$i]['Date']);
            $strImageUrl = "../media/thumbnews/" . $tabNewsInfos[$i]['Thumbnail'];
            $strLogoSource = "../media/logos/" . $tabNewsInfos[$i]['SourceLogo'];
            $strNewsLinkTitleShort = "Article complet";
            if($intLastMonth == 0 || $intLastMonth != $dateNews->format('m')){
                $intLastMonth = $dateNews->format('m');
                $strMonth = $tabMonths[intval($intLastMonth)] . " " . $dateNews->format('Y');
?>
                                <h2 class="old-news-month col-12"><?= $strMonth?></h2>
<?php       }
?>
                                <article class="little-card-news col-2">
                                    <div class="row">
                                        <div class="little-date-news col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9"><?= "[" . $dateNews->format('d/m/Y') . "]" ?></div>
                                        <img class="little-news-source-logo col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" src="<?= $strLogoSource?>" alt="<?= $tabNewsInfos[$i]['SourceName'] ?>">
                                        <img class="img-news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" src="<?= $strImageUrl ?>" alt="<?= $tabNewsInfos[$i]['Title'] ?>">
                                        <div class="little-title-news col-12"><?= $tabNewsInfos[$i]['Title'] ?></div>
                                        <a class="little-link-news col-12" href="<?= $tabNewsInfos[$i]['Url'] ?>" target="_blank"><span class="fa-solid fa-arrow-up-right-from-square"></span><?= $strNewsLinkTitleShort ?></a>
                                    </div>
                                </article>
<?php   } ?>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>