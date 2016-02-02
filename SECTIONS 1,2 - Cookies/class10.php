<?php
/**
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 15:42
 * Created with PhpStorm
 */

$user_meta = array('name', 'surname', 'age', 'city', 'password');
$user = array("Ferran", "Olivella", "28", "Sabadell", "password");


foreach ($user as $key => $val) {

    setcookie("userInfo[$user_meta[$key]]", $user[$key], time()+3600);
}


// Take care that has to been written different as been set.

foreach ($user_meta as $key => $val) {

    echo "<br/> <b>$user_meta[$key]:</b> " . $_COOKIE['userInfo'][$user_meta[$key]];

}

?>
