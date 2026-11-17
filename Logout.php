<?php
// Logout.php - ends the session and returns to the login page
session_start();

$_SESSION = [];                       // clear all session variables

if (ini_get('session.use_cookies')) { // remove the session cookie from the browser
    $p = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
}

session_destroy();

header('Location: Login.php?loggedout=1');
exit();
