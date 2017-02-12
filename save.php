<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peptalk";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "INSERT INTO users (email)
VALUES ('".$_POST['email']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>