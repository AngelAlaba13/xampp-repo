<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Enter your name</label> <br>
        <input type="text" name="name">
    </form>
    
</body>
</html>

<?php 
    $name = "";
    $name = $_GET["name"];

    if(empty($name)){
        echo"Please enter your name";
    }
    else{
        echo"hello {$name}, welcome to php";
    }

    

?>