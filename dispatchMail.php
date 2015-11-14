<?php
include_once("config.php");
include_once("header.php");

$to = $_POST['to'];
$sub = $_POST['sub'];
$body = $_POST['body'];

echo "TO : ".$to."\n<br />Subject : ".$sub."\n<br />Body :\n<br />".$body;

mail($to,$sub,$body);

?>
