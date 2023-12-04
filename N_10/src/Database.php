<?php

class Database
{
    public $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    ];
    public $servername;
    public $database;
    public $username;
    public $password;

    public function __construct($servername, $database, $username, $password,)
    {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }
    public function connectDatabase()
    {
        try {
            $connect = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password, $this->options);
            return $connect;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
