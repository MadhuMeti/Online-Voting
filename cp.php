<html>
<?php

$servername='localhost';
$username='madhu';
$password='hello';
$dbname='evoting';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
	echo "<br>";
	echo "<br>";
	echo "<center>";

echo "<h2>Candidate Positions</h2>";
echo "<hr>";
}
$sql = "SELECT * FROM `candidate_position`";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>CP_ID</th><th>Name</th><th>Short_Name</th><th>Votes_Allowed</th><th>Allow_Per_Party</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['CP_ID'];echo"</td><td>";
  echo $row['Name'];echo"</td><td>";
  echo $row['Short_Name'];echo"</td><td>";
  echo $row['Votes_Allowed'];echo"</td><td>";
  echo $row['Allow_Per_Party'];echo"</td><td>";
  

echo "<br>";	   
  } 
  echo "</table>";
  echo "</center>";
  echo "</html>";
}
else {
  echo "NOTHING TO RETRIEVE";
}
?>
<br>
<br>
<center>
<form action="spage.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>