<html>
<style>
    body
    {
        background-image:url('seven.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size:100% 100%
    }
</style>
<center>
<table style="width:20%;border:1px solid black;border-collapse: collapse;">
<br>
<p style="font-size:40px">Admin Login</p>
<hr>
<br>
<br>
<form action='login3.php' method='post'>
<tr style="text-align:center;height:30px"><td>Username</td><td><input type=text name=Uname required></input></td>   </tr>
<tr style="text-align:center;height:30px"><td>Password</td><td><input type=password name=Password required></input></td>   </tr>
<tr style="text-align:left;height:30px"><td></td><td><input type=submit></input></td>   </tr>
</form>
</table>
</center>
<br>
<center>
<form action="homepage.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</html>