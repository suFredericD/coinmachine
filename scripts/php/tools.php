<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : tools.php
// Role         : utilitary functions script
// Author       : CoinMachine
// Creation     : 2023-06-18
// Last update  : 2021-06-18
// =====================================================================================================

// Function to get the zodiac sign from a date
function getZodiacSign($dateBirth) {
    $tabZodiacSigns = ['capricorne', 'verseau', 'poissons', 'belier', 'taureau', 'gemeaux',
                       'cancer', 'lion', 'vierge', 'balance', 'scorpion', 'sagittaire'];
    $tabZodiacSignsDates = ['01-01', '01-20', '02-19', '03-21', '04-20', '05-21',
                            '06-21', '07-23', '08-23', '09-23', '10-23', '11-22'];
    $zodiacSign = '';
    $dateBirth = new DateTime($dateBirth);
    $dateBirth = $dateBirth->format('m-d');
    for($i = 0; $i < count($tabZodiacSignsDates); $i++) {
        if($dateBirth < $tabZodiacSignsDates[$i]) {
            $zodiacSign = $tabZodiacSigns[$i - 1];
            break;
        }
    }
    return $zodiacSign;
}