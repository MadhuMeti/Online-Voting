<html>
<?php
session_start();
?>
<center>
<style>
    body
    {
        background-image:url('five.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size:100% 100%
    }
	table, th, td {
	border:2px solid black;
	border-collapse: collapse;
	}
</style>
<head>
<title>
Admin Page
</title>
</head>
<br>
<p style="font-size:40px">Admin Page</p>
<hr>
<br>
<br>
<body>
<table style="width:20%">

<!--<tr><th>Admin</th><tr>-->

<tr style="text-align:center;height:30px"><td><a href='student.php'> <b><h3>Add Student Details</h3></a></td></tr>
<!--<tr><td><a href='candidatePosition.php'>Add Candidate Position Details </a></td></tr>-->
<tr style="text-align:center;height:30px"><td><a href='party.php'><b><h3>Add Party Details</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='viewStudent.php'><b><h3>View Student Details</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='viewCP.php'><b><h3>View Candidate Position Details</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='viewParty.php'><b><h3>View Party Details</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='viewCandidate.php'><b><h3>View Candidate Details</h3></a></td></tr>
<!--<tr><td><a href='viewStatus.php'>Voting Status</a></td></tr>-->

</table>
</body>
<br>
<br>
<form action="alogin.php" method="post">
  <input type="submit" value="Logout">
</form>
</center>
</html>