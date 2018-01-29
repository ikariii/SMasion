<?php

// Generic requests for the DB

// Call to the file declaring the PDO
include("modele/connexion.php"); 

/**
 * Retrieve all elements from a table
 * @param PDO $bdd
 * @param string $table
 * @return array
 */
function retrieveAll(PDO $bdd, string $table): array {
    $query = 'SELECT * FROM ' . $table;
    return $bdd->query($query)->fetchAll();
}

/**
 * Retrieve elements based on attributes passed as parameters
 * @param PDO $bdd
 * @param string $table
 * @param array $attributs
 * @return array
 */
function search(PDO $bdd, string $table, array $attributs): array {
    
    $where = "";
    foreach($attributs as $key => $value) {
        $where .= "$key = :$key" . ", ";
    }
    $where = substr_replace($where, '', -2, 2);
    
    $statement = $bdd->prepare('SELECT * FROM ' . $table . ' WHERE ' . $where);
    
    
    foreach($attributs as $key => $value) {
        $statement->bindParam(":$key", $value);
    }
    $statement->execute();
    
    return $statement->fetchAll();
    
}

/**
 * Insert a new element in a table
 * @param PDO $bdd
 * @param array $values
 * @param string $table
 * @return boolean
 */
function insertion(PDO $bdd, array $values, string $table): bool {

    $attributs = '';
    $valeurs = '';
    foreach ($values as $key => $value) {

        $attributs .= $key . ', ';
        $valeurs .= ':' . $key . ', ';
        $v[] = $value;
    }
    $attributs = substr_replace($attributs, '', -2, 2);
    $valeurs = substr_replace($valeurs, '', -2, 2);

    $query = ' INSERT INTO ' . $table . ' (' . $attributs . ') VALUES (' . $valeurs . ')';
    //var_dump($query);
    $donnees = $bdd->prepare($query);
    $requete = "";
    foreach ($values as $key => $value) {
        $requete = $requete . $key . ' : ' . $value . ', ';
        $donnees->bindParam($key, $values[$key], PDO::PARAM_STR);
    }

    return $donnees->execute();
}

function delete(PDO $bdd, string $table, array $attributs): bool {
    
    $where = "";
    
    var_dump($attributs);
    foreach($attributs as $key => $value) {
      $where .= $key." = ".$value." and ";
    }
     $where = substr_replace($where, '', -5, 4);

    
     $query = ' DELETE FROM ' . $table . ' WHERE ' . $where;
    //var_dump($query);

    $donnees = $bdd->prepare($query);

 
    return $donnees->execute();
}

?>