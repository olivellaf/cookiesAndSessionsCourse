<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:35
 */

// Getting date
$date = date("d/m/Y | H:i:s");

// Very important to let next line on the top of the php file
setcookie("date", $date, time()+31536000);

require_once('head.php');
require_once('header.php');

?>

<div class="container">
    <div class="row">
        <h1>Class 7 - Last visit date</h1>
        <h4>Filename: <?php echo ucfirst(basename(__FILE__, '.php')); ?></h4>

<?php

if (isset($_COOKIE['date'])) {

    echo "Hello again! Your last visit was in " . $_COOKIE['date'];

} else {

    echo "Welcome to our page. This is your first time!";
}

?>

    </div>
</div>