<?php

include_once("header.php");
include_once("conifg.php");

if($_SESSION['username']!="vinil.narang@students.iiit.ac.in")
  header("Location: hacked.php");

?>
<!--MADE BY MADHAVAN MALOLAN madhavan.chetlur@students.iiit.ac.in-->
<!--The above comment is made by Vinil Narang-->
<h2> Admin Interface </h2>
<p> With Great power comes great responsiblity. </p>
<ul>
  <li> <a href="mail.php"> Dispatch Mails to [Life]</a></li>
  <li> <a href="modEntry.php"> Moderate Users </a></li>
  <li> <a href="modComm.php"> Moderate Comments </a></li>
</ul>

</body>
</html>
