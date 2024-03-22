<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document</title>
</head>
<body>
    
    <?php 
    if(isset($_SESSION["username1"]) && isset($_SESSION["password1"])) {
        echo"<h1> HOME</h1>";
        echo $_SESSION["username"]."<br>";
        echo $_SESSION["password"];
        echo "<a href='logout.php'> logout</a>";
    } else {
        header("Location: loginn.php");
    }
    
    ?>
    
</body>
</html>