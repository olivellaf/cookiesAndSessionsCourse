<?php
/**
 * Company: Òndia! Brand Marketing
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 16:25
 * Created with PhpStorm
 */


require_once('../head.php');

$fileName = ucfirst(basename(__FILE__, '.php'));
?>

<div class="container">
    <div class="row wrap">
        <h1><?php echo $fileName ?></h1>
        <h4>Playing with forms and sessions.</h4>
    </div><!-- row wrap -->

    <div class="row wrap">
        <form class="form-inline" action="class15b.php" method="post">

            <!-- Asking for the User name -->
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" placeholder="Your name here..."/>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="1234"/>
            </div>

            <input type="submit" class="btn btn-success btn-md" value="Enter"/>

            <div class="form-group">
                <?php
                if ($_GET['error']) {

                    $msg = "Username or password incorrects. Please try again.";
                    $class = "-danger";

                } else if ($_GET['success']) {

                    $msg = "Username and password correct! Session allowed!";
                    $class = "-success";

                } else if ($_GET['notlogged']) {

                    $msg = "Log out. Your session has not been certified. Please log in again.";
                    $class = "-info";

                } else  {

                    $msg = ""; $class = "";
                }

                echo "<strong class='text$class'>$msg</strong>";
                ?>
            </div>
        </form><!-- form -->
    </div><!-- row wrap -->
</div><!-- container -->