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
$CP_ID = $_POST['CP_ID'];
echo "<br>";
$Name = $_POST['Name'];
echo "<br>";
$Short_Name = $_POST['Short_Name'];
echo "<br>";
$Votes_Allowed = $_POST['Votes_Allowed'];
echo "<br>";
$Allow_Per_Party = $_POST['Allow_Per_Party'];


$sql1 = "UPDATE `candidate_position` SET `CP_ID`='$CP_ID',`Name`='$Name',`Short_Name`='$Short_Name',`Votes_Allowed`='$Votes_Allowed',`Allow_Per_Party`='$Allow_Per_Party' WHERE `CP_ID`='$CP_ID'";

echo $sql1;

		if ($conn->query($sql1) === TRUE) 
		{
				echo "<script>
				alert('Updated Successfully');
				window.location.href='viewCP.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Update Failed');
				window.location.href='cpedit.php';
				</script>";			
		}

?>

</html>