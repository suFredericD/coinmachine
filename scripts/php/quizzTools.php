<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : tools.php
// Role         : utilitary functions script
// Author       : CoinMachine
// Creation     : 2023-09-19
// Last update  : 2021-09-19
// =====================================================================================================

// Function to check number of questions by level in the database
function checkNumberOfQuestionsByLevel($intLevel) {
    $strRequest = "SELECT COUNT(*) AS 'numberOfQuestions' FROM `question` WHERE `level` = $intLevel";
    $resLink = requestExec($strRequest);
    $resLink->data_seek(0);
    $intReturn = array();
    $row = $resLink->fetch_row();
    $intReturn = $row[0];
    return $intReturn;
}
// Function to get all questions by level in the database
function getAllQuestionsByLevel($intLevel) {
    $strRequest = "SELECT * FROM `question` ";
    $strRequest .= "LEFT JOIN `questiontype` ON `question`.`category`=`questiontype`.`id` ";
    $strRequest .= "LEFT JOIN `answer` ON `question`.`id`=`answer`.`question` ";
    $strRequest .= "WHERE `question`.`level`=" . $intLevel . " ;";
    $resLink = requestExec($strRequest);
    $resLink->data_seek(0);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()) {
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Text'] = $row['1'];
        $arrReturn[$intIndex]['CategoryId'] = $row['2'];
        $arrReturn[$intIndex]['Level'] = $row['3'];
        $arrReturn[$intIndex]['Answer1'] = $row['4'];
        $arrReturn[$intIndex]['Answer2'] = $row['5'];
        $arrReturn[$intIndex]['Answer3'] = $row['6'];
        $arrReturn[$intIndex]['Answer4'] = $row['7'];
        $arrReturn[$intIndex]['Category'] = $row['9'];
        $arrReturn[$intIndex]['GoodAnswer'] = $row['12'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to get all questions ID by level in the database
function getAllQuestionsIDByLevel($intLevel) {
    $strRequest = "SELECT `id` FROM `question` WHERE `question`.`level`=" . $intLevel . " ;";
    $resLink = requestExec($strRequest);
    $resLink->data_seek(0);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()) {
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to create a 10 questions quizz by level from the database
function createQuizz($intLevel) {
    $arrQuestions = getAllQuestionsIDByLevel($intLevel);
    $intNumberOfQuestions = count($arrQuestions);
    $arrQuizz = array();
    $intIndex = 1;
    while ($intIndex < 11) {
        $intRandom = rand(0, $intNumberOfQuestions-1);
        if (!in_array($arrQuestions[$intRandom]['Id'], $arrQuizz)) {
            $arrQuizz[$intIndex] = $arrQuestions[$intRandom]['Id'];
            $intIndex++;
        }
    }
    return $arrQuizz;
}
// Function to get one question by ID in the database
function getOneQuestionById($intQuestionId) {
    $strRequest = "SELECT * FROM `question` ";
    $strRequest .= "LEFT JOIN `questiontype` ON `question`.`category`=`questiontype`.`id` ";
    $strRequest .= "LEFT JOIN `answer` ON `question`.`id`=`answer`.`question` ";
    $strRequest .= "WHERE `question`.`id`=" . $intQuestionId . " ;";
    $resLink = requestExec($strRequest);
    $resLink->data_seek(0);
    $arrReturn = array();
    while ($row = $resLink->fetch_row()) {
        $arrReturn['Id'] = $row['0'];
        $arrReturn['Text'] = $row['1'];
        $arrReturn['CategoryId'] = $row['2'];
        $arrReturn['Level'] = $row['3'];
        $arrReturn['Answer1'] = $row['4'];
        $arrReturn['Answer2'] = $row['5'];
        $arrReturn['Answer3'] = $row['6'];
        $arrReturn['Answer4'] = $row['7'];
        $arrReturn['Category'] = $row['9'];
        $arrReturn['CategoryText'] = $row['10'];
        $arrReturn['CategoryIcon'] = $row['11'];
        $arrReturn['GoodAnswer'] = $row['14'];

    }
    return $arrReturn;
}