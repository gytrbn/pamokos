const computerChoiceDisplay = document.getElementById('computerChoice');
const userChoiceDisplay = document.getElementById('userChoice');
const uresult = document.getElementById('result');
const possibleChoices = document.querySelectorAll('button');
let userChoice

possibleChoices.forEach(possibleChoice => possibleChoice.addEventListener('click', (event) =>{
    userChoice = event.target.id;
    userChoiceDisplay.innerHTML = userChoice;
    
}));