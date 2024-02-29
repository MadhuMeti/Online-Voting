
<?php
include 'connect.php';
if(isset($_GET['Candidate_ID'])){
 $Candidate_ID=$_GET['Candidate_ID'];
$sql="delete from candidate where Candidate_ID ='$Candidate_ID'";
$sql1="DELETE FROM `vote` WHERE C_ID ='$Candidate_ID'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
if($result and $result1){
echo"deleted sucessfully";
header('location:viewCandidate.php');
}
else
{    
die(mysqli_error($conn));
}
}
?>