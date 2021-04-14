<section class="container text-center mt-5">

  <p>Calculer les heures de vos contrats sans risque d'oublies grâce au convertisseur de <span>Mes-Heures</span>
  </p>

</section>
<main class="container mt-5">
<form action="<?= $router->generate('homepage-test') ?>" class="table__form" method="post">
  <div class="table-responsive">
    <?php 
        dump($_POST);
        if(isset($user) && !empty($user)) {
      ?>
    <h2>Semaine du: <br> <input type="date" name="week__start"> au <input type="date" name="week__end"></h2>
    <?php
        }
      ?>
     
    <table class="table table-bordered border-primary align-middle ">
      <thead>
        <tr>
          <th scope="col" class="text-center">Jour</th>
          <th scope="col" class="text-center">Matin 6H/12H </th>
          <th scope="col" class="text-center">Après-midi 13H/20H</th>
          <th scope="col" class="text-center">Journée 6H/20H</th>
          <th scope="col" class="text-center"></th>
          <th scope="col" class="text-center">Heures et minutes</th>
          <th scope="col" class="text-center">Heures facturées</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Lundi</th>
          
          <div class="block__form" data-day="monday">
            <td class="time__block">
              <input class="inputs monday" data-day="monday" type="time" min="06:00" max="12:00" name="monday__morning__start"
                id="monday__morning__start">
              <input class="inputs monday" data-day="monday" type="time" min="06:00" max="12:00" name="monday__morning__end"
                id="monday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs monday" data-day="monday" type="time" min="13:00" max="20:00" name="monday__afternoon__start"
                id="monday__afternoon__start">
              <input class="inputs monday" data-day="monday" type="time" min="13:00" max="20:00" name="monday__afternoon__end"
                id="monday__afternoon__end">
            </td>
            <td class="time__block">
              <input class="inputs monday" data-day="monday" type="time" min="06:00" max="20:00" name="monday__start"
                id="monday__start">
              <input class="inputs monday" data-day="monday" type="time" min="06:00" max="20:00" name="monday__end"
                id="monday__end">
            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto">
              <button class="calc btn btn-outline-primary d-block no__printable " data-day="monday" type="submit">
                Calculer
              </button>
              <button class="btn btn-outline-primary d-block reset no__printable " data-day="monday" type="button">
                <i class="bi bi-trash no__printable" data-day="monday"></i>
              </button>

            </td>
            <td class="text-center">
              <input readonly type="text" name="monday__result__standard" class=" standardResult result text-center monday__result "
                id="monday__result__standard">
            </td>
            <td class="text-center">
              <input readonly type="text" name="monday__result__hundredths" class="result text-center monday__result"
                id="monday__result__hundredths">
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Mardi</th>
          <div class="block__form" data-day="tuesday">
            <td class="time__block">
              <input class="inputs tuesday" data-day="tuesday" type="time" min="06:00" max="12:00" name="tuesday__morning__start"
                id="tuesday__morning__start">
              <input class="inputs tuesday" data-day="tuesday" type="time" min="06:00" max="12:00" name="tuesday__morning__end"
                id="tuesday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs tuesday" data-day="tuesday" type="time" min="13:00" max="20:00" name="tuesday__afternoon__start"
                id="tuesday__afternoon__start">
              <input class="inputs tuesday" data-day="tuesday" type="time" min="13:00" max="20:00" name="tuesday__afternoon__end"
                id="tuesday__afternoon__end">
            </td>
            <div class="block__form" data-day="tuesday">
              <td class="time__block">
                <input class="inputs tuesday" data-day="tuesday" type="time" min="06:00" max="20:00" name="tueday__start"
                  id="tueday__start">
                <input class="inputs tuesday" data-day="tuesday" type="time" min="06:00" max="20:00" name="tueday__end"
                  id="tueday__end">
              </td>
              <td class="d-flex justify-content-between w-100 border-0 m-auto">
                <button class="calc btn btn-outline-primary d-block no__printable " data-day="tuesday" type="submit">
                  Calculer
                </button>
                <button class="btn btn-outline-primary d-block reset no__printable" data-day="tuesday" type="button">
                  <i class="bi bi-trash no__printable" data-day="tuesday"></i>
                </button>
              </td>
              <td class="text-center">
                <input readonly type="text" name="tuesday__result__standard" class="standardResult result tuesday__result text-center "
                  id="tuesday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="tuesday__result__hundredths" class="result text-center tuesday__result"
                  id="tuesday__result__hundredths">
              </td>
            </div>
        </tr>
        <tr>
          <th scope="row">Mercredi</th>
          <div class="block__form" data-day="wednesday">
            <td class="time__block">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="06:00" max="12:00" name="wednesday__morning__start"
                id="wednesday__morning__start">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="06:00" max="12:00" name="wednesday__morning__end"
                id="wednesday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="13:00" max="20:00" name="wednesday__afternoon__start"
                id="wednesday__afternoon__start">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="13:00" max="20:00" name="wednesday__afternoon__end"
                id="wednesday__afternoon__end">
            </td>
            <td class="time__block">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="06:00" max="20:00"
                name="wednesday__start" id="wednesday__start">
              <input class="inputs wednesday" data-day="wednesday" type="time" min="06:00" max="20:00" name="wednesday__end"
                id="wednesday__end">

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto">
              <button class="calc btn btn-outline-primary d-block no__printable " data-day="wednesday" type="submit">
                Calculer
              </button>
              <button class="btn btn-outline-primary d-block reset no__printable" data-day="wednesday" type="button">
                <i class="bi bi-trash no__printable" data-day="wednesday"></i>
              </button>
            </td>
            <td class="text-center">
              <input readonly type="text" name="wednesday__result__standard" class=" standardResult result text-center wednesday__result "
                id="wednesday__result__standard">
            </td>
            <td class="text-center">
              <input readonly type="text" name="wednesday__result__hundredths" class=" result text-center wednesday__result"
                id="wednesday__result__hundredths">
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Jeudi</th>
          <div class="block__form" data-day="thursday">
            <td class="time__block">
              <input class="inputs thursday" data-day="thursday" type="time" min="06:00" max="12:00" name="thursday__morning__start"
                id="thursday__morning__start">
              <input class="inputs thursday" data-day="thursday" type="time" min="06:00" max="12:00" name="thursday__morning__end"
                id="thursday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs thursday" data-day="thursday" type="time" min="13:00" max="20:00" name="thursday__afternoon__start"
                id="thursday__afternoon__start">
              <input class="inputs thursday" data-day="thursday" type="time" min="13:00" max="20:00" name="thursday__afternoon__end"
                id="thursday__afternoon__end">
            </td>
            <td class="time__block">
              <input class="inputs thursday" data-day="thursday" type="time" min="06:00" max="20:00" name="thursday__start"
                id="thursday__start">
              <input class="inputs thursday" data-day="thursday" type="time" min="06:00" max="20:00" name="thursday__end"
                id="thursday__end">

            </td>

            <td class="d-flex justify-content-between w-100 border-0 m-auto">
              <button class="calc btn btn-outline-primary d-block no__printable " data-day="thursday" type="submit">
                Calculer
              </button>
              <button class="btn btn-outline-primary d-block reset no__printable" data-day="thursday" type="button">
                <i class="bi bi-trash no__printable" data-day="thursday"></i>
              </button>
            </td>
            <td class="text-center">
              <input readonly type="text" name="thursday__result__standard" class=" standardResult result text-center thursday__result "
                id="thursday__result__standard">
            </td>
            <td class="text-center">
              <input readonly type="text" name="thursday__result__hundredths" class=" result text-center thursday__result"
                id="thursday__result__hundredths">
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Vendredi</th>
          <div class="block__form" data-day="friday">
            <td class="time__block">
              <input class="inputs friday" data-day="friday" type="time" min="06:00" max="12:00" name="friday__morning__start"
                id="friday__morning__start">
              <input class="inputs friday" data-day="friday" type="time" min="06:00" max="12:00" name="friday__morning__end"
                id="friday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs friday" data-day="friday" type="time" min="13:00" max="20:00" name="friday__afternoon__start"
                id="friday__afternoon__start">
              <input class="inputs friday" data-day="friday" type="time" min="13:00" max="20:00" name="friday__afternoon__end"
                id="friday__afternoon__end">
            </td>
            <td>
              <input class="inputs friday" data-day="friday" type="time" min="06:00" max="20:00" name="friday__start"
                id="friday__start">
              <input class="inputs friday" data-day="friday" type="time" min="06:00" max="20:00" name="friday__end"
                id="friday__end">

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto">
              <button class="calc btn btn-outline-primary d-block no__printable " data-day="friday" type="submit">
                Calculer
              </button>
              <button class="btn btn-outline-primary d-block reset no__printable" data-day="friday" type="button">
                <i class="bi bi-trash no__printable" data-day="friday"></i>
              </button>
            </td>
            <td class="text-center">
              <input readonly type="text" name="friday__result__standard" class=" standardResult result text-center friday__result "
                id="friday__result__standard">
            </td>
            <td class="text-center">
              <input readonly type="text" name="friday__result__hundredths" class=" result text-center friday__result"
                id="friday__result__hundredths">
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Samedi</th>
          <div class="block__form" data-day="saturday">
            <td class="time__block">
              <input class="inputs saturday" data-day="saturday" type="time" min="06:00" max="12:00" name="saturday__morning__start"
                id="saturday__morning__start">
              <input class="inputs saturday" data-day="saturday" type="time" min="06:00" max="12:00" name="saturday__morning__end"
                id="saturday__morning__end">
            </td>
            <td class="time__block">
              <input class="inputs saturday" data-day="saturday" type="time" min="13:00" max="20:00" name="saturday__afternoon__start"
                id="saturday__afternoon__start">
              <input class="inputs saturday" data-day="saturday" type="time" min="13:00" max="20:00" name="saturday__afternoon__end"
                id="saturday__afternoon__end">
            </td>
            <td class="time__block">
              <input class="inputs saturday" data-day="saturday" type="time" min="06:00" max="20:00" name="saturday__start"
                id="saturday__start">
              <input class="inputs saturday" data-day="saturday" type="time" min="06:00" max="20:00" name="saturday__end"
                id="saturday__end">

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto">
              <button class=" no__printable calc btn btn-outline-primary d-block " data-day="saturday" type="submit">
                Calculer
              </button>
              <button class="no__printable btn btn-outline-primary d-block reset no__printable" data-day="saturday"
                type="button">
                <i class="bi bi-trash no__printable no__printable" data-day="saturday"></i>
              </button>
            </td>
            <td class="text-center">
              <input readonly type="text" name="saturday__result__standard" class=" standardResult result text-center saturday__result "
                id="saturday__result__standard">
            </td>
            <td class="text-center">
              <input readonly type="text" name="saturday__result__hundredths" class=" result text-center saturday__result"
                id="saturday__result__hundredths">
            </td>
          </div>
        </tr>
        <tr>
          <td colspan="5" class="no__printable"></td>
          <td colspan="2" class="no__printable">
            <button type="button" class="calc__result btn btn-outline-primary d-block m-auto" data-day="hundredthsTime">
              Calculer
            </button>
          </td>
        </tr>
        <tr class="table-primary mt-3">
          <th colspan="5" class="text-end" scope="row">Total</th>
          <td class="text-center"><input readonly type="text" name="finalStandardResult"
              class="total__result text-center result finalResult" id="finalStandardResult"></td>
          <td class="text-center"><input readonly type="text" name="finalhundredthsResult"
              class="total__result text-center result hundredthsResult" id="finalhundredthsResult"></td>
        </tr>
        
      </tbody>
    </table>
    </form>
  </div>
  <section class="printing mt-5 user__action ">
    <button type="button" class="btn btn-outline-primary btn-lg btn-block print ">Imprimer le tableau</button>
  </section>

  <section class="screen mt-5 mb-5 user__action">
    <?php if(!isset($user) ) {?>
    <small class="infos ">Vous devez être connecté pour enregistrer un tableau</small>
    <?php
    }
    ?>
    <button type="button" <?= (isset($user) && !empty($user)) ? '' : 'disabled' ?>
      class="btn btn-outline-primary btn-lg btn-block download ">Enregistrer le tableau</button>
  </section>


</main>