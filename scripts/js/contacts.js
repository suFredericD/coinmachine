// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : contacts.js
// Role         : animation JS script for contacts.php
// Author       : CoinMachine
// Creation     : 2023-06-13
// Last update  : 2021-06-17
// =====================================================================================================
// ================ DOM ELEMENTS ================ //
// $("#linkedin-details").show();
// ================ FUNCTIONS ================ //
$("#linkedin-title").click(function () {
    $("#linkedin-details").slideToggle("slow");
});
$("#github-title").click(function () {
    $("#github-details").toggle("slow");
});
$("#discord-title").click(function () {
    $("#discord-details").toggle("slow");
});
$("#mail-title").click(function () {
    $("#mail-details").toggle("slow");
});
$("#odysee-title").click(function () {
    $("#odysee-details").toggle("slow");
});


// ================ EVENT LISTENERS ================ //
