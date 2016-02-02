<?php
/**
 * Company: Òndia! Brand Marketing
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 16:31
 * Created with PhpStorm
 */

// Imagine that we get the credentials from a database.
$user_OK = 'Ferran';
$password_OK = '1234';

// IMPORTANT!
session_start();

if (isset($_SESSION['certified'])) {

    require_once('../head.php');
    echo "<p>This is your private page!</p>";

} else {

    header('Location: class15a.php?notlogged=true');

}


?>