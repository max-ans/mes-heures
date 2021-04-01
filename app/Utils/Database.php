<?php

namespace App\Utils;

use PDO;

class Database
{
    /**
     * Object PDO
     *
     * @var PDO
     */             
    private $dbh;
    
    /**
     * Propriété statique (liée à la classe) stockant l'unique instance objet
     * 
     * @var Database
     */
    private static $_instance;


    private function __construct()
    {
        $configData = parse_ini_file(__DIR__.'/../config.ini');

        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) 
     
            );
        } catch (\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;;
        }
    }

    public static function getPDO() {
        // Si on n'a pas encore créé la seule instance de la classe
        if (empty(self::$_instance)) {
            // Alors, on crée cette instance et on la stocke dans la propriété statique $_instance
            self::$_instance = new Database();
        }
        // Sinon, on ne fait rien l'instance a déjà été créée

        // Enfin, on retourne la propriété dbh de l'instance unique de Database
        return self::$_instance->dbh;
    }
}