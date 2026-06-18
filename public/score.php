<?php
require_once "../utils/isConnected.php";
require_once "../utils/db_connect.php";

// Vérification
if (!isset($_SESSION['quiz']['score'], $_SESSION['quiz']['start_time'])) {
    header("Location: ./quiz.php");
    exit();
}

// Données
$score = $_SESSION['quiz']['score'];
$start = $_SESSION['quiz']['start_time'];
$end = time();
$temps_total = $end - $start;

// Insertion en base
$request = $db->prepare("INSERT INTO score (utilisateur_id, score, temps_total)
        VALUES (:utilisateur_id, :score, :temps_total)");
$request->execute([
    ":utilisateur_id" => $_SESSION['user']['id'],
    ":score" => $score,
    ":temps_total" => $temps_total
]);
?>

<?php require_once "../_partials/_header.php"; ?>

<main class="flex flex-col gap-8 items-center">
    <h1 class="aclonica text-3xl">🏁 Résultat du quiz</h1>

    <div class="bg-baume-ivoire rounded-xl p-8 flex flex-col gap-4 items-center">
        <p class="text-xl">Ton score : <strong class="text-2xl"><?= $score ?></strong></p>
        <p>Temps total : <strong><?= $temps_total ?> secondes</strong></p>
    </div>

    <a href="../process/reset-quiz.php">
        <button class="bg-mauve-btn font-bold rounded-full w-fit py-2 px-8 cursor-pointer">🔄 Refaire le quiz</button>
    </a>
</main>

<?php require_once "../_partials/_footer.php"; ?>