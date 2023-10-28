<?php
  // Start session
  session_start();
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
  }
  else {$email = 'gb';}
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
  else {$password= 'rgd';}
  // Retrieve user data from database
  $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
  if($query != NULL){
    header('Location: main.html');
  } else{
    echo "null";
  }