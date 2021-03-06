<?php

// include the file for generic requests
include('requetes.generiques.php');

//definition of the table that we will use
$table = "User";


/**
 * Search for a user based on a name passed as a parameter
 * @param PDO $bdd
 * @param string $table
 * @param string $name
 * @return array
 */
function searchParNom(PDO $bdd, string $table, string $name){
    
    return search($bdd, $table, ['Username' => $name]);
    
}

function deluser(PDO $bdd, string $table, string $userid){
	return delete($bdd, $table, ['UserId' => $userid]);
    
}
?>