<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit_button" value="register">

    </form>

        <input type="submit" name="check_button" value="check">
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if(isset($_POST["submit_button"])){

            if(empty($username)){
                echo "Username field is empty";
            }
            elseif(empty($password)){
                echo "Password field is empty";
            }
            else{
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users_tb(username, password)
                        VALUES
                        ('$username', '$hash_password')";

                try{
                        mysqli_query($conn, $sql);
                        echo "User sucessfully registered!";
                    }
                    catch(mysqli_sql_exception){
                        echo "The user is not registered";
                    }
            }  
        }      
}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["check_button"])){
            echo("Hello WORLD");
        }
        
    }

    mysqli_close($conn);
?>
