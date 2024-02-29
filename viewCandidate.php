<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "SELECT * FROM candidate";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Candidates</title>
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

<p style="font-size:40px">Candidate Details</p>
<hr>
<body>
    <table style="width:40%">
        <tr style="text-align:center;height:30px">
            <th>Candidate_ID</th>
            <th>Student_ID</th>
            <th>CP_ID</th>
            <th>Party_ID</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row["Candidate_ID"]; ?></td>
            <td><?php echo $row["Student_ID"]; ?></td>
            <td><?php echo $row["CP_ID"]; ?></td>
			<td><?php echo $row["Party_ID"]; ?></td>
            <td>
                <a href="edit1.php?Candidate_ID=<?php echo $row["Candidate_ID"]; ?>">Edit</a> 
                <a href="delete1.php?Candidate_ID=<?php echo $row["Candidate_ID"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
	<form action="candidate3.php" method="post">
  <input type="submit" value="Add">
</form>
	<br>
<form action="admin.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>