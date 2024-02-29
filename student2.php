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
$ID = $_POST['ID'];
echo "<br>";
$First_Name = $_POST['First_Name'];
echo "<br>";
$Middle_Name = $_POST['Middle_Name'];
echo "<br>";
$Last_Name = $_POST['Last_Name'];
echo "<br>";
$Course = $_POST['Course'];
echo "<br>";
$Password = $_POST['Password'];

$sql1 = "UPDATE `student` SET `ID`='$ID',`First_Name`='$First_Name',`Middle_Name`='$Middle_Name',`Last_Name`='$Last_Name',`Course`='$Course',`Password`='$Password' WHERE `ID`='$ID'";

echo $sql1;

		if ($conn->query($sql1) === TRUE) 
		{
				echo "<script>
				alert('Updated Successfully');
				window.location.href='viewStudent.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Update Unsuccessful');
				window.location.href='edit.php';
				</script>";			
		}

?>

</html>