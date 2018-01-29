<?php

/**
 * Sensor control
 */

// We include the model file to call upon the DB
include('./modele/requetes.sensors.php');

// if no function is define in the GET variable, we display the main page.
if (!isset($_GET['function']) || empty($_GET['function'])) {
    $function = "sensors";
} else {
    $function = $_GET['function'];
}

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

    case 'sensorsinroom':
        $vue = "sensorsinroom";
        $title = "Sensors in room";
        $entete = "List:";
        //$alerte = false;

        $RoomId = $_GET['roomid'];
        //var_dump($RoomId);
        
            
           
                $liste = searchById($bdd, $table, $RoomId);
                
                if(empty($liste)) {
                    $alerte = "No sensor matching your criterion";
                }
            //var_dump($liste);
        
        
        break; 

    case 'sensors':
        //list of sensors
        
        $vue = "sensors";
        $title = "Sensors";
        
        $entete = "Here is a list of registered sensors :";
        
        $liste = retrieveAll($bdd, $table);
        
        if(empty($liste)) {
            $alerte = "No sensors have been registered yet.";
        }
        
        break;
        
    case 'ajout':
        //Add a new room
        
        $title = "List of sensors";
        $vue = "sensorlist";
        $alerte = false;
        
        $_count = count($_POST['sensorid']);
        if($_count>0){
            for($_i=0;$_i<$_count;$_i++){
                $values =  [
                    'SensorId' => $_POST['sensorid'][$_i],
                    'UserId' => $_POST['userid'][$_i],
                    'SensorType' => $_POST['sensortype'][$_i],
                    'RoomId' => $_POST['roomid'][$_i],
                    'SensorName' => $_POST['sensorname'][$_i]
                ];
                
                // Call the DB using a function from the model
                $retour = insertion($bdd, $values, $table);
                
                if ($retour) {
                    $alerte = "Addition successful";
                } else {
                    $alerte = "Failure to add a room to the DB";
                }
        $liste = retrieveAll($bdd, $table);
        
        //var_dump($liste);
        if(empty($liste)) {
            $alerte = "No registered sensors yet";
        }
                
                //var_dump($values);
            }
        }
        
        
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
