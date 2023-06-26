// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : realtOverview.js
// Role         : animation JS script for realtOverview.php
// Author       : CoinMachine
// Creation     : 2023-06-26
// Last update  : 2021-06-26
// =====================================================================================================
// ================ DOM ELEMENTS ================ //
const realtIntroByRealTcontent = document.querySelector("#realt-intro-info-container");

// ================ FUNCTIONS ================ //
function toggleInfosBlock(){
    $("#realt-intro-info-container").slideToggle("slow");
}
function toggleAny(id){
    $(".realt-intro-info-details").eq(id).slideToggle("slow");
}
function toggleTutoBlock(){
    $("#realt-tutorial-content").slideToggle("slow");
}
// ================ EVENT LISTENERS ================ //
document.addEventListener("DOMContentLoaded", () => {

});