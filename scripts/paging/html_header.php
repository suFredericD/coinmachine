<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : html_header.php
// Role         : script creating the HTML header
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-12
// =====================================================================================================
function createHTMLheader($fileName, $siteInformations){
    $strAuthor = "CoinMachine";
    if($fileName == '/index.php'){
        $strCSSpath = "config/css/";
        $strBootstrapPath = "config/bootstrap/css/";
    } else {
        $strCSSpath = "../config/css/";
        $strBootstrapPath = "config/bootstrap/css/";
    }
    $strMainCSS = $strCSSpath . "main.css";
    $strBootstrapCSS = $strBootstrapPath . "bootstrap.css";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="<?php echo $strAuthor;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <favicon href="" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Frijole|Syncopate" rel="stylesheet">
    <!-- Attached CSS files -->
    <link rel="stylesheet" href="<?php echo $strBootstrapCSS;?>" media="all">
    <link rel="stylesheet" href="<?php echo $strMainCSS;?>" media="all">
</head>
<!-- -- -- -- -- -- -- -- PAGE CONTENT -- -- -- -- -- -- -- -- -->
<body>
    <section id="site-container">
<?php
}