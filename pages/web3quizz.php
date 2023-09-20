<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3quizz.php
// Role         : web3 quizz page
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

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

// =====================================================================================================
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="quizz-container" class="col-11">
            <div class="row">
                <div class="col-12">
                    <h1 id="quizz-main-title">Web3 : quizz<span class="fa-solid fa-gamepad"></span></h1>
                </div>
<!-- --- --- --- MAIN CONTENT --- --- --- -->
                <section id="quizz-main-content" class="col-12">
                    <div clas="row">
                        <article class="col-12">
                                <form class="row" action="web3quizzgame.php" method="post">
                                    <fieldset>
                                        <legend class="col-12">Choisir un niveau d'expertise :</legend>
                                        <div id="rookie-container" class="offset-1 col-11" title="Débutant dans cet univers, viens tester tes connaissances, pour peut-être devenir un hodler à succès...">
                                            <input type="radio" id="rookie" name="level" value="1" checked />
                                            <label for="rookie" id="rookie-label">Normie : nouveau venu dans les cryptos</label>
                                        </div>
                                        <div class="offset-1 col-11" title="Déjà bien engagé dans le 'Rabbit Hole', ici tu mettras tes connaissances à l'épreuve du CryptoQuizz...">
                                            <input type="radio" id="pro" name="level" value="2" />
                                            <label for="advanced" id="pro-label">Hodler : fondamentaux acquis</label>
                                        </div>
                                        <div class="offset-1 col-11" title="Pas encore disponible...">
                                            <input type="radio" id="expert" name="level" value="3" title="Pas encore disponible..." disabled/>
                                            <label for="expert" id="expert-label" title="Pas encore disponible...">Bitcoiner : expert  en crypto-monnaies</label>
                                        </div>
                                        <div id="validate" class="col-12">
                                            <input type="submit" value="Lancer le quizz" />
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