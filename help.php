<?php
include_once("header.php");
include_once("config.php");
?>
<h2> Feedback & Help </h2>
<p> Please give your feedbacks/comments here. </p>
<form action="post.php" method=POST>
<input readonly="readonly" value="<?php echo $_SESSION['username'] ?>" /> <br />
<textarea cols=30 name="comment">Your comments here.</textarea> <br />
<input type=submit value="Post!" />
</form>
<ul>
<?php
$all_comments_query = "SELECT * FROM shareAcab_comments ORDER BY id DESC";
$rows = mysql_query($all_comments_query);
while($row = mysql_fetch_assoc($rows)){
  echo "<li><em>".$row['user']."</em> says <br /> ".$row['comment']." </li>";
}
?>
</ul>

</body>
</html>
