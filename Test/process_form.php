<?php
// Establish connection to MySQL
$servername = "localhost"; // if not, change to your host
$username = "root"; // default username for MySQL
$password = ""; // default password for MySQL
$dbname = "sign"; // name of your database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into MySQL
$sql = "INSERT INTO sign (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfullly";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
