<?php
// Check if the user is logged in (session already started)
session_start();

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php"); // Redirect to the dashboard if logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to My Website</h1>
            <nav>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <div class="container">
            <div class="intro">
                <h2>Experience a modern authentication system</h2>
                <p>Get started by logging in or registering below to access the full features of our website.</p>
                <div class="cta-buttons">
                    <a href="login.php" class="btn primary">Login</a>
                    <a href="register.php" class="btn secondary">Register</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
