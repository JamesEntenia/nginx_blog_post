<?php
$servername = "website-db.c50nksw01vcv.ap-east-1.rds.amazonaws.com";
$username = "user_db";
$password = "training";
$dbname = "wp_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST["name"];
$email = $_POST["email"];

// Insert data into the database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
