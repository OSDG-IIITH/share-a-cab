<?php
include_once("config.php");
echo "<h1> Login using CAS. IIIT </h1>";
$tik = $_GET['ticket'];
$validate = file_get_contents("https://login.iiit.ac.in/cas/validate?service=http://web.iiit.ac.in/~cab/auth.php&ticket=$tik");
$array = explode("\n",$validate);
session_start();
if($array[0]=="yes"){
$_SESSION['username'] = $array[1];
$username = $array[1];
mysql_query("INSERT INTO shareAcab_logins VALUES(0,'$username')") or die("OOPS! An error occured! Report this NOW!");



header("location:home.php");
}
else
header("location:hacked.php");
?>
<p> Madhavan </p>
