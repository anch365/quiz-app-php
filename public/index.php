<?php require_once "../_partials/_header.php"; ?>

<main class="flex flex-col gap-8">
    <section style="background-image: url('../assets/imgs/Bg-Quiz.jpg')" class="bg-size-[auto_250px] bg-bottom bg-no-repeat flex flex-col gap-8 items-center pb-8 sm:bg-size-[auto_300px] sm:bg-top">

        <h1 class="aclonica text-4xl">Bienvenu sur QuizApp</h1>
        <p>Répondez aux questions le plus vite possible pour gagner des points et tenter de terminer en tête du classement. Bonne chance ! 🚀🏆</p>

        <button type="submit" class="bg-mauve-btn font-bold rounded-full w-fit py-2 px-8">Connectez-vous</button>
    </section>

    <section class="flex flex-col gap-8 items-center justify-center">
        <h2 class="aclonica text-3xl underline">Apprenez en vous amusant</h2>

        <div class="flex flex-col items-center rounded-2xl overflow-hidden bg-améthyste text-white py-8">
            <div class="w-16 h-16 bg-white rounded-full overflow-hidden">
                <img src="../assets/imgs/Q-Variées.jpg" alt="Carte pour les questions variées" class="object-cover">
            </div>
            <div class="flex flex-col gap-8 px-6 py-8">
                <div class="aclonica text-2xl">Questions variées</div>
                <p class="font-light tracking-wider">Culture générale, science, histoire...</p>
            </div>
        </div>

        <div class="flex flex-col items-center rounded-2xl overflow-hidden bg-améthyste text-white py-8">
            <div class="w-16 h-16 bg-white rounded-full overflow-hidden">
                <img src="../assets/imgs/feedback.jpg" alt="Une image pour la présentation du feedback instantané">
            </div>
            <div class="flex flex-col gap-8 px-6 py-8">
                <div class="aclonica text-2xl">Feedback instantané</div>
                <p class="font-light tracking-wider">Voir les résultats en temps réel</p>
            </div>
        </div>

        <div class="flex flex-col items-center rounded-2xl overflow-hidden bg-améthyste text-white py-8">
            <div class="w-16 h-16 bg-white rounded-full overflow-hidden">
                <img src="../assets/imgs/Progression.jpg" alt="Une image pour la présentation du feedback instantané">
            </div>
            <div class="flex flex-col gap-8 px-6 py-8">
                <div class="aclonica text-2xl">Suivi Progression</div>
                <p class="font-light tracking-wider">Connectez-vous pour sauvegarder chaque score et visionner votre progression</p>
            </div>
        </div>
    </section>
</main>

<?php require_once "../_partials/_footer.php" ?>