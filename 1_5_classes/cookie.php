<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:35
 */


// Catching the username from the FORM
$username = $_POST['username'];

// Creates a cookie.
setcookie('name', $username, time()+4800);

// Read cookies
if (isset($_COOKIE['username'])) {


}

?>