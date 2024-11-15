<?php
include 'connect.php'; // Database connection file include karo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the contact table
    $sql = "INSERT INTO contact (name, email, phone, address, message) VALUES ('$name', '$email', '$phone', '$address', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us! We will get back to you soon."; // Custom success message
    } else {
        echo "Oops! Something went wrong. Please try again later."; // Custom error message
    }
}

$conn->close(); // Close the database connection
?>
