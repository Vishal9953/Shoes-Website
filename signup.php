<?php
// Include database connection
include('connect.php'); 

// Check if the signup form is submitted
if (isset($_POST['signup'])) {
    $username = $_POST['username'];  // Get username from form
    $email = $_POST['email'];        // Get email from form
    $password = $_POST['password'];  // Get password from form

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

    // Insert the username, email, and hashed password into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $sql);
    
    // Check if insertion is successful
    if ($result) {
        echo "Signup successful!";
    } else {
        echo "Error: " . mysqli_error($conn); // Show error if query fails
    }
}
?>