<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3protocols.php
// Role         : known and used blockchains protocols informations
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

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>























<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>