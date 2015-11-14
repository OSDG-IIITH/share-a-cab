<?php
/*
 * Proccess.php
 */
//echo "Connecting";
$db_mysql_host='localhost';//Default MySQL db at localhost
$db_mysql_user='cab';//db user name
$db_mysql_password='getLost';//db password for auth
$link = mysql_connect($db_mysql_host,$db_mysql_user,$db_mysql_password) or die("OOPS");
if(!$link)
        die("Could not Connect.");
mysql_select_db("cab") or die(mysql_error());
session_start();
?>
