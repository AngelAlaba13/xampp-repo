<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <?php
        $username = "admin";
        $password = "password123";

        if ($username == "admin" && $password == "password123"){
            echo "Welcome";
        }
        else {
            echo "Incorrect credentials";
        }
    ?>
    
</body>
</html>