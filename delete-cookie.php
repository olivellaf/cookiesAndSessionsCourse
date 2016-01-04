<?php
/**
 * Created by PhpStorm.
 * User: ondia
 * Date: 30/12/15
 * Time: 17:56
 */

// Deleting the cookie was created
setcookie('name', $_COOKIE['username'], time()-1000);