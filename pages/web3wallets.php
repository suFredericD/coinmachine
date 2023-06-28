<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3wallets.php
// Role         : web3wallets presentation page
// Author       : CoinMachine
// Creation     : 2023-06-15
// Last update  : 2023-06-28
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabWallets = getWalletsInformations();                 // Get the wallets informations
$tabCompatibilities = getWalletsCompatibilities();      // Get the wallets compatibilities
$tabTokenStandards = getTokenStandards();               // Get the token standards

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        
        <label id ="wallets-main-label" for="wallets-main" class="col-10">Wallets dashboard<span class="fa-solid fa-wallet"></span></label>
        <nav id="wallet-mini-menu" class="col-3">
            <ul class="row">
                <li id="wmm-title" class="col-12" title="Back to top"><a href="#wallets-main-label">Wallets</a></li>
<?php   for($i = 0; $i < count($tabWallets); $i++){
            $strHref = "#wallet" . $i;
?>
                <li class="wmm-link col-12" title="<?php echo $tabWallets[$i]['Tooltip'];?>">
                    <a href="<?php echo $strHref;?>"><?php echo $tabWallets[$i]['Name'];?></a>
                </li>
<?php   } ?>
            </ul>
        </nav>
        <section id ="wallets-main" class="col-11 offset-xl-6 col-xl-8">
            <div class="row">
<!-- --- --- --- WALLETS DETAILS SUMMARY --- --- --- -->
                <h3 class="wallet-rubric col-8">Disponibilités</h3>
                <table id="wallet-dispo-tab" class="col-12">
                    <thead>
                        <tr class="row">
                            <th class="col-3"></th>
                            <th class="col-2">iOS</th>
                            <th class="col-2">Android</th>
                            <th class="col-2">Wallet Connect</th>
                            <th class="col-3">Browser extension</th>
                        </tr>
                    </thead>
                    <tbody>
<?php   for($i = 0; $i < count($tabWallets); $i++){ ?>
                        <tr class="row">
                            <td class="col-3"><a href="<?php echo "#wallet" . $i;?>"><?php echo $tabWallets[$i]['Name'];?></a></td>
<?php       if($tabWallets[$i]['Applestore'] != ""){ ?>
                            <td class="user-check col-2"><span class="fa-solid fa-check user-green"></span></td>
<?php       } else { ?>
                            <td class="user-check col-2"><span class="fa-solid fa-xmark user-red"></span></td>
<?php       }
            if($tabWallets[$i]['Playstore'] != ""){ ?>
                            <td class="user-check col-2"><span class="fa-solid fa-check user-green"></span></td>
<?php       } else { ?>
                            <td class="user-check col-2"><span class="fa-solid fa-xmark user-red"></span></td>
<?php       }
            if($tabWallets[$i]['WalletConnect'] != FALSE){ ?>
                            <td class="user-check col-2"><span class="fa-solid fa-check user-green"></span></td>
<?php       } else { ?>
                            <td class="user-check col-2"><span class="fa-solid fa-xmark user-red"></span></td>
<?php       }
            if($tabWallets[$i]['Browser'] != ""){ ?>
                            <td class="user-check col-3"><span class="fa-solid fa-check user-green"></span></td>
<?php       } else { ?>
                            <td class="user-check col-3"><span class="fa-solid fa-xmark user-red"></span></td>
<?php       } ?>
                        </tr>
<?php   } ?>
                    </tbody>
                </table>
<!-- --- --- COMPATIBILITY TABLE --- --- -->
                <table id="wallet-compat-tab" class="col-12">
                    <thead>
                        <tr class="row">
                            <th class="col-2 col-xl-1"></th>
<?php   for($i = 0; $i < count($tabWallets); $i++){ ?>
                            <th class="col-1"><a href="<?php echo "#wallet" . $i;?>"><?php echo $tabWallets[$i]['Name'];?></a></th>
<?php   } ?>
                        </tr>
                    </thead>
                    <tbody>
<!-- --- --- TOKENS STANDARDS LINES --- --- -->
<?php   for($k = 0; $k < count($tabTokenStandards); $k++){ ?>
<!-- --- --- <?php echo $tabTokenStandards[$k]['Name'];?> LINE --- --- -->
                        <tr class="row">
                                <td class="tst col-2 col-xl-1"><?php echo $tabTokenStandards[$k]['Name'];?></td>
<?php       $tabStandard = getWalletsCompByStandard($tabTokenStandards[$k]['Id']);
            for($i = 0; $i < count($tabWallets); $i++){
                $boolCheck = FALSE; ?>
                                <td class="user-check col-1">
<?php           for($j = 0; $j < count($tabStandard); $j++){
                    if($tabStandard[$j]['WalletId'] == $tabWallets[$i]['Id']){
                            $boolCheck = TRUE; ?>
                                    <span class="fa-solid fa-check user-green"></span></td>
<?php               }
                }
                if ($boolCheck != TRUE) { ?>
                                    <span class="fa-solid fa-xmark user-red"></span></td>
<?php           }
            }?>
                                </tr>
<?php   } ?>
                    </tbody>
                </table>
<!-- --- --- --- WALLETS DETAILS --- --- --- -->
<?php   for($i = 0; $i < count($tabWallets); $i++){
            $strLogoFile = "../media/logos/" . $tabWallets[$i]['LogoFile'];
            if($tabWallets[$i]['Mobile'] != FALSE){
                $strSpanClass = "fa-solid fa-check user-green";
            } else {
                $strSpanClass = "fa-solid fa-xmark user-red";
            }
            if($tabWallets[$i]['WalletConnect'] != FALSE){
                $strWalletConnectClass = "fa-solid fa-check user-green";
            } else {
                $strWalletConnectClass = "fa-solid fa-xmark user-red";
            }
?>
                <article id="wallet<?php echo $i;?>" class="wallet-container col-md-12 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="wallet-logo-container col-4">
                            <img class="wallet-logo" src="<?php echo $strLogoFile;?>" title="<?php echo $tabWallets[$i]['Tooltip'];?>">
                        </div>
                        <div class="col-8">
                            <div class="wallet-details row">
                                <label class="col-12"><?php echo $tabWallets[$i]['Name'];?></label>
                                <div class="wallet-features col-5">Mobile</div>
                                <span class="<?php echo $strSpanClass;?> col-1"></span>
                                <div class="wallet-features col-7">Wallet Connect</div>
                                <span class="<?php echo $strWalletConnectClass;?> col-1"></span>
<?php       if($tabWallets[$i]['Browser'] != ""){ ?>
                                <a class="wallet-browser-link col-12" href="<?php echo $tabWallets[$i]['Browser'];?>" title="Téléchargez l'extension pour navigateur de <?php echo $tabWallets[$i]['Name'];?>..."><span class="fa-solid fa-arrow-up-right-from-square"></span>Browser extension</a>
<?php       } ?>
<?php       if($tabWallets[$i]['Mobile'] != FALSE){
                if($tabWallets[$i]['Playstore'] != "" && $tabWallets[$i]['Applestore'] != ""){
                    $strDownloadColClass = "col-6";
                } else {
                    $strDownloadColClass = "col-12";
                }
                if($tabWallets[$i]['Playstore'] != ""){ ?>
                                <a class="wallet-mobile-downloads <?php echo $strDownloadColClass;?>" href="<?php echo $tabWallets[$i]['Playstore'];?>" target="_blank">
                                    <img class="wmd-link-img" src="../media/icons/playstore01.png" alt="Google Play Store Icon" title="Téléchargez <?php echo $tabWallets[$i]['Name'];?> sur le Google Play Store...">
                                </a>        
<?php           }
                if($tabWallets[$i]['Applestore'] != ""){ ?>
                                <a class="wallet-mobile-downloads <?php echo $strDownloadColClass;?>" href="<?php echo $tabWallets[$i]['Applestore'];?>" target="_blank">
                                    <img class="wmd-link-img" src="../media/icons/appstore01.png" alt="Apple Store Icon" title="Téléchargez <?php echo $tabWallets[$i]['Name'];?> sur le Apple Store...">
                                </a>
<?php           }
            } ?>

                            </div>
                        
                        </div>
                        <p class="wallet-description col-12"><?php echo $tabWallets[$i]['Description'];?></p>
                        <div class="wallet-compatibilities col-12">
                            <div class="container-fluid row">
<?php       for ($j = 0; $j < count($tabCompatibilities); $j++){
                if($tabWallets[$i]['Id'] == $tabCompatibilities[$j]['WalletId']){
                    if($tabCompatibilities[$j]['TokenStandardId'] == 1){
                        $strItemClass = "btc wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 2) {
                        $strItemClass = "erc wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 3 || $tabCompatibilities[$j]['TokenStandardId'] == 4){
                        $strItemClass = "bep wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 5 || $tabCompatibilities[$j]['TokenStandardId'] == 6) {
                        $strItemClass = "trc wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 7) {
                        $strItemClass = "erd wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 8) {
                        $strItemClass = "celo wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 9) {
                        $strItemClass = "sol wallet-compatibility col-2";
                    } elseif($tabCompatibilities[$j]['TokenStandardId'] == 10) {
                        $strItemClass = "atom wallet-compatibility col-2";
                    }
                    ?>
                                <div class="<?php echo $strItemClass;?>" title="<?php echo $tabCompatibilities[$j]['TokenStandardToolTip'];?>"><?php echo $tabCompatibilities[$j]['TokenStandard'];?></div>
<?php           }
            } ?>                                        
                            </div>
                        </div>
                    </div>
                </article>
<?php   }
?>

            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>