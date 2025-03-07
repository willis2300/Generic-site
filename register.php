<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if ($stmt->execute([$username, $password])) {
        echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: Unable to register user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h2 class="title">Register</h2>
            <form method="POST" action="register.php">
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="username" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" required>
                    </div>
                </div>
                <button class="button is-primary">Register</button>
            </form>
        </div>
    </section>
</body>
</html>
