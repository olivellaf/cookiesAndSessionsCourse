<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:35
 */


require_once('head.php');
require_once('header.php');

?>

<div class="container">
    <div class="row">
        <h1>Class 8 - Visitors counter</h1>
        <h4>Filename: <?php echo ucfirst(basename(__FILE__, '.php')); ?></h4>

<?php

if (isset($_COOKIE['counter'])) {

    // Increments the counter cookie
    setcookie('counter', $_COOKIE['counter']+1, time()+365*24*60*60);

    // Message
    echo "Hello! Visits done: " . $_COOKIE['counter'];

} else {

    // Important to set cookie if it has not been visited yet.
    setcookie('counter', 1, time()+365*24*60*60);

    // Message
    echo "Welcome to our page. This is your first time!";
}

?>

    </div>
</div>