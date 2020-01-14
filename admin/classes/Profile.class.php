<?php
include_once '../classes/Session.class.php';
include '../classes/Database.php';
class Profile
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // get all user
    public function profile($id)
    {
        $sql = "select * from `users` where `users`.`id` = :ID LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':ID', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // get all user
    public function edit($id)
    {
        $sql = "select * from `users` where `users`.`id` = :ID LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':ID', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // profile update
    public function update($data)
    {
        $fullname = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id = $data['id'];
        $status = $data['status'];
        $type = $data['type'];
        if ($fullname == "" or $username == "" or $email == "") {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Field must not be empty
            </div>";
            return $message;
        }
        if (str_word_count($fullname) < 2) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Full name too short!
            </div>";
            return $message;
        }
        if (strlen($username) < 3) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Username too short!
            </div>";
            return $message;
        } elseif (preg_match('/[^a-z_\-0-9]/i', $username)) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Username must only contain alphanumerical,dashes and underscores!
            </div>";
            return $message;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! The email address is not valid!
            </div>";
            return $message;
        }
        $profile = $this->getUserInfo($id);
        $image = $profile->image;
        if ($_FILES['image']['name']) {
            @unlink('assets/images/user/' . $profile->image);
            // image upload
            $folder = "assets/images/user/";
            $image = $_FILES['image']['name'];
            $path = $folder . $image;
            $target_file = $folder . basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $filename = $_FILES['image']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
        }
        // image upload
        $sql = "update users set 
        fullname= :FULLNAME,
        username= :USERNAME,
        email= :EMAIL,
        phone= :PHONE,
        image= :IMAGE,
        status= :STATUS,
        type= :TYPE
        where id = :ID";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':FULLNAME', $fullname);
        $query->bindValue(':USERNAME', $username);
        $query->bindValue(':EMAIL', $email);
        $query->bindValue(':PHONE', $phone);
        $query->bindValue(':IMAGE', $image);
        $query->bindValue(':STATUS', $status);
        $query->bindValue(':TYPE', $type);
        $query->bindValue(':ID', $id);
        $result = $query->execute();
        if ($result) {
            $message = "<div class='alert alert-success' role='alert'>
                Thank You ! Updated Successfully!
            </div>";
            return $message;
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
                Sorry ! There has been problem inserting your details!
            </div>";
            return $message;
        }
    }
    // user information
    public function getUserInfo($id)
    {
        $sql = "select * from users where id = :ID limit 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':ID', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    // user reset password
    public function reset($data)
    {
        $old = md5($data['oldpassword']);
        $new = $data['newpassword'];
        $confirm = $data['confirmpassword'];
        $id = Session::get('id');
        $checkpassword = $this->checkPassword($old, $id);
        if ($old == "" or $new == "" or $confirm == "") {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Field must not be empty
            </div>";
            return $message;
        }
        if ($checkpassword == false) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Old password doesn't match
            </div>";
            return $message;
        }
        if ($new != $confirm) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Password doesn't match
            </div>";
            return $message;
        }
        $sql = "update users set 
        password= :PASSWORD
        where id = :ID";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':PASSWORD', md5($new));
        $query->bindValue(':ID', $id);
        $result = $query->execute();
        if ($result) {
            $message = "<div class='alert alert-success' role='alert'>
                Thank You ! Updated Successfully!
            </div>";
            return $message;
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
                Sorry ! There has been problem inserting your details!
            </div>";
            return $message;
        }
    }
    public function checkPassword($old, $id)
    {
        $sql = "SELECT * FROM users WHERE password = :PASSWORD AND id=:ID";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':PASSWORD', $old);
        $query->bindValue(':ID', $id);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
