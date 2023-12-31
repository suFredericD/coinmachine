<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : html_header.php
// Role         : script creating the HTML header
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-29
// =====================================================================================================
function createHTMLheader($fileName){
    $strAuthor = "CoinMachine";
    if($fileName == '/index.php' || $fileName == '/coinmachine/index.php'){
        $strCSSpath = "config/css/";
        $strIconPath = "media/icons/";
    } else {
        $strCSSpath = "../config/css/";
        $strIconPath = "../media/icons/";
    }
    $strMainCSS = $strCSSpath . "main.css";
    $strFavicon = $strIconPath . "favicon.ico";
    $strSpecialCSSFile = $strCSSpath . substr(strrchr($fileName, "/"), 1, -4) . ".css";
    $strKeywords = "blockchain, cryptomonnaies, web3, bitcoin, binance, swissborg, décentralisation, contrats intelligents, sécurité, transactions, finance décentralisée, DeFi, 
                    tokenisation, actifs, NFT, smart contracts, ethereum, cryptographie, DApps, consensus, proof-of-work, proof-of-stake, confidentialité, 
                    scalabilité, interopérabilité, adoption, éducation, ressources, consulting, formation, développement, audit";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blockchain et cryptomonnaies : éducation et consulting">
    <meta name="keywords" content="<?php echo $strKeywords;?>">
    <meta name="author" content="<?php echo $strAuthor;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="CoinMachine : Blockchain et cryptomonnaies">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Blockchain et cryptomonnaies : éducation et consulting">
    <meta property="og:url" content="https://www.coinmachinehub.fr">
    <meta property="og:image" content="https://www.coinmachinehub.fr/media/coinmachine/coinmachinehub-fr-2023-06-29.png">
    <meta property="og:locale" content="fr_FR">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $strFavicon;?>">
    <favicon href="<?php echo $strFavicon;?>" />
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Aldrich|Audiowide|DotGothic16|Frijole|Gugi|Lekton|Montserrat|Share+Tech|Share+Tech+Mono|Press+Start+2P|Syncopate|Wallpoet" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Attached CSS file -->
    <link rel="stylesheet" href="<?php echo $strMainCSS;?>" media="all">
<?php   if(file_exists($strSpecialCSSFile)){ ?>
    <!-- Special attached CSS file -->
    <link rel="stylesheet" href="<?php echo $strSpecialCSSFile;?>" media="all">
<?php   }?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<!-- -- -- -- -- -- -- -- PAGE CONTENT -- -- -- -- -- -- -- -- -->
<body>
    <section id="site-container">
<?php
}