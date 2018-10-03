<?php
/**
 * include base controller
 */
require $DOC_ROOT . 'controller/basecontroller.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * declare main class extends base controller
 */
class BuySingle extends BaseController {

    public function __construct() {   // calling contructor of base class
        parent::__construct();
    }

    /**
     * function use to render buy single page
     */
    function buySingleAction() {
        $array = array('buySingleData');
        $this->includemodel($array); //require enquiry data
        $DOC_ROOT = $this->DOC_ROOT;
        $BASE_URL = $this->BASE_URL;
       
        $bed = (isset($_REQUEST['bed']) && $_REQUEST['bed'] != '') ? $_REQUEST['bed'] : '';
        $city = (isset($_REQUEST['city']) && $_REQUEST['city'] != '') ? $_REQUEST['city'] : '';
        $category = (isset($_REQUEST['category']) && $_REQUEST['category'] != '') ? $_REQUEST['category'] : '';
        $price_min = (isset($_REQUEST['price_min']) && $_REQUEST['price_min'] != '') ? $_REQUEST['price_min'] : '';
        $price_max = (isset($_REQUEST['price_max']) && $_REQUEST['price_max'] != '') ? $_REQUEST['price_max'] : '';
        $area_min = (isset($_REQUEST['area_min']) && $_REQUEST['area_min'] != '') ? $_REQUEST['area_min'] : '';
        $area_max = (isset($_REQUEST['area_max']) && $_REQUEST['area_max'] != '') ? $_REQUEST['area_max'] : '';
        $sort = (isset($_REQUEST['sort']) && $_REQUEST['sort'] != '') ? $_REQUEST['sort'] : 'price';
        $order = (isset($_REQUEST['order']) && $_REQUEST['order'] != '') ? $_REQUEST['order'] : 'ASC';

        $obj = new buySingleData();
        $args1 = $obj->buildings($bed, $city, $category, $price_min, $price_max, $area_min, $area_max, $sort, $order);
        $args2 = $obj->featured_community();

        $args = array();
        array_push($args, $args1);
        array_push($args, $args2);

        $view = 'buySingle';

        $this->renderview($view, $args);
    }

}

?>