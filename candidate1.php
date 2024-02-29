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
	echo "connected to db";

}

echo "<br>";
$Candidate_ID = $_POST['Candidate_ID'];
echo "<br>";
$Student_ID = $_POST['Student_ID'];
echo "<br>";
$CP_ID = $_POST['CP_ID'];
echo "<br>";
$Party_ID = $_POST['Party_ID'];
echo "<br>";
$Password = $_POST['Password'];


$sql1 = "INSERT INTO `candidate`(`Candidate_ID`, `Student_ID`, `CP_ID`, `Party_ID`, `Password`) VALUES ('$Candidate_ID','$Student_ID','$CP_ID','$Party_ID','$Password')";
$sql2 = "INSERT INTO `vote`(`C_ID`, `Party_ID`, `CP_ID`, `No_of_votes`) VALUES ('$Candidate_ID','$Party_ID','$CP_ID',0)";
echo $sql1;
echo $sql2;
		
		if (($conn->query($sql1) === TRUE)and($conn->query($sql2) === TRUE)) 
		{
				echo "<script>
				alert('Registered Successfully');
				window.location.href='homepage.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Registration Failed');
				window.location.href='candidate.php';
				</script>";			
		}


?>

</html>