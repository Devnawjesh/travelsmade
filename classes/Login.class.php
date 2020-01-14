<?php
include_once 'Session.class.php';
include_once 'Database.php';
class Login
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // user signup attempt
    public function userSignUp($data)
    {
        $fullname = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $password = md5($data['password']);
        $checkemail = $this->emailCheck($email);
        $checkusername = $this->usernameCheck($username);
        if ($fullname == "" or $username == "" or $email == "" or $password == "") {
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
        if (strlen($password) < 6) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Password at least 6 character!
            </div>";
            return $message;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! The email address is not valid!
            </div>";
            return $message;
        }
        if ($checkemail == true) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! The email address already exists!
            </div>";
            return $message;
        }
        if ($checkusername == true) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! The username already exists!
            </div>";
            return $message;
        }
        $sql = "insert into users (fullname,username,email,password) values(:FULLNAME,:USERNAME,:EMAIL,:PASSWORD)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':FULLNAME', $fullname);
        $query->bindValue(':USERNAME', $username);
        $query->bindValue(':EMAIL', $email);
        $query->bindValue(':PASSWORD', $password);
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
    // existing email check
    public function emailCheck($email)
    {
        $sql = "select email from users where email = :email";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // existing username check
    public function usernameCheck($username)
    {
        $sql = "select username from users where username = :USERNAME";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':USERNAME', $username);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // user login attempt
    public function userLogin($data)
    {
        $email = $data['email'];
        $password = md5($data['password']);
        if ($email == "" or $password == "") {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Field must not be empty
            </div>";
            return $message;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! The email address is not valid!
            </div>";
            return $message;
        }
        $value = $this->getLoginUser($email, $password);
        if ($value) {
            Session::init();
            Session::set("login", true);
            Session::set("id", $value->id);
            Session::set("fullname", $value->fullname);
            Session::set("username", $value->username);
            Session::set("email", $value->email);
            Session::set("phone", $value->phone);
            Session::set("status", $value->status);
            Session::set("type", $value->type);
            Session::set("message", "<div class='alert alert-success' role='alert'>
            Success ! You Are loggedin!
        </div>");
            if ($value->type == 1) {
                @header("Location:index.php");
            } else {
                @header("Location:admin/dashboard.php");
            }
        } else {
            $message = "<div class='alert alert-danger' role='alert'>
                Error ! Please enter correct email or password!
            </div>";
            return $message;
        }
    }
    // fetch user info by email and password
    public function getLoginUser($email, $password)
    {
        $sql = "select * from users where email = :EMAIL and password =:PASSWORD limit 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':EMAIL', $email);
        $query->bindValue(':PASSWORD', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}
