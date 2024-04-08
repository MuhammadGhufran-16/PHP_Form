<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="login.css">
<head>
    <title>Login </title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login" class="submit-btn">
        </form>
        <a href="register.php" class="register-btn">Register</a>
    </div>
</body>
</html>