<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3news.php
// Role         : known fresh informations about web3
// Author       : CoinMachine
// Creation     : 2023-06-24
// Last update  : 2021-06-30
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
<?php   foreach ($tabNewsInfos as $newsInfos) {
            $dateNews = new DateTime($newsInfos['Date']);
            $strDateNews = "[" . $dateNews->format('d/m/Y') . "] - <span class=\"news-source\">" . $newsInfos['SourceName'] . "</span>";
            $strImageUrl = "../media/thumbnews/" . $newsInfos['Thumbnail'];
            $strLogoSource = "../media/logos/" . $newsInfos['SourceLogo'];
            $strNewsLinkTitle = "Lire l'article complet sur " . $newsInfos['SourceName'] . "...";
?>
                        <div class="news-container col-12">
                            <div class="row">
                                <img class="img-news col-xl-4" src="<?php echo $strImageUrl;?>" alt="<?php echo $newsInfos['Title']; ?>">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <p class="news-date col-10 col-sm-11 col-md-11 col-xl-11"><?php echo $strDateNews; ?></p>
                                        <img class="news-source-logo col-2 col-sm-1 col-md-1 col-xl-1" src="<?php echo $strLogoSource;?>" alt="<?php echo $newsInfos['SourceName']; ?>">
                                        <h3 class="news-title col-12"><?php echo $newsInfos['Title'];?></h3>
                                        <p class="news-text col-12"><?php echo $newsInfos['Text'];?></p>
                                        <a class="news-link col-12" href="<?php echo $newsInfos['Url'];?>" target="_blank"><span class="fa-solid fa-arrow-up-right-from-square"></span><?php echo $strNewsLinkTitle;?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php   } ?>
                    </div>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>