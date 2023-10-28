

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="home.css" />
    <title>FLO</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html>
      <head>
        
        
      </head>
      <body>
        <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true" />
          
          <div class="signup">
            <form action="home.php" method="post">
              <label for="chk" aria-hidden="true">SIGN UP</label>
              
              <input
                type="text"
                name="username"
                placeholder="User name"
                required=""
              />
              <input
                type="email"
                name="email"
                placeholder="Email"
                required=""
              />
              <input
                type="password"
                name="password"
                placeholder="Password"
                required=""
              />
              <button>Sign up</button>
            </form>
          </div>

          <div class="login">
            <form action="login.php" method="post">
              <label for="chk" aria-hidden="true">LOGIN</label>
              <input
                type="email"
                name="email"
                placeholder="Email"
                required=""
              />
              <input
                type="password"
                name="password"
                placeholder="Password"
                required=""
              />
              <button>Login</button>
            </form>
          </div>
        </div>
      </body>
    </html>
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





if (isset($_POST['username'])) {
  $username = $_POST['username'];
}
else {$username = '';}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
else {$email = '';}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
}
else {$password= '';}
// Hash password using bcrypt
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
mysqli_query($db, $query);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} ?>

