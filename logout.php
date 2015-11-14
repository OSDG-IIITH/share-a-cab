<?php
session_start();
session_unset();
echo $_SESSION['username'];
unset($_SESSION['username']);
header("Location:https://login.iiit.ac.in/cas/logout");
?>
