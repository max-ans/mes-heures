<section class="container text-center mt-5">
  
    <p>Calculer les heures de vos contrats sans risque d'oublies grâce au convertisseur de <span>Mes-Heures</span>
    </p>

  </section>
  <main class="container mt-5">
    <div class="table-responsive">
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
            <form action="" class="block__form" data-day="monday">
              <td class="time__block">
                <input class="inputs monday" data-day="monday"  
                   type="time" min="06:00" max="12:00" name="" id="monday__morning__start">
                <input class="inputs monday" data-day="monday"  
                   type="time" min="06:00" max="12:00" name="" id="monday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs monday" data-day="monday"  
                   type="time" min="13:00" max="20:00" name="" id="monday__afternoon__start">
                <input class="inputs monday" data-day="monday"  
                   type="time" min="13:00" max="20:00" name="" id="monday__afternoon__end">
              </td>
              <td class="time__block">
                <input class="inputs monday" data-day="monday"   type="time"
                  min="06:00" max="20:00" name="" id="monday__start">
                <input class="inputs monday" data-day="monday"   type="time"
                  min="06:00" max="20:00" name="" id="monday__end">
              </td>
              <td class="d-flex justify-content-between w-100 border-0 m-auto">
                <button class="calc btn btn-outline-primary d-block no__printable " data-day="monday" type="submit">
                  Calculer
                </button>
                <button class="btn btn-outline-primary d-block reset no__printable " data-day="monday" type="button" >
                  <i class="bi bi-trash no__printable" data-day="monday"></i>
                </button>
                
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" standardResult result text-center monday__result " id="monday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class="result text-center monday__result"
                  id="monday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <th scope="row">Mardi</th>
            <form action="" class="block__form" data-day="tuesday">
              <td class="time__block">
                <input class="inputs tuesday" data-day="tuesday"  
                   type="time" min="06:00" max="12:00" name="" id="tuesday__morning__start">
                <input class="inputs tuesday" data-day="tuesday"  
                   type="time" min="06:00" max="12:00" name="" id="tuesday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs tuesday" data-day="tuesday"  
                   type="time" min="13:00" max="20:00" name="" id="tuesday__afternoon__start">
                <input class="inputs tuesday" data-day="tuesday"  
                   type="time" min="13:00" max="20:00" name="" id="tuesday__afternoon__end">
              </td>
              <form action="" class="block__form" data-day="tuesday">
                <td class="time__block">
                  <input class="inputs tuesday" data-day="tuesday"   type="time"
                    min="06:00" max="20:00" name="" id="tueday__start">
                  <input class="inputs tuesday" data-day="tuesday"   type="time"
                    min="06:00" max="20:00" name="" id="tueday__end">
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
                <input readonly type="text" name="" class="standardResult result tuesday__result text-center " id="tuesday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class="result text-center tuesday__result"
                  id="tuesday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <th scope="row">Mercredi</th>
            <form action="" class="block__form" data-day="wednesday">
              <td class="time__block">
                <input class="inputs wednesday" data-day="wednesday"  
                   type="time" min="06:00" max="12:00" name="" id="wednesday__morning__start">
                <input class="inputs wednesday" data-day="wednesday"  
                   type="time" min="06:00" max="12:00" name="" id="wednesday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs wednesday" data-day="wednesday"  
                   type="time" min="13:00" max="20:00" name="" id="wednesday__afternoon__start">
                <input class="inputs wednesday" data-day="wednesday"  
                   type="time" min="13:00" max="20:00" name="" id="wednesday__afternoon__end">
              </td>
              <td class="time__block">
                <input class="inputs wednesday" data-day="wednesday"  
                  type="time" min="06:00" max="20:00" name="wednesday__start" id="">
                <input class="inputs wednesday" data-day="wednesday"   type="time"
                  min="06:00" max="20:00" name="" id="wednesday__end">

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
                <input readonly type="text" name="" class=" standardResult result text-center wednesday__result " id="wednesday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" result text-center wednesday__result"
                  id="wednesday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <th scope="row">Jeudi</th>
            <form action="" class="block__form" data-day="thursday">
              <td class="time__block">
                <input class="inputs thursday" data-day="thursday"  
                   type="time" min="06:00" max="12:00" name="" id="thursday__morning__start">
                <input class="inputs thursday" data-day="thursday"  
                   type="time" min="06:00" max="12:00" name="" id="thursday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs thursday" data-day="thursday"  
                   type="time" min="13:00" max="20:00" name="" id="thursday__afternoon__start">
                <input class="inputs thursday" data-day="thursday"  
                   type="time" min="13:00" max="20:00" name="" id="thursday__afternoon__end">
              </td>
              <td class="time__block">
                <input class="inputs thursday" data-day="thursday"   type="time"
                  min="06:00" max="20:00" name="" id="thursday__start">
                <input class="inputs thursday" data-day="thursday"   type="time"
                  min="06:00" max="20:00" name="" id="thursday__end">

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
                <input readonly type="text" name="" class=" standardResult result text-center thursday__result " id="thursday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" result text-center thursday__result"
                  id="thursday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <th scope="row">Vendredi</th>
            <form action="" class="block__form" data-day="friday">
              <td class="time__block">
                <input class="inputs friday" data-day="friday"  
                   type="time" min="06:00" max="12:00" name="" id="friday__morning__start">
                <input class="inputs friday" data-day="friday"  
                   type="time" min="06:00" max="12:00" name="" id="friday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs friday" data-day="friday"  
                   type="time" min="13:00" max="20:00" name="" id="friday__afternoon__start">
                <input class="inputs friday" data-day="friday"  
                   type="time" min="13:00" max="20:00" name="" id="friday__afternoon__end">
              </td>
              <td>
                <input class="inputs friday" data-day="friday"   type="time"
                  min="06:00" max="20:00" name="" id="friday__start">
                <input class="inputs friday" data-day="friday"   type="time"
                  min="06:00" max="20:00" name="" id="friday__end">

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
                <input readonly type="text" name="" class=" standardResult result text-center friday__result " id="friday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" result text-center friday__result"
                  id="friday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <th scope="row">Samedi</th>
            <form action="" class="block__form" data-day="saturday">
              <td class="time__block">
                <input class="inputs saturday" data-day="saturday"  
                   type="time" min="06:00" max="12:00" name="" id="saturday__morning__start">
                <input class="inputs saturday" data-day="saturday"  
                   type="time" min="06:00" max="12:00" name="" id="saturday__morning__end">
              </td>
              <td class="time__block">
                <input class="inputs saturday" data-day="saturday"  
                   type="time" min="13:00" max="20:00" name="" id="saturday__afternoon__start">
                <input class="inputs saturday" data-day="saturday"  
                   type="time" min="13:00" max="20:00" name="" id="saturday__afternoon__end">
              </td>
              <td class="time__block">
                <input class="inputs saturday" data-day="saturday"   type="time"
                  min="06:00" max="20:00" name="" id="saturday__start">
                <input class="inputs saturday" data-day="saturday"   type="time"
                  min="06:00" max="20:00" name="" id="saturday__end">

              </td>
              <td class="d-flex justify-content-between w-100 border-0 m-auto">
                <button class=" no__printable calc btn btn-outline-primary d-block " data-day="saturday" type="submit">
                  Calculer
                </button>
                <button class="no__printable btn btn-outline-primary d-block reset no__printable" data-day="saturday" type="button">
                  <i class="bi bi-trash no__printable no__printable" data-day="saturday"></i>
                </button>
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" standardResult result text-center saturday__result " id="saturday__result__standard">
              </td>
              <td class="text-center">
                <input readonly type="text" name="" class=" result text-center saturday__result"
                  id="saturday__result__hundredths">
              </td>
            </form>
          </tr>
          <tr>
            <td colspan="5" class="no__printable"></td>
            <td colspan="2" class="no__printable">
              <button class="calc__result btn btn-outline-primary d-block m-auto" data-day="hundredthsTime">
                Calculer
              </button>
            </td>
          </tr>
          <tr class="table-primary mt-3">
            <th colspan="5" class="text-end" scope="row">Total</th>
            <td class="text-center"><input readonly type="text" name="" class="total__result text-center result finalResult" id="finalStandardResult"></td>
            <td class="text-center"><input readonly type="text" name="" class="total__result text-center result hundredthsResult" id="finalhundredthsResult"></td>
          </tr>

        </tbody>
      </table>
    </div>

    <section class="print mt-5">
      <button type="button" class="btn btn-outline-primary btn-lg btn-block download">Imprimer le tableau</button>
    </section>

    <section class="screen mt-5 mb-5">
      <button type="button" class="btn btn-outline-primary btn-lg btn-block screenshot">Enregistrer le tableau</button>
    </section>

  </main>