<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3medias.php
// Role         : known and used blockchains medias informations
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-12
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

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id ="web3-medias" class="col-11">
            <h1>Web3 medias</h1>
            <div id="web3-medias-news" class="row">
                <section class="col-12">
                    <h2>Actualités</h2>
                </section>
            </div>
            <div id="web3-medias-youtube" class="row">
                <section class="col-12">
                    <h2>YouTube</h2>
                </section>
            </div>
            <div id="web3-medias-charts" class="row">
                <section class="col-12">
                    <h2>Charts</h2>
                </section>
            </div>
            <div id="web3-medias-twitter" class="row">
                <section class="col-12">
                    <h2>Twitter</h2>
                </section>
            </div>







        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>