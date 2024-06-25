<?php
        $user = $_POST["username"];
        $pass = $_POST["password"];
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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-100 flex justify-center items-center">
    <!-- using get and post method -->
        <form class="" action="index.php" method="post"> 
            <p>Username: </p>
            <input type= "text" name="username" placeholder="username">
            <p>Password:</p>
            <input type="password" name="password" placeholder="password"> <br> <br>
            <input type="submit" value="Log in">
    </form>

    <a href=""></a>

    
    
</body>
</html>