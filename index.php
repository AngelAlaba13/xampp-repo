<?php
        $user = $_GET["username"];
        $pass = $_GET["password"];
        if ($user == "admin" && $pass == "password123"){
            echo "Welcome";
        }
        else {
            echo "Incorrect credentials";
        }
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
        <form action="index.php" method="get">
            <p>Username: </p>
            <input type= "text" name="username">
            <p>Password:</p>
            <input type="password" name="password">
            <input type="submit" value="Log in">
        </form>

    
    
</body>
</html>