<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
    <link rel="stylesheet" href="style3.css">
	<script src="https://kit.fontawesome.com/2c9a695449.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-left">
					<h1 class="sub-title">Contact Us</h1>
					<p> <i class="fa-solid fa-envelope"></i>support@theflo.com</p>
					<p> <i class="fa-solid fa-phone"></i>0123456789</p>
					<div class="social-icons">
						<a href=""><i class="fa-brands fa-github"></i></a>
						<a href=""><i class="fa-brands fa-instagram"></i></a>
						
						
					</div>
				</div>
				<div class="contact-right">
					<form  method="post" action="Contact.php">
						<input type="text" name="name" placeholder="your name" required>
						<input type="email" name="email" placeholder="your email" required>
						<textarea name="message" rows="6" placeholder="your message"></textarea>
						<button type="submit" class="btn btn2" name="submit">submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		var tablinks =document.getElementsByClassName("tab-links")
		var tabcontents =document.getElementsByClassName("tab-contents")
		function opentab(tabname){
			for(tablink of tablinks){
				tablink.classList.remove("active-link");

			}
			for(tabcontent of tabcontents){
				tabcontent.classList.remove("active-tab");
				
			}
			event.currentTarget.classList.add("active-link");
			document.getElementById(tabname).classList.add("active-tab");
		}
	</script>
</body>
</html>
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "app_flo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);





if (isset($_POST['name'])) {
  $name = $_POST['name'];
}
else {$name = '';}

if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
else {$email = '';}

if (isset($_POST['message'])) {
  $message = $_POST['message'];
}
else {$message= '';}
// Hash password using bcrypt
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

// Check connection
if (mysqli_query($db, $query)) {
    echo ".";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} ?>

