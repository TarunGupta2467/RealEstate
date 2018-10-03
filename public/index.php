
<?php

/**
 * taking a document root path from server and 
 * set doc root path to include files
 * and taking host path path from server to 
 * set the path of css and images in base url
 */
$DOC_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/new/';
$BASE_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/new/';


/** taking url and break it and put in a array
 * so we cen call a controller as per user request 
 * and also call a function as user request
 */
$url_details = array();

/**
 * check whether url is set or not
 * if it is set so break it and put in array
 */
if (isset($_GET['url'])) {
    $url_details = $_GET['url'];
    $ar = explode('/', $url_details);
}

if (!isset($ar[0]) or $ar[0] == "") {       // if url does not defind so set a default controller to call
    $ar[0] = 'home';
}

$str = 'controller/' . $ar[0] . '.php';


if (!isset($ar[1]) or $ar[1] == "") {          // if url does not defind so set a default function to call
    $ar[1] = $ar[0] . 'Action';
}
//echo $DOC_ROOT.$str;

if (file_exists($DOC_ROOT . $str)) {
    require $DOC_ROOT . $str;
    $var2 = $ar[1];
    $obj = new $ar[0]();
    $obj->$var2();
} else {
    require $DOC_ROOT . 'view/404.html';
}







//$ar[0]::$var2();
?>
