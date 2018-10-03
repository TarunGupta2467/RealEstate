<?php
/**
 * object buffering start 
 */
ob_start();

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class Login extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

   
    function loginAction() {
        $array = array('logindata');
        $this->includemodel($array); //require model data
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;

     
        session_start();
        
        if (isset($_SESSION['user'])) {   // check for session user is if logged in
            header('location: adminhome');
            exit();
        }

         else if (isset($_POST['username'], $_POST['password'])) {
            $ob = new admin();
            $password = $ob->login($_POST['username']);
            $password_user = md5($_POST['password']);
            if ($password == $password_user) {
                $_SESSION['user'] = $_POST['username'];
                header('location: adminhome');
                die();
            }
            else {
                $view = 'login';
                $args = array();
                $this->renderview($view, $args);
            }
        }
        else {
            $view = 'login';
                $args = array();
                $this->renderview($view, $args);
        }
    }

    /**
     * function to destroy the session of logged user
     */
    function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('location: ../login');
    }

}

ob_get_flush();
?>	