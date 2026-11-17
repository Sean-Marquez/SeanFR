<?php
require_once 'session.php';
require_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME - Dear Candle PH</title>
    <link rel="stylesheet" href="Auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="logo">
            <h2>🕯 Dear Candle PH</h2>
        </div>

        <nav>
            <a href="Landing.html">Landing</a>
            <a href="Home.html">Home</a>
            <a href="Products.html">Products</a>
            <a href="About Us.html">About</a>
            <a href="Logout.php">Logout</a>
        </nav>
    </header>

    <main class="auth-section">
        <div class="auth-card">
            <p class="section-label">YOU ARE LOGGED IN</p>
            <h1>Welcome, <?php echo e($login_name); ?>!</h1>
            <p class="auth-description">
                Logged in as <?php echo e($login_email); ?>.
                Thank you for being part of Dear Candle PH.
            </p>

            <p class="auth-switch"><a href="Products.html">Browse our candles</a></p>
            <p class="auth-switch"><a href="Logout.php">Logout</a></p>
        </div>
    </main>

</body>
</html>
