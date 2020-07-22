<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["firstname"]);
header("Location:signin.php");
?>