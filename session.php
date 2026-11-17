<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: Login.php');
    exit();
}

$login_name  = $_SESSION['user_name'];
$login_email = $_SESSION['user_email'];
