<?php

/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';

/**
 * declare main class extends base controller
 */
class About extends BaseController {

    public function __construct() {  // calling contructor of base class
        parent::__construct();
    }

    public function aboutAction() {           //function called call to a view
        $array = array('aboutdata');
        $this->includemodel($array);  //function call to include model

        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;


        $obj = new AboutData();            // object create to call function of model
        $args = $obj->articleData();




        /**
         * declare $DOC_ROOT global so it can use as
         * a global value and its value is use which
         * store in this outside the class
         */
        $view = 'aboutview';

        $this->renderview($view, $args);    // including view page by function calling
    }

}

?>