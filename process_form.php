<?php
$servername = "sql12.freesqldatabase.com"; // Replace with your server name
$username = "sql12668423"; // Replace with your database username
$password = "fX3CgScAWF"; // Replace with your database password
$dbname = "sql12668423"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
