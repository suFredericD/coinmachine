// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3dashboard.js
// Role         : animation JS script for web3dashboard.php
// Author       : CoinMachine
// Creation     : 2023-06-13
// Last update  : 2021-06-30
// =====================================================================================================
// ================ DOM ELEMENTS ================ //
const refSectionTitles = document.querySelectorAll('.bc-ref-titles');

// ================ FUNCTIONS ================ //

// ================ EVENT LISTENERS ================ //
refSectionTitles.forEach(item => {       // click on a reference rubric title
    item.addEventListener('click', event => {
        refSection = "#ref" + item.id;
        $(refSection).slideToggle("slow");
    })
});