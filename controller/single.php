<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */

global $id;
$id = (isset($_REQUEST['id']) && $_REQUEST['id'] != '') ? $_REQUEST['id'] : 1;

class Single extends BaseController {

    public function __construct() {    // calling contructor of base class
        parent::__construct();
    }

    /**
     * function to render single view using id
     * @global type $id
     */
    function singleAction() {
        $array = array('singledata');
        $this->includemodel($array); //require enquiry data
      
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;

        global $id;
        $obj = new SingleData();
        $args = array();
        $args1 = $obj->property_images($id);
        $args2 = $obj->property_images_more($id);
        $args3 = $obj->property_details($id);
        $args4 = $obj->featured_community();
        $args5 = $obj->related_project_details();
        array_push($args, $args1);
        array_push($args, $args2);
        array_push($args, $args3);
        array_push($args, $args4);
        array_push($args, $args5);
        array_push($args, $id);
        
        $view = 'single';

        $this->renderview($view, $args);
    }

}

?>