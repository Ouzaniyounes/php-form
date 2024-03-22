<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> create account</title>
</head>
<body>
    <form action="createaccount.php" method="post" >
        <label for=""> username</label>
        <input type="text" name="user">
        <label for=""> password</label>
        <input type="password" name="pass">
        <input type="submit" value="Create account" name="create">
    </form>
    <?php
        session_start();
        if(isset($_POST["create"])) {
            if(isset($_POST["user"]) && isset($_POST["pass"])) {  // Corrected syntax here
                if(isset($_SESSION["username"]) && isset($_SESSION["password"])) {
                    array_push($_SESSION["username"],$_POST["user"]);
                    array_push($_SESSION["password"],$_POST["pass"]);
                    echo" your account created"."<br>";
                    echo "<a href='loginn.php'> login</a>";
                } else {
                    $username = $_POST['user'];
                    $password = $_POST['pass']; 
                    $_SESSION["username"] = array($username) ;
                    $_SESSION["password"] = array($$password) ;
                    echo" your account created"."<br>";
                    echo "<a href='loginn.php'> login</a>";
                }
                
                }

        }
    
        ?>
    
</body>
</html>