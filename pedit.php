<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the student ID from the URL
$Party_ID = $_GET['Party_ID'];

// Create a SQL query to fetch the student details
$sql = "SELECT * FROM Party WHERE Party_ID ='$Party_ID'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the student details as an associative array
    $Party = mysqli_fetch_assoc($result);
} else {
    // If the query is not successful, show an error message
    echo "Error: No Party found with Party_ID $Party_ID";
    exit;
}

// Close the connection to the database
mysqli_close($conn);

// Display the student details in the edit form
?>
<center>
<style>
    body
    {
        background-image:url('nine.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size:100% 100%
    }
	table, th, td {
	border:2px solid black;
	border-collapse: collapse;
	}
</style>
<br>
<p style="font-size:40px">Update Details</p>
<hr>
<br>
<br>
<form action="party2.php" method="post">
    <label for="Party_ID"><b>Party_ID</label>
    <input type="text" name="Party_ID" value="<?php echo $Party['Party_ID']; ?>"><br><br>
	<label for="Name"><b>Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $Party['Name']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
</center>
