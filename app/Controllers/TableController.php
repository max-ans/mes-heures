<?php

namespace App\Controllers;

use App\Models\Table;
use App\Utils\Authentication;

class TableController extends MainController
{

    public function tableShow ($id)
    {
        // this method find one table by his id,
        // and send it at view

        unset($_SESSION['tableSuccess']);
        $user = $_SESSION['connectedUser'];

        if ($user) {

            $authenticator = new Authentication($this->router);

            if ($authenticator->checkAuthentication($user)) {
           
                $table = Table::find($id);

                if ($table) {

                    $token = $this->getTokenCsrf();
                    $viewDatas = [
                        'table' => $table,
                        'token' => $token
                    ];
                    

                    return $this->render('tables/show.tpl.php', $viewDatas);

                }
                http_response_code(404);
                return $this->render('errors/err404.tpl.php');
            }
        }

        return $this->redirectTo('login');
    }

    public function tablePost ()
    {
        // this method receive informations of table,
        // and make it a model to register
       
        
        $user = $_SESSION['connectedUser'];
        
        if ($user) {
            $authenticator = new Authentication($this->router);
            
            if ($authenticator->checkAuthentication($user)) {

               
                $weekStart = filter_input(INPUT_POST , 'week__start', FILTER_SANITIZE_STRING);
                $weekEnd = filter_input(INPUT_POST , 'week__end', FILTER_SANITIZE_STRING);
                $mondayMorningStart = filter_input(INPUT_POST , 'monday__morning__start', FILTER_SANITIZE_STRING);
                $mondayMorningEnd = filter_input(INPUT_POST , 'monday__morning__end', FILTER_SANITIZE_STRING);
                $mondayAfternoonStart = filter_input(INPUT_POST , 'monday__afternoon__start', FILTER_SANITIZE_STRING);
                $mondayAfternoonEnd = filter_input(INPUT_POST , 'monday__afternoon__end', FILTER_SANITIZE_STRING);
                $mondayStart = filter_input(INPUT_POST , 'monday__start', FILTER_SANITIZE_STRING);
                $mondayEnd = filter_input(INPUT_POST , 'monday__end', FILTER_SANITIZE_STRING);
                $mondayResultStandard = filter_input(INPUT_POST , 'monday__result__standard', FILTER_SANITIZE_STRING);
                $mondayResultHundredths = filter_input(INPUT_POST , 'monday__result__hundredths', FILTER_SANITIZE_STRING);
                $tuesdayMorningStart = filter_input(INPUT_POST , 'tuesday__morning__start', FILTER_SANITIZE_STRING);
                $tuesdayMorningEnd = filter_input(INPUT_POST , 'tuesday__morning__end', FILTER_SANITIZE_STRING);
                $tuesdayAfternoonStart = filter_input(INPUT_POST , 'tuesday__afternoon__start', FILTER_SANITIZE_STRING);
                $tuesdayAfternoonEnd = filter_input(INPUT_POST , 'tuesday__afternoon__end', FILTER_SANITIZE_STRING);
                $tuesdayStart = filter_input(INPUT_POST , 'tueday__start', FILTER_SANITIZE_STRING);
                $tuesdayEnd = filter_input(INPUT_POST , 'tueday__end', FILTER_SANITIZE_STRING);
                $tuesdayResultStandard = filter_input(INPUT_POST , 'tuesday__result__standard', FILTER_SANITIZE_STRING);
                $tuesdayResultHundredths = filter_input(INPUT_POST , 'tuesday__result__hundredths', FILTER_SANITIZE_STRING);
                $wednesdayMorningStart = filter_input(INPUT_POST , 'wednesday__morning__start', FILTER_SANITIZE_STRING);
                $wednesdayMorningEnd = filter_input(INPUT_POST , 'wednesday__morning__end', FILTER_SANITIZE_STRING);
                $wednesdayAfternoonStart = filter_input(INPUT_POST , 'wednesday__afternoon__start', FILTER_SANITIZE_STRING);
                $wednesdayAfternoonEnd = filter_input(INPUT_POST , 'wednesday__afternoon__end', FILTER_SANITIZE_STRING);
                $wednesdayStart = filter_input(INPUT_POST , 'wednesday__start', FILTER_SANITIZE_STRING);
                $wednesdayEnd = filter_input(INPUT_POST , 'wednesday__end', FILTER_SANITIZE_STRING);
                $wednesdayResultStandard = filter_input(INPUT_POST , 'wednesday__result__standard', FILTER_SANITIZE_STRING);
                $wednesdayResultHundredths = filter_input(INPUT_POST , 'wednesday__result__hundredths', FILTER_SANITIZE_STRING);
                $thursdayMorningStart = filter_input(INPUT_POST , 'thursday__morning__start', FILTER_SANITIZE_STRING);
                $thursdayMorningEnd = filter_input(INPUT_POST , 'thursday__morning__end', FILTER_SANITIZE_STRING);
                $thursdayAfternoonStart = filter_input(INPUT_POST , 'thursday__afternoon__start', FILTER_SANITIZE_STRING);
                $thursdayAfternoonEnd = filter_input(INPUT_POST , 'thursday__afternoon__end', FILTER_SANITIZE_STRING);
                $thursdayStart = filter_input(INPUT_POST , 'thursday__start', FILTER_SANITIZE_STRING);
                $thursdayEnd = filter_input(INPUT_POST , 'thursday__end', FILTER_SANITIZE_STRING);
                $thursdayResultStandard = filter_input(INPUT_POST , 'thursday__result__standard', FILTER_SANITIZE_STRING);
                $thursdayResultHundredths = filter_input(INPUT_POST , 'thursday__result__hundredths', FILTER_SANITIZE_STRING);
                $fridayMorningStart = filter_input(INPUT_POST , 'friday__morning__start', FILTER_SANITIZE_STRING);
                $fridayMorningEnd = filter_input(INPUT_POST , 'friday__morning__end', FILTER_SANITIZE_STRING);
                $fridayAfternoonStart = filter_input(INPUT_POST , 'friday__afternoon__start', FILTER_SANITIZE_STRING);
                $fridayAfternoonEnd = filter_input(INPUT_POST , 'friday__afternoon__end', FILTER_SANITIZE_STRING);
                $fridayStart = filter_input(INPUT_POST , 'friday__start', FILTER_SANITIZE_STRING);
                $fridayEnd = filter_input(INPUT_POST , 'friday__end', FILTER_SANITIZE_STRING);
                $fridayResultStandard = filter_input(INPUT_POST , 'friday__result__standard', FILTER_SANITIZE_STRING);
                $fridayResultHundredths = filter_input(INPUT_POST , 'friday__result__hundredths', FILTER_SANITIZE_STRING);
                $saturdayMorningStart = filter_input(INPUT_POST , 'saturday__morning__start', FILTER_SANITIZE_STRING);
                $saturdayMorningEnd = filter_input(INPUT_POST , 'saturday__morning__end', FILTER_SANITIZE_STRING);
                $saturdayAfternoonStart = filter_input(INPUT_POST , 'saturday__afternoon__start', FILTER_SANITIZE_STRING);
                $saturdayAfternoonEnd = filter_input(INPUT_POST , 'saturday__afternoon__end', FILTER_SANITIZE_STRING);
                $saturdayStart = filter_input(INPUT_POST , 'saturday__start', FILTER_SANITIZE_STRING);
                $saturdayEnd = filter_input(INPUT_POST , 'saturday__end', FILTER_SANITIZE_STRING);
                $saturdayResultStandard = filter_input(INPUT_POST , 'saturday__result__standard', FILTER_SANITIZE_STRING);
                $saturdayResultHundredths = filter_input(INPUT_POST , 'saturday__result__hundredths', FILTER_SANITIZE_STRING);
                $finalStandardResult = filter_input(INPUT_POST , 'finalStandardResult', FILTER_SANITIZE_STRING);
                $finalHundredthsResult = filter_input(INPUT_POST , 'finalhundredthsResult', FILTER_SANITIZE_STRING);
                $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

                $errorsList = [];

                if(empty($token) || $token != $_SESSION['csrfToken']){
                    $errorsList[] = "Erreur CSRF !";
                }

                if(empty($errorsList)) {
                    $table = new Table;

                    $table->setWeekStart($weekStart)
                          ->setWeekEnd($weekEnd)
                          ->setMondayMorningStart($mondayMorningStart)
                          ->setMondayMorningEnd($mondayMorningEnd)
                          ->setMondayAfternoonStart($mondayAfternoonStart)
                          ->setMondayAfternoonEnd($mondayAfternoonEnd)
                          ->setMondayStart($mondayStart)
                          ->setMondayEnd($mondayEnd)
                          ->setMondayResultStandard($mondayResultStandard)
                          ->setMondayResultHundredths($mondayResultHundredths)
                          ->setTuesdayMorningStart($tuesdayMorningStart)
                          ->setTuesdayMorningEnd($tuesdayMorningEnd)
                          ->setTuesdayAfternoonStart($tuesdayAfternoonStart)
                          ->setTuesdayAfternoonEnd($tuesdayAfternoonEnd)
                          ->setTuesdayStart($tuesdayStart)
                          ->setTuesdayEnd($tuesdayEnd)
                          ->setTuesdayResultStandard($tuesdayResultStandard)
                          ->setTuesdayResultHundredths($tuesdayResultHundredths)
                          ->setWednesdayMorningStart($wednesdayMorningStart)
                          ->setWednesdayMorningEnd($wednesdayMorningEnd)
                          ->setWednesdayAfternoonStart($wednesdayAfternoonStart)
                          ->setWednesdayAfternoonEnd($wednesdayAfternoonEnd)
                          ->setWednesdayStart($wednesdayStart)
                          ->setWednesdayEnd($wednesdayEnd)
                          ->setWednesdayResultStandard($wednesdayResultStandard)
                          ->setWednesdayResultHundredths($wednesdayResultHundredths)
                          ->setThursdayMorningStart($thursdayMorningStart)
                          ->setThursdayMorningEnd($thursdayMorningEnd)
                          ->setThursdayAfternoonStart($thursdayAfternoonStart)
                          ->setThursdayAfternoonEnd($thursdayAfternoonEnd)
                          ->setThursdayStart($thursdayStart)
                          ->setThursdayEnd($thursdayEnd)
                          ->setThursdayResultStandard($thursdayResultStandard)
                          ->setThursdayResultHundredths($thursdayResultHundredths)
                          ->setFridayMorningStart($fridayMorningStart)
                          ->setFridayMorningEnd($fridayMorningEnd)
                          ->setFridayAfternoonStart($fridayAfternoonStart)
                          ->setFridayAfternoonEnd($fridayAfternoonEnd)
                          ->setFridayStart($fridayStart)
                          ->setFridayEnd($fridayEnd)
                          ->setFridayResultStandard($fridayResultStandard)
                          ->setFridayResultHundredths($fridayResultHundredths)
                          ->setSaturdayMorningStart($saturdayMorningStart)
                          ->setSaturdayMorningEnd($saturdayMorningEnd)
                          ->setSaturdayAfternoonStart($saturdayAfternoonStart)
                          ->setSaturdayAfternoonEnd($saturdayAfternoonEnd)
                          ->setSaturdayStart($saturdayStart)
                          ->setSaturdayEnd($saturdayEnd)
                          ->setSaturdayResultStandard($saturdayResultStandard)
                          ->setSaturdayResultHundredths($saturdayResultHundredths)
                          ->setFinalStandardResult($finalStandardResult)
                          ->setFinalHundredthsResult($finalHundredthsResult)
                          ->setUserId($user->getId())
                        ;

                    $result = $table->insertNew();
                
                    if ($result) {
                        $errorsList = [];
                        unset($_SESSION['token']);
                        $_SESSION['tableSuccess'] = "Votre tableau d'heures a bien été enregister, vous pouvez le consulter depuis votre espace personnel";

                        return $this->redirectTo('profil', $user->getNickname());
                    }

                    $errorsList[] = 'Une erreur s\'est produite, veuillez réessayer plus tard ou contacter un administarteur';

                }

                $viewDatas = [
                    'errorsList' => $errorsList,
                ];

                return $this->render('main/table.tpl.php', $viewDatas);

            }
        }

        return $this->redirectTo('login');
    }

    public function deleteTable ($id)
    {

        $user = $_SESSION['connectedUser'];

        if ($user) {

            $authenticator = new Authentication($this->router);

            if ($authenticator->checkAuthentication($user)) {
                $table = Table::find($id);

                $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
                
                $errorsList = [];
                
                if(empty($token) || $token != $_SESSION['csrfToken']){
                    $errorsList[] = "Erreur CSRF !";
                }
                
                if (empty($errorsList)) {
        
                    if($table) {
                        $result = $table->delete();

                        if($result) {

                            $_SESSION['tableSuccess'] = "Votre tableau a bien été supprimer";

                            return $this->redirectTo('profil', $user->getNickname());
                        }

                        $errorsList[] = "Une erreur s'est produite, veuillez réessayer plus tard ou contacter un administrateur";

                    }
                }
        
                $viewDatas = [
                    'errorsList' => $errorsList,
                    'table'      => $table,
                    'oldValue'   => [
                        'oldToken' => $token 
                    ],
                ];
                
                return $this->render('tables/show.tpl.php', $viewDatas);
            }

            return $this->redirectTo('login');
        }

    }
}