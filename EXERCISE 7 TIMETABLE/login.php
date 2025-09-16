<?php

session_start();
$invalid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $validUsername = "admin";
    $validPassword = "password";

    if ($username === $validUsername && $password === $validPassword) {
       
        $_SESSION['user'] = $username;
        header('Location: in.php');
        exit;
    } else {
        $invalid = true;
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

/* login page */

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #f5f3ef;
}

.login-container h1 {
    font-size: 24px;
    color: #f4a825;
    margin-bottom: 20px;
    text-align: center;
}

form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    background: #f4a825;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #e39b1f;
}

.error {
    color: red;
    font-size: 14px;
    margin-bottom: 15px;
    text-align: center;
}
        </style>
</head>
<body>
<div class="login-container">
    
    
    <form method="POST" action="login.php">
    <h1>Login</h1>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <?php if ($invalid): ?>
        <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>