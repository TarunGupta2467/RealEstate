<?php
/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';
/**
 * declare main class extends base controller
 */
class Contact extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * function to render contact page
     */
    function contactAction() {


        $array = array('enquiry');
        $this->includemodel($array); //require enquiry data




        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;
      
        $view= 'contact';
        $args=array();
        $this->renderview($view,$args);
        if ($_REQUEST['insert'] == 'ok') {
            echo "<script>alert('enquiry inserted successfully');</script>";
        }
    }

     /**
     * function to render contact page after checking data save in database
     */
    function enquiry() {
        $array = array('enquiry');
        $this->includemodel($array); //require enquiry data

        echo $_REQUEST['p_id'] . $_REQUEST['name'] . $_REQUEST['email'] . $_REQUEST['subject'] . $_REQUEST['description'];
        $obj = new EnquiryData();
        $obj->insertNewEnquiry($_REQUEST['p_id'], $_REQUEST['name'], $_REQUEST['email'], $_REQUEST['subject'], $_REQUEST['description']);
        header('location: ../contact?insert=ok');
        exit();
    }

}
