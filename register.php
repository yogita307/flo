<form action="register.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" /><br />
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" /><br />
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" /><br />
  <button type="submit">Register</button>
</form>


<?php
  // Connect to MySQL database
//   $conn = mysqli_connect("localhost", "root", "", "app_flo"); 
  
  // Get input values from form

  
  // Redirect to login page
//   header('Location: login.php');
?>
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "app_flo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash password using bcrypt
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
mysqli_query($db, $query);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}