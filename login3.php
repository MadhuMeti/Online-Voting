<?php
session_start();
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
	
$result = mysqli_query($conn,"SELECT * FROM admin WHERE Uname='" . $_POST["Uname"] . "' and Password = '". $_POST["Password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	

				echo "<script>
				alert('Login successful');
				window.location.href='admin.php';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='alogin.php';
				</script>";	

}
}	

?>




