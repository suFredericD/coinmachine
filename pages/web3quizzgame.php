<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3quizzgame.php
// Role         : web3 quizz game page
// Author       : CoinMachine
// Creation     : 2023-09-18
// Last update  : 2021-09-20
// =====================================================================================================
require('../scripts/paging/html_header.php');           // Include the HTML header builder
require('../scripts/paging/page_header.php');           // Include the page header builder
require('../scripts/paging/html_footer.php');           // Include the HTML footer builder
require('../scripts/paging/main_menu.php');             // Include the menu builder script
require('../admin/db_access.php');                      // Include the database access script
require('../admin/db_requestBuilder.php');              // Include the database request builder script
require('../scripts/php/tools.php');                    // Include the utilitary functions script
require('../scripts/php/quizzTools.php');               // Include the utilitary functions script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

if (isset($_POST['level'])) {
    switch ($_POST['level']) {
        case '1':
            $strQuizzLevel = "Normie";
            break;
        case '2':
            $strQuizzLevel = "Hodler";
            break;
        case '3':
            $strQuizzLevel = "Bitcoiner";
            break;
        default:
            $strQuizzLevel = "Normie";
            break;
    }
}
// Récupération ou initialisation du score
if (isset($_POST['score'])) {
    $intScore = $_POST['score'];
} else {
    $intScore = 0;
}
// Récupération ou initialisation du numéro de question
if (isset($_POST['number'])) {
    $intQuestionNumber = $_POST['number'];
} else {
    $intQuestionNumber = 1;
}
$intQuestionNumberDisplay = $intQuestionNumber;
$intNextQuestion = intval($intQuestionNumber) + 1;
// Création du questionnaire
if ($intQuestionNumber == 11) {

} elseif ($intQuestionNumber == 1) {
    $tabQuizzIds = createQuizz($_POST['level']);
    $tabQuestion = getOneQuestionById($tabQuizzIds[$intQuestionNumber]);    // Récupération de la question
} else {
    for ($i = 1; $i < 11; $i++) {
        $tabQuizzIds[$i] = $_POST[$i];
    }
    $tabQuestion = getOneQuestionById($_POST[$intQuestionNumber]);          // Récupération de la question
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
                <section id="quizz-main-content" class="offset-1 col-10">
                    <div clas="row">
                        <article class="col-12">
<!-- --- --- --- QUESTION CARD --- --- --- -->
<?php   if ($intQuestionNumber <> 11) {
            switch ($tabQuestion['Category']) {
                case 'Histoire':
                    $strCategoryDisplayClass = "histoire";
                    break;
                case 'People':
                    $strCategoryDisplayClass = "people";
                    break;
                case 'DeFi':
                    $strCategoryDisplayClass = "defi";
                    break;
                case 'NFT':
                    $strCategoryDisplayClass = "nft";
                    break;
                case 'Technologie':
                    $strCategoryDisplayClass = "technologie";
                    break;
                case 'Fondamentaux':
                    $strCategoryDisplayClass = "fondamentaux";
                break;
            } ?>
                                <form id="quizz-form" class="row" action="web3quizzgame.php" method="post">
                                    <fieldset id="quizz-fieldset">
                                        <legend id="question-number-label" class="col-12">Question n° <?= $intQuestionNumberDisplay ?></legend>    
                                        <div id="score-section" class="col-12"><div class="row">
                                            <div id="score-label" class="offset-1 col-2">Score</div>
                                            <div id="score-display" class="col-4"><?= $intScore ?> / <?= $_POST['level']."0" ?></div>
                                            <div id="category-display" class="<?= $strCategoryDisplayClass ?> col-5"><?= $tabQuestion['Category'] ?></div>
                                        </div></div>
                                        <div id="question" class="offset-1 col-10">
                                            <p><?= $tabQuestion['Text'] ?></p>
                                        </div>
                                        <div id="answer1-container" class="answers offset-2 col-10">
                                            <input type="radio" id="answer1" name="answer" value="1" />
                                            <label for="answer1" id="answer1-label"><?= $tabQuestion['Answer1'] ?></label>
                                        </div>
                                        <div id="answer2-container" class="answers offset-2 col-10">
                                            <input type="radio" id="answer2" name="answer" value="2" />
                                            <label for="answer2" id="answer2-label"><?= $tabQuestion['Answer2'] ?></label>
                                        </div>
                                        <div id="answer3-container" class="answers offset-2 col-10">
                                            <input type="radio" id="answer3" name="answer" value="3" />
                                            <label for="answer3" id="answer3-label"><?= $tabQuestion['Answer3'] ?></label>
                                        </div>
                                        <div id="answer4-container" class="answers offset-2 col-10">
                                            <input type="radio" id="answer4" name="answer" value="4" />
                                            <label for="answer4" id="answer4-label"><?= $tabQuestion['Answer4'] ?></label>
                                        </div>
                                        <input type="hidden" id="player-level" name="level" value="<?= $_POST['level'] ?>" />
                                        <input type="hidden" id="question-number" name="number" value="<?= $intNextQuestion ?>" />
                                        <input type="hidden" id="category" name="category" value="<?= $tabQuestion['Category'] ?>" />
                                        <input type="hidden" id="score" name="score" value="<?= $intScore ?>" />
                                        <input type="hidden" id="wright-answer" name="wright-answer" value="<?= $tabQuestion['GoodAnswer'] ?>" />
<?php   for ($i = 1; $i < 11; $i++) { ?>
                                        <input type="hidden" name="<?= $i ?>" value="<?= $tabQuizzIds[$i] ?>" />
<?php   } 
        if($intQuestionNumberDisplay > 1){
            for ($i = 1; $i < $intQuestionNumberDisplay; $i++) {?>
                                        <input type="hidden" name="score<?= $i ?>" value="<?= $_POST["score$i"] ?>" />
                                        <input type="hidden" name="cat<?= $i ?>" value="<?= $_POST["cat$i"] ?>" />
<?php       }
        } ?>
                                        <div class="validate col-12">
                                            <input id="check" type="submit" value="Valider" />
                                        </div>
                                    </fieldset>
                                </form>
<?php   } else { ?>
<!-- --- --- --- END QUIZZ PAGE --- --- --- -->
                            <div id="quizz-end" class="row">
                                <h2 id="quizz-end-title" class="col-12">Fin du quizz - Résultats</h2><hr>
<?php       for ($i = 1; $i < 11; $i++) {
                if (intval($_POST["score$i"]) > 0) {
                    $strScoreClass = "score-good";
                } else {
                    $strScoreClass = "score-bad";
                }
                switch ($_POST["cat$i"]) {
                    case 'Histoire':
                        $strCategoryClass = "histoire";
                        break;
                    case 'People':
                        $strCategoryClass = "people";
                        break;
                    case 'DeFi':
                        $strCategoryClass = "defi";
                        break;
                    case 'NFT':
                        $strCategoryClass = "nft";
                        break;
                    case 'Technologie':
                        $strCategoryClass = "technologie";
                        break;
                    case 'Fondamentaux':
                        $strCategoryClass = "fondamentaux";
                        break;
                }
?>
                                <div class="question-label offset-1 col-3">Question <?= $i ?></div>
                                <div class="question-category col-3"><span class="<?= $strCategoryClass ?>"><?= $_POST["cat$i"] ?></span></div>
                                <div class="question-score col-5"><span class="<?= $strScoreClass ?>"><?= $_POST["score$i"] ?></span> / <?= $_POST['level'] ?></div>
                                <hr class="custom-hr offset-1 col-10" />
<?php       }
            $intScoreMax = intval($_POST['level']."0");
            $numRatio = intval($_POST['score']) / $intScoreMax;
            if ($numRatio == 1) {
                $strCongratulations = "Parfait !";
            } elseif ($numRatio > 0.8) {
                $strCongratulations = "Félicitations !";
            } elseif ($numRatio > 0.5) {
                $strCongratulations = "Pas mal !";
            } else {
                $strCongratulations = "Encore un effort...";
            } ?>
                                <div id="quizz-congratulations" class="col-12"><?= $strCongratulations ?></div>
                                <div id="quizz-end-score-label" class="col-12">Score :&nbsp;&nbsp;<?= $_POST['score'] ?> / <?= $intScoreMax ?></div>

                            </div>
<?php   } ?>
                        </article>
                    </div>
                </section>
            </div>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>