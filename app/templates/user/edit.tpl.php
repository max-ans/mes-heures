<div class="container mt-5">
  
    <form action="<?= $router->generate('profil-form', [ 'nickname' => $user->getNickname()])?>" method="post">
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
        if (isset($_SESSION['success'])) {
    ?>
        <div class="alert alert-success update__success" role="alert">
            <?= $_SESSION['success'] ?>
        </div>
    <?php
        }
    ?>
    

        <fieldset class="border border-primary g-3 p-5 rounded">
            <legend class="text-center"><h3>Modification</h3></legend>
            <div class="row-md-4 mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($oldValues) ? $oldValues['oldEmail'] : $user->getEmail() ?>" required>
            </div>
            <div class="row-md-4 mt-2">
                <label for="nickname" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($oldValues) ? $oldValues['oldNickname'] : $user->getNickname() ?>" required>
            </div>
            <hr class="mt-5 text-primary">
            <h4 class="text-center">Mot de passe</h4>
            <div class="row-md-4 mt-2">
                <label for="old__password" class="form-label">Ancien mot de passe</label>
                <input type="password" class="form-control" id="old__password" name="old__password" >
            </div>
            <div class="row-md-4 mt-2">
                <label for="password" class="form-label">Nouveau mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" >
                <small id="passwordHelp" class="form-text text-muted">Votre mot de passe doit contenir au minimum huit caractères et vingt au maximum, un caractère spécial, un chiffre et une majuscule. </small>
            </div>
            <div class="row-md-4 mt-2">
                <label for="repeated__password" class="form-label">Répétez le nouveau mot de passe</label>
                <input type="password" class="form-control" id="repeated__password" name="repeated__password" >
            </div>
            <input type="hidden" name="token" value="<?= isset($oldValues) ? $oldValues['oldToken'] : $token ?>">
            
            <div class="col-12 mt-5">
                <button style="width: 100%;" type="submit" class="btn btn-outline-primary btn-block">Valider</button>
                <a  href="<?= $router->generate('profil', ['nickname' => $user->getNickname()]) ?>" style="width: 100%;" type="button" class="btn btn-outline-warning btn-block mt-4">Annuler</a>
            </div>
        </fieldset>
        
    </form>
    
   
</div>