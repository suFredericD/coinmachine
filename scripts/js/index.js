// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : index.js
// Role         : animation JS script for index.php
// Author       : CoinMachine
// Creation     : 2023-06-14
// Last update  : 2021-06-14
// =====================================================================================================
// ================ CONSTANTS ================= //
const letterTimer = 50;                         // Time between each letter in ms
let intTimerActive = 0;                       // Time between each animation in ms

// ================ DOM ELEMENTS ================ //
const siteIntro = document.querySelector('#index-intro');
const siteIntroParagraphs = siteIntro.querySelectorAll('p');

const arborescence = document.querySelector('#arborescence');

// ================ FUNCTIONS ================ //
// Functions producing typewriting animations
// Parameter : DOM element
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
// ================ EVENT LISTENERS ================ //


// ================ ANIMATIONS TIMEOUTS ================ //
setTimeout(function(){
    typewritter(siteIntroParagraphs[0]);
}, 1000);