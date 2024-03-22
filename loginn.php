 <?php session_start();?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login</title>
    </head>
    <body>
    <form action="loginn.php" method ="POST">
            <label for=""> username</label>
            <input type="text" name="s">
            <label for=""> password </label>
            <input type="password" name="b">
            <input type="submit" value="connect" name="p">
        </form>
        <a href="createaccount.php"> create account</a>
    
 
        <?php
        if(isset($_SESSION["username1"]) && isset($_SESSION["password1"])) {
            header("Location: home.php");
        } else {
        if(isset($_POST["p"])) {
            if(isset($_POST["s"]) && isset($_POST["b"])) { 
                $user = $_POST["s"];
                $pass = $_POST["b"];
                if($_SESSION["username"] == $user &&  $_SESSION["password"] == $pass) {
                    $_SESSION["username1"] = $user ;
                    $_SESSION["password1"] = $pass ;
                    header("Location: home.php");
                } else if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
                    echo "pass and user incorrect"; 
                } else {
                    echo "you need to create account before";
                }
            } 
        }
    }
        ?>
         
    </body>
</html> 