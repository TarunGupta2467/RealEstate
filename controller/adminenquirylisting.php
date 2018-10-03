<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class AdminEnquiryListing extends BaseController {

    public function __construct() {   // calling contructor of base class
        parent::__construct();
    }

    /**
     * function declare to render admin enquiry page 
     * @global array $args
     */
    function adminEnquiryListingAction() {

        $array = array('adminenquirydata', 'adminhomedata');
        $this->includemodel($array);


        $obj1 = new AdminEnquiryData();
        $args3 = $obj1->Enquirydata();

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);

        $view = 'adminenqiry';
        $this->renderView($view, $args);
    }

}
