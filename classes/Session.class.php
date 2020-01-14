<?php
class Session
{
    public static function init()
    {
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_id() == ' ') {
                session_start();
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }
    public static function set($key, $val)
    {
        $_SESSION[$key] = $val;
    }
    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
    // user logout
    public static function destroy()
    {
        session_destroy();
        session_unset();
        header("Location:login.php");
    }
    // check session
    public static function checkSession()
    {
        if (self::get('login') == false) {
            self::destroy();
            header("Location:../login.php");
        }
    }
    // check login
    // check session
    public static function checkLogin()
    {
        if (self::get('login') == true) {
            if (self::get('type') == 1) {
                @header("Location:index.php");
            } else {
                @header("Location:admin/dashboard.php");
            }
        }
    }
    public static function admindestroy()
    {
        session_destroy();
        session_unset();
        header("Location:../login.php");
    }
}
