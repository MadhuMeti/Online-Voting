<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the student ID from the URL
$CP_ID = $_GET['CP_ID'];

// Create a SQL query to fetch the student details
$sql = "SELECT * FROM `candidate_position` WHERE CP_ID ='$CP_ID'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the student details as an associative array
    $candidate_position = mysqli_fetch_assoc($result);
} else {
    // If the query is not successful, show an error message
    echo "Error: No student found with CP_ID $CP_ID";
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
<form action="candidateposition2.php" method="post">
    <label for="CP_ID"><b>CP_ID:</label>
    <input type="text" name="CP_ID" value="<?php echo $candidate_position['CP_ID']; ?>"><br><br>
	<label for="Name"><b>Name:</label>
    <input type="text" id="Name" name="Name" value="<?php echo $candidate_position['Name']; ?>"><br><br>
	<label for="Short_Name"><b>Short_Name:</label>
    <input type="text" id="Short_Name" name="Short_Name" value="<?php echo $candidate_position['Short_Name']; ?>"><br><br>
	<label for="Votes_Allowed"><b>Votes_Allowed:</label>
    <input type="text" id="Votes_Allowed" name="Votes_Allowed" value="<?php echo $candidate_position['Votes_Allowed']; ?>"><br><br>
	<label for="Allow_Per_Party"><b>Allow_Per_Party:</label>
	<input type="text" id="Allow_Per_Party" name="Allow_Per_Party" value="<?php echo $candidate_position['Allow_Per_Party']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
</center>