<?php
require_once "../_partials/_header.php"
?>
<main>
    <section class="flex flex-col gap-8 items-center">

        <div class="flex flex-col items-center gap-8 md:flex-row md:gap-32">
            <div class="flex flex-col items-center rounded-2xl overflow-hidden bg-baume-ivoire text-black py-8">
                <div class="bg-white overflow-hidden">
                    [ IMAGE]
                </div>
                <div class="flex flex-col gap-8 px-6 py-8">
                    <p class="font-light tracking-wider">Quelle est la capitale de la France ?</p>
                </div>
            </div>

            <div class="aclonica text-white flex flex-col gap-8 w-full">

                <label class="cursor-pointer">
                    <input type="radio" name="answer" class="peer hidden">

                    <div
                        class="bg-améthyste rounded-xl py-4 border transition-all duration-300 peer-checked:border-pink-400 peer-checked:border-3">
                        Paris
                    </div>
                </label>

                <label class="cursor-pointer">
                    <input type="radio" name="answer" class="peer hidden">

                    <div
                        class="bg-améthyste rounded-xl py-4 border transition-all duration-300 peer-checked:border-pink-400 peer-checked:border-3">
                        Londres
                    </div>
                </label>

                <label class="cursor-pointer">
                    <input type="radio" name="answer" class="peer hidden">

                    <div
                        class="bg-améthyste rounded-xl py-4 border transition-all duration-300 peer-checked:border-pink-400 peer-checked:border-3">
                        Rome
                    </div>
                </label>

                <label class="cursor-pointer">
                    <input type="radio" name="answer" class="peer hidden">

                    <div
                        class="bg-améthyste rounded-xl py-4 border transition-all duration-300 peer-checked:border-pink-400 peer-checked:border-3">
                        Madrid
                    </div>
                </label>
                <div>
                    <button type="submit" class="bg-mauve-btn font-bold rounded-full w-fit py-2 px-8 text-black gayathri">Envoyez</button>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
require_once "../_partials/_footer.php"
?>