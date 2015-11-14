<?php
/*
 * Proccess.php
 */
echo "Here";
include_once("config.php");
session_start();

$name = $_POST['name'];
$email = $_POST['email'];

if($email != $_SESSION['username'])
  header("Location: hacked.php");

$route = $_POST['route'];
$end = $_POST['end'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$time_hrs = $_POST['hrs'];
$time_min = $_POST['min'];
$other = $_POST['other'];
$phone = $_POST['phone'];
$radius = $_POST['radius'];

$mail = $_SESSION['username'];
$delete_query = "DELETE FROM shareAcab_DB where email = '$mail'";
echo $delete_query;
mysql_query($delete_query);

$insert_query = sprintf("INSERT INTO shareAcab_DB VALUES(0,'%s',$date,$route,'$end','$month',$time_hrs,$time_min,'%s','%s',$radius,false)",mysql_real_escape_string($email),mysql_real_escape_string($phone),mysql_real_escape_string($other));
mysql_query($insert_query) or die("OOPs!An un-expected Error has occured. Report this Now!");
//echo $insert_query;
header("Location: getMatch.php");
?>
