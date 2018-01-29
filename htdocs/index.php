<?php

/**
 * MVC :
 * - index.php : identifies what to call depending on the URL
 * - Controler : Create variables, elaborate contents, identify the right view and send everything back to the index.
 * - Model : Contains the function dealing with the DB and class structures if any
 * - View : contains what must be displayed
 **/

// Call to the controler functions
include("controleurs/fonctions.php");
// Call to functions linked to display
include("vues/fonctions.php");
//include("controleurs/users.php");


// The GET variable is used to identify which page is called
if(isset($_GET['c']) && !empty($_GET['c'])) {
    // if there is a target variable in the GET
//    $url = $_GET['cible']; //user, sensor, etc.
    
//} else {
    // otherwise, we display the user page
//    $url = 'users';
//}

// Call to controlers
//include('controleurs/' . $url . '.php');

 //index.php
 // get runtime controller prefix
 $c_str = $_GET['c'];
 // the full name of controller
 $c_name = $c_str;
 // the path of controller
 //$c_path = 'controleurs/functions.php';
 $c_path = 'controleurs/'.$c_name.'.php';
 // get runtime action
 $method = $_GET['function'];
 // load controller file
 //require($c_path);
 //$param = $_GET['p'];

 //var_dump($method);
 //include('$c_path');
 // instantiate controller
 //$controller = new $c_name;
 // run the controller  method
 //var_dump($controller);
 switch ($c_name) {
 	case 'users':
 		# code...
 		include('controleurs/users.php');
 		break;
 	
 	case 'admin':
 		include('controleurs/admin.php');
 		break;

 	case 'rooms':
 		include('controleurs/rooms.php');
 		break;

 	case 'sensors':
 		include('controleurs/sensors.php');
 		break;

 	case 'callback':
 		//var_dump($c_name);
 		include('controleurs/callback.php');
 		break;

 	case 'aboutus':
 		include('vues/aboutus.php');
 		break;

 	default:
 		# code...
 		include('vues/home.php');
 		break;
 }
 
 
 

 //var_dump($method);
 //$controller->$method();
 //$controller->$method($param);
 // End of index.php
}