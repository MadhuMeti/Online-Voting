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


$sql1 = "UPDATE `candidate` SET `CP_ID`='$CP_ID',`Party_ID`='$Party_ID',`Password`='$Password' WHERE Candidate_ID=$Candidate_ID ";

echo $sql1;

		if ($conn->query($sql1) === TRUE) 
		{
				echo "<script>
				alert('Updated Successfully');
				window.location.href='viewCandidate.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Update Failed');
				window.location.href='edit1.php';
				</script>";			
		}

?>

</html>