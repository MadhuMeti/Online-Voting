<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the table
$sql = "SELECT * FROM `party`";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Party Details</title>
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


<p style="font-size:40px">Party Details</p>
<hr>
<body>
    <table style="width:40%">
        <tr style="text-align:center;height:30px">
            <th>Party_ID</th>
            <th>Name</th>
            
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr style="text-align:center;height:30px">
            <td><?php echo $row["Party_ID"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            
            <td>
                <a href="pedit.php?Party_ID=<?php echo $row["Party_ID"]; ?>">Edit</a> 
                <a href="pdelete.php?Party_ID=<?php echo $row["Party_ID"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
	<br>
	<br>
	<form action="party.php" method="post">
  <input type="submit" value="Add">
</form>
	<br>
<form action="admin.php" method="post">
  <input type="submit" value="Back">
</form>
</center>
</body>
</html>