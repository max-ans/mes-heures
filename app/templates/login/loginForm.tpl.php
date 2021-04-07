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
  <div class="pusher" style="width: 100%; height: 34.7vh"></div>