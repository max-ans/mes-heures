<form action="<?= $router->generate('login-form') ?>" method="POST" class="container mt-5 p-3">

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
<?php
    if (isset($_SESSION['registerMessage'])) {      
?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['registerMessage'] ?>
    </div>
<?php
    }
?>
    <fieldset class="border border-primary p-5 rounded">
        <legend>Connexion</legend>
        <div class="form-group mb-3">
            <label for="email">Adresse Email</label>
            <input type="email" class="form-control shadow-sm" id="email" name="email" aria-describedby="emailHelp" required value="<?= isset($oldValues) ? $oldValues['oldEmail'] : '' ?>">
            <small id="emailHelp" class="form-text text-muted">Ne transmettez jamais vos identifiants à quelqu'un d'autre</small>
        </div>
        <div class="form-group mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control shadow-sm" id="password" name="password" required>
        </div>
        <input type="hidden" name="token" value="<?= isset($oldValues) ? $oldValues['oldToken'] : $token ?>">
        
        <button type="submit" class="btn btn-outline-primary btn-block shadow-sm mt-4" style="width: 100%;">Se connecter</button>
    </fieldset>
  </form>

  <section class="registerLink container mb-5 text-center">
    <small class="link__register">Je n'est pas encore de compte! Pas de souci! Créez en un <a href="">ici</a></small>
  </section>

  <section class="infos mt-5 container mb-5 ">
    <div class="card">
        <div class="card-header">
            Tips
        </div>
        <div class="card-body">
            <h5 class="card-title">En me connectant, je pourrais:</h5>
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
                </ul>
            </p>
            
        </div>
    </div>
  </section>
  
 