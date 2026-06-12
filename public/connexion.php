<?php require_once "../_partials/_header.php"; ?>

<form action="" method="post" class="flex flex-col gap-8 bg-baume-ivoire p-8 rounded-xl items-center">
    <h2>Connectez-vous</h2>
    <div class="flex flex-col tracking-wider">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Supergirl" class="text-center rounded-xl bg-white h-12" minlength="3" maxlength="30">
    </div>
    <div class="flex flex-col tracking-wider">
        <label for="pseudo">Adresse email</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="test.test@test.fr" class="text-center rounded-xl bg-white h-12" minlength="3" maxlength="30">
    </div>
    <div class="flex flex-col tracking-wider">
        <label for="pseudo">Mot de passe</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Jnfg@12-Amh" class="text-center rounded-xl bg-white h-12" minlength="3" maxlength="30">
    </div>
        <button type="submit" class="bg-mauve-btn font-bold rounded-full w-fit py-2 px-8">Connexion</button>
</form>

<?php require_once "../_partials/_footer.php" ?>