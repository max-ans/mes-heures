<?php

namespace App\Models;

use App\Utils\Database;

class Table 
{

    private $id;

    private $weekStart;

    private $weekEnd;

    private $mondayMorningStart;

    private $mondayMorningEnd;

    private $mondayAfternoonStart;

    private $mondayAfternoonEnd;

    private $mondayStart;

    private $mondayEnd;

    private $mondayResultStandard;

    private $mondayResultHundredths;

    private $tuesdayMorningStart;

    private $tuesdayMorningEnd;

    private $tuesdayAfternoonStart;

    private $tuesdayAfternoonEnd;

    private $tuesdayStart;

    private $tuesdayEnd;
    
    private $tuesdayResultStandard;

    private $tuesdayResultHundredths;

    private $wednesdayMorningStart;

    private $wednesdayMorningEnd;

    private $wednesdayAfternoonStart;

    private $wednesdayAfternoonEnd;

    private $wednesdayStart;

    private $wednesdayEnd;
    
    private $wednesdayResultStandard;

    private $wednesdayResultHundredths;

    private $thursdayMorningStart;

    private $thursdayMorningEnd;

    private $thursdayAfternoonStart;

    private $thursdayAfternoonEnd;

    private $thursdayStart;

    private $thursdayEnd;
    
    private $thursdayResultStandard;

    private $thursdayResultHundredths;

    private $fridayMorningStart;

    private $fridayMorningEnd;

    private $fridayAfternoonStart;

    private $fridayAfternoonEnd;

    private $fridayStart;

    private $fridayEnd;
    
    private $fridayResultStandard;

    private $fridayResultHundredths;

    private $saturdayMorningStart;

    private $saturdayMorningEnd;

    private $saturdayAfternoonStart;

    private $saturdayAfternoonEnd;

    private $saturdayStart;

    private $saturdayEnd;
    
    private $saturdayResultStandard;

    private $saturdayResultHundredths;

    private $finalStandardResult;

    private $finalHundredthsResult;

    public static function find ($id) 
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *
               FROM `table`
               WHERE $id
        ";

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchObject(self::class);

        return $result;
    }
   

    /**
     * Get the value of weekStart
     */
    public function getWeekStart()
    {
        return $this->weekStart;
    }

    /**
     * Set the value of weekStart
     *
     * @return  self
     */
    public function setWeekStart($weekStart)
    {
        $this->weekStart = $weekStart;

        return $this;
    }

    /**
     * Get the value of weekEnd
     */
    public function getWeekEnd()
    {
        return $this->weekEnd;
    }

    /**
     * Set the value of weekEnd
     *
     * @return  self
     */
    public function setWeekEnd($weekEnd)
    {
        $this->weekEnd = $weekEnd;

        return $this;
    }

    /**
     * Get the value of mondayMorningStart
     */
    public function getMondayMorningStart()
    {
        return $this->mondayMorningStart;
    }

    /**
     * Set the value of mondayMorningStart
     *
     * @return  self
     */
    public function setMondayMorningStart($mondayMorningStart)
    {
        $this->mondayMorningStart = $mondayMorningStart;

        return $this;
    }

    /**
     * Get the value of mondayMorningEnd
     */
    public function getMondayMorningEnd()
    {
        return $this->mondayMorningEnd;
    }

    /**
     * Set the value of mondayMorningEnd
     *
     * @return  self
     */
    public function setMondayMorningEnd($mondayMorningEnd)
    {
        $this->mondayMorningEnd = $mondayMorningEnd;

        return $this;
    }

    /**
     * Get the value of mondayAfternoonStart
     */
    public function getMondayAfternoonStart()
    {
        return $this->mondayAfternoonStart;
    }

    /**
     * Set the value of mondayAfternoonStart
     *
     * @return  self
     */
    public function setMondayAfternoonStart($mondayAfternoonStart)
    {
        $this->mondayAfternoonStart = $mondayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of mondayAfternoonEnd
     */
    public function getMondayAfternoonEnd()
    {
        return $this->mondayAfternoonEnd;
    }

    /**
     * Set the value of mondayAfternoonEnd
     *
     * @return  self
     */
    public function setMondayAfternoonEnd($mondayAfternoonEnd)
    {
        $this->mondayAfternoonEnd = $mondayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of mondayStart
     */
    public function getMondayStart()
    {
        return $this->mondayStart;
    }

    /**
     * Set the value of mondayStart
     *
     * @return  self
     */
    public function setMondayStart($mondayStart)
    {
        $this->mondayStart = $mondayStart;

        return $this;
    }

    /**
     * Get the value of mondayEnd
     */
    public function getMondayEnd()
    {
        return $this->mondayEnd;
    }

    /**
     * Set the value of mondayEnd
     *
     * @return  self
     */
    public function setMondayEnd($mondayEnd)
    {
        $this->mondayEnd = $mondayEnd;

        return $this;
    }

    /**
     * Get the value of mondayResultStandard
     */
    public function getMondayResultStandard()
    {
        return $this->mondayResultStandard;
    }

    /**
     * Set the value of mondayResultStandard
     *
     * @return  self
     */
    public function setMondayResultStandard($mondayResultStandard)
    {
        $this->mondayResultStandard = $mondayResultStandard;

        return $this;
    }

    /**
     * Get the value of mondayResultHundredths
     */
    public function getMondayResultHundredths()
    {
        return $this->mondayResultHundredths;
    }

    /**
     * Set the value of mondayResultHundredths
     *
     * @return  self
     */
    public function setMondayResultHundredths($mondayResultHundredths)
    {
        $this->mondayResultHundredths = $mondayResultHundredths;

        return $this;
    }

    /**
     * Get the value of tuesdayMorningStart
     */
    public function getTuesdayMorningStart()
    {
        return $this->tuesdayMorningStart;
    }

    /**
     * Set the value of tuesdayMorningStart
     *
     * @return  self
     */
    public function setTuesdayMorningStart($tuesdayMorningStart)
    {
        $this->tuesdayMorningStart = $tuesdayMorningStart;

        return $this;
    }

    /**
     * Get the value of tuesdayMorningEnd
     */
    public function getTuesdayMorningEnd()
    {
        return $this->tuesdayMorningEnd;
    }

    /**
     * Set the value of tuesdayMorningEnd
     *
     * @return  self
     */
    public function setTuesdayMorningEnd($tuesdayMorningEnd)
    {
        $this->tuesdayMorningEnd = $tuesdayMorningEnd;

        return $this;
    }

    /**
     * Get the value of tuesdayAfternoonStart
     */
    public function getTuesdayAfternoonStart()
    {
        return $this->tuesdayAfternoonStart;
    }

    /**
     * Set the value of tuesdayAfternoonStart
     *
     * @return  self
     */
    public function setTuesdayAfternoonStart($tuesdayAfternoonStart)
    {
        $this->tuesdayAfternoonStart = $tuesdayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of tuesdayAfternoonEnd
     */
    public function getTuesdayAfternoonEnd()
    {
        return $this->tuesdayAfternoonEnd;
    }

    /**
     * Set the value of tuesdayAfternoonEnd
     *
     * @return  self
     */
    public function setTuesdayAfternoonEnd($tuesdayAfternoonEnd)
    {
        $this->tuesdayAfternoonEnd = $tuesdayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of tuesdayStart
     */
    public function getTuesdayStart()
    {
        return $this->tuesdayStart;
    }

    /**
     * Set the value of tuesdayStart
     *
     * @return  self
     */
    public function setTuesdayStart($tuesdayStart)
    {
        $this->tuesdayStart = $tuesdayStart;

        return $this;
    }

    /**
     * Get the value of tuesdayEnd
     */
    public function getTuesdayEnd()
    {
        return $this->tuesdayEnd;
    }

    /**
     * Set the value of tuesdayEnd
     *
     * @return  self
     */
    public function setTuesdayEnd($tuesdayEnd)
    {
        $this->tuesdayEnd = $tuesdayEnd;

        return $this;
    }

    /**
     * Get the value of tuesdayResultStandard
     */
    public function getTuesdayResultStandard()
    {
        return $this->tuesdayResultStandard;
    }

    /**
     * Set the value of tuesdayResultStandard
     *
     * @return  self
     */
    public function setTuesdayResultStandard($tuesdayResultStandard)
    {
        $this->tuesdayResultStandard = $tuesdayResultStandard;

        return $this;
    }

    /**
     * Get the value of tuesdayResultHundredths
     */
    public function getTuesdayResultHundredths()
    {
        return $this->tuesdayResultHundredths;
    }

    /**
     * Set the value of tuesdayResultHundredths
     *
     * @return  self
     */
    public function setTuesdayResultHundredths($tuesdayResultHundredths)
    {
        $this->tuesdayResultHundredths = $tuesdayResultHundredths;

        return $this;
    }

    /**
     * Get the value of wednesdayMorningStart
     */
    public function getWednesdayMorningStart()
    {
        return $this->wednesdayMorningStart;
    }

    /**
     * Set the value of wednesdayMorningStart
     *
     * @return  self
     */
    public function setWednesdayMorningStart($wednesdayMorningStart)
    {
        $this->wednesdayMorningStart = $wednesdayMorningStart;

        return $this;
    }

    /**
     * Get the value of wednesdayMorningEnd
     */
    public function getWednesdayMorningEnd()
    {
        return $this->wednesdayMorningEnd;
    }

    /**
     * Set the value of wednesdayMorningEnd
     *
     * @return  self
     */
    public function setWednesdayMorningEnd($wednesdayMorningEnd)
    {
        $this->wednesdayMorningEnd = $wednesdayMorningEnd;

        return $this;
    }

    /**
     * Get the value of wednesdayAfternoonStart
     */
    public function getWednesdayAfternoonStart()
    {
        return $this->wednesdayAfternoonStart;
    }

    /**
     * Set the value of wednesdayAfternoonStart
     *
     * @return  self
     */
    public function setWednesdayAfternoonStart($wednesdayAfternoonStart)
    {
        $this->wednesdayAfternoonStart = $wednesdayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of wednesdayAfternoonEnd
     */
    public function getWednesdayAfternoonEnd()
    {
        return $this->wednesdayAfternoonEnd;
    }

    /**
     * Set the value of wednesdayAfternoonEnd
     *
     * @return  self
     */
    public function setWednesdayAfternoonEnd($wednesdayAfternoonEnd)
    {
        $this->wednesdayAfternoonEnd = $wednesdayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of wednesdayStart
     */
    public function getWednesdayStart()
    {
        return $this->wednesdayStart;
    }

    /**
     * Set the value of wednesdayStart
     *
     * @return  self
     */
    public function setWednesdayStart($wednesdayStart)
    {
        $this->wednesdayStart = $wednesdayStart;

        return $this;
    }

    /**
     * Get the value of wednesdayEnd
     */
    public function getWednesdayEnd()
    {
        return $this->wednesdayEnd;
    }

    /**
     * Set the value of wednesdayEnd
     *
     * @return  self
     */
    public function setWednesdayEnd($wednesdayEnd)
    {
        $this->wednesdayEnd = $wednesdayEnd;

        return $this;
    }

    /**
     * Get the value of wednesdayResultStandard
     */
    public function getWednesdayResultStandard()
    {
        return $this->wednesdayResultStandard;
    }

    /**
     * Set the value of wednesdayResultStandard
     *
     * @return  self
     */
    public function setWednesdayResultStandard($wednesdayResultStandard)
    {
        $this->wednesdayResultStandard = $wednesdayResultStandard;

        return $this;
    }

    /**
     * Get the value of wednesdayResultHundredths
     */
    public function getWednesdayResultHundredths()
    {
        return $this->wednesdayResultHundredths;
    }

    /**
     * Set the value of wednesdayResultHundredths
     *
     * @return  self
     */
    public function setWednesdayResultHundredths($wednesdayResultHundredths)
    {
        $this->wednesdayResultHundredths = $wednesdayResultHundredths;

        return $this;
    }

    /**
     * Get the value of thursdayMorningStart
     */
    public function getThursdayMorningStart()
    {
        return $this->thursdayMorningStart;
    }

    /**
     * Set the value of thursdayMorningStart
     *
     * @return  self
     */
    public function setThursdayMorningStart($thursdayMorningStart)
    {
        $this->thursdayMorningStart = $thursdayMorningStart;

        return $this;
    }

    /**
     * Get the value of thursdayMorningEnd
     */
    public function getThursdayMorningEnd()
    {
        return $this->thursdayMorningEnd;
    }

    /**
     * Set the value of thursdayMorningEnd
     *
     * @return  self
     */
    public function setThursdayMorningEnd($thursdayMorningEnd)
    {
        $this->thursdayMorningEnd = $thursdayMorningEnd;

        return $this;
    }

    /**
     * Get the value of thursdayAfternoonStart
     */
    public function getThursdayAfternoonStart()
    {
        return $this->thursdayAfternoonStart;
    }

    /**
     * Set the value of thursdayAfternoonStart
     *
     * @return  self
     */
    public function setThursdayAfternoonStart($thursdayAfternoonStart)
    {
        $this->thursdayAfternoonStart = $thursdayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of thursdayAfternoonEnd
     */
    public function getThursdayAfternoonEnd()
    {
        return $this->thursdayAfternoonEnd;
    }

    /**
     * Set the value of thursdayAfternoonEnd
     *
     * @return  self
     */
    public function setThursdayAfternoonEnd($thursdayAfternoonEnd)
    {
        $this->thursdayAfternoonEnd = $thursdayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of thursdayStart
     */
    public function getThursdayStart()
    {
        return $this->thursdayStart;
    }

    /**
     * Set the value of thursdayStart
     *
     * @return  self
     */
    public function setThursdayStart($thursdayStart)
    {
        $this->thursdayStart = $thursdayStart;

        return $this;
    }

    /**
     * Get the value of thursdayEnd
     */
    public function getThursdayEnd()
    {
        return $this->thursdayEnd;
    }

    /**
     * Set the value of thursdayEnd
     *
     * @return  self
     */
    public function setThursdayEnd($thursdayEnd)
    {
        $this->thursdayEnd = $thursdayEnd;

        return $this;
    }

    /**
     * Get the value of thursdayResultStandard
     */
    public function getThursdayResultStandard()
    {
        return $this->thursdayResultStandard;
    }

    /**
     * Set the value of thursdayResultStandard
     *
     * @return  self
     */
    public function setThursdayResultStandard($thursdayResultStandard)
    {
        $this->thursdayResultStandard = $thursdayResultStandard;

        return $this;
    }

    /**
     * Get the value of thursdayResultHundredths
     */
    public function getThursdayResultHundredths()
    {
        return $this->thursdayResultHundredths;
    }

    /**
     * Set the value of thursdayResultHundredths
     *
     * @return  self
     */
    public function setThursdayResultHundredths($thursdayResultHundredths)
    {
        $this->thursdayResultHundredths = $thursdayResultHundredths;

        return $this;
    }

    /**
     * Get the value of fridayMorningStart
     */
    public function getFridayMorningStart()
    {
        return $this->fridayMorningStart;
    }

    /**
     * Set the value of fridayMorningStart
     *
     * @return  self
     */
    public function setFridayMorningStart($fridayMorningStart)
    {
        $this->fridayMorningStart = $fridayMorningStart;

        return $this;
    }

    /**
     * Get the value of fridayMorningEnd
     */
    public function getFridayMorningEnd()
    {
        return $this->fridayMorningEnd;
    }

    /**
     * Set the value of fridayMorningEnd
     *
     * @return  self
     */
    public function setFridayMorningEnd($fridayMorningEnd)
    {
        $this->fridayMorningEnd = $fridayMorningEnd;

        return $this;
    }

    /**
     * Get the value of fridayAfternoonStart
     */
    public function getFridayAfternoonStart()
    {
        return $this->fridayAfternoonStart;
    }

    /**
     * Set the value of fridayAfternoonStart
     *
     * @return  self
     */
    public function setFridayAfternoonStart($fridayAfternoonStart)
    {
        $this->fridayAfternoonStart = $fridayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of fridayAfternoonEnd
     */
    public function getFridayAfternoonEnd()
    {
        return $this->fridayAfternoonEnd;
    }

    /**
     * Set the value of fridayAfternoonEnd
     *
     * @return  self
     */
    public function setFridayAfternoonEnd($fridayAfternoonEnd)
    {
        $this->fridayAfternoonEnd = $fridayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of fridayStart
     */
    public function getFridayStart()
    {
        return $this->fridayStart;
    }

    /**
     * Set the value of fridayStart
     *
     * @return  self
     */
    public function setFridayStart($fridayStart)
    {
        $this->fridayStart = $fridayStart;

        return $this;
    }

    /**
     * Get the value of fridayEnd
     */
    public function getFridayEnd()
    {
        return $this->fridayEnd;
    }

    /**
     * Set the value of fridayEnd
     *
     * @return  self
     */
    public function setFridayEnd($fridayEnd)
    {
        $this->fridayEnd = $fridayEnd;

        return $this;
    }

    /**
     * Get the value of fridayResultStandard
     */
    public function getFridayResultStandard()
    {
        return $this->fridayResultStandard;
    }

    /**
     * Set the value of fridayResultStandard
     *
     * @return  self
     */
    public function setFridayResultStandard($fridayResultStandard)
    {
        $this->fridayResultStandard = $fridayResultStandard;

        return $this;
    }

    /**
     * Get the value of fridayResultHundredths
     */
    public function getFridayResultHundredths()
    {
        return $this->fridayResultHundredths;
    }

    /**
     * Set the value of fridayResultHundredths
     *
     * @return  self
     */
    public function setFridayResultHundredths($fridayResultHundredths)
    {
        $this->fridayResultHundredths = $fridayResultHundredths;

        return $this;
    }

    /**
     * Get the value of saturdayMorningStart
     */
    public function getSaturdayMorningStart()
    {
        return $this->saturdayMorningStart;
    }

    /**
     * Set the value of saturdayMorningStart
     *
     * @return  self
     */
    public function setSaturdayMorningStart($saturdayMorningStart)
    {
        $this->saturdayMorningStart = $saturdayMorningStart;

        return $this;
    }

    /**
     * Get the value of saturdayMorningEnd
     */
    public function getSaturdayMorningEnd()
    {
        return $this->saturdayMorningEnd;
    }

    /**
     * Set the value of saturdayMorningEnd
     *
     * @return  self
     */
    public function setSaturdayMorningEnd($saturdayMorningEnd)
    {
        $this->saturdayMorningEnd = $saturdayMorningEnd;

        return $this;
    }

    /**
     * Get the value of saturdayAfternoonStart
     */
    public function getSaturdayAfternoonStart()
    {
        return $this->saturdayAfternoonStart;
    }

    /**
     * Set the value of saturdayAfternoonStart
     *
     * @return  self
     */
    public function setSaturdayAfternoonStart($saturdayAfternoonStart)
    {
        $this->saturdayAfternoonStart = $saturdayAfternoonStart;

        return $this;
    }

    /**
     * Get the value of saturdayAfternoonEnd
     */
    public function getSaturdayAfternoonEnd()
    {
        return $this->saturdayAfternoonEnd;
    }

    /**
     * Set the value of saturdayAfternoonEnd
     *
     * @return  self
     */
    public function setSaturdayAfternoonEnd($saturdayAfternoonEnd)
    {
        $this->saturdayAfternoonEnd = $saturdayAfternoonEnd;

        return $this;
    }

    /**
     * Get the value of saturdayStart
     */
    public function getSaturdayStart()
    {
        return $this->saturdayStart;
    }

    /**
     * Set the value of saturdayStart
     *
     * @return  self
     */
    public function setSaturdayStart($saturdayStart)
    {
        $this->saturdayStart = $saturdayStart;

        return $this;
    }

    /**
     * Get the value of saturdayEnd
     */
    public function getSaturdayEnd()
    {
        return $this->saturdayEnd;
    }

    /**
     * Set the value of saturdayEnd
     *
     * @return  self
     */
    public function setSaturdayEnd($saturdayEnd)
    {
        $this->saturdayEnd = $saturdayEnd;

        return $this;
    }

    /**
     * Get the value of saturdayResultStandard
     */
    public function getSaturdayResultStandard()
    {
        return $this->saturdayResultStandard;
    }

    /**
     * Set the value of saturdayResultStandard
     *
     * @return  self
     */
    public function setSaturdayResultStandard($saturdayResultStandard)
    {
        $this->saturdayResultStandard = $saturdayResultStandard;

        return $this;
    }

    /**
     * Get the value of saturdayResultHundredths
     */
    public function getSaturdayResultHundredths()
    {
        return $this->saturdayResultHundredths;
    }

    /**
     * Set the value of saturdayResultHundredths
     *
     * @return  self
     */
    public function setSaturdayResultHundredths($saturdayResultHundredths)
    {
        $this->saturdayResultHundredths = $saturdayResultHundredths;

        return $this;
    }

    /**
     * Get the value of finalStandardResult
     */
    public function getFinalStandardResult()
    {
        return $this->finalStandardResult;
    }

    /**
     * Set the value of finalStandardResult
     *
     * @return  self
     */
    public function setFinalStandardResult($finalStandardResult)
    {
        $this->finalStandardResult = $finalStandardResult;

        return $this;
    }

    /**
     * Get the value of finalHundredthsResult
     */
    public function getFinalHundredthsResult()
    {
        return $this->finalHundredthsResult;
    }

    /**
     * Set the value of finalHundredthsResult
     *
     * @return  self
     */
    public function setFinalHundredthsResult($finalHundredthsResult)
    {
        $this->finalHundredthsResult = $finalHundredthsResult;

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
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}