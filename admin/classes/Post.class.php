<?php
include_once '../classes/Session.class.php';
include '../classes/Database.php';
class Post
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // get all user
    public function index()
    {
        $sql = "SELECT `post`.*, `division`.`name`
        FROM `post`
        LEFT JOIN `division` ON `post`.`division_id` = `division`.`id`
        ORDER BY `post`.`place` DESC";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
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
    // post create
    public function create($data)
    {
        $division = $data['division'];
        $place = $data['place'];
        $body = $data['body'];
        $summery = $data['summery'];
        if ($division == "" or $place == "" or $body == "" or $summery == "") {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Field must not be empty
            </div>";
            return $message;
        }
        // image upload
        $folder = "assets/images/post/";
        $image = $_FILES['image']['name'];
        $path = $folder . $image;
        $target_file = $folder . basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $filename = $_FILES['image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
        // image upload
        $sql = "insert into post (division_id,place,body,image,summery) values(:DIVISION_ID,:PLACE,:BODY,:IMAGE,:SUMMERY)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':DIVISION_ID', $division);
        $query->bindValue(':PLACE', $place);
        $query->bindValue(':BODY', $body);
        $query->bindValue(':IMAGE', $image);
        $query->bindValue(':SUMMERY', $summery);
        $result = $query->execute();
        if ($result) {
            $message = "<div class='alert alert-success' role='alert'>
                Thank You ! You have been registerd!
            </div>";
            return $message;
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
                Sorry ! There has been problem inserting your details!
            </div>";
            return $message;
        }
    }
    // post edit
    public function edit($id)
    {
        $sql = "select * from post where id = :ID limit 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':ID', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // post update
    public function update($data)
    {
        $division = $data['division'];
        $place = $data['place'];
        $body = $data['body'];
        $summery = $data['summery'];
        $id = $data['id'];
        if ($division == "" or $place == "" or $body == "" or $id == "") {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Field must not be empty
            </div>";
            return $message;
        }
        // image upload
        $post = $this->getPostInfo($id);
        $image = $post->image;
        if ($_FILES['image']['name']) {
            @unlink('assets/images/post/' . $post->image);
            // image upload
            $folder = "assets/images/post/";
            $image = $_FILES['image']['name'];
            $path = $folder . $image;
            $target_file = $folder . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $filename = $_FILES['image']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
        }
        // image upload
        $sql = "update post set 
        division_id= :DIVISION_ID,
        place= :PLACE,
        body= :BODY,
        summery= :SUMMERY,
        image= :IMAGE
        where id = :ID";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':DIVISION_ID', $division);
        $query->bindValue(':PLACE', $place);
        $query->bindValue(':BODY', $body);
        $query->bindValue(':SUMMERY', $summery);
        $query->bindValue(':IMAGE', $image);
        $query->bindValue(':ID', $id);
        $result = $query->execute();
        if ($result) {
            $message = "<div class='alert alert-success' role='alert'>
                Thank You ! Successfully Updated!
            </div>";
            return $message;
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
                Sorry ! There has been problem inserting your details!
            </div>";
            return $message;
        }
    }
    // post information
    public function getPostInfo($id)
    {
        $sql = "select * from post where id = :ID limit 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':ID', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}
