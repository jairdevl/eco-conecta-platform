<?php
include 'config/database.php';

// Get form data from POST request
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if email already exists
$sql = "SELECT id FROM users WHERE email = $1 AND status = true";
$result = pg_prepare($conn, "check_email", $sql);
$result = pg_execute($conn, "check_email", array($email));

if($result) {
    if(pg_num_rows($result) > 0) {
        http_response_code(400);
        echo "Email already exists";
    } else {
        // Insert new user using prepared statement
        $sql = "INSERT INTO users (firstname, lastname, email, password) 
                VALUES ($1, $2, $3, $4)";
        
        $result = pg_prepare($conn, "insert_user", $sql);
        $result = pg_execute($conn, "insert_user", 
            array($firstname, $lastname, $email, $hashed_password)
        );

        if($result) {
            header("Location: http://localhost/pet-store/src/signin.html");
            exit();
        } else {
            http_response_code(500);
            echo "Error creating user: " . pg_last_error($conn);
        }
    }
} else {
    http_response_code(500);
    echo "Error validating email";
}

// Close connection
pg_close($conn);
?>