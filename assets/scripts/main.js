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

// ========== RÉCUPÉRER LES ÉLÉMENTS ==========
const form = document.getElementById('quizForm');
const timerSpan = document.getElementById('timer');
const boutonValider = document.querySelector('#quizForm button[type="submit"]');
const reponseInputs = document.querySelectorAll('input[name="reponse"]');

// ========== TIMER ==========
let tempsRestant = 15;
let timerInterval = null;
let aRepondu = false;

function demarrerTimer() {
    timerInterval = setInterval(function () {
        tempsRestant--;
        timerSpan.textContent = tempsRestant;

        if (tempsRestant <= 5) {
            timerSpan.style.color = '#ef4444';
        }

        if (tempsRestant <= 0) {
            clearInterval(timerInterval);
            form.action = "../process/next-question.php";
            form.submit();
        }
    }, 1000);
}

// ========== ACTIVER LE BOUTON AU CLIC ==========
reponseInputs.forEach(function (input) {
    input.addEventListener('change', function () {
        if (aRepondu) return;
        aRepondu = true;

        // Activer le bouton
        boutonValider.disabled = false;
        boutonValider.classList.remove('opacity-50', 'cursor-not-allowed');
    });
});

// ========== LANCER ==========
demarrerTimer();