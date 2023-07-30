<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : tools.php
// Role         : utilitary functions script
// Author       : CoinMachine
// Creation     : 2023-06-18
// Last update  : 2021-07-30
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
        if($dateBirth <= $tabZodiacSignsDates[$i]) {
            $zodiacSign = $tabZodiacSigns[$i - 1];
            break;
        } else {
            $zodiacSign = $tabZodiacSigns[count($tabZodiacSigns) - 1];
        }
    }
    return $zodiacSign;
}
// Function to get the number of hours between to dates
function getHoursNumber($dateEnd, $dateStart){
    $intDays = $dateStart->diff($dateEnd)->d;
    $intHours = $dateStart->diff($dateEnd)->h;
    $intMinutes = $dateStart->diff($dateEnd)->i;
    $decTotalHours = ($intDays * 24) + $intHours + ($intMinutes / 60);
    return $decTotalHours;
}
// Function to update top 10 tokens prices
function updateTopTenPrices($tabTopTenTokensInfos, $dateNow){
    $tabCurrentPrices = getTop50PricesFromCMC();
    $strNow = $dateNow->format('Y-m-d H:i:s');
    $strRequest = "INSERT INTO `pricesupdate` (`timestamp`) VALUES ('$strNow');";
    $resLink = requestExec($strRequest);
    $intLastUpdateId = getLastPricesUpdate()['Id'];
    foreach($tabTopTenTokensInfos as $tokenInfo){
        foreach($tabCurrentPrices->data as $currentPrice){
            if($tokenInfo['Ticker'] == $currentPrice->symbol){
                $strRequest = "INSERT INTO `usdprice` (`updateid`, `token`, `price`) ";
                $strRequest .= "VALUES ('$intLastUpdateId', '" . $tokenInfo['Id'] . "', '". $currentPrice->quote->USD->price . "');";
                $resLink = requestExec($strRequest);
                break;
            }
        }
    }
}
// Function to get top 10 tokens prices from database
function getTopTenPricesFromDb($intLastPricesUpdateId){
    $strRequest = "SELECT * FROM `usdprice` WHERE `updateid` = '$intLastPricesUpdateId';";
    $resLink = requestExec($strRequest);
    $resLink->data_seek(0);
    $arrReturn = array();
    $intIndex = 0;
    while($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['UpdateId'] = $row['1'];
        $arrReturn[$intIndex]['TokenId'] = $row['2'];
        $arrReturn[$intIndex]['Price'] = $row['3'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to get top 50 tokens prices from CoinMarketCap API
function getTop50PricesFromCMC(){
    $host = "https://pro-api.coinmarketcap.com";
    $path = "/v1/cryptocurrency/listings/latest";
    $url = $host . $path;
    $parameters = [
    'start' => '1',
    'limit' => '50',
    'convert' => 'USD'
    ];
    $headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: 47295f37-84c6-49d2-8394-59fe52e7377b'
    ];
    $qs = http_build_query($parameters);    // query string encode the parameters
    $request = "{$url}?{$qs}";              // create the request URL
    $curl = curl_init();                    // Get cURL resource
    $curlOptions = array(
        CURLOPT_SSL_VERIFYHOST => false,    // Disable SSL verification of host name in the server certificate
        CURLOPT_SSL_VERIFYPEER => false,    // Disable SSL verification of the SSL certificate on the server
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers 
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    );
    // Set cURL options
    curl_setopt_array($curl, $curlOptions);
    $response = curl_exec($curl);           // Send the request, save the response
    if(curl_errno($curl)){
        echo curl_error($curl);
    }
    curl_close($curl);                      // Close request
    return json_decode($response);
}