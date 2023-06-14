<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3tutorials.php
// Role         : selfmade tutorials about blockchains and web3
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-14
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabTutorials = getTutorialsInfos();                    // Get the tutorials informations
$tabDifficultyLevels = getDifficultyLevels();           // Get the difficulty levels informations

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <label id ="tutorials-main-label" for="tutorials-main" class="col-10">Tutoriels dashboard</label>
        <section id ="tutorials-main" class="col-11">
            <div class="row">
<!-- Little menu -->
                <nav id="tuto-mini-menu" class="col-2">
                    <div class="row">
                    <h4 class="col-12"><a href="#">Difficulty</a></h4>
                        <ul class="col-12">
<?php   for($i = 0; $i < count($tabDifficultyLevels); $i++){ ?>
                            <li><a href="#diff<?php echo $tabDifficultyLevels[$i]['Id'];?>"><?php echo $tabDifficultyLevels[$i]['Title'];?></a></li>
<?php   } ?>
                        </ul>
                    </div>
                </nav>
<!-- Main content -->
                <section id="tuto-main-content" class="offset-2 col-10">
                    <div id="tuto-list" class="row">
<?php   for($i = 0; $i < count($tabDifficultyLevels); $i++){
?>
                        <section id="diff<?php echo $tabDifficultyLevels[$i]['Id'];?>" class="col-11">
                            <h2 class="col-12"><?php echo $tabDifficultyLevels[$i]['Title'];?></h2>
                            <div class="row">
<?php       for($j = 0; $j < count($tabTutorials); $j++){
                if($tabTutorials[$j]['DifficultyId'] == $tabDifficultyLevels[$i]['Id']){
                    $strThumbnail = "../media/thumbnails/" . $tabTutorials[$j]['Thumbnail'];
                    $strTutorialLink = "../" . $tabTutorials[$j]['Path'] . $tabTutorials[$j]['File'];
                    $datTuto = new DateTime($tabTutorials[$j]['Date']);
?>
                                <article class="tuto-article col-11">
                                    <div class="row">
                                        <h3 class="col-12"><?php echo $tabTutorials[$j]['Title'];?></h3>
                                        <img class="col-3" src="<?php echo $strThumbnail;?>" />
                                        <div class="col-9">
                                            <div class="row">
                                                <p class="tuto-date col-12"><?php echo $datTuto->format('d/m/Y');?></p>
                                                <p class="tuto-text col-12"><?php echo $tabTutorials[$j]['Description'];?></p>
                                                <a class="tuto-link col-12" href="<?php echo $strTutorialLink;?>" target="_blank"><span class="fa-solid fa-file-arrow-down"></span>Consulter le tuto complet</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
<?php           }
            } ?>
                            </div>
                        </section>
<?php  } ?>










                    </div>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>