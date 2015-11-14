<?php
include_once("config.php");
?>

<?php

$count_query = "SELECT COUNT(*) FROM shareAcab_DB";
$rows = mysql_query($count_query);
$row = mysql_fetch_array($rows);
$count = $row[0];

$find_match_query = "SELECT * FROM shareAcab_DB where flag=false ORDER BY dest,month,day,time_hrs,time_min";
//echo $find_match_query;
$rows = mysql_query($find_match_query);

if(mysql_num_rows($rows) == 0)
  die("");

$mail_body="";

$mail_body = "Hi!\n\n Here is your daily update on cab-pools available. Please take note and we hope we have helped you find a pool.\n We now have $count users. If you have not already registered, register NOW! \n Follow this link : http://goo.gl/YKIGm to update your profiles and get BEST car-pools \n\n\n The following have registered already. Update your profile to be listed here.\n";
$mail_body= $mail_body."\n+-------------------------------------------------------------------------------+";
$mail_body=$mail_body."\n|Username \t\t\t| Date \t| Time \t| Destination \t| Contact No.\t|";
$mail_body= $mail_body."\n+-------------------------------------------------------------------------------+";
while($row =  mysql_fetch_assoc($rows)){
$email = $row['email'];
$dest= $row['dest'];
$date = $row['day'];
$month = $row['month'];
$time_hrs= $row['time_hrs'];
$time_mins = $row['time_min'];
$phone = $row['phone'];
$other = $row['other'];
$user = substr($email,0,20);
$mail_body= $mail_body."\n| $user... \t $date/$month \t $time_hrs:$time_mins \t $dest \t $phone\t";
//echo "Hi";
}
$mail_body= $mail_body."\n+-------------------------------------------------------------------------------+";
$mail_body = $mail_body."\n\n This is an automatically generated Mail. Please do not reply back here.\n For queries/comments mail : madhavan.chetlur@students.iiit.ac.in\n or anish.shankar@students.iiit.ac.in\n Regards.\n\n ~One mail a day, keeps the inbox clean.~";


$subject="[Life] Share a cab Digest";
echo $mail_body;
?>

