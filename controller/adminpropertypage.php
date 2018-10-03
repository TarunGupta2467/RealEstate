<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class AdminPropertyPage extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function render page for admin havin property details
     * @global array $args
     */
    function adminPropertyPageAction() {

        $array = array('adminhomedata', 'adminpropertydata');
        $this->includemodel($array);

        $obj1 = new AdminPropertyData();
        $args3 = $obj1->propertydata();

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);

        $view = 'adminproperty';
        $this->renderView($view, $args);
    }

    /**
     * fuunction render view of add data in property
     * @global array $args
     */
    function adminAddProperty() {


        $array = array('adminhomedata');
        $this->includemodel($array);

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);

        $view = 'adminaddproperty';
        $this->renderView($view, $args);
    }

    /**
     * function add data in propertydata
     */
    function adminAdd() {

        $obj1 = new AdminPropertyData();
        $obj1->addnewproperty($_REQUEST, $_FILES);
    }

    /**
     * function use to render edit property page for admin
     * @global array $args
     */
    function editPropertyView() {

        $array = array('adminhomedata', 'adminpropertydata');
        $this->includemodel($array);

        $id = $_REQUEST['id'];
        $obj1 = new AdminPropertyData();
        $args3 = $obj1->propertyDataEdit($id);

        $obj = new AdminHomeData();
        $args1 = $obj->numberOfEnquiry();
        $args2 = $obj->numberOfProperty();

        global $args;
        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);

        $view = 'admineditproperty';
        $this->renderView($view, $args);
    }

    /**
     * function to edit data and store updated data
     */
    function edit() {

        $id = $_REQUEST['id'];

        $array = array('adminpropertydata');
        $this->includemodel($array);

        $obj1 = new AdminPropertyData();
        $obj1->editproperty($_REQUEST, $_FILES);

        header('location: ' . $this->BASE_URL . 'public/adminpropertypage');
        die;
    }

    /**
     * function to remove data from database 
     */
    function remove() {
        $id = $_REQUEST['id'];

        $array = array('adminpropertydata');
        $this->includemodel($array);

        $obj1 = new AdminPropertyData();
        $obj1->removeproperty($id);
        header('location: ' . $this->BASE_URL . 'public/adminpropertypage');
        die;
    }

}
