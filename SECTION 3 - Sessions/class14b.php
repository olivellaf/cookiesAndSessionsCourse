<?php
/**
 * Company: Òndia! Brand Marketing
 * Developer: Ferran Olivella Tarragó
 * Date: 2/2/16
 * Time: 16:31
 * Created with PhpStorm
 */


// Imagine that we get the credentials from a database.
$user_OK = 'Ferran';
$password_OK = '1234';


if ($_POST['name'] === $user_OK && $_POST['password'] === $password_OK) {

    session_start();
    // Marks the session of this user as certified, or correct.
    $_SESSION['certified'] = true;

    header("Location: class14a.php?success=true");
    // Also we could save the information of the user
    //$_SESSION['username'] = $_POST['name'];
    //$_SESSION['password'] = $_POST['password'];

} else {

    header("Location: class14a.php?error=true");

}



?>
