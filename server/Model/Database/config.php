<?php

class Database {
    private $host = 'localhost';
    private $db   = 'your_db_name';
    private $user = 'username';
    private $pass = 'password';
    private $charset = 'utf8mb4';
    private $pdo;

    public function connect() {
        if(!$this->pdo) {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }
}


?>