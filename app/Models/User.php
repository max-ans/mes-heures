<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class User 
{
    protected $id;

    protected $email;

    protected $password;

    protected $nickname;

    

    public static function find ($id) 
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *
               FROM `user`
               WHERE $id
        ";

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchObject(self::class);

        return $result;
    }

    public static function findByEmail ($email)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *
                FROM `user`
                WHERE `email` = :email
        ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':email', $email);

        $pdoStatement->execute();

        $result = $pdoStatement->fetchObject(self::class);

        return $result;
    }

    public function insertNew () 
    {
        $pdo = Database::getPDO();

        $sql = " INSERT INTO `user` (`email`, `password`) VALUES (:email , :password)";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);

        $result = $pdoStatement->execute();
        
        if ($result) {
            $this->id = $pdo->lastInsertId();

            return true;
        }

        return false;

    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of nickname
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

}