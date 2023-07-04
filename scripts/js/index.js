// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : index.js
// Role         : animation JS script for index.php
// Author       : CoinMachine
// Creation     : 2023-06-14
// Last update  : 2021-06-30
// =====================================================================================================
// ================ CONSTANTS ================= //
let newsCounter = 0;                            // Counter for news marquee
let newsDisplay = 1;                            // Displayed news boolean

// ================ DOM ELEMENTS ================ //
const newsContainer = document.querySelectorAll('.index-news-marquee');
const tabNews = document.querySelectorAll('.index-news-marquee li');
const tabNewsCopy = [];
tabNews.forEach((news, i) => {
    tabNewsCopy.push(news.cloneNode(true));
});

const disclaimer = document.querySelector('#disclaimer-section');
const footer = document.querySelector('footer');
// ================ FUNCTIONS ================ //
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
setTimeout(function(){
    disclaimer.style.display = "none";
}, 7500);