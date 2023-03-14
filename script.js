const computerChoiceDisplay = document.getElementById('computerChoice');
const userChoiceDisplay = document.getElementById('userChoice');
const result = document.getElementById('result');
const possibleChoices = document.querySelectorAll('button');
let userChoice;
let computerChoice;

possibleChoices.forEach(possibleChoice => possibleChoice.addEventListener('click', (event) =>{
    userChoice = event.target.id;
    if (userChoice == "scissors"){
        userChoice = "Žirklės";
    };
    if (userChoice == "paper"){
        userChoice = "Lapas";
    };
    if (userChoice == "well"){
        userChoice = "Šulinys";
    };
    userChoiceDisplay.innerHTML = userChoice;

    generateComputerChoice();
    winnerChoice();
    
}));

function generateComputerChoice(){
    const randomNumber = Math.floor(Math.random() * 3) + 1;
    console.log(randomNumber);

    if(randomNumber == 1){
        computerChoice = "Šulinys";
    }
    if(randomNumber == 2){
        computerChoice = "Lapas";
    }
    if(randomNumber == 3){
        computerChoice = "Žirklės";
    }

    computerChoiceDisplay.innerHTML = computerChoice;
}


function winnerChoice(){
    if (userChoice === computerChoice){
        result.innerHTML = "Lygiosios";
    }

    if (userChoice === "Šulinys" && computerChoice === "Žirklės"){
        result.innerHTML = "Jūs Laimėjote!";
    }
    if (userChoice === "Šulinys" && computerChoice === "Lapas"){
        result.innerHTML = "Jūs Pralaimėjote!";
    }
    if (userChoice === "Žirklės" && computerChoice === "Lapas"){
        result.innerHTML = "Jūs Laimėjote!";
    }
    if (userChoice === "Žirklės" && computerChoice === "Šulinys"){
        result.innerHTML = "Jūs Pralaimėjote!";
    }
    if (userChoice === "Lapas" && computerChoice === "Šulinys"){
        result.innerHTML = "Jūs Laimėjote!";
    }
    if (userChoice === "Lapas" && computerChoice === "Žirklės"){
        result.innerHTML = "Jūs Pralaimėjote!";
    }
}