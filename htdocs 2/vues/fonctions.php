<?php

/**
 * Functions link to display
 */

/**
 * Generate an HTML code that displays an alert
 * @param string|null $alerte
 */
function DisplayAlert(?string $alerte) {
    
    if(!is_null($alerte) && !empty($alerte)) {
        return "<p><strong><i> Alert : {$alerte}</i></strong></p>";
    }
}
