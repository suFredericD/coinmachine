// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3dashboard.js
// Role         : animation JS script for web3dashboard.php
// Author       : CoinMachine
// Creation     : 2023-06-13
// Last update  : 2021-06-13
// =====================================================================================================
// ================ DOM ELEMENTS ================ //
const refDetails = document.querySelectorAll('.bc-references');

// ================ FUNCTIONS ================ //
function toggleReferences(intRubricId) {                            // toggle references rubrics details
    const strRubricId = "#ref" + intRubricId;
    const domRubric = document.querySelector(strRubricId);
    if(domRubric.style.display != "none"){
        domRubric.style.display = "none";

    } else {
        domRubric.style.display = "flex"
    }
}

// ================ EVENT LISTENERS ================ //
document.querySelectorAll('.bc-ref-titles').forEach(item => {       // click on a reference rubric title
    item.addEventListener('click', event => {
        toggleReferences(item.id);
    })
});