<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<center>
<style>
    body
    {
        background-image:url('six.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size:100% 100%
    }
	table, th, td {
	border:2px solid black;
	border-collapse: collapse;
	}
</style>

<p style="font-size:40px">Student Details</p>
<hr>
<body>
    <table style="width:50%">
        <tr style="text-align:center;height:30px">
            <th>ID</th>
            <th>First_Name</th>
            <th>Middle_Name</th>
            <th>Last_Name</th>
			<th>Course</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["First_Name"]; ?></td>
            <td><?php echo $row["Middle_Name"]; ?></td>
			<td><?php echo $row["Last_Name"]; ?></td>
			<td><?php echo $row["Course"]; ?></td>
            <td>
                <a href="edit.php?ID=<?php echo $row["ID"]; ?>">Edit</a> 
                <a href="delete.php?ID=<?php echo $row["ID"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
	<form action="student3.php" method="post">
  <input type="submit" value="Add">
</form>
	<br>
<form action="admin.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>