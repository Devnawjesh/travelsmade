<?php

include_once 'Session.class.php';
include_once 'Database.php';

class Post
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // get all division
    public function division()
    {
        $sql = "SELECT * FROM `division`";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    // get all post
    public function getPostByDivision($id)
    {
        $sql = "SELECT `division`.*, `post`.*
        FROM `division`
        LEFT JOIN `post` ON `division`.`id` = `post`.`division_id`
        WHERE `division`.`id`= '$id'";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    // get post details
    public function getPostDetails($id)
    {
        $sql = "SELECT  `post`.*,`division`.*
        FROM `post`
        LEFT JOIN `division` ON `post`.`division_id` = `division`.`id`
        WHERE `post`.`id`= '$id'";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // get latest post
    public function getLatestPost()
    {
        $sql = "SELECT  `post`.*,`division`.*
        FROM `post`
        LEFT JOIN `division` ON `post`.`division_id` = `division`.`id`
        ORDER BY `post`.`id` DESC";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}
