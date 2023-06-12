<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : index.php
// Role         : home page of the website
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-12
// =====================================================================================================
// Include the HTML header builder
require('scripts\paging\html_header.php');
// Include the page header builder
require('scripts\paging\page_header.php');
// Include the HTML footer builder
require('scripts\paging\html_footer.php');
// Include the menu builder script
require('scripts\paging\main_menu.php');

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];


createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
?>























<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>