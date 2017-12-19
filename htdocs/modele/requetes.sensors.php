<?php

/**
 * List of requests for the sensors table
 */

// include generic request file
include('requetes.generiques.php');

//name of the table
$table = "sensors";



/**
 * Search for a sensor base on its type
 * @param PDO $bdd
 * @param string $table
 * @param string $type
 * @return array
 */
function searchByType(PDO $bdd, string $table, string $type): array {
    
    return search($bdd, $table, ['type' => $type]);
    
}

?>