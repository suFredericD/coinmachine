<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : main_menu.php
// Role         : script creating the website main menu
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-13
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

    $strWeb3dashboard = $strPagesPath . "web3dashboard.php";
    $strWeb3Protocols = $strPagesPath . "web3protocols.php";
    $strWeb3Toolbox = $strPagesPath . "web3toolbox.php";
    $strWeb3Medias = $strPagesPath . "web3medias.php";
    $strWeb3Tutorials = $strPagesPath . "web3tutorials.php";
    $strContacts = $strPagesPath . "contacts.php";
?>
<!-- --- --- --- MAIN NAVIGATION BAR --- --- --- -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-expand-md col-xs-10 col-sm-10 col-md-10 col-10">
            <div id="main-navbar-container" class="container-fluid">
                <a class="navbar-brand" href="#home">
                    <img id="menu-logo" src="<?php echo $strMenuLogo;?>" alt="CoinMachine logo">
                </a>
<!-- Responsive menu toggling image -->
                <button id="user-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Navigation links list -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!-- Return home link -->
<?php   if($fileName != '/index.php'){?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo $strIndexFile;?>#home">Home</a>
                        </li>
<?php   } ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strProfileFile;?>">Profile FR</a></li>
                
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="nav-link" href="<?php echo $strContacts;?>">Contacts</a></li>
                            </ul>
                        </li>
<!-- Blockchain section -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Datas</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strWeb3dashboard;?>">Blockchains</a></li>
                                <!-- <li><a class="dropdown-item" href="<?php echo $strWeb3Protocols;?>">Protocols</a></li> -->
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <!-- <li><a class="dropdown-item" href="<?php ?>">Exchanges</a></li> -->
                            </ul>
                        </li>
<!-- Ressources section -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ressources</a>
                            <ul class="dropdown-menu ddm-user">
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Tutorials;?>">Tutoriels</a></li>
                                <li><hr class="dropdown-divider ddm-hr"></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Toolbox;?>">ToolBox</a></li>
                                <li class="ddm-subtitle"><hr class="dropdown-divider ddm-hr">Medias</li>

                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#news">Actualités</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#charts">Charts</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#youtube">YouTubers</a></li>
                                <li><a class="dropdown-item" href="<?php echo $strWeb3Medias;?>#twitter">Twittos</a></li>
                            </ul>
                        </li>
<!-- Projets section -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projets</a>
                            <ul class="dropdown-menu ddm-user">

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- --- --- --- END OF MAIN NAVIGATION BAR --- --- --- -->
<?php
}