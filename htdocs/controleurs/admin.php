<?php

/**
 * - Controler : 
 * - Create variables, 
 * - elaborate contents
 * - identify the right view
 */ 

/**
 * Admin controler
 */
// We include the user file from the model
include('./modele/requetes.admin.php');

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
    

    case 'login':
        $vue = "admin";
        $title = "Welcome!";


        if (isset($_POST['username']) and isset($_POST['pwd'])) {

            $values = [
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['pwd'], PASSWORD_DEFAULT) // password encryption
                ];

                //$retour = search($bdd,$values,$User);
        }



        $liste = retrieveAll($bdd, $table);
        
        if(empty($liste)) {
            $alerte = "No registered users yet";
        }
        //var_dump($_POST['function']);
        break;

    case 'deluser':
    	$vue = "admin";
        $title = "Welcome!";

        //delete user
      	$userid = $_GET['userid'];
      	//var_dump($userid);
        $retour = deluser($bdd, $table, $userid);
                
        if ($retour) {
            $alerte = "Delete successful";
        } else {
            $alerte = "Failure to delete in the database";
        }

        //show user list
        $liste = retrieveAll($bdd, $table);
        
        if(empty($liste)) {
            $alerte = "No registered users yet";
        }
        //var_dump($retour);
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