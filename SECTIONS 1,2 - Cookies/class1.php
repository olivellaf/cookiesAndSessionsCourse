<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:24
 */

require_once('../head.php');

$fileName = ucfirst(basename(__FILE__, '.php'));
?>

        <div class="container">
            <div class="row wrap">
                <h1><?php echo $fileName ?></h1>
                <h4>Create a simple form for send the username to the cookie.</h4>
            </div><!-- row wrap -->

            <div class="row wrap">
                <form class="form-inline" action="class8.php" method="post">

                    <!-- Asking for the User name -->
                    <label class="control-label" for="username">Username:</label>
                    <input class="form-control" type="text" name="username" />

                    <!-- Submit button -->
                    <input class="btn btn-group-sm btn-success" type="submit" value="Send!"/>
                </form><!-- form -->

            </div><!-- row wrap -->

        </div><!-- container -->



