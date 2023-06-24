<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3humans.php
// Role         : web3 humans presentation page
// Author       : CoinMachine
// Creation     : 2023-06-18
// Last update  : 2021-06-24
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script
require('..\scripts\php\tools.php');                    // Include the utilitary functions script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabMinNavAlphabet = ['A', 'N', 'B', 'O', 'C', 'P', 'D', 'Q', 'E', 'R',
                      'F', 'S', 'G', 'T', 'H', 'U', 'I', 'V', 'J', 'W',
                      'K', 'X', 'L', 'Y', 'M', 'Z'];
$tabAlphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                'U', 'V', 'W', 'X', 'Y', 'Z'];
$tabHumansOrderedByAlphaLastName = getHumansOrderedByAlphaLastName();
$strPreviousLetter = "";
$tabAlphaHumans = [];
for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
    $letter = $tabMinNavAlphabet[$i];
    foreach($tabHumansOrderedByAlphaLastName as $human) {
        $tabLastNameLetters = str_split($human['LastName']);
            if($tabLastNameLetters[0] == $letter) {
                if(isset($tabAlphaHumans[$i])){
                    $tabAlphaHumans[$i] .= ", " . $human['LastName'] . " " . $human['FirstName'];
                } else {
                    $tabAlphaHumans[$i] = $human['LastName'] . " " . $human['FirstName'];
                }
                
            }
    }
}

// =====================================================================================================
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="humans-container" class="col-11">
            <div class="row">
                <div class="col-12">
                    <h1 id="humans-main-title">Web3 : humains influents<span class="fa-solid fa-people-group"></span></h1>
                </div>
<!-- --- --- --- MINI NAVIGATION MENU --- --- --- -->
                <nav id="humans-mini-nav" class="col-2">
                    <div class="row">
<?php   for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
            if(isset($tabAlphaHumans[$i])){
                $strMiniNavTitle = $tabAlphaHumans[$i];
            } else {
                $strMiniNavTitle = "Aucun humain répertorié pour cette lettre";
            }
?>
                        <a class="col-6" href="#<?php echo $tabMinNavAlphabet[$i];?>" title="<?php echo $strMiniNavTitle;?>"><?php echo $tabMinNavAlphabet[$i];?></a>
<?php   } ?>
                    </div>
                </nav>
<!-- --- --- --- MAIN CONTENT --- --- --- -->
                <section id="humans-main-content" class="offset-2 col-9">
                    <div clas="row">
<?php   foreach($tabHumansOrderedByAlphaLastName as $human) {
            $strFullName = $human['FirstName'] . " " . $human['LastName'];
            $strFullTitle =  $human['LastName'] . ", <span class=\"firstname\">" . $human['FirstName'] . "</span>";
            $datBirthDate = new DateTime($human['Birth']);
            if($datBirthDate->format('Y') > 0){
                $strBirthDate = $datBirthDate->format('d/m/Y');
                $datNow = new DateTime();
                $intAge = $datNow->diff($datBirthDate);
                $strAge = $intAge->format('%y ans');
                $strZodiacSign = getZodiacSign($human['Birth']);
                $strZodiacImg = "../media/zodiac/" . $strZodiacSign . ".png";
            } else {
                $strBirthDate = "Unknown";
                $strAge = "Unknown";
                $strZodiacSign = "Unknown";
                $strZodiacImg = "../media/zodiac/unknown.png";
            }
            $strPicture = "../media/people/" . $human['Picture'];
            $strCompany = $human['FirmId'] != "" ? $human['FirmName']. "<span class=\"fa-solid fa-arrow-up-right-from-square\"></span>" : 'Unknown';
            $strFunction = $human['FunctionId'] != "" ? $human['Function'] : 'Unknown';
            $strFlag = "../media/flags/" . $human['CountryFlag'];
// Find first letter of the last name and compare it to last "first-letter" to create a link for the mini navigation menu
            $tabLastNameLetters = str_split($human['LastName']);
            foreach($tabAlphabet as $letter) {
                if($tabLastNameLetters[0] == $letter) {
                    if($strPreviousLetter != $letter) {
                        $strPreviousLetter = $letter;
                        $strRefLink = $letter;
                    } else {
                        $strRefLink = '';
                    }
                }
            }
            if($human['WikiFr'] != ""){
                $strWikiLink = $human['WikiFr'];
            } elseif($human['WikiEn'] != ""){
                $strWikiLink = $human['WikiEn'];
            } else {
                $strWikiLink = "";
            }?>
                        <div id="<?php echo $strRefLink;?>"></div>
                        <article id="<?php echo $strFullName;?>" class="col-12">
                            <div class="row">
                                <h2 class="col-7"><?php echo $strFullTitle;?></h2>
                                <img class="flag col-1" src="<?php echo $strFlag;?>"/>
                                <h3 class="col-2"><?php echo $strAge;?></h3>
                                <h5 class="birthdate col-2"><?php echo $strBirthDate;?></h5>
                                <img class="people-img col-2" src="<?php echo $strPicture;?>" title="Photo de <?php echo $strFullName;?>" />
                                <div class="col-8">
                                    <div class="row">
                                        <h3 class="col-6">Réseaux sociaux :</h3>
<?php       if($human['Twitter'] != ""){ ?>
                                        <a class="col-2" href="<?php echo $human['Twitter'];?>" title="Compte Twitter de <?php echo $strFullName;?>" target="_blank">
                                            <span class="twitter-icon fa-brands fa-twitter-square"></span></a>
<?php       } 
            if($human['Facebook'] != ""){?>
                                        <a class="col-2" href="<?php echo $human['Facebook'];?>" title="Compte Facebook de <?php echo $strFullName;?>" target="_blank">
                                            <span class="facebook-icon fa-brands fa-facebook-square"></span></a>
<?php       } 
            if($human['Linkedin'] != ""){?>
                                        <a class="col-2" href="<?php echo $human['Linkedin'];?>" title="Compte LinkedIn de <?php echo $strFullName;?>" target="_blank">
                                            <span class="linkedin-icon fa-brands fa-linkedin"></span></a>
<?php       } ?>
                                        <h3 class="col-6">Compagnie :</h3>
                                        <a class="col-6" href="<?php echo $human['Website'];?>" title="<?php echo $human['FirmTooltip'];?>" target="_blank"><?php echo $strCompany;?></a>
                                        <h3 class="col-6">Fonction :</h3>
                                        <p class="col-6"><?php echo $strFunction;?></p>
<?php       if($human['WikiFr'] != "" || $human['WikiEn'] != ""){ ?>
                                        <a class="wiki-link col-12" href="<?php echo $strWikiLink;?>" target="_blank">A propos de <?php echo $strFullName;?><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
<?php       } ?>
                                    </div>
                                </div>
                                <img class="zodiac-img col-2" src="<?php echo $strZodiacImg;?>" alt="<?php echo $strZodiacSign;?> zodiac sign picture" />
                            </div>
                        </article>
<?php   } ?>
                    </div>
                </section>
                    
        
        
        
        
        
        
        
        
        
        
            </div>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>