
<?php
include 'connect.php';
if(isset($_GET['Party_ID'])){
 $Party_ID=$_GET['Party_ID'];
$sql="delete from Party where Party_ID ='$Party_ID'";
$result=mysqli_query($conn,$sql);
if($result){
echo"deleted sucessfully";
header('location:viewParty.php');
}
else
{    
die(mysqli_error($conn));
}
}
?>