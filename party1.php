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
$Party_ID = $_POST['Party_ID'];
echo "<br>";
$Name = $_POST['Name'];

$sql1 = "INSERT INTO `party`(`Party_ID`, `Name`) VALUES ('$Party_ID','$Name')";



echo $sql1;

		
		if ($conn->query($sql1) === TRUE) 
		{
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='admin.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='party.php';
				</script>";			
		}


?>

</html>