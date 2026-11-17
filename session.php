<?php
// session.php - put this at the top of any page that needs a logged-in user:
//     require_once 'session.php';
// If the visitor is not logged in, they are sent to the login page.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: Login.php');
    exit();
}

$login_name  = $_SESSION['user_name'];
$login_email = $_SESSION['user_email'];
