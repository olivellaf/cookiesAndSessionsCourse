<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:35
 */


require_once('head.php');


if (isset($_POST['color'])){

    $color = $_POST['color'];

    setcookie("color", $color, time()+80000);

} else {

    if(isset($_COOKIE['color'])) {

        $color = $_COOKIE['color'];

    } else {

        $color = 'white'; // default color
    }
}

?>

<div class="container">
    <div class="row">
        <h1>Class 9 - Color picker</h1>
        <h4>Filename: <?php echo ucfirst(basename(__FILE__, '.php')); ?></h4>

    </div>

</div>

<div class="container">

    <div class="row form">

        <div class="color-div" <?php echo "style='background-color:$color;'"; ?>></div>

        <form class="" type="post" action="class9.php">
            <div class="form-group">
                <label for="color" class="control-label">Choose your color:</label>
                <input id="color" type="color" name="color">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn btn-success" value="Change color!">
            </div>

        </form>


    </div>


</div>
</div>



<div class="container">
    <div class="row visits-done">

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