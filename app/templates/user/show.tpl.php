

<main class="container text-center text-primary mt-5">

    <h1>Bonjour <?= $user->getNickname() ?></h1>

    <div class="card text-center border-primary m-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item profil">
                    <a class="nav-link active" href="#">Profil</a>
                </li>
                <li class="nav-item tables">
                    <a class="nav-link " href="#">Tableaux</a>
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
            <a href="#" class="btn btn-primary">Modifier</a>
        </div>
        <div class="card-body tables">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</main>

