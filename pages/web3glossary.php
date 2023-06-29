<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3glossary.php
// Role         : epxlantions about topics and expressions about web3
// Author       : CoinMachine
// Creation     : 2023-06-24
// Last update  : 2021-06-29
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];
$tabMinNavAlphabet = ['A', 'N', 'B', 'O', 'C', 'P', 'D', 'Q', 'E', 'R',
                      'F', 'S', 'G', 'T', 'H', 'U', 'I', 'V', 'J', 'W',
                      'K', 'X', 'L', 'Y', 'M', 'Z'];
$tabAlphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                'U', 'V', 'W', 'X', 'Y', 'Z'];
$strPreviousLetter = "";
$tabGlossary = getGlossaryAlphaList();                  // Get the alphabetical glossary from the database
$tabAlphaGlossary = [];
$tabAlphaGlossaryCount = [];
for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
    $letter = $tabMinNavAlphabet[$i];
    $intWordsCount = 0;
    foreach($tabGlossary as $glossary) {
        $tabLastNameLetters = str_split($glossary['Expression']);
            if($tabLastNameLetters[0] == $letter) {
                if(isset($tabAlphaGlossary[$i])){
                    $tabAlphaGlossary[$i] .= ", " . $glossary['Expression'];
                    $intWordsCount++;
                } else {
                    $tabAlphaGlossary[$i] = $glossary['Expression'];
                    $intWordsCount++;
                }
                
            }
    }
    $tabAlphaGlossaryCount[$i] = $intWordsCount;
}
// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>

        <label id ="web3-glossary-label" for="web3-glossary" class="col-10">Web3 Glossary<span class="fa-solid fa-book-bookmark"></span></label>
        <section id ="web3-glossary" class="col-11">
            <div class="row">
<!-- --- --- --- MINI NAVIGATION MENU --- --- --- -->
                <nav id="glossary-mini-nav" class="col-2">
                    <div class="row">
                        <a id="link-to-top" href="web3glossary.php#site-title" class="col-12">Back to top</a>
<?php   for($i = 0; $i < count($tabMinNavAlphabet); $i++) {
            if(isset($tabAlphaGlossary[$i])){
                $strMiniNavTitle = $tabAlphaGlossary[$i];
            } else {
                $strMiniNavTitle = "Aucune expression répertoriée pour cette lettre";
            }
            $strDisplayLink = $tabMinNavAlphabet[$i] . " <span class=\"words-count\">(" . $tabAlphaGlossaryCount[$i] . ")</span>";
?>
                        <a class="col-6" href="#<?php echo $tabMinNavAlphabet[$i];?>" title="<?php echo $strMiniNavTitle;?>"><?php echo $strDisplayLink;?></a>
<?php   } ?>
                    </div>
                </nav>
<!-- Main content -->
                <section id="web3-glossary-main-content" class="col-9">
                    <div id="web3-glossary-list" class="row">

<?php   foreach($tabGlossary as $glossary) {        // Find first letter of the last name and compare it to last "first-letter" to create a link for the mini navigation menu
            $tabLastNameLetters = str_split($glossary['Expression']);
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
            $strTitle = $glossary['Expression'];
            if($glossary['Alternative'] != ""){
                $strTitle .= ", <span>synonyme : <em>" . $glossary['Alternative'] . "</em></span>";
            }
            $strIllustration = $glossary['Illustration'];
?>
                        <div id="<?php echo $strRefLink;?>" class="glossary-item col-12">
                            <div class="row">
                                <h2 id="<?php echo $glossary['Expression'];?>" class="glossary-item-title col-12"><?php echo $strTitle;?></h2>
<?php       $tabText = explode("<br>", $glossary['Text']);
            foreach($tabText as $text) {
?>
                                <p class="glossary-item-text col-12"><?php echo $text;?></p>
<?php       } ?>
                                <p class="glossary-item-illustration col-12"><?php echo $glossary['Illustration'];?></p>
                            </div>
                        </div>
<?php   } ?>
                    </div>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>