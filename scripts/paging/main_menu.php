<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : main_menu.php
// Role         : script creating the website main menu
// Author       : CoinMachine
// Creation     : 2023-06-12
// Last update  : 2021-06-12
// =====================================================================================================
function creatMainMenu($fileName){
    if($fileName == '/index.php'){
        $strPagesPath = "pages/";
        $strMediaPath = "media/";
        $strIndexFile = "index.php";
    } else {
        $strPagesPath = "/";
        $strMediaPath = "../media/";
        $strIndexFile = "../index.php";
    }
    $strMenuLogo = $strMediaPath . "logos/CoinMachine_green_001.png";
    $strProfileFile = $strPagesPath . "profile_fr.html";
?>
<!-- --- --- --- MAIN NAVIGATION BAR --- --- --- -->
        <nav id="main-navbar" class="navbar navbar-expand-lg col-xs-10 col-sm-10 col-md-10 col-10">
            <div id="main-navbar-container" class="container-fluid">
                <a class="navbar-brand" href="#home">
                    <img id="menu-logo" src="<?php echo $strMenuLogo;?>" alt="CoinMachine logo">
                </a>
<!-- Responsive menu toggling image -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img id="menu-logo" src="<?php echo $strMenuLogo;?>" alt="CoinMachine logo"></span>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $strProfileFile;?>">Profile</a>
                    </li>
<!-- Blockchain section -->
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blockchain
                        </a>
                        <ul class="dropdown-menu ddm-user">
                            <li><a class="dropdown-item" href="#">Actualités</a></li>
                            <li><a class="dropdown-item" href="#">YouTube</a></li>
                            <li><a class="dropdown-item" href="#">Twitter</a></li>

                        </ul>
                    </li>
<!-- Ressources section -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ressources
                        </a>
                        <ul class="dropdown-menu ddm-user">
                            <li><a class="dropdown-item" href="#">Tutoriels</a></li>
                            <li><hr class="dropdown-divider ddm-hr"></li>
                            
                        </ul>
                    </li>
<!-- Medias section -->
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Medias
                        </a>
                        <ul class="dropdown-menu ddm-user">
                            <li><a class="dropdown-item" href="#">Actualités</a></li>
                            <li><a class="dropdown-item" href="#">YouTube</a></li>
                            <li><a class="dropdown-item" href="#">Twitter</a></li>

                        </ul>
                    </li>
<!-- Projets section -->
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projets
                        </a>
                        <ul class="dropdown-menu ddm-user">
                            <li><a class="dropdown-item" href="#">Tutoriels</a></li>
                            <li><hr class="dropdown-divider ddm-hr"></li>
                            
                        </ul>
                    </li>
<!-- Contacts section -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
<!-- --- --- --- END OF MAIN NAVIGATION BAR --- --- --- -->
<?php
}