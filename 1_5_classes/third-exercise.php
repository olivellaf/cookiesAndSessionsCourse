<?php
/**
 * Created by PhpStorm.
 * User: Ferran Olivella
 * Date: 30/12/15
 * Time: 16:24
 */

require_once('head.php');
require_once('header.php');

$fileName = ucfirst(basename(__FILE__, '.php'));
?>

        <div class="container">
            <div class="row wrap">
                <h1><?php echo $fileName ?></h1>
                <h4>Delete cookie</h4>
            </div><!-- row wrap -->

            <div class="row wrap">
                <?php
                    if (isset($_COOKIE['name'])) {

                        echo "<h5>The cookie has the value <span style='color:green; font-weight: bold;'>" . $_COOKIE['name'] . "</span></h5>";

                    } else {

                        echo "<h5 style='color:darkred;'>The cookie doesn't exist</h5>";
                    }

                ?>

                <a href="delete-cookie.php">Delete cookie</a>
                
            </div><!-- row wrap -->

        </div><!-- container -->



