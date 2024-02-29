<!Doctype html>
<html>
<center>
<style>
    body
    {
        background-image:url('eight.jpg');
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
<title> Party page </title>
<p style="font-size:40px">Party Registration</p>
<hr>
<br>
<br>
</center>
</head>
<center>
<body>
<form action="party1.php"  method ="post">
<table style="width:20%">
<tr style="text-align:center;height:30px"><td>Party_ID</td><td><input type=text name=Party_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Name</td><td><input type=text name=Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>
</table>
<br>
</form>
</body>
</center>
<br>
<center>
<form action="admin.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>