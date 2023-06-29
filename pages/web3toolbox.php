<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3toolbos.php
// Role         : known and used blockchains tools
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-29
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabToolBoxTypes = getToolBoxTypes();                   // Get the list of the toolbox types
$tabToolBaxItems = getToolBoxItems();                   // Get the list of the toolbox items

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>


        <label id ="toobox-main-label" for="toobox-main" class="col-10">Useful ToolBox<span class="fa-solid fa-toolbox"></span></label>
        <section id ="toobox-main" class="col-11">
            <div class="row">
<!-- Little menu -->
                <nav id="toolbox-mini-menu" class="col-3">
                        <ul id="toolbox-mini-nav">
<?php   for($i = 0; $i < count($tabToolBoxTypes); $i++){ ?>
                            <li id="mini-item-li<?php echo $tabToolBoxTypes[$i]['Id'];?>" class="mini-item">
                                <a href="#tml<?php echo $tabToolBoxTypes[$i]['Id'];?>"><?php echo $tabToolBoxTypes[$i]['Title'];?></a>
                            </li>
<?php   } ?>
                        </ul>
                </nav>
<!-- Main content -->
                <section id="toolbox-main-content" class="col-9">
                    <div id="toolbox-main-list" class="row">
<?php   for($i = 0; $i < count($tabToolBoxTypes); $i++){ ?>
                        <section id="tml<?php echo $tabToolBoxTypes[$i]['Id'];?>" class="tml-section col-12">
                            <div class="row">
<?php       for($j = 0; $j < count($tabToolBaxItems); $j++){
                if($tabToolBaxItems[$j]['TypeId'] == $tabToolBoxTypes[$i]['Id']){
                    $strThumbnail = "../media/thumbnails/" . $tabToolBaxItems[$j]['Thumbnail'];
                    $strLinkTitle = "Visiter le site de " . $tabToolBaxItems[$j]['Name'] . "...";
?>
                                <article class="toolbox-item-container col-11">
                                    <div class="row">
                                        <a class="col-4" href="<?php echo $tabToolBaxItems[$j]['Url'];?>" title="<?php echo $strLinkTitle;?>">
                                            <h3><?php echo $tabToolBaxItems[$j]['Name'];?></h3>
                                        </a>
                                        <h4 class="col-8"><?php echo $tabToolBaxItems[$j]['Title'];?></h4>
                                        <a class="col-4" href="<?php echo $tabToolBaxItems[$j]['Url'];?>" title="<?php echo $strLinkTitle;?>">
                                            <img src="<?php echo $strThumbnail;?>" alt="<?php echo $tabToolBaxItems[$j]['Name'];?> thumbnail" />
                                        </a>
                                        <p class="toolbox-text col-8"><?php echo $tabToolBaxItems[$j]['Description'];?></p>
                                </article>
<?php           }
            } ?>    
                            </div>
                        </section>
<?php   } ?>
                    </div>
                </section>
<!-- END content -->
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>