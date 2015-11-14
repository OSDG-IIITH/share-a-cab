<?php
include_once("config.php");
include_once("header.php");

$id=$_GET['id'];

$del_query = "DELETE FROM shareAcab_DB WHERE id=$id";
mysql_query($del_query);
header("Location: modEntry.php");

?>
