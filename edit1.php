<?php

// Connect to the database
$conn = mysqli_connect("localhost", "madhu", "hello", "evoting");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the student ID from the URL
$Candidate_ID = $_GET['Candidate_ID'];

// Create a SQL query to fetch the student details
$sql = "SELECT * FROM candidate WHERE Candidate_ID ='$Candidate_ID'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query is successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the student details as an associative array
    $candidate = mysqli_fetch_assoc($result);
} else {
    // If the query is not successful, show an error message
    echo "Error: No student found with Candidate_ID $Candidate_ID";
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
<form action="candidate2.php" method="post">
    <label for="Candidate_ID"><b>Candidate_ID:</label>
    <input type="text" name="Candidate_ID" value="<?php echo $candidate['Candidate_ID']; ?>"><br><br>
	<label for="Student_ID"><b>Student_ID:</label>
    <input type="text" id="Student_ID" name="Student_ID" value="<?php echo $candidate['Student_ID']; ?>"><br><br>
	<label for="CP_ID"><b>CP_ID:</label>
    <input type="text" id="CP_ID" name="CP_ID" value="<?php echo $candidate['CP_ID']; ?>"><br><br>
	<label for="Party_ID"><b>Party_ID:</label>
    <input type="text" id="Party_ID" name="Party_ID" value="<?php echo $candidate['Party_ID']; ?>"><br><br>
	<label for="Password"><b>Password:</label>
	<input type="text" id="Password" name="Password" value="<?php echo $candidate['Password']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
</center>