<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3dashboard.php
// Role         : known and used blockchains informations
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-15
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabBlockchainsInfos = getBlockchainsList();
$tabReferencesTypes = getReferencesTypes();
$tabBlockchainsReferences = getBlockchainsReferences();
$tabSubjectsReferencesCount = getSubjectsReferencesCount();
$tabBlockchainsReferencesCount = getBlockchainsReferencesCountByRefType();

// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>

        <label id ="bc-dashboard-label" for="bc-dashboard" class="col-10">Blockchains knowledge base</label>
        <section id ="bc-dashboard" class="col-11">
            <div class="row">
<!-- Little menu -->
                <nav id="bcd-mini-menu" class="col-3">
                    <div class="row">
                    <h4 class="col-12"><a href="#">Blockchains</a></h4>
                        <ul class="col-12">
<?php   for($i = 0; $i < count($tabBlockchainsInfos); $i++){ ?>
                            <li><a href="#<?php echo $tabBlockchainsInfos[$i]['OrderId'];?>"><?php echo $tabBlockchainsInfos[$i]['Name'];?></a></li>
<?php   } ?>
                        </ul>
                    </div>
                </nav>
<!-- Main content -->
                <section id="bc-main-content" class="offset-3 col-9">
                    <div id="bc-blockchains-list" class="row">
<?php   for($i = 0; $i < count($tabBlockchainsInfos); $i++){
            $strLogoFile = "../media/tokens/" . $tabBlockchainsInfos[$i]['LogoFile'];    
?>
                        <article class="blockchain col-12">
                            <div class="row">
                                <img class="bc-token-logo col-2" src="<?php echo $strLogoFile;?>" alt="<?php echo $tabBlockchainsInfos[$i]['Name'];?> logo" />
                                <div class="bc-details col-10">
                                    <div class="row">
                                        <h3 class="col-7"><a class="bc-article-titles" id="<?php echo $tabBlockchainsInfos[$i]['OrderId'];?>"><?php echo $tabBlockchainsInfos[$i]['Name'];?></a></h3>
                                        <h4 class="bc-consensus col-4"><?php echo $tabBlockchainsInfos[$i]['Consensus'];?></h4>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Website :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['Website'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['Website'];?></a>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Explorateur de blocs :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['Blockscan'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['Blockscan'];?></a>
                                        <label class="bc-blockscan-link-label offset-1 col-5">Code source :</label>
                                        <a class="bc-blockscan-link col-6" href="<?php echo $tabBlockchainsInfos[$i]['SourceCode'];?>" target="_blank"><?php echo $tabBlockchainsInfos[$i]['SourceCode'];?></a>
                                        <p class="bc-description col-12"><?php echo $tabBlockchainsInfos[$i]['Description'];?></p>
                                    </div>
                                </div>
<?php       if(isset($tabSubjectsReferencesCount[$tabBlockchainsInfos[$i]['Id']])){ ?>
                                <div id="<?php echo $tabBlockchainsInfos[$i]['Id'];?>" class="bc-ref-titles col-12" >
                                    <div class="row">
                                        <span class="fa-solid fa-caret-down col-2"></span>
                                        <span class="fa-solid fa-caret-down col-2"></span>
                                        <h4 class="bc-ref-titles-content col-4">Ressources</h4>
                                        <span class="fa-solid fa-caret-down col-2"></span>
                                        <span class="fa-solid fa-caret-down col-2"></span>
                                    </div>
                                </div>
<!-- --- <?php echo $tabBlockchainsInfos[$i]['Name'];?> : references section --- -->
                                <article id="ref<?php echo $tabBlockchainsInfos[$i]['Id'];?>" class="bc-references offset-1 col-11">
                                    <div class="row">
<?php           for($j = 1; $j < count($tabReferencesTypes)+1; $j++){
                    if(isset($tabBlockchainsReferencesCount[$tabBlockchainsInfos[$i]['Id']][$tabBlockchainsInfos[$i]['Name']])){
                        if(isset($tabBlockchainsReferencesCount[$tabBlockchainsInfos[$i]['Id']][$tabBlockchainsInfos[$i]['Name']][$j])){
                            if($tabBlockchainsReferencesCount[$tabBlockchainsInfos[$i]['Id']][$tabBlockchainsInfos[$i]['Name']][$j] > 1){
                                $strRefRubricTitle = $tabReferencesTypes[$j]['Title'] . "s";
                            } else {
                                $strRefRubricTitle = $tabReferencesTypes[$j]['Title'];
                            }
?>
<!-- --- <?php echo  $tabReferencesTypes[$j]['Title'];?> article --- -->
                                        <ul class="bc-ref-rubrics col-12">
                                            <li><?php echo $strRefRubricTitle;?></li>
                                                <ul class="bc-ref-details">
<?php                   for($k = 0; $k < count($tabBlockchainsReferences); $k++){
                            if($tabBlockchainsReferences[$k]['SubjectId'] == $tabBlockchainsInfos[$i]['Id'] && $tabBlockchainsReferences[$k]['TypeId'] == $j){
?>
                                                    <li>
                                                        <a href="<?php echo $tabBlockchainsReferences[$k]['Link'];?>" target="_blank"><?php echo $tabBlockchainsReferences[$k]['Title'];?></a>
                                                        <span class="bc-ref-tooltip fa-solid fa-circle-question" title="<?php echo $tabBlockchainsReferences[$k]['Tooltip'];?>"></span>
                                                    </li>
<?php                       }    
                        } ?>
                                                </ul>
                                        </ul>
<?php                   }
                    }
                }  ?>
                                    </div>
                                </article>
<?php       } else { ?>
                                <div class="bc-ref-noref col-12">
                                    <div class="row">
                                        <span class="fa-solid fa-triangle-exclamation col-2"></span>
                                        <h4 class="bc-noref-titles-content col-7">Aucune ressource disponible</h4>
                                        <span class="fa-solid fa-triangle-exclamation col-2"></span>
                                    </div>
                                </div>
<?php       } ?>
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