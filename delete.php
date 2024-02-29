
<?php
include 'connect.php';
if(isset($_GET['ID'])){
 $ID=$_GET['ID'];
$sql="delete from student where ID ='$ID'";
$sql1="DELETE FROM `candidate` WHERE Student_ID='$ID'";
$sql2="delete from vote where C_ID in (select Candidate_ID from candidate, student where Student_ID='$ID')";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
if($result and $result1 and $result2){
echo"deleted sucessfully";
header('location:viewStudent.php');
}
else
{    
die(mysqli_error($conn));
}
}
?>