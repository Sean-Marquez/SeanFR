<?php
define('DB_SERVER',   '127.0.0.1');
define('DB_PORT',     3307);          // your XAMPP MySQL port
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');            // XAMPP default is empty
define('DB_DATABASE', 'dearcandle');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
    mysqli_set_charset($db, 'utf8mb4');
} catch (mysqli_sql_exception $e) {
    die('Could not connect to the database. Is MySQL running on port 3307, and did you run database.sql there?');
}

// Prints text safely inside HTML
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}