// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : web3quizzgame.js
// Role         : animation JS script for web3quizzgame.php
// Author       : CoinMachine
// Creation     : 2023-09-19
// Last update  : 2021-09-19
// =====================================================================================================
// ================ DOM ELEMENTS ================
const quizzForm = document.getElementById('quizz-form');
const fieldsetQuizz = document.getElementById('quizz-fieldset');
const btnCheck = document.getElementById('check');
const radAnswers = document.querySelectorAll('input[type="radio"]');
const radAnswer1 = document.getElementById('answer1');
const radAnswer2 = document.getElementById('answer2');
const radAnswer3 = document.getElementById('answer3');
const radAnswer4 = document.getElementById('answer4');
const tabAnswers = [radAnswer1, radAnswer2, radAnswer3, radAnswer4];

// ================ VARIABLES ================ //
const intPlayerLevel = parseInt(document.getElementById('player-level').value);
const intQuestionNumber = parseInt(document.getElementById('question-number').value) - 1;
let intWrightAnswer = document.getElementById('wright-answer').value;
let bolResponded = false;
let intUserResponse = 0;
let intScore = parseInt(document.getElementById('score').value);

let strInputScore = 'score' + intQuestionNumber;
let inputScore = document.createElement('input');
inputScore.setAttribute('type', 'hidden');
inputScore.setAttribute('name', strInputScore);

let strInputCategory = document.getElementById('category').value;
let strInputCategoryName = 'cat' + intQuestionNumber;
let inputCategory = document.createElement('input');
inputCategory.setAttribute('type', 'hidden');
inputCategory.setAttribute('name', strInputCategoryName);
inputCategory.setAttribute('value', strInputCategory);
fieldsetQuizz.appendChild(inputCategory);

// ================ FUNCTIONS ================ //

// ================ EVENT LISTENERS ================ //
quizzForm.addEventListener("submit", function (e) {
    if(bolResponded == false){
        e.preventDefault(); // Empêche le comportement par défaut du formulaire
        tabAnswers.forEach(element => {
            if(element.checked){
                bolResponded = true;
                btnCheck.value = 'Question suivante';
                intUserResponse = element.value;
                if(intUserResponse == intWrightAnswer){     // bonne réponse
                    element.parentElement.querySelector('label').style.backgroundColor = '#06c883';
                    element.parentElement.querySelector('label').style.color = '#000';
                    element.parentElement.querySelector('label').style.fontWeight = 'bold';
                    element.parentElement.querySelector('label').innerHTML += ' <span class="fa-regular fa-circle-check"></span>';
                    document.getElementById('score').value = parseInt(document.getElementById('score').value) + intPlayerLevel;
                    document.getElementById('score-display').innerHTML = intScore + intPlayerLevel + ' / ' + intPlayerLevel + '0';
                    inputScore.setAttribute('value', intPlayerLevel);
                   
                } else {                                    // mauvaise réponse
                    element.parentElement.querySelector('label').style.backgroundColor = 'var(--bad)';
                    element.parentElement.querySelector('label').style.color = '#000';
                    element.parentElement.querySelector('label').style.fontWeight = 'bold';
                    element.parentElement.querySelector('label').innerHTML += ' <span class="fa-solid fa-circle-xmark"></span>';
                    tabAnswers[intWrightAnswer-1].parentElement.querySelector('label').style.backgroundColor = '#06c883';
                    tabAnswers[intWrightAnswer-1].parentElement.querySelector('label').style.color = '#000';
                    tabAnswers[intWrightAnswer-1].parentElement.querySelector('label').style.fontWeight = 'bold';
                    tabAnswers[intWrightAnswer-1].parentElement.querySelector('label').innerHTML += ' <span class="fa-regular fa-circle-check"></span>';
                    inputScore.setAttribute('value', 0);
                }

                fieldsetQuizz.appendChild(inputScore);
                inputScore.style.animation = 'scoreBump 2s ease 0s 1 normal forwards';
            }
        });
    }
});
// Change la couleur du label associé à l'option choisie
radAnswers.forEach(element => {
    element.addEventListener('click', () => {
        // Réinitialise la couleur de tous les labels
        document.querySelectorAll('label').forEach(label => {
            label.style.color = '#AAA'; // Réinitialise la couleur
            label.style.fontWeight = 'normal'; // Réinitialise le style du texte
        });
        // Change la couleur du label associé à l'option choisie
        const label = element.parentElement.querySelector('label');
        label.style.color = 'var(--rookie)'; // Change la couleur ici si nécessaire
        label.style.fontWeight = 'bold'; // Change le style du texte si nécessaire
    });
});