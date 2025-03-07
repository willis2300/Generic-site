<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">Dashboard</a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h2 class="title">Welcome to Your Dashboard</h2>
            <p>You are logged in successfully.</p>
        </div>
    </section>
</body>
</html>
