<?php
session_start();
if(isset($_SESSION["username1"]) && isset($_SESSION["password1"])) {
    session_destroy();
    header("Location: loginn.php"); // Corrected redirection syntax
    
} else {
    header("Location: loginn.php");
}
?>
