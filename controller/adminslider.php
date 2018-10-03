<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class AdminSlider extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function to render view of admin slider page
     * @global array $args
     */
    function adminSliderAction() {

        $array = array('adminsliderdata', 'adminhomedata');
        $this->includemodel($array);

        $obj1 = new AdminSliderData();
        $args3 = $obj1->sliderdata();

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);

        $view = 'adminsliderview';
        $this->renderView($view, $args);
    }

    /**
     * function render add slider page for admin
     * @global array $args
     */
    function addSlider() {

        $array = array('adminsliderdata', 'adminhomedata');
        $this->includemodel($array);

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);

        $view = 'addadminslider';
        $this->renderView($view, $args);
    }

    /**
     * function to add slider in database
     */
    function adminAdd() {
        $obj1 = new AdminSliderData();
        $obj1->addnewslider($_FILES);
    }

    /**
     * function to remove slider 
     */
    function removeSlider() {
        $id = $_REQUEST['id'];
        $obj2 = new AdminSliderData();
        $obj2->removeSlider($id);
        header('location: ../adminslider');
        die;
    }

    /**
     * edit slider form view 
     */
    function editSlider() {

        $array = array('adminsliderdata', 'adminhomedata');
        $this->includemodel($array);

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);

        $view = 'editadminslider';
        $this->renderView($view, $args);
    }

    /**
     * function to store modified data of slider
     */
    function adminedit() {
        $id = $_REQUEST['id'];
        $obj2 = new AdminSliderData();
        $obj2->editSlider($_FILES, $id);
    }

}
