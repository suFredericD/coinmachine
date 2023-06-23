// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : index.js
// Role         : animation JS script for index.php
// Author       : CoinMachine
// Creation     : 2023-06-14
// Last update  : 2021-06-23
// =====================================================================================================
// ================ CONSTANTS ================= //
const letterTimer = 50;                         // Time between each letter in ms
let tabTimers = [];                             // Array of timers for each animation
let newsCounter = 0;                            // Counter for news marquee
let newsDisplay = 1;                            // Displayed news boolean

// ================ DOM ELEMENTS ================ //
const siteTitle = document.querySelector('#index-title');
const siteIntro = document.querySelector('#index-intro');
const siteIntroParagraphs = siteIntro.querySelectorAll('p');

const newsContainer = document.querySelectorAll('.index-news-marquee');
const tabNews = document.querySelectorAll('.index-news-marquee li');
const tabNewsCopy = [];
tabNews.forEach((news, i) => {
    tabNewsCopy.push(news.cloneNode(true));
});

const profileTitle = document.querySelector('#index-intro-cm div h2');
const profilePicture = document.querySelector('#index-intro-cm div img');
const profileIntroParagraphs = document.querySelectorAll('.intro-cm-shorttext');
const profileParagraph = document.querySelector('.intro-cm-fulltext');
const profileContact = document.querySelector('.intro-cm-contact');

const disclaimer = document.querySelector('#disclaimer-section');
const footer = document.querySelector('footer');
// ================ FUNCTIONS ================ //
// Functions producing typewriting animations
// Parameter : DOM element
function typewritter(element){
    const letters = element.innerHTML.split('');
    element.innerHTML = '';
    element.style.opacity = 1;
    letters.forEach((letter, i) => {
        setTimeout(function(){
            element.innerHTML += letter;
        }, letterTimer * i);
    });
}
// Function to count time elapsed through typewritting function
function countTime(element){
    const letters = element.innerHTML.split('');
    const startTimer = (letters.length * letterTimer) * 2 / 3;
    return startTimer;
}
// Function to store animations timers in an array
function timer(){
    tabTimers.push(750);
    tabTimers.push(countTime(siteTitle) + countTime(siteIntroParagraphs[0]));
    tabTimers.push(tabTimers[1] + countTime(siteIntroParagraphs[1]));
    tabTimers.push(tabTimers[2] + countTime(siteIntroParagraphs[2]));
    tabTimers.push(tabTimers[3] + 5000);
    tabTimers.push(tabTimers[4] + 1000);
    tabTimers.push(tabTimers[5] + 6000);
    tabTimers.push(tabTimers[6] + 4000);
}
// Function to toggle news marquee
function toggleLine() {
    newsCounter = newsCounter < tabNewsCopy.length - 1 ? newsCounter + 1 : 0;
    tabNews[0].querySelector('a').innerHTML = tabNewsCopy[newsCounter].querySelector('a').innerHTML;
    tabNews[0].querySelector('a').href = tabNewsCopy[newsCounter].querySelector('a').href;
    tabNews[0].querySelector('a').title = tabNewsCopy[newsCounter].querySelector('a').title;
}
setInterval(function(){
    toggleLine();
}, 5000);
// ================ EVENT LISTENERS ================ //
$("#see-map").click(function () {
    $("#arborescence").slideToggle("slow");
});
// ================ ANIMATIONS TIMEOUTS ================ //
for(let i = 1; i < tabNews.length; i++){
    tabNews[i].style.display = "none";
}
timer();
setTimeout(function(){
    footer.style.opacity = 0;
    typewritter(siteTitle);
}, tabTimers[0]);
setTimeout(function(){
    typewritter(siteIntroParagraphs[0]);
}, tabTimers[1]);
setTimeout(function(){
    typewritter(siteIntroParagraphs[1]);
}, tabTimers[2]);
setTimeout(function(){
    typewritter(siteIntroParagraphs[2]);
}, tabTimers[3]);
setTimeout(function(){
    disclaimer.style.display = "none";
    profileTitle.style.opacity = 1;
}, tabTimers[4]);
setTimeout(function(){
    profileIntroParagraphs.forEach((paragraph, i) => {
        typewritter(profileIntroParagraphs[i]);
    });
}, tabTimers[5]);
setTimeout(function(){
    profilePicture.style.opacity = 1;
    profileParagraph.style.opacity = 1;
    typewritter(profileContact);
}, tabTimers[6]);
setTimeout(function(){
    $("#see-map").css("opacity", "0.9");
    footer.style.opacity = 1;
}, tabTimers[7]);