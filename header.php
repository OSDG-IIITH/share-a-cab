<?php
include_once("config.php");
//if(!isset($_SESSION['username']))
 // header("Location : index.py");

if(strlen($_SESSION['username']) == 0)
  header("Location: https://login.iiit.ac.in/cas/login?service=http://web.iiit.ac.in/~cab");

//  header("Location : hacked.php") or die();
$count_query = "SELECT COUNT(*) FROM shareAcab_DB";
$rows = mysql_query($count_query);
$row = mysql_fetch_array($rows);
$count = $row[0];

$hit_query = "SELECT COUNT(*) FROM shareAcab_logins";
$rows = mysql_query($hit_query);
$row = mysql_fetch_array($rows);
$hits = $row[0];

?>

<html>
  <head>
       <link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
       <title> Share A cab - IIITH </title>
  </head>
<body style="background:url(images/page-background.png) repeat-x;">
  <img src='images/iiith.png' style='float:left;height:50px' />
  <h1 style='padding:10px;font-family:arial'> &nbsp;Share a CAB  <!--|<span style="color:red;">Announcement : <a href="announce.php"> How to use? </a> </span></span> <span style="font-size:0.5em">[link]</span> --></h1>
  <p> <!-- <span style="background-color:red;color:white;padding:3px;border-radius:5px;"> <?php echo $count ?></span> users and counting.--> Monsoon 2014 - Page Hits : <?php echo $hits ?></a></p> 
  <div class="menu bubplastic horizontal blue">
        <ul>
                <li><span class="menu_r"><a href="home.php"><span class="menu_ar">Home</span></a></span></li>
                <li><span class="menu_r"><a href="getMatch.php"><span class="menu_ar">Find Match</span></a></span></li>
                <li><span class="menu_r"><a href="all.php?sort=default"><span class="menu_ar">All Poolers</span></a></span></li>
                <li><span class="menu_r"><a href="about.php"><span class="menu_ar">About</span></a></span></li>
                <li><span class="menu_r"><a href="help.php"><span class="menu_ar">Feedback & Help</span></a></span></li>
                <li><span class="menu_r"><a href="#"><span class="menu_ar">--<?php echo $_SESSION['username'] ?>--</span></a></span></li>
                <li><span class="menu_r"><a href="logout.php"><span class="menu_ar">Logout</span></a></span></li>
    
        </ul>


        <br class="clearit" />
</div>

