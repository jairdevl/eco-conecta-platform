<?php

// Includes database configuration file
include 'config/database.php';

// Get form data from POST request
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//Hash password
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$hashed_password = $password;

// Check if email already exists
$sql = "SELECT count(id) FROM users WHERE email = '$email' and status = true";
$result = pg_query($conn, $sql);

?>