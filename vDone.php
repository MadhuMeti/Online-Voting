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
}
session_start();
$ID = $_SESSION['ID'];

echo "<br>";
$C_ID = $_GET['Candidate_ID'];
echo "<br>";
//echo $ID;

			$sql1 = "UPDATE `vote` SET `No_of_votes`=No_of_votes+1 WHERE C_ID='$C_ID'";
			$sql3 = "INSERT INTO `voted`(`ID`) VALUES ('$ID')";

			//echo $sql1;
			//echo $sql3;
			if ($conn->query($sql3) === TRUE) 
		{
				$conn->query($sql1);
				echo "<script>
				alert('Vote Successful');
				window.location.href='president.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('You have already voted');
				window.location.href='president.php';
				</script>";			
		}
		 
?>
</html>