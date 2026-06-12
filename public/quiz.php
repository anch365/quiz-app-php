<?php
require_once "../_partials/_header.php"
?>
<main>
    <section class="flex flex-col items-center gap-8">
        <div class="flex flex-col items-center rounded-2xl overflow-hidden bg-baume-ivoire text-black py-8">
            <div class="bg-white overflow-hidden">
                <img src="../assets/imgs/feedback.jpg" alt="Une image pour la présentation du feedback instantané">
            </div>
            <div class="flex flex-col gap-8 px-6 py-8">
                <p class="font-light tracking-wider">Voir les résultats en temps réel</p>
            </div>

        </div>
        <div class="flex flex-col gap-8 text-white">
            <input type="radio"   class="bg-améthyste rounded-xl py-2 text-start pl-4">
                <span class="aclonica">A :</span>
            </input>

            <input type="radio" name="reponse" class="bg-améthyste rounded-xl py-2 text-start pl-4">
                <p><span class="aclonica">B : HELLO EVERYONE</span></p>
            </input>

            <input type="radio" class="bg-améthyste rounded-xl py-2 text-start pl-4">
                <span class="aclonica">C :</span>
            </input>

            <input type="radio" class="bg-améthyste rounded-xl py-2 text-start pl-4">
                <span class="aclonica">D :</span>
            </input>
        </div>

        <button type="submit" class="bg-mauve-btn font-bold rounded-full w-fit py-2 px-8">Envoyez</button>
    </section>

</main>

<?php
require_once "../_partials/_footer.php"
?>