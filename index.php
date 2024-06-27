<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username"> <br>
        <label>Password</label>
        <input type="text" name="password"> <br>
        <input type="submit" name="submit_button" value="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit_button"])){
        $username = $_POST["username"];
        header("Location: home.php");
    }
    
?>