<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : realtOverview.php
// Role         : known fresh informations about Realt platform
// Author       : CoinMachine
// Creation     : 2023-06-26
// Last update  : 2021-06-26
// =====================================================================================================
require('..\scripts\paging\html_header.php');           // Include the HTML header builder
require('..\scripts\paging\page_header.php');           // Include the page header builder
require('..\scripts\paging\html_footer.php');           // Include the HTML footer builder
require('..\scripts\paging\main_menu.php');             // Include the menu builder script
require('..\admin\db_access.php');                      // Include the database access script
require('..\admin\db_requestBuilder.php');              // Include the database request builder script

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];


// Page building main functions
createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>

        <label id ="realt-label" for="realt-main-section" class="col-10">Plateforme Realt<span class="fa-solid fa-city"></span></label>
        <section id ="realt-main-section" class="col-11">
            <div class="row">
<!-- What is Realt ? -->
                <section id="realt-whatis" class="offset-1 col-11">
                    <article id="realt-whatis-article" class="row">
                        <div class="realt-intro-img col-4"><img class="img-fluid" src="../media/logos/realT.png" alt="RealT logo"></div>
                        <div class="col-8">
                            <div class="row">
                                <h2 class="col-12">Qu'est-ce que <span class="realt-name">RealT ?</span></h2>
                                <p class="realt-whatis-text col-12"><span class="realt-name">RealT</span> est une plateforme qui offre des investissements simplifiés dans l'immobilier. Leur mission est de démocratiser l'accès aux opportunités dans l'investissement immobilier, trouvées par leur équipe d'experts dans ce domaine.</p>
                                <p class="realt-whatis-text col-12">La propriété de ces biens immobiliers est représentée par des tokens (jetons numériques) hébergés sur la blockchain Ethereum. <span class="realt-name">RealT</span> remplace l'acte papier par des tokens qui permettent un nouveau mécanisme de détention des biens, basé sur la blockchain Ethereum.</p>
                                <p class="realt-whatis-text col-12">Vendus environ $50, les tokens émis permettent de rendre accessible au plus grand nombre l'investissemnt immobilier, le prorata des loyers de la propriété étant versé automatiquement à chaque détenteur de jetons tous les lundis.</p>
                                <p class="realt-whatis-text col-12">La numérisation de l'acte papier en token offre des avantages uniques en matière de propriété immobilière, qui sont explorés dans d'autres domaines du <a href="https://realt.co/education/" title="Consulter le wiki de RealT (en anglais)..." target="_blank">Wiki officiel <span class="realt-name">RealT</span></a>.</p>
                            </div>
                        </div>
                    </article>
                </section>
<!-- What are Realt advantages ? -->
                <section id="realt-advantages" class="col-11">
                    <article id="realt-advantages-article" class="row">
                    <div class="col-8">
                            <div class="row">
                                <h2 class="col-12">Les avantages de l'immobilier tokenisé</h2>
                                <p class="realt-advantages-text col-12"><span class="realt-name">RealT</span> a réduit le temps d'achat d'un bien immobilier d'un minimum de 30 jours et de nombreuses étapes avec des tiers, à seulement 30 minutes et sur votre téléphone ou ordinateur.</p>
                                <p class="realt-advantages-text col-12">Avec la tokenisation, les investissements immobiliers peuvent être rendus abordables pour presque tout le monde. Un seul jeton pour les propriétés <span class="realt-name">RealT</span> coûte environ 50 $ par jeton, ce qui est le minimum d'investissement le plus bas que le secteur immobilier puisse offrir. Les concurrents traditionnels du stylo et du papier de <span class="realt-name">RealT</span> ont des investissements minimums de 5 000 à 10 000 dollars.</p>
                                <p class="realt-advantages-text col-12">En transformant l'immobilier en jetons numériques, l'immobilier est accessible à un nombre beaucoup plus grand d'acheteurs potentiels, à la fois en raison du fractionnement des jetons et de la portée potentielle des marchés basés sur Internet. Les plus grands acteurs du marché que les jetons numériques peuvent atteindre augmentent la liquidité de l'immobilier. De plus, les applications financières sur Ethereum (et xDai) offrent des solutions pour accéder à la liquidité pour des actifs tokenisés de valeur.</p>
                            </div>
                        </div>
                        <div class="img-tuto col-4"><img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-001.png" alt="RealT logo"></div>
                    </article>
                </section>
<!-- How to buy Realt tokens ? -->
                <section id="realt-tutorial" class="col-12">
                    <article id="realt-tutorial-article" class="row">
                        <div class="col-5"><img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-002.png" alt="RealT logo"></div>
                        <div class="col-7">
                            <div class="row">
                                <h2 class="col-12">S'inscrire et acheter ses premiers tokens</h2>
                                <p class="rta-intro col-12">Le processus d'inscription, de vérifiaction d'identité et d'achat immobilier sur RealT est simple et fluide, résolument optimisé pour prendre en charge même les plus néophytes.</p>
                            </div>
                        </div>
                        <p id="tuto-toggle" class="rta-intro col-12" onclick="toggleTutoBlock();">
                            <span class="fa-solid fa-caret-down"></span><span class="fa-solid fa-caret-down"></span>
                            Voyons comment faire, en 10 étapes simples...
                            <span class="fa-solid fa-caret-down"></span><span class="fa-solid fa-caret-down"></span>
                        </p>
                        <div id="realt-tutorial-content" class="col-12"> 
                            <ul class="rtc-steps-list row">
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-6">
                                            <img class="img-fluid" src="../media/thumbnails/realT/realT-subscription-home.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 1 : Allez sur le site internet</h3>
                                                <a class="col-12" href="https://realt.co/ref/CoinMachine/" target="_blank">Vers le site de <span class="realt-name">RealT</span><span class="fa-solid fa-arrow-up-right-from-square"></span></a>
                                                <p class="col-12">Pour créer votre compte, cliquez sur le bouton "REGISTER / SIGN IN".</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-5">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-003.png"/>
                                        </div>
                                        <div class="rtc-steps col-7">
                                            <div class="row">
                                                <h3 class="col-12">Étape 2 : Pour vous enregistrer, vous devez remplir certains champs :</h3>
                                                <ul class="kyc-list col-12">
                                                    <li>Prénom et Nom</li>
                                                    <li>Nom d'utilisateur</li>
                                                    <li>Email et mot de passe</li>
                                                    <li>Répondre à la question si vous êtes résident US.</li>
                                                </ul>
                                                <P class="col-12">Cliquez sur le bouton "REGISTER" et ensuite sur "I UNDERSTAND"</P>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-6">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-004.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 3 : Pour valider votre identité, allez sur l'onglet "ID verification"...</h3>
                                                <P class="col-12">
                                                    Ensuite, connectez-vous sur votre compte. Vous devrez valider votre identité et indiquer sur quel portefeuille électronique vous
                                                    souhaitez recevoir vos tokens.<br>Pour rappel, vous avez besoin de valider votre identité pour que RealT sache à qui appartiennent les RealTokens.
                                                    RealT est le seul acteur à connaitre votre identité.<br>Si un jour le gouvernement a besoin de connaître les informations d'un 
                                                    détenteur des tokens, il pourra effectuer la demande à la société RealT. RealT demande ces informations pour être conforme à la réglementation.</P>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-3">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-005.png"/>
                                        </div>
                                        <div class="rtc-steps col-9">
                                            <div class="row">
                                                <h3 class="col-12">Étape 4 : Remplissez les champs ci-dessous :</h3>
                                                <ul class="kyc-list col-12">
                                                    <li>Date de naissance (Année - mois - jour)</li>
                                                    <li>Numéro de téléphone</li>
                                                    <li>Pays de résidence</li>
                                                    <li>Rue / Vile / Région / Code postal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-3">
                                            <img class="img-tuto img-fluid" src="../media/thumbnails/realT/screencapture-realt-006.png"/>
                                        </div>
                                        <div class="img-tuto col-3">
                                            <img class="img-tuto img-fluid" src="../media/thumbnails/realT/screencapture-realt-007.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 5 : Réussir votre KYC</h3>
                                                <ul class="kyc-list col-12">
                                                    <li>Sélectionnez le pays mentionné sur le document que vous allez soumettre.</li>
                                                    <li>Un document officiel (passeport, permis de conduire)</li>
                                                    <lI>Un selfie</li>
                                                </ul>
                                                <P class="col-12">Une fois les documents téléchargés, cliquez sur "SUBMIT FOR REVIEW"</P>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-6">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-008.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 5 bis : Une fois validée, cliquez sur le bouton "CLOSE"</h3>
                                                <P class="col-12">Allez sur l'onglet "PORTFOLIO"</P>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-6">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-009.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 6 : Paramétrer votre portefeuille</h3>
                                                <p class="col-12">
                                                    Choisissez entre le <em>"walletless"</em> ou votre propre wallet crypto.<br>
                                                    Si vous êtes débutant dans l'univers de la blockchain, des cryptomonnaies et que vous ne connaissez pas des notions comme <em>"Metamask"</em>, <em>"seed phrase"</em> ou encore <em>"DeFi"</em> alors <span class="realt-name">RealT</span> vous recommande le <em>"walletless"</em>.<br>
                                                    Pour en savoir plus vous pouvez lire l'article de <span class="realt-name">RealT</span> à ce sujet en cliquant <a href="https://realt.co/episode-7-en-route-vers-ladoption-de-masse-web-3-realt-continue-dinnover/" target="_blank">ici.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-6">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-009.png"/>
                                        </div>
                                        <div class="rtc-steps col-6">
                                            <div class="row">
                                                <h3 class="col-12">Étape 6 bis : Paramétrer votre portefeuille <em>"walletless"</em></h3>
                                                <p class="col-12">Cochez, la case "I agree to the RealT wallettless Terms of Service" et cliquez sur "CONFIRM".</p>
                                                <p class="col-12">Votre portefeuille <em>"walletless"</em> est bien paramétré et vous pouvez<br /><a href="realtOverview.php#step-seven">aller directement à l'étape 7<span class="fa-solid fa-arrow-up-right-from-square"></span></a><br />pour acheter votre premier RealToken.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-012.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 6 ter : Paramétrer votre propre portefeuille crypto</h3>
                                                <p class="col-12">Vous pouvez de configurer votre propre wallet crypto. Si vous ne savez pas ce qu'est un portefeuille électronique, vous pouvez lire notre article à ce sujet en cliquant ici.</p>
                                                <p class="col-12">Cliquer sur "SET UP A PRIVATE WALLET" puis "YES, I HAVE ONE"" et<br /><a href="realtOverview.php#step-seven">aller directement à l'étape 7<span class="fa-solid fa-arrow-up-right-from-square"></span></a><br />Autrement continuez ce tutoriel.</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-013bis.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 6 ter : Paramétrer votre propre portefeuille crypto</h3>
                                                <ul class="kyc-list col-12">Si vous n'avez pas de portefeuille, cliquez sur "NO, I NEED ONE" et vous avez 2 options :
                                                    <li>1- Créer votre portefeuille avec Metamask, recommandé si vous êtes sur ordinateur.</li>
                                                    <li>2- Créer votre compte avec le portefeuille RealT mobile.</li>
                                                </ul>
                                                <p class="col-12">En dehors du "walletless", le portefeuille <span class="realt-name">RealT mobile</span> est plus simple pour gérer vos investissements.</p>
                                                <p class="col-12"><span class="realt-name">RealT</span> a développé ce portefeuille en partenariat avec l'entreprise Mt Pelerin. Pour certaines utilisations, vous devrez passer un second KYC.<br>Cependant, ce second KYC n'est pas obligatoire pour acheter des RealTokens. Par exemple, vous devrez le réaliser si vous souhaitez retirer votre loyer sur votre compte bancaire.</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-013.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 6 ter : Paramétrer votre propre portefeuille crypto</h3>
                                                <p class="col-12">
                                                    Si vous êtes sur un ordinateur, RealT vous propose Metamask.<br />
                                                    Si vous êtes sur un smartphone, RealT vous propose le RealT wallet.<br />
                                                    En cliquant su "View Guide", vous aurez accès à un tutoriel détaillé.<br />
                                                    Une fois que vous avez, votre portefeuille cliquez sur "I HAVE MY WALLET".</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="step-seven" class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-014.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 7 : Sélectionner sur quel réseau, vous souhaitez recevoir RealTokens et loyers :</h3>
                                                <ul class="kyc-list col-12">
                                                    <li>1- Claim on Ethereum (choix non-recommandé à cause des frais de gas élevés).</li>
                                                    <li>2- Receive on Gnosis Chain (Les frais de gas sont très faibles).</li>
                                                </ul>
                                                <p class="col-12"> Cliquez ensuite sur "I'M Ready".</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-015.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 7 bis : Connnecter son wallet</h3>
                                                <ul class="kyc-list col-12">
                                                    <li>Si vous avez créé votre compte avec Metamask, cliquez sur <em>"Metamask"</em>,</li>    
                                                    <li>Si vous avez créé votre compte avec le portefeuille RealT cliquez sur <em>"WalletConnect"</em> :</li>
                                                    <ul class="kyc-list col-12">
                                                        <li>Un QR code apparaîtra, scannez le avec votre realT wallet</li>
                                                        <li>Allez sur votre application RealT Wallet, puis cliquez sur "Settings"</li>
                                                        <li>Ensuite, cliquez sur "WalletConnect"</li>
                                                        <li>Cliquez sur "Scan" et scannez le QR code</li>
                                                        <li>Cliquez sur "YES, USE THIS WALLET"</li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-3">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-020.png"/>
                                        </div>
                                        <div class="rtc-steps col-9">
                                            <div class="row">
                                                <h3 class="col-12">Étape 8.1 : Allez sur la Marketplace</h3>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-021.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 8.2 : Remplir son panier</h3>
                                                <p class="col-12">Entrez la quantité que vous souhaitez acheter, puis cliquez sur "ADD TO CART".<br />Ensuite, cliquez en haut à droite sur le panier.</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-022.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 8.3 : Valider la quantité et l'achat</h3>
                                                <p class="col-12">Vous pouvez de nouveau changer la quantité. <br />Puis, cliquez sur "Proceed to checkout"</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-023.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 8.4 : Valider le paiement</h3>
                                                <ul class="kyc-list col-12">Vous avez 3 possibilités pour payer :
                                                    <li>1- Payer en cryptomonnaie avec votre portefeuille custodial ou non-custodial</li>
                                                    <li>2- Payer par carte bancaire</li>
                                                    <li>3- Payer en cryptomonnaie USDC ou xDai directement avec votre portefeuille sur Gnosis Chain. Regardez le tutoriel <a href="https://intercom.help/realt/en/articles/5848362-how-to-buy-realtokens-using-request-network" target="_blank">ici</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-024.png"/>
                                        </div>
                                        <h3 class="rtc-steps col-4">Vous avez un récapitulatif de votre commande et vous recevrez aussi un email</h3>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-024bis.png"/>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="row">
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-025.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 9.1 : Lire le contrat</h3>
                                                <p class="col-12">Après quelques minutes vous recevrez un second email afin de signer le contrat entre vous et la LCC</p>
                                                <p class="col-12">
                                                    Le contrat fait plus de 50 pages, mais nous allons vous décrire les points importants.<br />
                                                    Dans l'image ci-dessous, nous pouvons voir que nous signons un contrat avec une series LLC qui est différente de la structure RealT.<br />
                                                    Vous pouvez voir que la LLC "RealToken LLC - Series #184 -1389 BIRD" possède la propriété.<br />
                                                    Vous possédez un pourcentage de cette LLC en fonction du nombre de RealTokens que vous avez acheté.<br />
                                                    La société RealT est une société indépendante qui gère la gestion des biens des series LLC ou des Inc.<br />
                                                    RealT Inc ne possède pas les LLC ou les Inc, ce sont les investisseurs qui les possèdent !
                                                </p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-026.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 9.2 : Cocher le contrat</h3>
                                                <p class="col-12">Cocher les 3 cases</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-026bis.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 9.3 : Signer le contrat</h3>
                                                <p class="col-12">Signez ici</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-027.png"/>
                                        </div>
                                        <div class="rtc-steps col-4">
                                            <div class="row">
                                                <h3 class="col-12">Étape 9.4 : Confirmation de la signature</h3>
                                                <p class="col-12">Vous recevrez un email pour confirmer la signature de votre contrat.<br />Vous pouvez le consulter à tout moment.</p>
                                            </div>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-028.png"/>
                                        </div>
                                        <div class="img-tuto col-4">
                                            <img class="img-fluid" src="../media/thumbnails/realT/screencapture-realt-029.png"/>
                                        </div>
                                        <div class="rtc-steps col-8">
                                            <div class="row">
                                                <h3 class="col-12">Étape 10 : Consulter votre portfolio</h3>
                                                <p class="col-12">Vous pourrez directement voir vos RealTokens dans l'onglet <strong>Portfolio</strong> et la section <strong>Properties</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </article>
                </section>
<!-- Intro by Realt - traducted from the original english version-->
                <section id="realt-introbyrealt" class="offset-1 col-11">
                    <article id="realt-introbyrealt-article" class="row">
                        <img class="col-3" src="../media/logos/realT.png" alt="RealT logo">
                        <h2 class="col-9">
                            Une introduction à l'immobilier tokenisé<br />
                            <em>by RealT</em><br />
                            <a href="https://realt.co/an-introduction-to-tokenized-real-estate/" target="_blank" title="See original introduction by RealT in english...">traduction de <u class="underline">l'original</u></a>
                        </h2>
                        <p id="realt-introbyrealt-intro"class="offset-2 col-10">De DaVinci à De Beers, la façon dont nous investissons dans les actifs est sur le point de changer fondamentalement avec l'arrivée de la tokenisation. Chez RealT, nous croyons que la tokenisation des actifs est la prochaine étape logique dans l'évolution technologique du commerce, en particulier en ce qui concerne le marché immobilier. Ce changement de paradigme, vers la tokenisation, nous permettra de transcender la vision centrée sur la monnaie fiduciaire de l'économie vers une économie token plus démocratique, inclusive et efficiente.</p>
                        <h3 id="realt-intro-know-more" class="col-8" onclick="toggleInfosBlock();">
                            <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                            en savoir plus
                            <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                        </h3>
                        <div id="realt-intro-info-container" class="col-12">
                            <div class="row">
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(0);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Qu'est-ce que la tokenisation des actifs exactement ?</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                        <div class="img-tuto col-4"><img class="img-fluid" src="../media/thumbnails/realT/Real_Explained-01.png" alt="RealT explanation"></div>
                                        <p class="realt-intro-info-text col-8">
                                            Aujourd'hui, les actifs peuvent être représentés sur une blockchain par un identifiant numérique distinctif appelé token. La tokenisation est une méthode qui convertit les droits sur un actif en un token numérique, de nombreuses manières similaires au processus traditionnel de titrisation. Le transfert des informations d'un actif réel sur la blockchain permet la transmission et le commerce des droits de propriété sur une plateforme numérique mondiale et sécurisée. Dans le cas de RealT, les actifs tokenisés sont des biens immobiliers résidentiels, mais, de manière générale, tout actif peut être tokenisé, d'une œuvre d'art précieuse à une pierre précieuse.
                                            <a href="https://faq.realt.co/fr/collections/3903187-comment-cela-fonctionne" title="Rubrique 'Comment cela fonctionne ?' du wiki officiel RealT..." target="_blank">Comment cela fonctionne ?</a>
                                        </p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(1);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Les avantages de la tokenisation des actifs</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                    <div class="img-tuto col-4"><img class="img-fluid" src="../media/thumbnails/realT/Real_Explained-02.png" alt="RealT explanation"></div>
                                    <p class="realt-intro-info-text col-8">La fondation d'une économie token offre le potentiel d'un monde financier plus efficace et équitable en réduisant considérablement les frictions liées à la création, l'achat et la vente de titres. Des caractéristiques telles que l'intégrité, la robustesse, l'accessibilité et l'immutabilité font de la blockchain un puissant outil comptable, et le processus de tokenisation des actifs crée de nombreux avantages, notamment une plus grande transparence, liquidité et accessibilité, ainsi que des transactions plus rapides et moins coûteuses.</p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(2);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Une plus grande transparence</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                    <div class="img-tuto col-5"><img class="img-fluid" src="../media/thumbnails/realT/Real_Explained-03.png" alt="RealT explanation"></div>
                                    <p class="realt-intro-info-text col-7">Un token de sécurité est capable d'incorporer directement les droits et les responsabilités légales du détenteur du token, ainsi qu'un enregistrement immuable de la propriété. Cet enregistrement immuable signifie que personne ne peut "effacer" votre propriété, même si elle n'est pas enregistrée dans un registre gouvernemental. Ces caractéristiques promettent d'ajouter de la transparence en suivant et en enregistrant l'historique de l'actif à chaque fois qu'il change de mains.</p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(3);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Une liquidité accrue</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                    <div class="img-tuto col-3"><img class="img-fluid" src="../media/thumbnails/realT/Real_Explained-04.png" alt="RealT explanation"></div>
                                    <p class="realt-intro-info-text col-9">La tokenisation des actifs créera un monde plus liquide et pourrait changer radicalement la dynamique du commerce mondial. La tokenisation des actifs, notamment des valeurs mobilières privées ou des actifs généralement illiquides tels que l'immobilier, permet de les échanger plus facilement sur un marché secondaire choisi par l'émetteur. De plus, l'accès à une base plus large d'investisseurs accroît la liquidité de ces actifs, ce qui profite aux investisseurs qui disposent ainsi de plus de liberté, et aux vendeurs car les tokens bénéficient de la "prime de liquidité", capturant ainsi une valeur plus importante de l'actif sous-jacent.</p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(4);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Mondialisation</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                    <div class="img-tuto col-4"><img class="img-fluid" src="../media/thumbnails/realT/world.jpg" alt="RealT explanation"></div>
                                    <p class="realt-intro-info-text col-8">Lorsque la tokenisation des actifs atteindra le grand public, le commerce mondial d'actifs physiques (auparavant) illiquides pourrait devenir une réalité quotidienne. À mesure que les actifs deviennent de plus en plus tokenisés, le commerce mondial devient moins difficile et ouvre la voie au développement de nouveaux marchés pour des actifs précédemment sous-utilisés et illiquides. En conséquence, des personnes des quatre coins du monde pourront détenir des fractions du même actif physique ou échanger différents types d'actifs directement et instantanément.</p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(5);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Réduction des barrières à l'entrée</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                    <div class="img-tuto col-4"><img class="img-fluid" src="../media/thumbnails/realT/equipe-multicultural-grupo.avif" alt="RealT explanation"></div>
                                    <p class="realt-intro-info-text col-8">La tokenisation pourrait ouvrir l'investissement d'actifs à un public beaucoup plus large grâce à la réduction des montants et des durées d'investissement minimum. Les tokens sont hautement divisibles, ce qui signifie que les investisseurs peuvent acheter des tokens représentant de petites pourcentages de l'actif sous-jacent. Si chaque transaction est moins chère et plus facile à traiter, cela ouvrira la voie à une réduction significative des montants d'investissement minimum. De plus, la liquidité accrue des tokens de sécurité pourrait réduire les périodes d'investissement minimum, car les investisseurs peuvent échanger leurs tokens sur des marchés secondaires qui sont théoriquement mondiaux et ouverts 24 heures sur 24, 7 jours sur 7 (sous réserve de limites réglementaires).</p>
                                </div></div>
                                <h3 class="realt-intro-info-title col-12" onclick="toggleAny(6);">
                                    <span class="fa-solid fa-angles-down"></span><span class="fa-solid fa-angles-down"></span>
                                    Révolutionner le secteur de l'immobilier grâce à la tokenisation des actifs</h3>
                                <div class="realt-intro-info-details col-12"><div class="row">
                                        <p class="realt-intro-info-text col-12">Les avantages de la tokenisation des actifs s'appliquent principalement aux classes d'actifs considérées généralement comme illiquides et peuvent bénéficier d'une meilleure transparence, d'une plus grande efficacité et de montants d'investissement minimum plus faibles. L'industrie de l'immobilier est particulièrement pertinente lorsqu'on envisage la possibilité de la tokenisation. Imaginez que vous souhaitez investir dans l'immobilier, mais que vous voulez commencer petit et augmenter progressivement votre investissement.</p>
                                        <p class="realt-intro-info-text col-12">Vous souhaitez peut-être commencer par investir dans un appartement de 100 000 $ ; la tokenisation permet de diviser la valeur de l'appartement en, par exemple, 100 tokens (le nombre est totalement arbitraire). Dans ce scénario, chaque token représente une part de 1% de l'appartement, et lorsque vous achetez un token, vous achetez en réalité 1% de la propriété de l'actif. Achetez 50 tokens et vous possédez 50% de l'actif ; achetez les 100 tokens et vous en êtes le propriétaire complet.</p>
                                        <p class="realt-intro-info-text col-12">L'immutabilité inhérente d'un registre public garantit que, une fois que vous achetez des tokens, votre propriété de l'actif ne peut être manipulée ou altérée, elle est incontestable. Plutôt que d'exiger des investissements très importants ou de bloquer votre argent pendant de longues périodes, la tokenisation vous permet d'investir dans n'importe quel actif qui vous intéresse et de facilement échanger le token à votre convenance.</p>
                                        <p class="realt-intro-info-text col-12">La possibilité de choisir librement où investir ouvrira une nouvelle ère de personnalisation et de personnalisation beaucoup plus importantes dans les investissements. Chez RealT, nous sommes fiers de contribuer à la construction de l'infrastructure nécessaire pour soutenir la croissance d'une nouvelle économie basée sur les tokens.</p>
                                </div></div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </section>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>