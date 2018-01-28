<?php

/**
 * List of requests for the callback table
 */

// include generic request file
include('requetes.generiques.php');

//name of the table
$table = "Callback";



/**
 * Search for a callback base on its type
 * @param PDO $bdd
 * @param string $table
 * @param string $type
 * @return array
 */
function searchByType(PDO $bdd, string $table, string $type): array {
    
    return search($bdd, $table, ['type' => $type]);
    
}
function searchBySensorid(PDO $bdd, string $table, string $SensorId): array {
    
    return search($bdd, $table, ['SensorId' => $SensorId]);
    
}

?>