<main class="container mt-5">


  <div class="table-responsive">
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
    <div class="table__header d-flex justify-content-between">
        <h2>Semaine du: <br> 
            <span class="fw-bold"> <?= date_format(date_create($table->getWeekStart()), "d.m.Y") ?></span> au <span class="fw-bold"> <?= date_format(date_create($table->getWeekEnd()), "d.m.Y") ?></span>
        </h2>

        <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="d-block">
        <button class="btn btn-outline-primary no__printable" data-bs-toggle="tooltip" data-bs-placement="top" title="Revenir à mes tableaux ">
            <i class="bi bi-arrow-return-left no__printable"></i>
        </button>
        </a>
    </div>
    
     
    <table class="table table-bordered border-primary align-middle ">
      <thead>
        <tr>
          <th scope="col" class="text-center">Jour</th>
          <th scope="col" class="text-center">Matin 6H/12H </th>
          <th scope="col" class="text-center">Après-midi 13H/20H</th>
          <th scope="col" class="text-center">Journée 6H/20H</th>
          <th scope="col" class="text-center empty"></th>
          <th scope="col" class="text-center">Heures et minutes</th>
          <th scope="col" class="text-center">Heures facturées</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Lundi</th>
          
          <div class="block__form" data-day="monday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getMondayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getMondayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getMondayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getMondayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getMondayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getMondayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getMondayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getMondayStart() ?></span> à <span class="fw-bold"><?= $table->getMondayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
              

            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getMondayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getMondayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getMondayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getMondayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Mardi</th>
          <div class="block__form" data-day="tuesday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getTuesdayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getTuesdayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getTuesdayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getTuesdayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getTuesdayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getTuesdayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <div class="block__form" data-day="tuesday">
              <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getTuesdayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getTuesdayStart() ?></span> à <span class="fw-bold"><?= $table->getTuesdayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
              </td>
              <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
                
              </td>
              <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getTuesdayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getTuesdayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
              </td>
              <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getTuesdayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getTuesdayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
              </td>
            </div>
        </tr>
        <tr>
          <th scope="row">Mercredi</th>
          <div class="block__form" data-day="wednesday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getWednesdayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getWednesdayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getWednesdayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td> 
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getWednesdayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getWednesdayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getWednesdayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getWednesdayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getWednesdayStart() ?></span> à <span class="fw-bold"><?= $table->getWednesdayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
              
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getWednesdayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getWednesdayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getWednesdayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getWednesdayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Jeudi</th>
          <div class="block__form" data-day="thursday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getThursdayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getThursdayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getThursdayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getThursdayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getThursdayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getThursdayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getThursdayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getThursdayStart() ?></span> à <span class="fw-bold"><?= $table->getThursdayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>

            </td>

            <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
              
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getThursdayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getThursdayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getThursdayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getThursdayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Vendredi</th>
          <div class="block__form" data-day="friday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getFridayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getFridayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getFridayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getFridayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getFridayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getFridayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td>
                <p class="text-center">
                    <?php
                        if (!empty($table->getFridayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getFridayStart() ?></span> à <span class="fw-bold"><?= $table->getFridayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
              
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getFridayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getFridayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getFridayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getFridayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
          </div>
        </tr>
        <tr>
          <th scope="row">Samedi</th>
          <div class="block__form" data-day="saturday">
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getSaturdayMorningStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getSaturdayMorningStart() ?></span> à <span class="fw-bold"><?= $table->getSaturdayMorningEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
                <p class="text-center">
                    <?php
                        if (!empty($table->getSaturdayAfternoonStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getSaturdayAfternoonStart() ?></span> à <span class="fw-bold"><?= $table->getSaturdayAfternoonEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="time__block">
            <p class="text-center">
                    <?php
                        if (!empty($table->getSaturdayStart())) :
                    ?>
                        De <span class="fw-bold"><?= $table->getSaturdayStart() ?></span> à <span class="fw-bold"><?= $table->getSaturdayEnd() ?></span> 
                    <?php
                        endif
                    ?>
                </p>

            </td>
            <td class="d-flex justify-content-between w-100 border-0 m-auto empty">
              
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getSaturdayResultStandard())) :
                    ?>
                        <span class="fw-bold"><?= $table->getSaturdayResultStandard() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
            <td class="text-center">
                <p class="text-center">
                    <?php
                        if (!empty($table->getSaturdayResultHundredths())) :
                    ?>
                        <span class="fw-bold"><?= $table->getSaturdayResultHundredths() ?></span>  
                    <?php
                        endif
                    ?>
                </p>
            </td>
          </div>
        </tr>

        <tr class="table-primary mt-3">
          <th colspan="5" class="text-end" scope="row">Total</th>
          <td class="text-center"><span class="fw-bold"><?= $table->getFinalStandardResult() ?></span> </td>
          <td class="text-center"><span class="fw-bold"><?= $table->getFinalHundredthsResult() ?></span> </td>
        </tr>
        
      </tbody>
    </table>
    
  
  </div>
  <section class="printing mt-5 user__action ">
    <button type="button" class="btn btn-outline-primary btn-lg btn-block print ">Imprimer le tableau</button>
  </section>

  <section class="printing mt-5 mb-5 user__action ">
        <form action="<?= $router->generate('table-delete', ['id' => $table->getId()]) ?>" method="post" class="delete__form">  
            <input type="hidden" name="token" value="<?= isset($oldValue) ? $oldValue['oldToken'] : $token ?>">
            <button type="button" class="btn btn-outline-warning btn-lg btn-block delete " >Supprimer le tableau</button>
        </form>
  </section>

  


</main>