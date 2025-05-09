<?php

include "config/database.php";

// Get form data from the request
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

// Check if the password and confirm password match
if ($password !== $confirm_password) {
    echo "Passwords do not match";
    exit;
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the email already exists
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = pg_query($conn, $sql);

if (pg_num_rows($result) > 0) {
    echo "Email already exists";
    exit;
} else {
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";
    pg_query($conn, $sql);
    echo "User registered successfully";
    header("Refresh: 0; url = signin.html");
    exit;
}

?>