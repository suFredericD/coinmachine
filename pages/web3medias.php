<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3medias.php
// Role         : known and used blockchains medias informations
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
$tabNewsMediasInfos = getNewsMediasList();
$tabYoutubeChannelsInfos = getYoutubeChannelsList();
$tabChartsMediasInfos = getChartsMediasList();
$tabTwitterInfos = getTwitterList();

// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <label id ="web3-medias-label" for="web3-medias">Medias web3</label>
        <section id ="web3-medias" class="col-11">
            <div class="row">
<!-- Little menu -->
                <nav id="medias-mini-menu" class="col-2">
                    <h4><a href="#web3-medias-label">Medias web3</a></h4>
                    <ul>
                        <li><a href="#news">Actualités</a></li>
                        <li><a href="#charts">Charts</a></li>
                        <li><a href="#youtube">YouTubers</a></li>
                        <li><a href="#twitter">Twittos</a></li>
                    </ul>
                </nav>
<!-- Main content -->
                <section id="medias-main-content" class="offset-2 col-10">
                    <div id="web3-medias-news" class="row">
                        <section class="col-12">
                            <h2><a id="news">Actualités</a></h2>
<?php   for($i = 0; $i < count($tabNewsMediasInfos); $i++){
            $strLogo = "../media/logos/" . $tabNewsMediasInfos[$i]['LogoFile'];
?>
                            <article class="row">
                                <img class="col-3" src="<?php echo $strLogo;?>"/>
                                <div class="col-9">
                                    <div class="row">
                                        <h3 class="col-9"><?php echo $tabNewsMediasInfos[$i]['Name'];?></h3>
                                        <a class="media-url col-9" href="<?php echo $tabNewsMediasInfos[$i]['Url'];?>" target="_blank"><?php echo $tabNewsMediasInfos[$i]['Url'];?><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                    </div>
                                </div>
                                <p class="media-desciption offset-1 col-10"><?php echo $tabNewsMediasInfos[$i]['Description'];?></p>
                            </article>
<?php   } ?>
                        </section>
                    </div>
                    <div id="web3-medias-charts" class="row">
                        <section id="#charts" class="col-12">
                            <h2><a id="charts">Charts</a></h2>
<?php   for($i = 0; $i < count($tabChartsMediasInfos); $i++){
            $strLogo = "../media/logos/" . $tabChartsMediasInfos[$i]['LogoFile'];
?>
                            <article class="row">
                                <img class="col-3" src="<?php echo $strLogo;?>"/>
                                <div class="col-9">
                                    <div class="row">
                                        <h3 class="col-9"><?php echo $tabChartsMediasInfos[$i]['Name'];?></h3>
                                        <a class="media-url col-9" href="<?php echo $tabChartsMediasInfos[$i]['Url'];?>" target="_blank"><?php echo $tabChartsMediasInfos[$i]['Url'];?><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                    </div>
                                </div>
                                <p class="media-desciption offset-1 col-10"><?php echo $tabChartsMediasInfos[$i]['Description'];?></p>
                            </article>
<?php   } ?>
                        </section>
                    </div>
                    <div id="web3-medias-youtube" class="row">
                        <section id="#youtube" class="col-12">
                            <h2><a id="youtube">YouTubers</a></h2>
<?php   for($i = 0; $i < count($tabYoutubeChannelsInfos); $i++){
            $strLogo = "../media/logos/" . $tabYoutubeChannelsInfos[$i]['LogoFile'];
?>
                            <article class="row">
                                <img class="col-3" src="<?php echo $strLogo;?>"/>
                                <div class="col-9">
                                    <div class="row">
                                        <h3 class="col-9"><?php echo $tabYoutubeChannelsInfos[$i]['Name'];?></h3>
                                        <a class="media-url col-9" href="<?php echo $tabYoutubeChannelsInfos[$i]['Url'];?>" target="_blank"><?php echo $tabYoutubeChannelsInfos[$i]['Url'];?><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                    </div>
                                </div>
                                <p class="media-desciption offset-1 col-10"><?php echo $tabYoutubeChannelsInfos[$i]['Description'];?></p>
                            </article>
<?php   } ?>
                        </section>
                    </div>
                    <div id="web3-medias-twitter" class="row">
                        <section id="#twitter" class="col-12">
                            <h2><a id="twitter">Twittos</a></h2>
<?php   for($i = 0; $i < count($tabTwitterInfos); $i++){
            $strLogo = "../media/logos/" . $tabTwitterInfos[$i]['LogoFile'];
?>
                            <article class="row">
                                <img class="col-3" src="<?php echo $strLogo;?>"/>
                                <div class="col-9">
                                    <div class="row">
                                        <h3 class="col-9"><?php echo $tabTwitterInfos[$i]['Name'];?></h3>
                                        <a class="media-url col-9" href="<?php echo $tabTwitterInfos[$i]['Url'];?>" target="_blank"><?php echo $tabTwitterInfos[$i]['Url'];?><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                    </div>
                                </div>
                                <p class="media-desciption offset-1 col-10"><?php echo $tabTwitterInfos[$i]['Description'];?></p>
                            </article>
<?php   } ?>
                        </section>
                    </div>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>