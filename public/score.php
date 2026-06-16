<?php
session_start();

// Sécurité
if (!isset($_SESSION['score'], $_SESSION['start_time'], $_SESSION['utilisateur_id'])) {
    header("Location: ./quiz.php");
    exit();
}

require_once "../config/bdd.php"; // connexion PDO

// 🔢 Données
$score = $_SESSION['score'];
$utilisateur_id = $_SESSION['utilisateur_id'];

$start = $_SESSION['start_time'];
$end = time();

// ⏱️ Temps total en secondes
$temps_total = $end - $start;

// 💾 Insertion en base

$request = $db->prepare("INSERT INTO score (utilisateur_id, score, temps_total)
        VALUES (:utilisateur_id, :score, :temps_total");
$request->execute([
    ":utilisateur_id" => $utilisateur_id,
    ":score" => $score,
    ":temps_total" => $temps_total
]);

// 🧹 Nettoyage session (optionnel mais conseillé)
unset($_SESSION['score']);
unset($_SESSION['start_time']);
unset($_SESSION['end_time']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>

<h1>🏁 Résultat du quiz</h1>

<p>Ton score : <strong><?= $score ?></strong></p>

<p>Temps total : <strong><?= $temps_total ?> secondes</strong></p>

<a href="quiz.php">Refaire le quiz</a>

</body>
</html>