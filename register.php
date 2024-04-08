
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="register.css">
<head>
    <title>Register</title>
</head>
<body>
<div class="containerr">
    <h2>Register</h2>
    <form action="registration_process.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
      
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>
        <input type="submit" value="Register">
    
    </form>
    </div>

</body>
</html>