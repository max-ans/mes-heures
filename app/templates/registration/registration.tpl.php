<form action="<?= $router->generate('registration-form') ?>" method="POST" class=" container m-auto row p-5">
    <?php
        if (isset($errorsList)) {
            foreach ($errorsList as $error ) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php
        }}
    ?>

    <fieldset class="border border-primary g-3 p-5 rounded">
        <legend>Inscription</legend>
        <div class="row-md-4 mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($oldValues) ? $oldValues['oldEmail'] : "" ?>" required>
        </div>
        <div class="row-md-4 mt-2">
            <label for="nickname" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($oldValues) ? $oldValues['oldNickname'] : "" ?>" required>
        </div>
        <div class="row-md-4 mt-2">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" required>
            <small id="passwordHelp" class="form-text text-muted">Votre mot de passe doit contenir au minimum huit caractères et vingt au maximum, un caractère spécial, un chiffre et une majuscule. </small>
        </div>
        <div class="row-md-4 mt-2">
            <label for="repeated__password" class="form-label">Répétez le mot de passe</label>
            <input type="password" class="form-control" id="repeated__password" name="repeated__password" required>
        </div>
        <input type="hidden" name="token" value="<?= isset($oldValues) ? $oldValues['oldToken'] : $token ?>">
        <div class="col-12 mt-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check" name="check" required>
                <label class="form-check-label" for="check">
                    J'accepte les CGU
                </label>
            </div>
        </div>
        <div class="col-12 mt-5">
            <button style="width: 100%;" type="submit" class="btn btn-outline-primary btn-block">S'incrire</button>
        </div>
    </fieldset>
</form>

<section class="info  mb-5 container p-5">
    <div class="card">
        <div class="card-header">
            Tips
        </div>
        <div class="card-body">
            <h5 class="card-title">En créant un compte, je peux :</h5>
            <p class="card-text">
            <ul>
                <li>
                    <p>
                        Accéder à tous les tableaux que j'ai déjà remplis et sauvegarder
                    </p>
                </li>
                <li>
                    <p>
                        Imprimer en un click le tableau que je viens de remplir
                    </p>
                </li>
                <li>
                    <p>
                        Ajouter et supprimer autant de tableaux d'heures que je souhaite, sans restriction de quantités
                    </p>
                </li>
                <li>
                    <p>
                        Gerer mes données personnelles
                    </p>
                </li>
                <li>
                    <p>
                        Renseigner une semaine pour chaque tableau d'heure
                    </p>
                </li>
            </ul>  
        </div>
    </div>
  </section>