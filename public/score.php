<?php
require_once "../utils/isConnected.php";

session_start();

// Vérification
if (!isset($_SESSION['quiz']['score'],$_SESSION['quiz']['start_time'])) {
    header("Location: ./quiz.php");
    exit();
}

// connexion PDO
require_once "../utils/db_connect.php";

// Récupération
$user = json_decode($_COOKIE['user'], true);
$score = $_SESSION['quiz']['score'];

$start =$_SESSION['quiz']['start_time'];
$end = time();

// Temps total en secondes
$temps_total = $end - $start;

// Insertion en base

$request = $db->prepare("INSERT INTO score (utilisateur_id, score, temps_total)
        VALUES (:utilisateur_id, :score, :temps_total)");
$request->execute([
    ":utilisateur_id" =>  $_SESSION['user']['id'],
    ":score" => $score,
    ":temps_total" => $temps_total
]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>

<h1> Résultat du quiz</h1>

<p>Ton score : <strong><?= $score ?></strong></p>

<p>Temps total : <strong><?= $temps_total ?> secondes</strong></p>

<a href="../process/reset-quiz.php">Refaire le quiz</a>

</body>
</html>