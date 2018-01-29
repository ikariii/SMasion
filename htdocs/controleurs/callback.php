<?php

/**
 * Callback control
 */

// We include the model file to call upon the DB
include('./modele/requetes.callback.php');

// if no function is define in the GET variable, we display the main page.
if (!isset($_GET['function']) || empty($_GET['function'])) {
    $function = "home";
} else {
    $function = $_GET['function'];
}

//var_dump($function);
switch ($function) {
    
    case 'listesensor':
        $vue = "sensorlist";
        $title = "List of sensors";
        $entete = "List:";

        
        //var_dump($function);
        $liste = retrieveAll($bdd, $table);
        
        //var_dump($liste);
        if(empty($liste)) {
            $alerte = "No registered rooms yet";
        }
        
        break;

    case 'sensorscallback':
        $vue = "callback";
        $title = "Callbacks of the Sensor";
        $entete = "List:";
        //$alerte = false;

        $SensorId = $_GET['sensorid'];
        //var_dump($function);
        
            
           
                $liste = searchBySensorid($bdd, $table, $SensorId);
                
                if(empty($liste)) {
                    $alerte = "No sensor matching your criterion";
                }
            //var_dump($liste);
        
        
        break; 
        
    case 'search':
        // search sensors by type
        
        $title = "Search for sensor";
        $alerte = false;
        $vue = "search";
        
        // if a form was sent
        if (isset($_POST['type'])) {
            
            if( !isAString($_POST['type'])) {
                $alerte = "Sensor type must be a string.";
                
            } else {
                
                $liste = searchByType($bdd, $table, $_POST['type']);
                
                if(empty($liste)) {
                    $alerte = "No sensor matching your criterion";
                }
            }
        }
        
        break;
        
    default:
        // if no function matches the GET parameter
        $vue = "erreur404";
        $title = "error404";
        $message = "Error 404 : Page not found.";
}

include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');
