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
<title> Candidate page </title>
<p style="font-size:40px">Candidate Registration</p>
<hr>
<br>
</center>
</head>
<center>
<body>
<form action="candidate4.php"  method ="post">
<table style="width:20%">
<tr style="text-align:center;height:30px"><td>Candidate_ID</td><td><input type=text name=Candidate_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Student_ID</td><td><input type=text name=Student_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Position_ID</td><td><input type=text name=CP_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Party_ID</td><td><input type=text name=Party_ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Password</td><td><input type=password name=Password required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>
</table>
</form>
</body>
</center>
<br>
<center>
<form action="viewCandidate.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>