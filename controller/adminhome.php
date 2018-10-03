<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class AdminHome extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function render view of admin dashboard
     * @global array $args
     */
    function adminHomeAction() {

        $array = array('adminhomedata');
        $this->includemodel($array);

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);

        $view = 'index';
        $this->renderView($view, $args);
    }

}
