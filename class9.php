<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:35
 */

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

require_once('head.php');
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);


?>

<div class="container">
    <div class="row">
        <h1>Class 9 - Color picker</h1>
        <h4>Filename: <?php echo ucfirst(basename(__FILE__, '.php')); ?></h4>

    </div>

</div>

<div class="container">

    <div class="row form">

        <div class="color-div" <?php echo "style=\"background-color:$color;\""; ?>></div>

        <form method="post" action="class9.php">
            <div class="form-group">
                <label for="color-picker" class="control-label">Choose your color:</label>
                <input id="color-picker" type="color" name="color">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn btn-success" value="Change color!">
            </div>
        </form>


    </div>


</div>
</div>



<div class="container">
    <div class="row visits-done"></div>

</div>