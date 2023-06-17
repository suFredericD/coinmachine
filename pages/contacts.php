<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : contacts.php
// Role         : contacts presentation page
// Author       : CoinMachine
// Creation     : 2023-06-13
// Last update  : 2021-06-17
// =====================================================================================================
// Include the HTML header builder
require('..\scripts\paging\html_header.php');
// Include the page header builder
require('..\scripts\paging\page_header.php');
// Include the HTML footer builder
require('..\scripts\paging\html_footer.php');
// Include the menu builder script
require('..\scripts\paging\main_menu.php');

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
        <section id="contacts-container" class="col-11">
            <div class="row">
                <article id="linkedin" class="col-8">
                    <div class="row">
                        <span class="social-brands fa-brands fa-linkedin col-2" alt="LinkedIn logo"></span>
                        <h3 id="linkedin-title" class="col-9">LinkedIn</h3>
                        <div id="linkedin-details" class="col-12">
                            <div class="row">
                                <a class="col-4" href="https://www.linkedin.com/in/fr%C3%A9d%C3%A9ric-daniau-10baba184/" target="_blank">
                                    <img class="social-thumbnail" src="../media/thumbnails/linkedin-frederic-daniau.png" alt="LinkedIn profile">
                                </a>
                                <div class="col-8">
                                <div class="row">
                                    <a class="social-link col-11" href="https://www.linkedin.com/in/fr%C3%A9d%C3%A9ric-daniau-10baba184/" target="_blank">CoinMachine profile<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="github" class="col-8">
                    <div class="row">
                        <span class="social-brands fa-brands fa-github col-2" alt="LinkedIn logo"></span>
                        <h3 id="github-title" class="col-9">GitHub</h3>
                        <div id="github-details" class="col-12">
                            <div class="row">
                                <a class="col-4" href="https://github.com/suFredericD" target="_blank">
                                    <img class="social-thumbnail" src="../media/thumbnails/github-suFredericD.png" alt="GitHub profile">
                                </a>
                                <div class="col-8">
                                    <div class="row">
                                        <a class="social-link col-11" href="https://github.com/suFredericD" target="_blank">CoinMachine profile<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="discord" class="col-8">
                    <div class="row">
                        <span class="social-brands fa-brands fa-discord col-2" alt="Discord logo"></span>
                        <h3 id="discord-title" class="col-9">Discord</h3>
                        <div id="discord-details" class="col-12">
                            <div class="row">
                                <a class="social-link offset-1 col-10" href="https://discord.gg/v4TNr4pW" target="_blank">CoinMachine server<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="mail" class="col-8">
                    <div class="row">
                        <span class="social-brands fa-regular fa-envelope col-2" alt="Email icon"></span>
                        <h3 id="mail-title" class="col-9">Email</h3>
                        <div id="mail-details" class="col-12">
                            <div class="row">
                                <a class="social-link offset-1 col-10" href="mailto:coinmachine100k@gmail.com" target="_blank">coinmachine100k@gmail.com<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                            </div>
                        </div>                        
                    </div>
                </article>
                <article id="odysee" class="col-8">
                    <div class="row">
                        <span class="social-brands fa-brands fa-odysee col-2" alt="Odysee logo"></span>
                        <h3 id="odysee-title" class="col-9">Odysee</h3>
                        <div id="odysee-details" class="col-12">
                            <div class="row">
                                <a class="col-4" href="https://odysee.com/@CoinMaChiNe:d" target="_blank">
                                    <img class="social-thumbnail" src="../media/thumbnails/odysee-CoinMaChiNe.png" alt="Odysee channel">
                                </a>
                                <a class="social-link col-8" href="https://odysee.com/@CoinMaChiNe:d" target="_blank">CoinMachine channel<span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                            </div>
                        </div>
                    </div>
                </article>















            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>