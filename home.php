<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter</label>
        <input type="text" name="num1"> <br>
        <label>Enter</label>
        <input type="text" name="num2"> <br>
        <input type="submit" name="submit_button" value="calculate">
    </form>
    
</body>
</html>

<?php
// functions
    function addition(){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;

        echo $sum;
    };
    
    if(isset($_POST["submit_button"])){
        addition();
        
    }
?>