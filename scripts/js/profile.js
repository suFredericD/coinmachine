//  Purpose     : testing possibilities of AI assisted coding
//  Subject     : Matrix CV html file
//  Context     : coder without experience in corporations aiming to work in web3.0
//  Author      : CoinMachine
//  Created     : 2023-28-05

// keep track of the start time of execution
const startTime = new Date().getTime();
// ==================== DOM ELEMENTS
const header = document.querySelector('.matrix-container');
const headerPicture = document.querySelector('.matrix-picture');
const headerInformations = document.querySelector('.matrix-presentation');
const headerLowerPart = document.querySelector('.matrix-lower');
const headerTitles = document.querySelectorAll('.matrix-column h3');
const contactTitles = document.querySelectorAll(".contact-title");
const sectionActivities = document.querySelector('.matrix-section-activities');
const sectionUpg = document.querySelector('.matrix-section-upgrades');
const listActivities = document.querySelector('.activities-infos').querySelectorAll('li');
const listActivitiesInfos = document.querySelector('.known-activities-section').querySelectorAll('p');
const upgLists = document.querySelectorAll('.upg-article ul li');
const sectionXP = document.querySelector('.matrix-section-xp');
const articlesXp = document.querySelectorAll('.xp-article');
const sectionFooter = document.querySelector('#footer');
const footerPowering = document.querySelector('.powering');
const footerHorodate = document.querySelector('.horodate');
const footerExecTime = document.querySelector('.execution-time');
const footerSkynet = document.querySelector('.skynet');
// ==================== CONSTANTS
const blockDisplayTimer = 800;
const letterTimer = 85;

// ==================== VARIABLES
let intTimerActive = 4000;

// ==================== Page's elements occlusion
sectionActivities.style.opacity = 0;
sectionUpg.style.opacity = 0;

//  Functions producing script execution time animation
function horodate(){
    const date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let milliseconds = date.getMilliseconds();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {month = "0" + month;}
    if (minutes < 10) {minutes = "0" + minutes;}
    if (seconds < 10) {seconds = "0" + seconds;}
    if (milliseconds < 10) {
        milliseconds = "00" + milliseconds;
    } else if (milliseconds < 100) {
        milliseconds = "0" + milliseconds;
    }
    const horodate = day + "/" + month + "/" + year + " "
                   + hours + ":" + minutes + ":" + seconds + "." + milliseconds;
    return horodate;
}
// ==================== Functions producing typewriting animations
// Fonction d'animation d'écriture
    // Paramètre : élément du DOM
    function typewritter(element){
        const letters = element.innerHTML.split('');
        element.innerHTML = '';
        letters.forEach((letter, i) => {
            intTimerActive += letterTimer;
            setTimeout(function(){
                element.innerHTML += letter;
            }, letterTimer * i);
        });
    }
    // Paramètre : chaîne de caractères, élément du DOM
    function typewritter2(string, element){
        const letters = string.split('');
        element.innerHTML = '';
        letters.forEach((letter, i) => {
            intTimerActive += letterTimer;
            setTimeout(function(){
                element.innerHTML += letter;
            }, letterTimer * i);
        });
    }
    // Special function for loading bar
    function typewritterbarload(element){
        const letters = element.innerHTML.split('');
        element.innerHTML = '';
        letters.forEach((letter, i) => {
            intTimerActive += letterTimer;
            setTimeout(function(){
                element.innerHTML += letter;
            }, letterTimer * i);
        });
    }
// ==================== Functions producing animations
// Function revealing the header after a delay
function revealHeader() {
    headerInformations.style.opacity = 1;
    headerPicture.style.opacity = 0;
    headerInformations.querySelector('h1').style.opacity = 0;
    headerInformations.querySelector('h2').style.opacity = 0;
    headerInformations.querySelector('h5').style.opacity = 0;
    headerInformations.querySelector('.lighter-infos').style.opacity = 0;
    headerInformations.querySelector('p').style.opacity = 0;
    headerInformations.querySelector('a').style.opacity = 0;
    headerLowerPart.style.opacity = 0;
    sectionXP.querySelector('h2').style.opacity = 0;
        articlesXp.forEach((article, index) => {
            article.style.opacity = 0;
            article.querySelector('h4').style.opacity = 0;
            article.querySelector('h5').style.opacity = 0;
            if(article.querySelectorAll('p')){
                article.querySelectorAll('p').forEach((p, index) => {
                    p.style.opacity = 0;
                });
            }
        });
        document.querySelectorAll('.xp-list').forEach((list, index) => {
            list.style.opacity = 0;
            list.querySelectorAll('li').forEach((li, index) => {
                li.style.opacity = 0;
            });
        });
    sectionXP.style.opacity = 0;
    sectionFooter.style.opacity = 0;
    footerPowering.style.opacity = 0;
    footerPowering.querySelectorAll('span').forEach((span, index) => {
        span.style.opacity = 0;
    });
    footerHorodate.style.opacity = 0;
    footerExecTime.style.opacity = 0;
    footerSkynet.style.opacity = 0;
    header.style.opacity = 0.95;
    const barLoaderText = document.querySelector('.polling_message');
    typewritterbarload(barLoaderText);
    setTimeout(function(){ 
        headerInformations.querySelector('h1').style.opacity = 0.95;
        headerInformations.querySelector('h2').style.opacity = 0.95;
        headerPicture.style.opacity = 0.95;
        }, intTimerActive);
    intTimerActive += 1250;
// End of first animation - all page hidden, loading bar displayed
    setTimeout(function(){
        headerInformations.querySelector('h5').style.opacity = 0.95;
        typewritter(headerInformations.querySelector('h5').querySelector('span'));
        headerInformations.querySelector('p').style.opacity = 0.95;
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        headerInformations.querySelector('a').style.opacity = 0.95;
        headerInformations.querySelector('.lighter-infos').style.opacity = 0.95;
    }, intTimerActive);
    intTimerActive += 1500;
// End of second animation - Personal informations revealed
    setTimeout(function(){
        document.querySelectorAll('.matrix-column p').forEach((p, index) => {
            p.style.opacity = 0;
        });
        headerTitles.forEach((title, index) => {
            title.style.opacity = 0;
        });
    }, intTimerActive);
    setTimeout(function(){
        document.querySelector('.matrix-lower').style.opacity = 0.95;
        document.querySelectorAll('.link-contact').forEach((link, index) => {
            link.style.opacity = 0;
        });
        document.querySelector('.functions').style.opacity = 0;
        headerTitles.forEach((title, index) => {
            title.style.opacity = 0.95;
            typewritter(title);
        });
    }, intTimerActive);
    intTimerActive += 1250;
    setTimeout(function(){
        document.querySelectorAll('.matrix-column p').forEach((p, index) => {
            p.style.opacity = 0.95;
        });
    }, intTimerActive);
    intTimerActive += 1250;
    setTimeout(function(){
        document.querySelectorAll('.link-contact').forEach((link, index) => {
            link.style.opacity = 0.95;
                typewritter(link);
        });
    }, intTimerActive);
    intTimerActive += 1500; // Important for intra animation
    setTimeout(function(){
        document.querySelector('.functions').style.opacity = 0.95;
        document.querySelectorAll('.functions-li').forEach((li, index) => {
            li.style.opacity = 0.95;
            typewritter(li);
        });
    }, intTimerActive);
    intTimerActive += 3500;
    setTimeout(function(){
        sectionActivities.style.opacity = 0.95;
        sectionActivities.querySelector('h2').style.opacity = 0;
        sectionActivities.querySelector('p').style.opacity = 0;
        listActivities.forEach((li, index) => {
            li.style.opacity = 0;
        });
        listActivitiesInfos.forEach((p, index) => {
            p.style.opacity = 0;
        });
    }, intTimerActive);
    intTimerActive += 1500;
// End of third animation   - Revealing rest of the header : contacts & skills
//                          - Revealing activities sections borders
    setTimeout(function(){
        sectionActivities.querySelector('h2').style.opacity = 0.95;
        typewritter(sectionActivities.querySelector('h2'));
    }, intTimerActive);
    intTimerActive += 1250;
    setTimeout(function(){
        sectionActivities.querySelector('p').style.opacity = 0.95;
        sectionActivities.querySelectorAll('p').forEach((p, index) => {
            typewritter(p);
        });
        listActivities.forEach((li, index) => {
            li.style.opacity = 0.95;
            typewritter(li);
        });
        listActivitiesInfos.forEach((p, index) => {
            p.style.opacity = 0.95;
            typewritter(p);
        });
    }, intTimerActive);
    intTimerActive += 1500;
// End of fourth animation   - Revealing activities details
    setTimeout(function(){
        sectionUpg.style.opacity = 0.95;
        sectionUpg.querySelector('h2').style.opacity = 0;
        sectionUpg.querySelector('.warning').style.opacity = 0;
        sectionUpg.querySelector('.upg-article-section').style.opacity = 0;
        sectionUpg.querySelectorAll('.upg-article').forEach((article, index) => {
            article.style.opacity = 0;
            article.querySelector('h5').style.opacity = 0;
            article.querySelector('.grant-year').style.opacity = 0;
        });
        upgLists.forEach((list, index) => {
            list.style.opacity = 0;
        });
    }, intTimerActive);
    intTimerActive += 1500;
// End of fifth animation    - Revealing upgrades section
    setTimeout(function(){
        sectionUpg.querySelector('h2').style.opacity = 0.95;
        typewritter(sectionUpg.querySelector('h2'));
    }   , intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        sectionUpg.querySelector('.warning').style.opacity = 0.95;
    }, intTimerActive);
    intTimerActive += 2000;
    setTimeout(function(){
        sectionUpg.style.opacity = 0.95;
        sectionUpg.querySelector('.upg-article-section').style.opacity = 0.95;
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        sectionUpg.querySelectorAll('.upg-article').forEach((article, index) => {
            article.style.opacity = 0.95;
            article.querySelectorAll('ul li').forEach((li, index) => {
                li.style.opacity = 0;});
        });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        sectionUpg.querySelectorAll('.upg-article').forEach((article, index) => {
            article.querySelector('h5').style.opacity = 0.95;
            typewritter(article.querySelector('h5'));
            article.querySelector('.grant-year').style.opacity = 0.95;
            typewritter(article.querySelector('.grant-year'));
        });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        upgLists.forEach((list, index) => {
            list.style.opacity = 0.95;
            typewritter(list);
        });
    }, intTimerActive);
    // End of sixth animation   - Revealing upgrades details
    intTimerActive += 1500;
    setTimeout(function(){
        sectionXP.style.opacity = 0.95;
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        sectionXP.querySelector('h2').style.opacity = 0.95;
        typewritter(sectionXP.querySelector('h2'));
        articlesXp.forEach((article, index) => {
            article.style.opacity = 0.95;
        });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        articlesXp.forEach((article, index) => {
            article.querySelector('h4').style.opacity = 0.95;
            typewritter(article.querySelector('h4'));
        });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        articlesXp.forEach((article, index) => {
            article.querySelector('h5').style.opacity = 0.95;
            typewritter(article.querySelector('h5'));
        });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        articlesXp.forEach((article, index) => {
            if(article.querySelectorAll('p')){
                article.querySelectorAll('p').forEach((p, index) => {
                    p.style.opacity = 0.95;
                    typewritter(p);
                });
            }
        });
        document.querySelectorAll('.xp-list').forEach((list, index) => {
            list.style.opacity = 0.95;
            list.querySelectorAll('li').forEach((li, index) => {
                li.style.opacity = 0.95;
                typewritter(li);
            });
        });
    }, intTimerActive);
// End of seventh animation   - Revealing xp details
    intTimerActive += 1500;
    setTimeout(function(){
        sectionFooter.style.opacity = 0.95;
        footerPowering.style.opacity = 0.95;
        footerPowering.querySelectorAll('span').forEach((span, index) => {
        span.style.opacity = 0.95;
    });
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        footerHorodate.style.opacity = 0.95;
        typewritter2(horodate(), footerHorodate);
    }, intTimerActive);
    intTimerActive += 1500;
    setTimeout(function(){
        footerExecTime.style.opacity = 0.95;
        const endTime = new Date().getTime();
        const execTime = endTime - startTime + intTimerActive;
        const formattedTime = execTime.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        console.log("formattedTime : " + formattedTime);
        const execString = "Data loading time : " + formattedTime + " ms";
        typewritter2(execString, footerExecTime);
    }, intTimerActive);
    intTimerActive += 3250;
    setTimeout(function(){
        footerSkynet.style.opacity = 0.95;
        typewritter(footerSkynet);
        const cylonEye = document.querySelector('.cylon_eye');
        cylonEye.style.backgroundColor = "lightgreen";
        typewritter2("Loading informations complete.", document.querySelector('.polling_message'));
    }, intTimerActive);
// End of eighth animation   - Revealing credits details
}
// ==================== Functions calling animations
setTimeout(revealHeader(), 1000);