

<main class="container text-center text-primary mt-5">

    <h1>Bonjour <?= $user->getNickname() ?></h1>

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
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3 card__table" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</main>

