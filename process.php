<!DOCTYPE html>
<html>
<head>
	<title>Period Tracker</title>
</head>
<body>
	<h1>Period Tracker</h1>
	<form action="process.php" method="POST">
		<label for="start_date">Start Date:</label>
		<input type="date" id="start_date" name="start_date" required><br><br>
		
		<label for="end_date">End Date:</label>
		<input type="date" id="end_date" name="end_date" required><br><br>
		
		<label for="flow">Flow:</label>
		<select id="flow" name="flow">
			<option value="light">Light</option>
			<option value="medium">Medium</option>
			<option value="heavy">Heavy</option>
		</select><br><br>
		
		<label for="symptoms">Symptoms:</label>
		<textarea id="symptoms" name="symptoms"></textarea><br><br>
		
		<label for="notes">Notes:</label>
		<textarea id="notes" name="notes"></textarea><br><br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
// Retrieve form data
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$flow = $_POST['flow'];
$symptoms = $_POST['symptoms'];
$notes = $_POST['notes'];

// Connect to database
$host = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'period_tracker';

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into database
$sql = "INSERT INTO periods (start_date, end_date, flow, symptoms, notes)
VALUES ('$start_date', '$end_date', '$flow', '$symptoms', '$notes')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>







<!-- <?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "app_flo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);



if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
else {$email = '';}

if (isset($_POST['type'])) {
  $type = $_POST['type'];
}
else {$type = '';}
if (isset($_POST['pills'])) {
  $pills = $_POST['pills'];
}
else {$pills = '';}
if (isset($_POST['last_period'])) {
  $last_period = $_POST['last_period'];
}
else {$last_period= '';}
if (isset($_POST['length'])) {
  $length = $_POST['length'];
}
else {$length= '';}
if (isset($_POST['other'])) {
  $other = $_POST['other'];
}
else {$other= '';}
// Hash password using bcrypt
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO inputs (email,type, pills, last_period,length,other) VALUES ('$email','$type', '$pills', '$last_period','$length','$other')";
mysqli_query($db, $query);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} ?>

<?php

?> -->
