<?php

namespace App\Models;

use PDO;
use App\Utils\Database;

class Table 
{

    private $id;

    private $week_start;

    private $week_end;

    private $monday_morning_start;

    private $monday_morning_end;

    private $monday_afternoon_start;

    private $monday_afternoon_end;

    private $monday_start;

    private $monday_end;

    private $monday_result_standard;

    private $monday_result_hundredths;

    private $tuesday_morning_start;

    private $tuesday_morning_end;

    private $tuesday_afternoon_start;

    private $tuesday_afternoon_end;

    private $tuesday_start;

    private $tuesday_end;
    
    private $tuesday_result_standard;

    private $tuesday_result_hundredths;

    private $wednesday_morning_start;

    private $wednesday_morning_end;

    private $wednesday_afternoon_start;

    private $wednesday_afternoon_end;

    private $wednesday_start;

    private $wednesday_end;
    
    private $wednesday_result_standard;

    private $wednesday_result_hundredths;

    private $thursday_morning_start;

    private $thursday_morning_end;

    private $thursday_afternoon_start;

    private $thursday_afternoon_end;

    private $thursday_start;

    private $thursday_end;
    
    private $thursday_result_standard;

    private $thursday_result_hundredths;

    private $friday_morning_start;

    private $friday_morning_end;

    private $friday_afternoon_start;

    private $friday_afternoon_end;

    private $friday_start;

    private $friday_end;
    
    private $friday_result_standard;

    private $friday_result_hundredths;

    private $saturday_morning_start;

    private $saturday_morning_end;

    private $saturday_afternoon_start;

    private $saturday_afternoon_end;

    private $saturday_start;

    private $saturday_end;
    
    private $saturday_result_standard;

    private $saturday_result_hundredths;

    private $final_standard_result;

    private $final_hundredths_result;

    private $userId;

    public static function find ($id) 
    {
        $pdo = Database::getPDO();
        
        $sql = "SELECT *
               FROM `table`
               WHERE id = $id
        ";

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchObject(self::class);
        // dd(" la je suis dans l entité" ,$result);
        return $result;
    }

    public function delete ()
    {
        $pdo = Database::getPDO();

        $sql= "DELETE FROM `table` WHERE id = :id
        ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);

        $result = $pdoStatement->execute();

        if ($result) {
            return true;
        }

        return false;
    }

    public static function findAllByUserId ($id)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *
                FROM `table`
                WHERE user_id = :id 
        ";

        $pdoStatement= $pdo->prepare($sql);

        $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

        $pdoStatement->execute();

        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Table');

        return $result;
    }

    public function insertNew () 
    {
        $pdo = Database::getPDO();

        $sql = " INSERT INTO `table` (`week_start`, `week_end`, `monday_morning_start`, `monday_morning_end`, `monday_afternoon_start`, `monday_afternoon_end`, `monday_start`, `monday_end`, `monday_result_standard`, `monday_result_hundredths`, `tuesday_morning_start`, `tuesday_morning_end`, `tuesday_afternoon_start`, `tuesday_afternoon_end`, `tuesday_start`, `tuesday_end`, `tuesday_result_standard`, `tuesday_result_hundredths`, `wednesday_morning_start`, `wednesday_morning_end`, `wednesday_afternoon_start`, `wednesday_afternoon_end`, `wednesday_start`, `wednesday_end`, `wednesday_result_standard`, `wednesday_result_hundredths`, `thursday_morning_start`, `thursday_morning_end`, `thursday_afternoon_start`, `thursday_afternoon_end`, `thursday_start`, `thursday_end`, `thursday_result_standard`, `thursday_result_hundredths`, `friday_morning_start`, `friday_morning_end`, `friday_afternoon_start`, `friday_afternoon_end`, `friday_start`, `friday_end`, `friday_result_standard`, `friday_result_hundredths`, `saturday_morning_start`, `saturday_morning_end`, `saturday_afternoon_start`, `saturday_afternoon_end`, `saturday_start`, `saturday_end`, `saturday_result_standard`, `saturday_result_hundredths`, `final_standard_result`, `final_hundredths_result`, `user_id`) VALUES ( :weekStart, :weekEnd , :mondayMorningStart ,:mondayMorningEnd ,:mondayAfternoonStart ,:mondayAfternoonEnd ,:mondayStart ,:mondayEnd ,:mondayResultStandard ,:mondayResultHundredths ,:tuesdayMorningStart ,:tuesdayMorningEnd ,:tuesdayAfternoonStart ,:tuesdayAfternoonEnd ,:tuesdayStart ,:tuesdayEnd ,:tuesdayResultStandard ,:tuesdayResultHundredths ,:wednesdayMorningStart ,:wednesdayMorningEnd ,:wednesdayAfternoonStart ,:wednesdayAfternoonEnd ,:wednesdayStart ,:wednesdayEnd ,:wednesdayResultStandard ,:wednesdayResultHundredths ,:thursdayMorningStart ,:thursdayMorningEnd ,:thursdayAfternoonStart ,:thursdayAfternoonEnd ,:thursdayStart ,:thursdayEnd ,:thursdayResultStandard ,:thursdayResultHundredths ,:fridayMorningStart ,:fridayMorningEnd ,:fridayAfternoonStart ,:fridayAfternoonEnd ,:fridayStart ,:fridayEnd ,:fridayResultStandard ,:fridayResultHundredths ,:saturdayMorningStart ,:saturdayMorningEnd ,:saturdayAfternoonStart ,:saturdayAfternoonEnd ,:saturdayStart ,:saturdayEnd ,:saturdayResultStandard  ,:saturdayResultHundredths ,:finalStandardResult ,:finalHundredthsResult , :user_id)";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':weekStart', $this->week_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':weekEnd', $this->week_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayMorningStart', $this->monday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayMorningEnd', $this->monday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayAfternoonStart', $this->monday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayAfternoonEnd', $this->monday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayStart', $this->monday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayEnd', $this->monday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayResultStandard', $this->monday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mondayResultHundredths', $this->monday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayMorningStart', $this->tuesday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayMorningEnd', $this->tuesday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayAfternoonStart', $this->tuesday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayAfternoonEnd', $this->tuesday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayStart', $this->tuesday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayEnd', $this->tuesday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayResultStandard', $this->tuesday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tuesdayResultHundredths', $this->tuesday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayMorningStart', $this->wednesday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayMorningEnd', $this->wednesday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayAfternoonStart', $this->wednesday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayAfternoonEnd', $this->wednesday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayStart', $this->wednesday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayEnd', $this->wednesday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayResultStandard', $this->wednesday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':wednesdayResultHundredths', $this->wednesday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayMorningStart', $this->thursday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayMorningEnd', $this->thursday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayAfternoonStart', $this->thursday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayAfternoonEnd', $this->thursday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayStart', $this->thursday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayEnd', $this->thursday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayResultStandard', $this->thursday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':thursdayResultHundredths', $this->thursday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayMorningStart', $this->friday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayMorningEnd', $this->friday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayAfternoonStart', $this->friday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayAfternoonEnd', $this->friday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayStart', $this->friday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayEnd', $this->friday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayResultStandard', $this->friday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':fridayResultHundredths', $this->friday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayMorningStart', $this->saturday_morning_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayMorningEnd', $this->saturday_morning_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayAfternoonStart', $this->saturday_afternoon_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayAfternoonEnd', $this->saturday_afternoon_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayStart', $this->saturday_start, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayEnd', $this->saturday_end, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayResultStandard', $this->saturday_result_standard, PDO::PARAM_STR);
        $pdoStatement->bindValue(':saturdayResultHundredths', $this->saturday_result_hundredths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':finalStandardResult', $this->final_standard_result, PDO::PARAM_STR);
        $pdoStatement->bindValue(':finalHundredthsResult', $this->final_hundredths_result, PDO::PARAM_STR);
        $pdoStatement->bindValue(':user_id', $this->userId, PDO::PARAM_INT);
        
        $result = $pdoStatement->execute();
        
        
        if ($result) {
            $this->id = $pdo->lastInsertId();

            return true;
        }

        return false;

    }
   

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of week_start
     */ 
    public function getWeekStart()
    {
        return $this->week_start;
    }

    /**
     * Set the value of week_start
     *
     * @return  self
     */ 
    public function setWeekStart($week_start)
    {
        $this->week_start = $week_start;

        return $this;
    }

    /**
     * Get the value of week_end
     */ 
    public function getWeekEnd()
    {
        return $this->week_end;
    }

    /**
     * Set the value of week_end
     *
     * @return  self
     */ 
    public function setWeekEnd($week_end)
    {
        $this->week_end = $week_end;

        return $this;
    }

    /**
     * Get the value of monday_morning_start
     */ 
    public function getMondayMorningStart()
    {
        return $this->monday_morning_start;
    }

    /**
     * Set the value of monday_morning_start
     *
     * @return  self
     */ 
    public function setMondayMorningStart($monday_morning_start)
    {
        $this->monday_morning_start = $monday_morning_start;

        return $this;
    }

    /**
     * Get the value of monday_morning_end
     */ 
    public function getMondayMorningEnd()
    {
        return $this->monday_morning_end;
    }

    /**
     * Set the value of monday_morning_end
     *
     * @return  self
     */ 
    public function setMondayMorningEnd($monday_morning_end)
    {
        $this->monday_morning_end = $monday_morning_end;

        return $this;
    }

    /**
     * Get the value of monday_afternoon_start
     */ 
    public function getMondayAfternoonStart()
    {
        return $this->monday_afternoon_start;
    }

    /**
     * Set the value of monday_afternoon_start
     *
     * @return  self
     */ 
    public function setMondayAfternoonStart($monday_afternoon_start)
    {
        $this->monday_afternoon_start = $monday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of monday_afternoon_end
     */ 
    public function getMondayAfternoonEnd()
    {
        return $this->monday_afternoon_end;
    }

    /**
     * Set the value of monday_afternoon_end
     *
     * @return  self
     */ 
    public function setMondayAfternoonEnd($monday_afternoon_end)
    {
        $this->monday_afternoon_end = $monday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of monday_start
     */ 
    public function getMondayStart()
    {
        return $this->monday_start;
    }

    /**
     * Set the value of monday_start
     *
     * @return  self
     */ 
    public function setMondayStart($monday_start)
    {
        $this->monday_start = $monday_start;

        return $this;
    }

    /**
     * Get the value of monday_end
     */ 
    public function getMondayEnd()
    {
        return $this->monday_end;
    }

    /**
     * Set the value of monday_end
     *
     * @return  self
     */ 
    public function setMondayEnd($monday_end)
    {
        $this->monday_end = $monday_end;

        return $this;
    }

    /**
     * Get the value of monday_result_standard
     */ 
    public function getMondayResultStandard()
    {
        return $this->monday_result_standard;
    }

    /**
     * Set the value of monday_result_standard
     *
     * @return  self
     */ 
    public function setMondayResultStandard($monday_result_standard)
    {
        $this->monday_result_standard = $monday_result_standard;

        return $this;
    }

    /**
     * Get the value of monday_result_hundredths
     */ 
    public function getMondayResultHundredths()
    {
        return $this->monday_result_hundredths;
    }

    /**
     * Set the value of monday_result_hundredths
     *
     * @return  self
     */ 
    public function setMondayResultHundredths($monday_result_hundredths)
    {
        $this->monday_result_hundredths = $monday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of tuesday_morning_start
     */ 
    public function getTuesdayMorningStart()
    {
        return $this->tuesday_morning_start;
    }

    /**
     * Set the value of tuesday_morning_start
     *
     * @return  self
     */ 
    public function setTuesdayMorningStart($tuesday_morning_start)
    {
        $this->tuesday_morning_start = $tuesday_morning_start;

        return $this;
    }

    /**
     * Get the value of tuesday_morning_end
     */ 
    public function getTuesdayMorningEnd()
    {
        return $this->tuesday_morning_end;
    }

    /**
     * Set the value of tuesday_morning_end
     *
     * @return  self
     */ 
    public function setTuesdayMorningEnd($tuesday_morning_end)
    {
        $this->tuesday_morning_end = $tuesday_morning_end;

        return $this;
    }

    /**
     * Get the value of tuesday_afternoon_start
     */ 
    public function getTuesdayAfternoonStart()
    {
        return $this->tuesday_afternoon_start;
    }

    /**
     * Set the value of tuesday_afternoon_start
     *
     * @return  self
     */ 
    public function setTuesdayAfternoonStart($tuesday_afternoon_start)
    {
        $this->tuesday_afternoon_start = $tuesday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of tuesday_afternoon_end
     */ 
    public function getTuesdayAfternoonEnd()
    {
        return $this->tuesday_afternoon_end;
    }

    /**
     * Set the value of tuesday_afternoon_end
     *
     * @return  self
     */ 
    public function setTuesdayAfternoonEnd($tuesday_afternoon_end)
    {
        $this->tuesday_afternoon_end = $tuesday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of tuesday_start
     */ 
    public function getTuesdayStart()
    {
        return $this->tuesday_start;
    }

    /**
     * Set the value of tuesday_start
     *
     * @return  self
     */ 
    public function setTuesdayStart($tuesday_start)
    {
        $this->tuesday_start = $tuesday_start;

        return $this;
    }

    /**
     * Get the value of tuesday_end
     */ 
    public function getTuesdayEnd()
    {
        return $this->tuesday_end;
    }

    /**
     * Set the value of tuesday_end
     *
     * @return  self
     */ 
    public function setTuesdayEnd($tuesday_end)
    {
        $this->tuesday_end = $tuesday_end;

        return $this;
    }

    /**
     * Get the value of tuesday_result_standard
     */ 
    public function getTuesdayResultStandard()
    {
        return $this->tuesday_result_standard;
    }

    /**
     * Set the value of tuesday_result_standard
     *
     * @return  self
     */ 
    public function setTuesdayResultStandard($tuesday_result_standard)
    {
        $this->tuesday_result_standard = $tuesday_result_standard;

        return $this;
    }

    /**
     * Get the value of tuesday_result_hundredths
     */ 
    public function getTuesdayResultHundredths()
    {
        return $this->tuesday_result_hundredths;
    }

    /**
     * Set the value of tuesday_result_hundredths
     *
     * @return  self
     */ 
    public function setTuesdayResultHundredths($tuesday_result_hundredths)
    {
        $this->tuesday_result_hundredths = $tuesday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of wednesday_morning_start
     */ 
    public function getWednesdayMorningStart()
    {
        return $this->wednesday_morning_start;
    }

    /**
     * Set the value of wednesday_morning_start
     *
     * @return  self
     */ 
    public function setWednesdayMorningStart($wednesday_morning_start)
    {
        $this->wednesday_morning_start = $wednesday_morning_start;

        return $this;
    }

    /**
     * Get the value of wednesday_morning_end
     */ 
    public function getWednesdayMorningEnd()
    {
        return $this->wednesday_morning_end;
    }

    /**
     * Set the value of wednesday_morning_end
     *
     * @return  self
     */ 
    public function setWednesdayMorningEnd($wednesday_morning_end)
    {
        $this->wednesday_morning_end = $wednesday_morning_end;

        return $this;
    }

    /**
     * Get the value of wednesday_afternoon_start
     */ 
    public function getWednesdayAfternoonStart()
    {
        return $this->wednesday_afternoon_start;
    }

    /**
     * Set the value of wednesday_afternoon_start
     *
     * @return  self
     */ 
    public function setWednesdayAfternoonStart($wednesday_afternoon_start)
    {
        $this->wednesday_afternoon_start = $wednesday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of wednesday_afternoon_end
     */ 
    public function getWednesdayAfternoonEnd()
    {
        return $this->wednesday_afternoon_end;
    }

    /**
     * Set the value of wednesday_afternoon_end
     *
     * @return  self
     */ 
    public function setWednesdayAfternoonEnd($wednesday_afternoon_end)
    {
        $this->wednesday_afternoon_end = $wednesday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of wednesday_start
     */ 
    public function getWednesdayStart()
    {
        return $this->wednesday_start;
    }

    /**
     * Set the value of wednesday_start
     *
     * @return  self
     */ 
    public function setWednesdayStart($wednesday_start)
    {
        $this->wednesday_start = $wednesday_start;

        return $this;
    }

    /**
     * Get the value of wednesday_end
     */ 
    public function getWednesdayEnd()
    {
        return $this->wednesday_end;
    }

    /**
     * Set the value of wednesday_end
     *
     * @return  self
     */ 
    public function setWednesdayEnd($wednesday_end)
    {
        $this->wednesday_end = $wednesday_end;

        return $this;
    }

    /**
     * Get the value of wednesday_result_standard
     */ 
    public function getWednesdayResultStandard()
    {
        return $this->wednesday_result_standard;
    }

    /**
     * Set the value of wednesday_result_standard
     *
     * @return  self
     */ 
    public function setWednesdayResultStandard($wednesday_result_standard)
    {
        $this->wednesday_result_standard = $wednesday_result_standard;

        return $this;
    }

    /**
     * Get the value of wednesday_result_hundredths
     */ 
    public function getWednesdayResultHundredths()
    {
        return $this->wednesday_result_hundredths;
    }

    /**
     * Set the value of wednesday_result_hundredths
     *
     * @return  self
     */ 
    public function setWednesdayResultHundredths($wednesday_result_hundredths)
    {
        $this->wednesday_result_hundredths = $wednesday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of thursday_morning_start
     */ 
    public function getThursdayMorningStart()
    {
        return $this->thursday_morning_start;
    }

    /**
     * Set the value of thursday_morning_start
     *
     * @return  self
     */ 
    public function setThursdayMorningStart($thursday_morning_start)
    {
        $this->thursday_morning_start = $thursday_morning_start;

        return $this;
    }

    /**
     * Get the value of thursday_morning_end
     */ 
    public function getThursdayMorningEnd()
    {
        return $this->thursday_morning_end;
    }

    /**
     * Set the value of thursday_morning_end
     *
     * @return  self
     */ 
    public function setThursdayMorningEnd($thursday_morning_end)
    {
        $this->thursday_morning_end = $thursday_morning_end;

        return $this;
    }

    /**
     * Get the value of thursday_afternoon_start
     */ 
    public function getThursdayAfternoonStart()
    {
        return $this->thursday_afternoon_start;
    }

    /**
     * Set the value of thursday_afternoon_start
     *
     * @return  self
     */ 
    public function setThursdayAfternoonStart($thursday_afternoon_start)
    {
        $this->thursday_afternoon_start = $thursday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of thursday_afternoon_end
     */ 
    public function getThursdayAfternoonEnd()
    {
        return $this->thursday_afternoon_end;
    }

    /**
     * Set the value of thursday_afternoon_end
     *
     * @return  self
     */ 
    public function setThursdayAfternoonEnd($thursday_afternoon_end)
    {
        $this->thursday_afternoon_end = $thursday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of thursday_start
     */ 
    public function getThursdayStart()
    {
        return $this->thursday_start;
    }

    /**
     * Set the value of thursday_start
     *
     * @return  self
     */ 
    public function setThursdayStart($thursday_start)
    {
        $this->thursday_start = $thursday_start;

        return $this;
    }

    /**
     * Get the value of thursday_end
     */ 
    public function getThursdayEnd()
    {
        return $this->thursday_end;
    }

    /**
     * Set the value of thursday_end
     *
     * @return  self
     */ 
    public function setThursdayEnd($thursday_end)
    {
        $this->thursday_end = $thursday_end;

        return $this;
    }

    /**
     * Get the value of thursday_result_standard
     */ 
    public function getThursdayResultStandard()
    {
        return $this->thursday_result_standard;
    }

    /**
     * Set the value of thursday_result_standard
     *
     * @return  self
     */ 
    public function setThursdayResultStandard($thursday_result_standard)
    {
        $this->thursday_result_standard = $thursday_result_standard;

        return $this;
    }

    /**
     * Get the value of thursday_result_hundredths
     */ 
    public function getThursdayResultHundredths()
    {
        return $this->thursday_result_hundredths;
    }

    /**
     * Set the value of thursday_result_hundredths
     *
     * @return  self
     */ 
    public function setThursdayResultHundredths($thursday_result_hundredths)
    {
        $this->thursday_result_hundredths = $thursday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of friday_morning_start
     */ 
    public function getFridayMorningStart()
    {
        return $this->friday_morning_start;
    }

    /**
     * Set the value of friday_morning_start
     *
     * @return  self
     */ 
    public function setFridayMorningStart($friday_morning_start)
    {
        $this->friday_morning_start = $friday_morning_start;

        return $this;
    }

    /**
     * Get the value of friday_morning_end
     */ 
    public function getFridayMorningEnd()
    {
        return $this->friday_morning_end;
    }

    /**
     * Set the value of friday_morning_end
     *
     * @return  self
     */ 
    public function setFridayMorningEnd($friday_morning_end)
    {
        $this->friday_morning_end = $friday_morning_end;

        return $this;
    }

    /**
     * Get the value of friday_afternoon_start
     */ 
    public function getFridayAfternoonStart()
    {
        return $this->friday_afternoon_start;
    }

    /**
     * Set the value of friday_afternoon_start
     *
     * @return  self
     */ 
    public function setFridayAfternoonStart($friday_afternoon_start)
    {
        $this->friday_afternoon_start = $friday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of friday_afternoon_end
     */ 
    public function getFridayAfternoonEnd()
    {
        return $this->friday_afternoon_end;
    }

    /**
     * Set the value of friday_afternoon_end
     *
     * @return  self
     */ 
    public function setFridayAfternoonEnd($friday_afternoon_end)
    {
        $this->friday_afternoon_end = $friday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of friday_start
     */ 
    public function getFridayStart()
    {
        return $this->friday_start;
    }

    /**
     * Set the value of friday_start
     *
     * @return  self
     */ 
    public function setFridayStart($friday_start)
    {
        $this->friday_start = $friday_start;

        return $this;
    }

    /**
     * Get the value of friday_end
     */ 
    public function getFridayEnd()
    {
        return $this->friday_end;
    }

    /**
     * Set the value of friday_end
     *
     * @return  self
     */ 
    public function setFridayEnd($friday_end)
    {
        $this->friday_end = $friday_end;

        return $this;
    }

    /**
     * Get the value of friday_result_standard
     */ 
    public function getFridayResultStandard()
    {
        return $this->friday_result_standard;
    }

    /**
     * Set the value of friday_result_standard
     *
     * @return  self
     */ 
    public function setFridayResultStandard($friday_result_standard)
    {
        $this->friday_result_standard = $friday_result_standard;

        return $this;
    }

    /**
     * Get the value of friday_result_hundredths
     */ 
    public function getFridayResultHundredths()
    {
        return $this->friday_result_hundredths;
    }

    /**
     * Set the value of friday_result_hundredths
     *
     * @return  self
     */ 
    public function setFridayResultHundredths($friday_result_hundredths)
    {
        $this->friday_result_hundredths = $friday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of saturday_morning_start
     */ 
    public function getSaturdayMorningStart()
    {
        return $this->saturday_morning_start;
    }

    /**
     * Set the value of saturday_morning_start
     *
     * @return  self
     */ 
    public function setSaturdayMorningStart($saturday_morning_start)
    {
        $this->saturday_morning_start = $saturday_morning_start;

        return $this;
    }

    /**
     * Get the value of saturday_morning_end
     */ 
    public function getSaturdayMorningEnd()
    {
        return $this->saturday_morning_end;
    }

    /**
     * Set the value of saturday_morning_end
     *
     * @return  self
     */ 
    public function setSaturdayMorningEnd($saturday_morning_end)
    {
        $this->saturday_morning_end = $saturday_morning_end;

        return $this;
    }

    /**
     * Get the value of saturday_afternoon_start
     */ 
    public function getSaturdayAfternoonStart()
    {
        return $this->saturday_afternoon_start;
    }

    /**
     * Set the value of saturday_afternoon_start
     *
     * @return  self
     */ 
    public function setSaturdayAfternoonStart($saturday_afternoon_start)
    {
        $this->saturday_afternoon_start = $saturday_afternoon_start;

        return $this;
    }

    /**
     * Get the value of saturday_afternoon_end
     */ 
    public function getSaturdayAfternoonEnd()
    {
        return $this->saturday_afternoon_end;
    }

    /**
     * Set the value of saturday_afternoon_end
     *
     * @return  self
     */ 
    public function setSaturdayAfternoonEnd($saturday_afternoon_end)
    {
        $this->saturday_afternoon_end = $saturday_afternoon_end;

        return $this;
    }

    /**
     * Get the value of saturday_start
     */ 
    public function getSaturdayStart()
    {
        return $this->saturday_start;
    }

    /**
     * Set the value of saturday_start
     *
     * @return  self
     */ 
    public function setSaturdayStart($saturday_start)
    {
        $this->saturday_start = $saturday_start;

        return $this;
    }

    /**
     * Get the value of saturday_end
     */ 
    public function getSaturdayEnd()
    {
        return $this->saturday_end;
    }

    /**
     * Set the value of saturday_end
     *
     * @return  self
     */ 
    public function setSaturdayEnd($saturday_end)
    {
        $this->saturday_end = $saturday_end;

        return $this;
    }

    /**
     * Get the value of saturday_result_standard
     */ 
    public function getSaturdayResultStandard()
    {
        return $this->saturday_result_standard;
    }

    /**
     * Set the value of saturday_result_standard
     *
     * @return  self
     */ 
    public function setSaturdayResultStandard($saturday_result_standard)
    {
        $this->saturday_result_standard = $saturday_result_standard;

        return $this;
    }

    /**
     * Get the value of saturday_result_hundredths
     */ 
    public function getSaturdayResultHundredths()
    {
        return $this->saturday_result_hundredths;
    }

    /**
     * Set the value of saturday_result_hundredths
     *
     * @return  self
     */ 
    public function setSaturdayResultHundredths($saturday_result_hundredths)
    {
        $this->saturday_result_hundredths = $saturday_result_hundredths;

        return $this;
    }

    /**
     * Get the value of final_standard_result
     */ 
    public function getFinalStandardResult()
    {
        return $this->final_standard_result;
    }

    /**
     * Set the value of final_standard_result
     *
     * @return  self
     */ 
    public function setFinalStandardResult($final_standard_result)
    {
        $this->final_standard_result = $final_standard_result;

        return $this;
    }

    /**
     * Get the value of final_hundredths_result
     */ 
    public function getFinalHundredthsResult()
    {
        return $this->final_hundredths_result;
    }

    /**
     * Set the value of final_hundredths_result
     *
     * @return  self
     */ 
    public function setFinalHundredthsResult($final_hundredths_result)
    {
        $this->final_hundredths_result = $final_hundredths_result;

        return $this;
    }
}