<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>What do you want to order?</label> <br>
        <input name="radio_name" type="radio" value="pizza">
        <label>pizza</label> <br>
        <input name="rdio_name" type="radio" value="burger">
        <label>burger</label> <br>
        <input name="radio_name" type="radio" value="fries">
        <label>fries</label> <br>        
        <input type="submit" value="enter">
    </form>
    
</body>
</html>

<?php 
    $order = $_POST["radio_name"];


    echo"You ordered {$order}";

    if(empty($order)){
        echo"Please enter your name";
    }
    else{
        echo"hello {$order}, welcome to php";
    }

    

?>