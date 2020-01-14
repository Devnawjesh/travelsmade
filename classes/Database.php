<?php
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "travelsmade";
    public $pdo;
    public function __construct()
    {
        if (!isset($this->pdo)) {
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec("SET CHARACTER SET utf8");
                $this->pdo = $conn;
                // echo true;
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
}
