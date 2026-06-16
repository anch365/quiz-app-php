<?php
// ETAPE 1 : FAIRE LA SECURITE

// Première étape de sécurité : verifier la méthode
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/quiz.php?error=bad-method");
    exit();
}

// Deuxieme étape de sécurité : verifier que la colonne voulue existe bien
if (!isset($_POST["question_id"]) || !isset($_POST["reponse"])) {
    header("Location: ../public/quiz.php?error=missing-value");
    exit();
}

// Troisième étape de sécurité : verifier que la colonne voulue n'est pas vide
if ((empty($_POST["question_id"]) || empty($_POST["reponse"]))) {
    header("Location: ../public/quiz.php?error=value-empty");
    exit();
}

// Quatrième étape de sécurité : on empêche l'utilisation de balise (par exemple script)
$question_id = htmlspecialchars(strip_tags(trim($_POST["question_id"])));
$reponseId = htmlspecialchars(strip_tags(trim($_POST["reponse"])));

// ETAPE 2 : METTRE LES DONNEE DU PATIENT EN BDD (PDO traduit php pour pouvoir communiquer avec la BDD)
require_once "../utils/db_connect.php";

$request = $db->prepare("SELECT * FROM reponse WHERE id = :id");

$request->execute([
    ':id' => $reponseId
]);

$reponse = $request->fetch(PDO::FETCH_ASSOC);

// var_dump($reponse);
// die();

// Vérifier que la réponse existe

if (!$reponse) {
    header("Location: ../public/quiz.php?id=" . $question_id . "&error=answer-not-found");
    exit();
};

if ($reponse['est_ce_vrai'] == 1) {

    echo "Bonne réponse !";

} else {

    echo "Mauvaise réponse !";
}

// Calcul pour passer à la question suivaante
$nextQuestion = $question_id + 1;

// Pour afficher le score
$request = $db->prepare("SELECT *
    FROM questionnement
    WHERE id = :id
");

$request->execute([
    ':id' => $nextQuestion
]);

$question = $request->fetch(PDO::FETCH_ASSOC);

session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if ($reponse['est_ce_vrai'] == 1) {
    $_SESSION['score']++;
}

$nextQuestion = $question_id + 1;

$request = $db->prepare("
    SELECT *
    FROM questionnement
    WHERE id = :id
");

$request->execute([
    ':id' => $nextQuestion
]);

$question = $request->fetch(PDO::FETCH_ASSOC);

if ($question) {

    header("Location: ../public/quiz.php?id=" . $nextQuestion);
    exit();

} else {

    header("Location: ../public/resultat.php");
    exit();

}
?>
