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
<title> Student page </title>
<p style="font-size:40px">Student Registration</p>
<hr> </hr>
<br>
</center>
</head>
<center>
<body>
<form action='student4.php'  method ='post'>

<table style="width:20%">
<tr style="text-align:center;height:30px"><td>ID</td><td><input type=text name=ID required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>First_Name</td><td><input type=text name=First_Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Middle_Name</td><td><input type=text name=Middle_Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Last_Name</td><td><input type=text name=Last_Name required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Course</td><td><input type=text name=Course required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td>Password</td><td><input type=password name=Password required=yes></input></td></tr>
<tr style="text-align:center;height:30px"><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>
</table>

<br>
</form>
</body>
</center>
<br>
<center>
<form action="viewStudent.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>