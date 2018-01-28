<?php
/**
 * Controler functions
 */
class demofun{

/**
 * Determines if a variable is an integer
 * @param mixed $int
 * @return bool
 */
function isAnInteger($int)
{
    return is_numeric($int);
}

/**
 * Determines if a variable is a string
 * 
 * @param mixed $string
 * @return bool
 */
function isAString($string)
{
    if (empty($string)) {
        return false;
    } else {
        return is_string($string);
    }
}

function isAPassword($string)
{
    if (empty($string) || strlen($string) < 8) {
        return false;
    } else {
        return is_string($string);
    }
}



//private $asd = "Hello furzoom!";
function index(){
    //$asd = "Hello furzoom!";
    echo "hello";
    /*
    require("vues/index.php");
    require("modele/functions.php");
    $model = new Model();
    $view = new Index();
    //var_dump($model);
    $asd = $model->getData($p);
    $view->display($asd);
    var_dump($asd);*/
}

}
?>