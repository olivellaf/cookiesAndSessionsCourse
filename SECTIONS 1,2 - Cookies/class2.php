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
                <h4>The cookie exists?</h4>
            </div><!-- row wrap -->

            <div class="row wrap">
                <?php
                    if (isset($_COOKIE['name'])) {

                        echo "<h5>The cookie has the value <span style='color:green; font-weight: bold;'>" . $_COOKIE['name'] . "</span></h5>";

                    } else {

                        echo "<h5 style='color:darkred;'>The cookie doesn't exist</h5>";
                    }

                ?>

            </div><!-- row wrap -->

        </div><!-- container -->



