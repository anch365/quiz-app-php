let fondSombre = document.querySelector("#fond-sombre");
let fenetre = document.querySelector("#fenetre");
let menuBurger = document.querySelector("#menuburger");

menuBurger.addEventListener("click", handleClickMenuBurger);

function handleClickMenuBurger() {
  fenetre.classList.remove("hidden");
  fenetre.classList.add("flex");
  fondSombre.classList.remove("hidden");
}

fondSombre.addEventListener("click", handleClickFond);

function handleClickFond() {
  fenetre.classList.add("hidden");
  fenetre.classList.remove("flex");
  fondSombre.classList.add("hidden");
}

let departSeconde = 5
let temps = departSeconde * 60

const timerElement = document.getElementById("timer")

setInterval(() => {
  let secondes = parseInt(temps % 60, 10)

  minutes = minutes < 10 ? "0" + minutes : minutes
  secondes = secondes < 10 ? "0" + secondes : secondes

  timerElement.innerText = `${minutes}:${secondes}`
  temps = temps <= 0 ? 0 : temps - 1
}, 1000)