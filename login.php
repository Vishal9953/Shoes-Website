<?php
session_start();  // Session ko start karte hain
include('connect.php');  // Database connection ko include karte hain

// Check if login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];  // Get username from form
    $password = $_POST['password'];  // Get password from form

    // Query to get user data
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    // If user found in database
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);  // Fetch the user data

        // Verify password using password_verify function
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;  // Set session for logged-in user
            header("Location: dashboard.php");  // Redirect to dashboard page
        } else {
            echo "Invalid username or password"; // Error if password does not match
        }
    } else {
        echo "Invalid username or password"; // Error if user not found
    }
}
?>