<?php

/**
 * - Controler : 
 * - Create variables, 
 * - elaborate contents
 * - identify the right view
 */ 

/**
 * Room controler
 */

// We include the user file from the model
include('./modele/requetes.rooms.php');

// if the function is undefined, we display the main page
if (!isset($_GET['function']) || empty($_GET['function'])) {
    $function = "home";
} else {
    $function = $_GET['function'];
}

switch ($function) {
    
    case 'home':
        //affichage de l'home
        $vue = "home";
        $title = "Home page";
        break;
        
        
    case 'inscription':
        $vue = "inscription";
        $alerte = false;
        
        // This part of the code is called only if a form has been sent
        if (isset($_POST['username']) and isset($_POST['password'])) {
            
            if( !isAString($_POST['username'])) {
                $alerte = "Username must be a string.";
                
            } else if( !isAPassword($_POST['password'])) {
                $alerte = "Invalid password.";
                
            } else {
                
                $values = [
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT) // password encryption
                ];

                // Insertion using the DB in the model
                $retour = insertion($bdd, $values, $table);
                
                if ($retour) {
                    $alerte = "Registration successful";
                } else {
                    $alerte = "Failure to register in the database";
                }
            }
        }
        $title = "Registration";
        break;
        
    case 'listeroom':
        $vue = "roomlist";
        $title = "List of rooms";
        $entete = "List:";
        
        //var_dump($function);
        $liste = retrieveAll($bdd, $table);
        
        //var_dump($liste);
        if(empty($liste)) {
            $alerte = "No registered rooms yet";
        }
        
        break;

    case 'ajout':
        //Add a new room
        
        $title = "List of rooms";
        $vue = "roomlist";
        $alerte = false;
        
        $_count = count($_POST['roomid']);
        if($_count>0){
            for($_i=0;$_i<$_count;$_i++){
                $values =  [
                    'RoomId' => $_POST['roomid'][$_i],
                    'RoomSize' => $_POST['roomsize'][$_i],
                    'RoomType' => $_POST['roomtype'][$_i],
                    'UserId' => $_POST['userid'][$_i],
                    'AppId' => $_POST['appid'][$_i]
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
            $alerte = "No registered rooms yet";
        }
                
                //var_dump($values);
            }
        }
        
        
        break;
    
       
    default:
        // if no function matches the GET parameter
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : page not found.";
}
include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');


//}

?>