<?php

class Database
{
    private string $host;
    private string $db_name;
    private string $username;
    private string $password;
    public $connexion;

    public function __construct()
    {
        $this->host = "localhost";
        $this->db_name = "bdd_hackaton_2025";
        $this->username = "root";
        $this->password = "";
    }

    public function getConnection()
    {
        $this->connexion = null;
    
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->connexion = new PDO($dsn, $this->username, $this->password);
    
            $this->connexion->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    
        return $this->connexion;
    }
    
}
