<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3quizzgame.php
// Role         : web3 quizz game page
// Author       : CoinMachine
// Creation     : 2023-09-18
// Last update  : 2021-09-18
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script
require('../scripts/php/tools.php');                    // Include the utilitary functions script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

if (isset($_POST['level'])) {
    switch ($_POST['level']) {
        case '1':
            $strQuizzLevel = "Rookie";
            break;
        case '2':
            $strQuizzLevel = "Pro";
            break;
        case '3':
            $strQuizzLevel = "Expert";
            break;
        default:
            $strQuizzLevel = "Rookie";
            break;
    }
}
if (isset($_POST['number'])) {
    $intQuestionNumber = $_POST['number'];
} else {
    $intQuestionNumber = 1;
}


// =====================================================================================================
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="quizz-container" class="col-11">
            <div class="row">
                <div class="col-12">
                    <h1 id="quizz-main-title">CryptoQuizz<span class="fa-solid fa-gamepad"></span></h1>
                    <h2 id="quizz-main-subtitle">niveau <?= $strQuizzLevel ?></h2>
                </div>
<!-- --- --- --- MAIN CONTENT --- --- --- -->
                <section id="quizz-main-content" class="offset-2 col-10">
                    <div clas="row">
                        <article class="col-8">
                                <form class="row" action="web3quizzgame.php" method="post">
                                    <fieldset>
                                        <legend class="col-12">Question n° <?= $intQuestionNumber?></legend>
                                        <div id="question" class="col-10">
                                            <p><?= $strQuestion ?></p>
                                        </div>
                                        <div id="question" class="col-10">
                                            <input type="radio" id="answer1" name="answer" value="1" checked />
                                            <label for="answer1" id="answer1-label"></label>
                                        </div>
                                        <div id="question" class="col-10">
                                            <input type="radio" id="answer2" name="answer" value="2" />
                                            <label for="answer2" id="answer2-label"></label>
                                        </div>
                                        <div id="question" class="col-10">
                                            <input type="radio" id="answer3" name="answer" value="3" />
                                            <label for="answer3" id="answer3-label"></label>
                                        </div>
                                        <div id="question" class="col-10">
                                            <input type="radio" id="answer4" name="answer" value="4" />
                                            <label for="answer4" id="answer4-label"></label>
                                        </div>
                                        <div class="col-10">
                                            <input type="submit" value="Valider" />
                                        </div>
                                    </fieldset>
                                </form>
                        </article>
                    </div>
                </section>
            </div>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>