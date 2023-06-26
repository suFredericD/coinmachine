<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : main_menu.php
// Role         : script creating the website main menu
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2023-06-26
// =====================================================================================================
function creatMainMenu($fileName){
    if($fileName == '/index.php'){
        $strPagesPath = "pages/";
        $strMediaPath = "media/";
        $strIndexFile = "index.php";
    } else {
        $strPagesPath = "../pages/";
        $strMediaPath = "../media/";
        $strIndexFile = "../index.php";
    }
    $strMenuLogo = $strMediaPath . "logos/CoinMachine_green_001.png";
    $strProfileFile = $strPagesPath . "profile_fr.html";
    $strProfileFileEN = $strPagesPath . "profile_en.html";
    $strWeb3dashboard = $strPagesPath . "web3dashboard.php";
    $strWallets = $strPagesPath . "web3wallets.php";
    $strWeb3Protocols = $strPagesPath . "web3protocols.php";
    $strCexchanges = $strPagesPath . "cexchanges.php";
    $strHumans = $strPagesPath . "web3humans.php";
    $strGlossary = $strPagesPath . "web3glossary.php";
    $strWeb3News = $strPagesPath . "web3news.php";
    $strWeb3Toolbox = $strPagesPath . "web3toolbox.php";
    $strWeb3Medias = $strPagesPath . "web3medias.php";
    $strWeb3Tutorials = $strPagesPath . "web3tutorials.php";
    $strContacts = $strPagesPath . "contacts.php";
    $strDisclaimer = $strPagesPath . "disclaimer.php";
    $strRealToverview = $strPagesPath . "realtOverview.php";

    $strProfileFileFRTitle = "Découvrez mon profile (version française)";
    $strProfileFileENTitle = "Discover my profile (english version)";
    $strWeb3dashboardTitle = "Blockchains : fondamentaux, articles, vidéos, documenataires à propos de Bitcoin, Ethereum, BSC...";
    $strWalletsTitle = "Tout sur les portefeuilles, les standards de tokens supportés, les liens officiels...";
    $strWeb3ProtocolsTitle = "web3protocols.php";
    $strCexchangesTitle = "Tout sur les exchanges centralisés, les liens pour s'inscrire et pour suivre ces plateformes...";
    $strHumansTitle = "Découvrez plus d'informations sur les personnalités influentes dans la cryptosphère...";
    $strGlossaryTitle = "Répertoire des mots et expressions à connaître, pour apprendre, pour rappel...";
    $strWeb3NewsTitle = "Fraîchement sélectionnées pour garder un oeil sur les derniers évènements marquants...";
    $strWeb3ToolboxTitle = "Liens utiles et outils pour les wallets, les NFT, la DeFi, les explorateurs de blocs...";
    $strWeb3MediasTitle = "Médias d'actualités crypto triés sur le volet pour la qualité de leur contenu...";
    $strWeb3TutorialsTitle = "Réalisés par mes soins à propos de l'utilisation des blockchains, wallets, des tokens...";
    $strContactsTitle = "Mes liens de contatcs / contatcs links";
    $strDisclaimerTitle = "Disclaimer";
    $strRealToverviewTitle = "Plateforme incontournable d'investissement immobilier tokenisé...";
?>
<!-- --- --- --- MAIN NAVIGATION BAR --- --- --- -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-expand-md col-xs-10 col-sm-10 col-md-10 col-10">
            <div id="main-navbar-container" class="container-fluid">
                <a id="mld" class="navbar-brand" href="#home">
                    <img id="menu-logo" src="<?php echo $strMenuLogo;?>" alt="CoinMachine logo">
                </a>
<!-- Responsive menu toggling image -->
                <button id="user-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Navigation links list -->
                    <ul class="navbar-nav">
<!-- Return home link -->
<?php   if($fileName != '/index.php'){?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo $strIndexFile;?>#home">Home</a>
                        </li>
<?php   } ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strProfileFile;?>" title="<?php echo $strProfileFileFRTitle;?>"><span class="fa-regular fa-id-badge"></span>Profile FR</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strProfileFileEN;?>" title="<?php echo $strProfileFileENTitle;?>"><span class="fa-regular fa-id-badge"></span>Profile EN</a></li>
                
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="nav-link" href="<?php echo $strContacts;?>" title="<?php echo $strContactsTitle;?>"><span class="fa-regular fa-address-card"></span>Contacts</a></li>
                                <li><a class="nav-link" href="<?php echo $strDisclaimer;?>" title="<?php echo $strDisclaimerTitle;?>"><span class="fa-solid fa-triangle-exclamation"></span>Disclaimer</a></li>
                            </ul>
                        </li>
<!-- -- -- DATA SECTION -- -- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Datas</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strWeb3dashboard;?>" title="<?php echo $strWeb3dashboardTitle;?>"><span class="fa-solid fa-server"></span>Blockchains</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWallets;?>" title="<?php echo $strWalletsTitle;?>"><span class="fa-solid fa-wallet"></span>Wallets</a></li>
                                <!-- <li><a class="dropdown-item" href="<?php ?>">Protocols</a></li> -->
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="dropdown-item" href="<?php echo $strCexchanges;?>" title="<?php echo $strCexchangesTitle;?>"><span class="fa-solid fa-chart-line"></span>CeXchanges</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strHumans;?>" title="<?php echo $strHumansTitle;?>"><span class="fa-solid fa-people-group"></span>Humains</a></li>
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="dropdown-item" href="<?php echo $strGlossary;?>" title="<?php echo $strGlossaryTitle;?>"><span class="fa-solid fa-book-bookmark"></span>Glossaire</a></li>
                            </ul>
                        </li>
<!-- Ressources section -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ressources</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strWeb3News;?>" title="<?php echo $strWeb3NewsTitle;?>"><span class="fa-solid fa-radio"></span>News</a></li>
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Tutorials;?>" title="<?php echo $strWeb3TutorialsTitle;?>"><span class="fa-solid fa-graduation-cap"></span>Tutoriels</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Toolbox;?>" title="<?php echo $strWeb3ToolboxTitle;?>"><span class="fa-solid fa-toolbox"></span>ToolBox</a></li>
                                <li class="ddm-subtitle"><hr class="dropdown-divider ddm-hr"><span class="fa-solid fa-photo-film"></span>Medias</li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#news" title="<?php echo $strWeb3MediasTitle;?>"><span class="fa-regular fa-newspaper"></span>Journaux</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#charts"><span class="fa-solid fa-chart-line"></span>Charts</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#youtube"><span class="fa-brands fa-youtube"></span>YouTubers</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#twitter"><span class="fa-brands fa-twitter"></span>Twittos</a></li>
                            </ul>
                        </li>
<!-- Projets section -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projets</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strRealToverview;?>" title="<?php echo $strRealToverviewTitle;?>"><span class="fa-solid fa-city"></span>RealT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- --- --- --- END OF MAIN NAVIGATION BAR --- --- --- -->
<?php
}