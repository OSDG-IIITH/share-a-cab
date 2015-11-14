<?php

include_once("config.php");
include_once("header.php");

$username = $_SESSION['username'];
$user = $_SESSION['username'];
$my_details_query = "SELECT * FROM shareAcab_DB where email='$user'";
$rows = mysql_query($my_details_query);
$my_details = mysql_fetch_assoc($rows);


$route = $my_details['route'];
//echo "-->".$route."<--";
$dest= $my_details['dest'];
$date = $my_details['day'];
$month = $my_details['month'];
$time_hrs= $my_details['time_hrs'];
$radius = $my_details['radius'];
$timeA = $time_hrs + $radius+1;
$timeB = $time_hrs - $radius-1;

if($timeA > 23){
    $dateA = $date;
    $dateB = $date + 1;
    $timeA = $timeA - 23;
    $find_match_query = "SELECT * FROM shareAcab_DB where route=$route AND dest='$dest' AND month='$month' AND ((day=$date AND time_hrs > $timeB) OR(day=$dateB AND time_hrs < $timeA)) ";
}
else if($timeB < 0){
    $dateA = $date -1;
    $dateB = $date;
    $timeB = $timeB + 24;
    $find_match_query = "SELECT * FROM shareAcab_DB where route=$route AND dest='$dest' AND month='$month' AND ((day=$dateA AND time_hrs > $timeB) OR(day=$dateB AND time_hrs < $timeA)) ";
}
else{
$find_match_query = "SELECT * FROM shareAcab_DB where route=$route AND dest='$dest' AND month='$month' AND day=$date AND (time_hrs < $timeA AND time_hrs > $timeB)";
}
//echo $find_match_query;
$rows = mysql_query($find_match_query);
?>
<h2> Closest results : </h2>
<table border = 1>
<tr><th>Email Id </th><th>Date </th><th>Time </th><th>Contact Number </th><th> Description </th></tr>
<?php
if(mysql_num_rows($rows) > 0 ){
while($row =  mysql_fetch_assoc($rows)){
$email = $row['email'];
$dest= $row['dest'];
$date = $row['day'];
$month = $row['month'];
$time_hrs= $row['time_hrs'];
$time_mins = $row['time_min'];
$phone = $row['phone'];
$other = $row['other'];
  echo "<tr><td>$email</td><td>$date/$month</td><td>$time_hrs : $time_mins</td><td>$phone</td><td>$other</td></tr>";
//echo "Hi";
}
}
else{
echo "<h3 style='color:red'> You have not entered your details yet. Please fill in the form on the Front(Home) page.</h3>";
}

?>
</table>
<p> Not happy? </p>
<ul>
<li> Have you entered the correct details? </li>
<li>Come back here later, wait for more users to register.</li>
<li> See all the entries <a href="all.php"> Here </a> </li>
<li> Lodge a complaint <a href="help.php"> Here </a></li>
</ul>
</body>
</html>
