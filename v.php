<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "SELECT * FROM vote";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Votes</title>
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

<p style="font-size:40px">Candidate Votes</p>
<hr>
<br>
<br>
<body>
    <table style="width:30%">
        <tr style="text-align:center;height:30px">
            <th>Candidate_ID</th>
            <th>Party_ID</th>
			<th>No of Votes</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row['C_ID']; ?></td>
            <td><?php echo $row['Party_ID']; ?></td>
			<td><?php echo $row['No_of_votes']; ?></td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
<form action="spage.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>