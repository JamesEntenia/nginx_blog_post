<?php
$servername = "website-db.c50nksw01vcv.ap-east-1.rds.amazonaws.com";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
