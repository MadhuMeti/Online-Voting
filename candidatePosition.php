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
<title> Candidate Position page </title>
<p style="font-size:40px">Candidate Position Registration</p>
<hr> 
<br>
<br>
</center>
</head>
<center>
<body>
<form action="candidatePosition1.php"  method ="post">
<table style="width:20%">
<tr style="text-align:center;height:30px"><td>CP_ID</td><td><input type=text name=CP_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Name</td><td><input type=text name=Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Short_Name</td><td><input type=text name=Short_Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Votes_Allowed</td><td><input type=text name=Votes_Allowed required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Allow_Per_Party</td><td><input type=number name=Allow_Per_Party required=yes></input></td></tr>
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