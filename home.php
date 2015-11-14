<?php
include_once("configphp");
include_once("header.php");
?>
<h2>Fill in the form below, and we'll find you a car pool!</h2>
      <form action="process.php" method=POST ><table>
      <tr><td> Name </td><td><input name="name" /></td><td></td></tr>
      <tr><td> Email </td><td><input name=email readonly="readonly" value='<?php echo $_SESSION['username'] ?>' /></td><td> This is only for the authentication </td></tr>
      <tr><td> Direction </td><td> <input type=radio name="route" value=0 /> To IIIT-H | <input type="radio" name="route" value=1 checked="checked"/> From IIIT-H </td><td> Mention the direction of your travel. Be VERY careful here.</td></tr>
      <tr><td> Travel Route </td> <td><select name="end">
	<option value="Airport"> Airport </option>
	<option value="Begumpet"> Begumpet </option>
	<option value="HtiTech"> Hi-Tech City </option>
 	<option value="Nampally"> Hyderabad Deccan / Nampally </option>
	<option value="Kacheguda"> Kacheguda</option>
	<option value="Kharitabad"> Khairatabad </option>
	<option value="Medhipatnam"> Medipatnam </option>
        <option value="Secundrabad"> Secunderabad </option>
      </select> </td><td>Your destination/source depending on route direction</td></tr>
      <tr><td> Date of Cab </td><td> Date : <select name="date">
<?php
     for($i=1;$i<32;$i++)
     echo "\n<option value=$i>$i</option>"
?>

   </select>
        Month:<select name="month">
	<option value=1> January </option>
	<option value=2> February </option>
	<option value=3> March </option>
	<option value=4> April </option>
	<option value=5> May </option>
	<option value=6> June </option>
	<option value=7> July </option>
	<option value=8> August </option>
	<option value=9> September </option>
	<option value=10> October </option>
	<option value=11> November </option>
	<option value=12> December </option>
    </select> </td><td></td></tr>
   <td> Time of Cab </td><td><select name='hrs' >
<?php
  for($i = 0 ; $i<24;$i++)
     echo "<option value=$i>$i</option>"
?>
   </select> : <select name='min'><option value=0> 00 </option><option value=15> 15</option> <option value=30> 30 </option> <option value=45>45</option> </select></td><td> Ensure that you use 24Hr system (eg. 2:15 pm = 14:15) </td></tr>
   <tr><td> Contact Number </td> <td> <input name="phone" /></td><td>We recommend that you give your Mobile number so that others can contact you.<br /> However you may choose to leave it blank.</tr>
   <tr><td> Waiting Radius  </td><td> <select name="radius"><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option></select></td><td>Time you are willing to wait in hours</td></tr>
   <tr><td> Other information </td><td><textarea name="other"></textarea></td><td>Any other information like amount of luggage co-passengers etc.</td></tr>

   </table>
   <input type="submit" value="Submit" /></form>
   </body>
</html>
