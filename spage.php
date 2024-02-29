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
Student Page
</title>
</head>
<br>
<p style="font-size:40px">Student Page</p>
<hr>
<br>
<br>
<br>
<body>
<table style="width:20%">

<!--<tr><th>Student</th><tr>-->

<!--<tr><td><a href='cp.php'>view candidate position details </a></td></tr>-->
<tr style="text-align:center;height:30px"><td><a href='p.php'><h3>view party details</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='vote.php'><h3>vote</h3></a></td></tr>
<tr style="text-align:center;height:30px"><td><a href='v.php'><h3>view votes</h3></a></td></tr>


</table>
</body>
<br>
<br>
<form action="slogin.php" method="post">
  <input type="submit" value="Logout">
</form>
</center>
</html>