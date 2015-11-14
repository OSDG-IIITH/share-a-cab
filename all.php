<?php
include_once("header.php");
include_once("config.php");

?>

<h2> List of all applied IIITians </h2>
<?php
if($_GET['sort'] == "default"){
$find_match_query = "SELECT * FROM shareAcab_DB ORDER BY dest,month,day,time_hrs,time_min";
echo "<p> Smart Sort: Sorts poolers according to their destination, and within each destination sorted by time of travel. Hope this finds you the best pool :) </p>";
}
if($_GET['sort'] == "destination")
$find_match_query = "SELECT * FROM shareAcab_DB ORDER BY dest";
if($_GET['sort'] == "date")
$find_match_query = "SELECT * FROM shareAcab_DB ORDER BY month,day,time_hrs,time_min";
//echo $find_match_query;
$rows = mysql_query($find_match_query);
?>
<p> Sort By : <a href="all.php?sort=date">Date</a> | <a href="all.php?sort=destination"> To/From </a> | <a href="all.php?sort=default"> Smart Sort </a> </p>
<table border = 1>
<tr><th>Email Id </th><th>Date </th><th>Time </th><th>To/From</th><th>Contact Number </th><th> Description </th></tr>
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
$route = $row['route'];
if($route == 0){
    $route = "To IIIT";
}
else
    $route = "From IIIT";

  echo "<tr><td>$email</td><td>$date/$month</td><td>$time_hrs : $time_mins</td><td>$dest <i>$route </i></td><td>$phone</td><td>$other</td></tr>";
//echo "Hi";
}

?>

</body>
</html>
