<?php
$conn=new mysqli('localhost','madhu','hello','evoting');
if(!$conn){
die(mysqli_error($conn));
}
?>