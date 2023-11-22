const randomNumber = (max, add = 0)=> (Math.trunc(Math.random()* max ) ) + add +1

const botaoDado = document.querySelector('.roll')

botaoDado.addEventListener('click', function(){
    
const dado = Number(document.querySelector('#dadooz').value)

function scrollToBottom() {
    var scrollableSquare = document.querySelector(".quadrado");
    scrollableSquare.scrollTop = scrollableSquare.scrollHeight;
  }

const addDice = Number(document.querySelector('#mynumber').value)


    quadrado = document.querySelector('.quadrado')
    let resultado = randomNumber(dado, addDice)
quadrado.insertAdjacentHTML('beforeend', `<br><p id="ola"><span style="color:rgb(179, 0, 0)">sistema</span>: você rolou um d${dado}, com o modificador de ${addDice} e tirou um ${resultado}</p>`)
scrollToBottom()

})

  