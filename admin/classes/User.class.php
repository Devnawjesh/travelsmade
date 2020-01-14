<?php
include_once '../classes/Session.class.php';
include '../classes/Database.php';
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // get all user
    public function index()
    {
        $sql = "SELECT * FROM `users`";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}
