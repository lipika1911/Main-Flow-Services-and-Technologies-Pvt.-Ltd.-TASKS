<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Dashboard</header>
    <div class="container">
        <div class="dashboard">
            <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
            <div class="content">
                <div class="card">
                    <h3>Card 1</h3>
                    <p>Some content here</p>
                    <button class="btn">Action</button>
                </div>
                <div class="card">
                    <h3>Card 2</h3>
                    <p>Some content here</p>
                    <button class="btn">Action</button>
                </div>
                <div class="card">
                    <h3>Card 3</h3>
                    <p>Some content here</p>
                    <button class="btn">Action</button>
                </div>
            </div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
