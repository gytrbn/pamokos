const cardArray = [
    {
        name: 'truck',
        img: 'img/truck.png'
    },
    {
        name: 'box',
        img: 'img/box.png'
    },
    {
        name: 'camera',
        img: 'img/camera.png'
    },
    {
        name: 'headphones',
        img: 'img/headphones.png'
    },
    {
        name: 'printer',
        img: 'img/printer.png'
    },
    {
        name: 'watch',
        img: 'img/watch.png'
    },
    {
        name: 'truck',
        img: 'img/truck.png'
    },
    {
        name: 'box',
        img: 'img/box.png'
    },
    {
        name: 'camera',
        img: 'img/camera.png'
    },
    {
        name: 'headphones',
        img: 'img/headphones.png'
    },
    {
        name: 'printer',
        img: 'img/printer.png'
    },
    {
        name: 'watch',
        img: 'img/watch.png'
    },
]

cardArray.sort(() => 0.5 - Math.random())

const gridDisplay = document.querySelector('#grid')
let cardsChosen = []
let cardsChosenId = []
const cardsWon = []
const resultDisplay = document.getElementById('result')

function createBoard(){
    for (i = 0; i < cardArray.length; i++){
        const card = document.createElement('img')
        card.setAttribute('src', 'img/blank.png')
        card.setAttribute('data-id', i)
        card.addEventListener('click', flipCard)
        gridDisplay.appendChild(card)
    }
}

createBoard()

function checkMatch(){
    const cards = document.querySelectorAll('#grid img')

    if(cardsChosenId[0] == cardsChosenId[1]){
        alert('Paspaudei Ant Tos Pacios Spalvos!')
    }
    if (cardsChosen[0] == cardsChosen[1]){
        alert('Radai Vienodus!')
        cards[cardsChosenId[0]].setAttribute('src', 'img/completed.png')
        cards[cardsChosenId[1]].setAttribute('src', 'img/completed.png')
        cards[cardsChosenId[0]].removeEventListener('click', flipCard)
        cards[cardsChosenId[1]].removeEventListener('click', flipCard)
        cardsWon.push(cardsChosen)
    }else{
        cards[cardsChosenId[0]].setAttribute('src', 'img/blank.png')
        cards[cardsChosenId[1]].setAttribute('src', 'img/blank.png')
    }
    cardsChosen = []
    cardsChosenId = []

    if (cardsWon.length == cardArray.length/2){
        alert('Sveikinu!')
        for (i = 0; i < cardArray.length; i++){
            let cards = document.querySelector('#grid img')
            gridDisplay.removeChild(cards)
        }
        createBoard()
    }
}

function flipCard(){
    const cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenId.push(cardId)
    this.setAttribute('src', cardArray[cardId].img)
    if (cardsChosen.length === 2){
        setTimeout(checkMatch, 500)
    }
}
