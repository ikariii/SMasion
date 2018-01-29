<?php

/**
 * MVC :
 * - index.php : identifies what to call depending on the URL
 * - Controler : Create variables, elaborate contents, identify the right view and send everything back to the index.
 * - Model : Contains the function dealing with the DB and class structures if any
 * - View : contains what must be displayed
 **/

// Call to the controler functions
class Index {
     function display($output) {
         // ob_start();
         echo $output;
     }
 }