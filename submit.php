<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "mydatabase";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];

// Insert data into the register table
$sql = "INSERT INTO register (name, gender, email, address) VALUES ('$name', '$gender', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully.";
} else {
    echo "Error adding record: " . $conn->error;
}

$conn->close();
?>
