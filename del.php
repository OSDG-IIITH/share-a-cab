<?php
include_once("config.php");

$user = $_SESSION['username'];

if($_SESSION['username']!="madhavan.chetlur@students.iiit.ac.in")
  header("Location: hacked.php");


$delete_query = "DELETE FROM shareAcab_DB WHERE email='$user'";
echo $delete_query;
mysql_query($delete_query);
header("Location: home.php");


?>
