<!doctype html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Heures, Assistante, Maternelle, Horaires">
  <meta name="description" content="Calculez rapidement et simplement vos heures pour la semaine passée. Archivez et imprimez vos horaire depuis votre espace personnel grâce à Mes-Heures">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>style/animation.css">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>style/style.css">

  <title>Mes Heures</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="<?= $router->generate('homepage') ?>">Mes Heures</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">

            </li>
          </ul>
          <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
                if(isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser'])) {
              ?>
              <li class="nav-item ">
                <a class="nav-link ml-3" href="<?= $router->generate('logout') ?>">Se déconnecter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-3" href="<?= $router->generate('profil', ['nickname' => $_SESSION['connectedUser']->getNickname()]) ?>">Profil</a>
              </li>
              <?php
                } else {
              ?>
              <li class="nav-item ">
                <a class="nav-link ml-3" href="<?= $router->generate('registration') ?>">S'enregister</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('login')?>">Se connecter</a>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <noscript>
    <div class="alert alert-warning container text-center mt-3" role="alert">
        Votre navigateur n'accepte pas l'utilisation de JavaScript!!!
        <br>
        Il est nécessaire que celle-ci soit activée pour benificier pleinement des fonctionnalités de MesHeures 
        <br>
        <a href="https://support.google.com/adsense/answer/12654?hl=fr" target="_blank">comment activer l'utilisation de JavaScript</a>
    </div>
    </noscript>
  </header>
  