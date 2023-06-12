<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "departmentinfo";
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$result = $conn->query($query);

// Close the database connection
$conn->close();

// Redirect back to the form page
header("Location: enter_data.html");
exit;
?>
