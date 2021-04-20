

<main class="container text-center text-primary mt-5">

    <h1>Bonjour <?= $user->getNickname() ?></h1>

    <?php
        if (isset($_SESSION['tableSuccess'])) {
    ?>
        <div class="alert alert-success update__success" role="alert">
            <?= $_SESSION['tableSuccess'] ?>
        </div>
    <?php
        }
    ?>
    
    <div class="card border-primary m-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item ">
                    <a class="nav-link card-link active " href="" data-link="profil">Profil</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link card-link " href="" data-link="tables">Tableaux</a>
                </li>
            </ul>
        </div>
        <div class="card-body profil">
            <h5 class="card-title">Mon profil</h5>
            <p class="card-text">
                <span class="label">Email:</span> <?= $user->getEmail() ?>
            </p>
            <p class="card-text">
                <span class="label">Pseudo:</span> <?= $user->getNickname() ?>
            </p>
            <a href="<?= $router->generate('profil-edit', ['nickname' => $user->getNickname()])?>" class="btn btn-primary">Modifier</a>
        </div>
        <div class="card-body tables d-none">
            <h5 class="card-title">Mes tableaux</h5>
            <div class="d-flex flex-wrap justify-content-center">
            <?php
                if (isset($tables) && !empty($tables)) {
                    
                 foreach ($tables as $table ) {
                     
            ?>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <a href="<?= $router->generate('table-single' , [ 'id' => $table->getId()]) ?>">
                        
                        <div class="card-body">
                            <p class="card-text">
                                Tableau d'heures du :  <br> 
                                <span class="fw-bold">
                                    <?= empty($table->getWeekStart()) ? 
                                    '(date non définie)' :
                                    date_format(date_create($table->getWeekStart()), "d.m.Y") ?> 
                                </span>
                                <br>
                                au
                                <br>
                                <span class="fw-bold">
                                    <?= empty($table->getWeekEnd()) ?
                                    '(date non définie)' :
                                    date_format(date_create($table->getWeekEnd()), "d.m.Y")?>
                                </span>
                            </p>
                        </div>
                    </a>
                </div>
            <?php
                }} else {
            ?>
                <div class="text-center">
                    <p class="m-auto text-center">
                        Vous n'avez enregistré aucun tableau pour l'instant.
                    </p>
                    
                </div>

            <?php
                }
            ?>
            </div>
            
        </div>
    </div>
    <div class="d-flex m-4">
        <a href="<?= $router->generate('homepage') ?>" style="width: 100%;"  class="btn btn-outline-primary btn-block">Créer un tableau</a>
    </div>

</main>

