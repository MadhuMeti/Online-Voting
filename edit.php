<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the student ID from the URL
$ID = $_GET['ID'];

// Create a SQL query to fetch the student details
$sql = "SELECT * FROM student WHERE ID ='$ID'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the student details as an associative array
    $student = mysqli_fetch_assoc($result);
} else {
    // If the query is not successful, show an error message
    echo "Error: No student found with ID $ID";
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
<form action="student2.php" method="post">
    <label for="ID"><b>ID:</label>
    <input type="text" name="ID" value="<?php echo $student['ID']; ?>"><br><br>
	<label for="First_Name"><b>First_Name:</label>
    <input type="text" id="First_Name" name="First_Name" value="<?php echo $student['First_Name']; ?>"><br><br>
	<label for="Middle_Name"><b>Middle_Name:</label>
    <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $student['Middle_Name']; ?>"><br><br>
	<label for="Last_Name"><b>Last_Name:</label>
    <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $student['Last_Name']; ?>"><br><br>
	<label for="Course"><b>Course:</label>
	<input type="text" id="Course" name="Course" value="<?php echo $student['Course']; ?>"><br><br>
	<label for="Password"><b>Password:</label>
	<input type="text" id="Password" name="Password" value="<?php echo $student['Password']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
</center>