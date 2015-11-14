<?php
session_start();
echo "Start";
header("Location: https://login.iiit.ac.in/cas/login?service=http://web.iiit.ac.in/~cab/auth.php");
//header("Location:http://www.google.com");
echo "End";

?>
