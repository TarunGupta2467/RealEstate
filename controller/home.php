<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';
/**
 * declare main class extends base controller
 */
class Home extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function call to a view of main home page
     */
    public function homeAction() {           
        $array = array('homedata');
        $this->includemodel($array); //require enquiry data
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;

        
        $args = array();

        $obj = new HomeData();
        $args1 = $obj->bannerImg();    // banner images 
        $args2 = $obj->testonomial();   // testonomial data
        $args3 = $obj->partner();       // partners details 

        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);
       
        $view='home';
        $this->renderview($view, $args);
        
    }

}

?>