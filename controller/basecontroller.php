<?php

/**
 * Base controller for controller class
 */
class BaseController {

    public $DOC_ROOT;
    public $BASE_URL;

    public function __construct() {  // declaring constructor 
        global $DOC_ROOT;
        global $BASE_URL;
        $this->DOC_ROOT = $DOC_ROOT;
        $this->BASE_URL = $BASE_URL;
        $array = array('contact', 'home', 'login', 'buy', 'buysingle', 'single', 'about', '');
        $url = $_REQUEST['url'];
        if (!in_array($url, $array)) {
            session_start();
            if (!isset($_SESSION['user'])) {   // checking session for user logged in 
                header('location: ' . $BASE_URL . 'public/login');
                exit;
            }
        }
    }

    /**
     * include model class in controller
     * @param type $array
     */
    function includeModel($array) {
        require $this->DOC_ROOT . 'database/database.php';
        $class = array('adminhomedata' => 'AdminHomeData');
        foreach ($array as &$value) {
            require $this->DOC_ROOT . 'model/' . $value . '.php';
        }
    }

    /**
     * render a file from view 
     * @param type $view
     * @param type $args
     */
    function renderview($view, $args) {
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;
        require $this->DOC_ROOT . 'view/' . $view . '.php';
    }

}
