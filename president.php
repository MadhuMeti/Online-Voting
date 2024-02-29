<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "select Candidate_ID,Party_ID,Name,First_Name,Last_Name from student,candidate natural join party where student.ID=candidate.Student_ID and CP_ID=61";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>President</title>
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

<p style="font-size:40px">Vote For President</p>
<hr>
<br>
<br>
<body>
    <table style="width:50%">
        <tr style="text-align:center;height:30px">
            <th>Candidate_ID</th>
            <th>Party_ID</th>
            <th>Party_Name</th>
            <th>First_Name</th>
			<th>Last_Name</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row["Candidate_ID"]; ?></td>
            <td><?php echo $row["Party_ID"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
			<td><?php echo $row["First_Name"]; ?></td>
			<td><?php echo $row["Last_Name"]; ?></td>
            <td>
                <a href="vDone.php?Candidate_ID=<?php echo $row["Candidate_ID"]; ?>">Vote</a> 
            </td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
<form action="vote.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>