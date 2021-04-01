<form action="<?= $router->generate('registration-form') ?>" method="POST" class=" container m-auto row p-5">
    <fieldset class="border border-danger g-3 p-5 rounded">
        <legend>Inscription</legend>
        <div class="row-md-4 mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="row-md-4 mt-2">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" required>
            <small id="passwordHelp" class="form-text text-muted">Votre mot de passe doit contenir au minimum huit caractères, un caractère spécial, un chiffre et une majuscule. </small>
        </div>
        <div class="row-md-4 mt-2">
            <label for="repeated__password" class="form-label">Répétez le mot de passe</label>
            <input type="password" class="form-control" id="repeated__password" name="repeated__password" required>
        </div>
        <div class="col-12 mt-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check" name="check" required>
                <label class="form-check-label" for="check">
                    J'accepte les CGU
                </label>
            </div>
        </div>
        <div class="col-12 mt-5">
            <button style="width: 100%;" type="submit" class="btn btn-outline-danger btn-block">S'incrire</button>
        </div>
    </fieldset>
</form>