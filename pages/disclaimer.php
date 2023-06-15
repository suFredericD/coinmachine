<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : disclaimer.php
// Role         : investment disclaimer
// Author       : CoinMachine
// Creation     : 2023-06-15
// Last update  : 2021-06-15
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
<!-- --- --- --- DISCLAIMER --- --- --- -->
        <section id="disclaimer-section" class="col-11">
                    <div class="row">
                        <div class="disclaimer-warning col-12"><div class="warning-bar"></div></div>
                        <div id="disclaimer-main" class="offset-1 col-10">
                            <div class="row">
                                <span class="fa-solid fa-warning col-2"></span>
                                <h2 class="disclaimer-title col-8">DISCLAIMER</h2>
                                <span class="fa-solid fa-warning col-2"></span>
                                <article id="disclaimer-content" class="offset-1 col-11">
                                    <p><ul>Les informations fournies sur ce site sont <mark>à titre informatif et éducatif uniquement</mark> et <ins>ne constituent en aucun cas</ins> :
                                        <li>des conseils financiers, d'investissement ou de toute autre nature</li>
                                        <li>une offre, une sollicitation ou une recommandation d'aucune sorte</li>
                                        <li> une offre d'achat ou de vente de titres, de produits ou de services</li>
                                    </ul></p>
                                    <p>Tout investissement dans des actifs financiers, y compris les crypto-monnaies, <ins>comporte des risques importants</ins>. Il est essentiel de procéder à vos propres recherches approfondies et de consulter un conseiller financier qualifié avant de prendre toute décision d'investissement.</p>
                                    <p><strong>Nous déclinons <ins>toute responsabilité quant aux pertes ou aux dommages résultant de l'utilisation des informations fournies</ins> sur ce site.</strong> Nous vous encourageons à <ins>faire preuve de prudence et à prendre des décisions éclairées en fonction de votre propre jugement et de votre situation financière.</ins></p>
                                    <p>Rappelez-vous que <ins>les marchés financiers et les crypto-monnaies sont sujets à une <strong>volatilité importante</strong></ins>. Les performances passées ne garantissent pas les résultats futurs. Vous êtes seul responsable de vos actions et de vos investissements.</p>
                                    <p>En utilisant ce site, <ins>vous reconnaissez comprendre et accepter ce disclaimer</ins> et vous dégagez de toute responsabilité envers notre équipe et l'entité derrière ce site pour toute perte ou préjudice subi.</p>
                                </article>
                            </div>
                        </div>
                        <div class="disclaimer-warning col-12"><div class="warning-bar"></div></div>
                    </div>
                </section>






















<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>