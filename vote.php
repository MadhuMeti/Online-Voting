<html>
<?php
session_start();
?>
<center>
<head>
<title>
Vote Page
</title>
</head>
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
<p style="font-size:40px">Vote Page</p>
<hr>
<br>
<br>
<body>
<table style="width:20%">

<!--<tr><th>Vote</th><tr>-->

<tr style="text-align:center;height:50px"><td><a href='president.php'><b>click to vote for president</a></td></tr>
<tr style="text-align:center;height:50px"><td><a href='chairman.php'><b>click to vote for chairman</a></td></tr>


</table>
</body>
<br>
<br>
<form action="spage.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>