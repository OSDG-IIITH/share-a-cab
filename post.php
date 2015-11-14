<?php
include_once("config.php");

$comment = $_POST['comment'];
$email  = $_SESSION['username'];

$post_query = sprintf("INSERT INTO shareAcab_comments VALUES(0,'%s','%s')",mysql_real_escape_string($email),mysql_real_escape_string($comment));
mysql_query($post_query) or die("error occured!");
header("Location: help.php");

?>
