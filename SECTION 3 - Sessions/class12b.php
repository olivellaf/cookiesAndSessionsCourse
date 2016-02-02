<?php
/**
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 16:15
 * Created with PhpStorm
 */


/**
 * Class 12b : Sessions
 */
session_start();
echo "The name of the user is: <b>" . $_SESSION['name'] . "</b>";


?>