<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class Buy extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * main function of class which call itself if no other is called
     */
    function buyAction() {                   

        $array = array('buySingleData');
        $this->includemodel($array); //require enquiry data
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;

        $obj = new buy_page_data();
        $args1 = $obj->property();
        $args2 = $obj->related_project();

        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);
       
        $view = 'buysingle';

        $this->renderview($view, $args);     // include view for this function
    }

}

?>