<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : index.php
// Role         : home page of the website
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-24
// =====================================================================================================
require('scripts\paging\html_header.php');              // Include the HTML header builder
require('scripts\paging\page_header.php');              // Include the page header builder
require('scripts\paging\html_footer.php');              // Include the HTML footer builder
require('scripts\paging\main_menu.php');                // Include the main menu builder
require('admin\db_access.php');                         // Include the database access informations
require('admin\db_requestBuilder.php');                 // Include the database access functions

$fileName = $_SERVER['SCRIPT_NAME'];                    // Get the name of the current script
$siteInformations = [];

$tabNewsDetails = get5LastNewsDetailsByDate();          // Get the news details

createHTMLheader($fileName, $siteInformations);         // Create the HTML header
createPageheader($fileName);                            // Create the page header
creatMainMenu($fileName);                               // Create the main menu
?>
</div>
        </nav>
        <section id="index-main" class="container-fluid col-12">
            <div class="row">
                <article id="index-news" clas="col-11"><hr>
                    <div class="row">
                        <h4 class="breaking-news col-12"><span>NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - BREAKING NEWS - </span></h4>
                        <ul class="index-news-marquee col-12">
<?php   foreach($tabNewsDetails as $newsDetails) {
            $dateNews = date_create($newsDetails['Date']);
            $strTextNews = "<span class=\"index-news-date\">[" . date_format($dateNews, "d/m") . "]</span> " . $newsDetails['Title'] . "<i class=\"fa-solid fa-arrow-up-right-from-square\"></i>";
?>
                            <li><a href="<?php echo $newsDetails['Url']; ?>" title="<?php echo $newsDetails['Tooltip']; ?>" target="_blank"><?php echo $strTextNews;?></a></li>
<?php   } ?>
                        </ul>
                    </div><hr>
                </article>
                <h1 id="index-title" class="col-11">CoinMachine Plateforme</h1>
                <div id="index-intro" class="col-11">
                    <p>CoinMachine Plateforme est dédiée à l'éducation et au consulting en blockchain et cryptomonnaies.</p>
                    <p>Vous trouverez ici des ressources, des tutoriels, des outils, des liens utiles, des actualités, des analyses, des projets...</p>
                    <p>Le but est d'aider chacun à comprendre les blockchains et les cryptomonnaies, à se familiariser avec les outils et les usages, à être accompagné dans leurs utilisations.</p>
                </div>
<!-- --- --- My profile presentation --- --- -->
                <div id="index-intro-cm" class="col-11">
                    <div class="row">
                        <h2 class="col-12">
                            A propos de <a href="/pages/profile_fr.html" title="Consulter le profil de CoinMachine..." target="_blank">CoinMachine...</a></h2>
                        <img class="col-0 col-sm-0 col-md-3 col-xl-2" src="media/pictures/IDpic.jpg">
                        <div id="index-intro-cm-text" class="col-12 col-sm-12 col-md-9 col-xl-9">
                            <div class="row">
                                <p class="intro-cm-shorttext col-12">
                                    Connu sous le pseudonyme CoinMachine, je suis un programmeur passionné, spécialisé dans les langages PHP, SQL, JavaScript, HTML/CSS, Java et les nouvelles capacités web3.
                                </p>
                                <p class="intro-cm-shorttext col-12">
                                    Mon expertise s'étend à la gestion des wallets et des transactions web3, aux concepts de DAO et de gouvernance, ainsi qu'à l'évaluation des tokenomics.
                                </p>
                                <p class="intro-cm-shorttext col-12">
                                    Possèdant une compréhension horizontale des enjeux politiques, économiques et technologiques de la décentralisation, ainsi qu'une connaissance approfondie des domaines de la blockchain, de la DeFi, des NFTs, du GameFi et des Métavers.
                                </p>
                            </div>
                        </div>
                        <p class="intro-cm-fulltext col-12">
                            Au fil des années, j'ai participé à de nombreuses activités dans ces domaines, allant de l'investissement dans des projets connexes à la promotion active de l'adoption et de l'éducation sur les cryptomonnaies.
                            Je suis convaincu que mon expérience et mes compétences en programmation, combinées à ma passion pour les technologies blockchain et web3, font de moi un candidat idéal pour apporter une contribution précieuse à votre équipe.
                            Je suis prêt à relever de nouveaux défis et à contribuer au développement de solutions innovantes dans ce domaine en constante évolution.
                        </p>
                        <p class="intro-cm-contact col-12 ">
                            N'hésitez pas à considérer ma candidature et à me contacter pour toute question, suggestion, proposition de projet, demande de consulting...
                        </p>
                    </div>
                </div><hr>
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
<!-- --- --- Website tree map --- --- -->
                <label id="see-map" for="arborescence" class="col-2">Voir le plan<span class="fa-solid fa-caret-down"></span></label>
                <pre id="arborescence" class="col-11">
  <strong>Home</strong>  - - -> <em>you are here</em>
   |
   |__ <strong>Profil</strong>
   |    |___ <a href="pages/profile_fr.html">Mon profil FR</a> : <em>en français</em>
   |    |___ <a href="pages/profile_en.html">My profile EN</a> : <em>in english</em>
   |    |___ <a href="pages/contacts.php">Mes liens de contatcs / contatcs links</a>
   |    |___ <a href="pages/disclaimer.php">Disclaimer</a>
   |
   |__ <strong>Datas</strong>
   |    |___ <a href="pages/web3dashboard.php">Blockchains</a> : <em>fondamentaux, articles, vidéos, documenataires à propos de Bitcoin, Ethereum, BSC...</em>
   |    |___ <a href="pages/web3wallets.php">Wallets</a>     : <em>tout sur les portefeuilles, les standards de tokens supportés, les liens officiels...</em>
   |    |___ <a href="pages/cexchanges.php">CeXchanges</a>  : <em>tout sur les exchanges centralisés, les liens pour s'inscrire et pour suivre ces plateformes...</em>
   |    |___ <a href="pages/web3humans.php">Humains</a>     : <em>découvrir plus d'informations sur les personnalités influentes dans la cryptosphère...</em>
   |    |___ <a href="pages/web3glossary.php">Glossaire</a>   : <em>répertoire des mots et expressions à connaître, pour apprendre, pour rappel...</em>
   |
   |__ <strong>Ressources</strong>
   |    |
   |    |___ <a href="pages/web3news.php">News</a>       : <em>fraîchement sélectionnées pour garder un oeil sur les derniers évènements marquants...</em>
   |    |___ <a href="pages/web3tutorials.php">Tutoriels</a>  : <em>réalisés par mes soins à propos de l'utilisation des blockchains, wallets, des tokens...</em>
   |    |___ <a href="pages/web3toolbox.php">ToolBox</a>    : <em>liens utiles et outils pour les wallets, les NFT, la DeFi, les explorateurs de blocs...</em>
   |    |___ <a href="pages/web3medias.php">Medias</a>     : <em>médias d'actualités crypto triés sur le volet pour la qualité de leur contenu...</em>
   |            |___ <a href="pages/web3medias.php#news">Journaux</a>
   |            |___ <a href="pages/web3medias.php#charts">Charts</a>
   |            |___ <a href="pages/web3medias.php#youtube">YouTubers</a>
   |            |___ <a href="pages/web3medias.php#twitter">Twittos</a>
   |
   |__ <strong>Projects</strong>
                </pre>
<!-- --- --- END of content --- --- -->
            </div>
<?php
createHTMLfooter($fileName);                            // Create the HTML footer
?>