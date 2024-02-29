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

$sql1 = "UPDATE `party` SET `Name`='$Name' WHERE Party_ID =$Party_ID";



echo $sql1;

		
		if ($conn->query($sql1) === TRUE) 
		{
				echo "<script>
				alert('Update Successful');
				window.location.href='viewParty.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Update Failed');
				window.location.href='pedit.php';
				</script>";			
		}


?>

</html>