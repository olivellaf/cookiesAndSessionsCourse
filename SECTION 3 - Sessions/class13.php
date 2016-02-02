<?php
/**
 * Company: Òndia! Brand Marketing
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 16:20
 * Created with PhpStorm
 */


/**
 * Class 13: VISITS Counter
 */
session_start();

if (isset($_SESSION['counter'])) {

    $_SESSION['counter']++;

} else {

    $_SESSION['counter'] = 1;
}

echo "You already visited us ". $_SESSION['counter'] . " times.";


?>