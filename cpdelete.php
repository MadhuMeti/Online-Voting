
<?php
include 'connect.php';
if(isset($_GET['CP_ID'])){
 $CP_ID=$_GET['CP_ID'];
$sql="delete from candidate_position where CP_ID ='$CP_ID'";
$result=mysqli_query($conn,$sql);
if($result){
echo"deleted sucessfully";
header('location:viewCP.php');
}
else
{    
die(mysqli_error($conn));
}
}
?>