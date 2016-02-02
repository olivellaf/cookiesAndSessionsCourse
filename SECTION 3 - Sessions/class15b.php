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
    header("Location: class15c.php?success=true");

} else {

    header("Location: class15a.php?error=true");
}

?>