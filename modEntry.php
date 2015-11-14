<?php
include_once("header.php");
include_once("config.php");

if($_SESSION['username']!="madhavan.chetlur@students.iiit.ac.in")
  header("Location: hacked.php");


?>

<h2> List of all applied IIITians </h2>
<?php
$find_match_query = "SELECT * FROM shareAcab_DB ORDER BY month,day,time_hrs,time_min";
//echo $find_match_query;
$rows = mysql_query($find_match_query);
?>
<table border = 1>
<tr><th>Email Id </th><th>Date </th><th>Time </th><th>Destination</th><th>Contact Number </th><th> Description </th></tr>
<?php

while($row =  mysql_fetch_assoc($rows)){
$email = $row['email'];
$dest= $row['dest'];
$date = $row['day'];
$month = $row['month'];
$time_hrs= $row['time_hrs'];
$time_mins = $row['time_min'];
$phone = $row['phone'];
$other = $row['other'];
$id = $row['id'];
  echo "<tr><td>$email</td><td>$date/$month</td><td>$time_hrs : $time_mins</td><td>$dest</td><td>$phone</td><td>$other</td><td><a href='delEntry.php?id=$id'>[X]</a></td></tr>";
//echo "Hi";
}

?>

</body>
</html>
