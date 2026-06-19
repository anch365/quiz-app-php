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
const form = document.getElementById("quizForm");

if (form) {
  const timerSpan = document.getElementById("timer");
  const boutonValider = document.querySelector(
    '#quizForm button[type="submit"]',
  );
  const reponseInputs = document.querySelectorAll('input[name="reponse"]');
  const feedbackZone = document.getElementById("feedbackZone");
  const bonneReponseId = form.dataset.bonneReponse;
  const bonTexte = form.dataset.bonTexte;

  // ========== TIMER ==========
  let tempsRestant = 15;
  let timerInterval = null;
  let aValide = false;

  function demarrerTimer() {
    timerInterval = setInterval(function () {
      tempsRestant--;
      timerSpan.textContent = tempsRestant;

      if (tempsRestant <= 5) {
        timerSpan.style.color = "#ef4444";
      }

      if (tempsRestant <= 0) {
        clearInterval(timerInterval);
        form.action = "../process/next-question.php";
        form.submit(); //Timer écoulé -> soumission directe
      }
    }, 1000);
  }

  // ========== ACTIVER LE BOUTON AU CLIC ==========
  reponseInputs.forEach(function (input) {
    input.addEventListener("change", function () {
      if (aValide) return;
      aValide = true;

      // Activer le bouton
      boutonValider.disabled = false;
      boutonValider.classList.remove("opacity-50", "cursor-not-allowed");
    });
  });

  // ========== INTERCEPTER "VALIDER" → AFFICHER FEEDBACK ==========
  form.addEventListener("submit", function (event) {
    if (aValide) return; // déjà traité, on laisse passer
    event.preventDefault();
    aValide = true;
    clearInterval(timerInterval);

    // Désactiver tout
    reponseInputs.forEach(function (r) {
      r.disabled = true;
    });
    boutonValider.disabled = true;

    // Trouver la réponse choisie
    let reponseChoisie = null;
    reponseInputs.forEach(function (r) {
      if (r.checked) reponseChoisie = r.value;
    });

    // Afficher le feedback
    feedbackZone.classList.remove("hidden");

    if (reponseChoisie === bonneReponseId) {
      feedbackZone.className =
        "block text-center mt-4 p-4 rounded-xl text-lg font-bold";
      feedbackZone.style.backgroundColor = "#dcfce7";
      feedbackZone.style.color = "#166534";
      feedbackZone.textContent = "✅ Correct !";
    } else {
      feedbackZone.className =
        "block text-center mt-4 p-4 rounded-xl text-lg font-bold";
      feedbackZone.style.backgroundColor = "#fee2e2";
      feedbackZone.style.color = "#991b1b";
      feedbackZone.textContent = "❌ Faux ! La bonne réponse : " + bonTexte;
    }

    // Attendre 2s puis soumettre
    setTimeout(function () {
      form.submit();
    }, 2000);
  });

  // ========== LANCER ==========
  demarrerTimer();
} //FIN du if (form)
