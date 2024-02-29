<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "SELECT * FROM `candidate_position`";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Candidate Position Details</title>
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


<p style="font-size:40px">Candidate Position Details</p>
<hr>
<body>
    <table style="width:50%">
        <tr style="text-align:center;height:30px">
            <th>CP_ID</th>
            <th>Name</th>
			<th>Short_Name</th>
			<th>Votes_Allowed</th>
			<th>Allow_Per_Party</th>
            
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row["CP_ID"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
			<td><?php echo $row["Short_Name"]; ?></td>
            <td><?php echo $row["Votes_Allowed"]; ?></td>
			<td><?php echo $row["Allow_Per_Party"]; ?></td>            
            <td>
                <a href="cpedit.php?CP_ID=<?php echo $row["CP_ID"]; ?>">Edit</a> 
                <a href="cpdelete.php?CP_ID=<?php echo $row["CP_ID"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
	<form action="candidatePosition.php" method="post">
  <input type="submit" value="Add">
</form>
	<br>
<form action="admin.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>