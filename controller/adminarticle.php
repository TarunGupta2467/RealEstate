<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class Adminarticle extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function calling article page for admin 
     */
    function adminArticleAction() {

        $array = array('adminarticledata');
        $this->includemodel($array);


        $obj1 = new AdminArticleData();
        $args = $obj1->articleData();




        $view = 'adminarticleview';
        $this->renderView($view, $args);
    }

    /**
     * function calling add article view for admin
     */
    function addArticle() {

        $view = 'addarticleview';
        $this->renderView($view, $args);
    }

    /**
     * function for adding article
     */
    function adminAddData() {

        $array = array('adminarticledata');
        $this->includemodel($array);


        $obj1 = new AdminArticleData();
        $args = $obj1->addarticleData($_REQUEST);

        header('location: ' . $this->BASE_URL . 'public/adminarticle');
        die;
    }

    /**
     * function for remove article
     */
    function removeArticle() {
        $id = $_REQUEST['id'];

        $array = array('adminarticledata');
        $this->includemodel($array);


        $obj1 = new AdminArticleData();
        $args = $obj1->removearticledata($id);
        header('location: ' . $this->BASE_URL . 'public/adminarticle');
        die;
    }

    /**
     * function calling edit article view for admin
     */
    function editArticle() {


        $id = $_REQUEST['id'];

        $array = array('adminarticledata');
        $this->includemodel($array);


        $obj1 = new AdminArticleData();
        $args = $obj1->articleDataforid($id);
        $view = 'articleedit';
        $this->renderView($view, $args);
    }

    /**
     * function for edit article data action
     */
    function adminedit() {
        $id = $_REQUEST['id'];

        $array = array('adminarticledata');
        $this->includemodel($array);


        $obj1 = new AdminArticleData();
        $args = $obj1->editarticlestore($_REQUEST, $id);
        header('location: ' . $this->BASE_URL . 'public/adminarticle');
        die;
    }

}
