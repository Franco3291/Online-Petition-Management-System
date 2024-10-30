<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petition_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$signature_data = $_POST['signature_data'];
$comments = $_POST['comments'];

// Insert data into MySQL database
$sql = "INSERT INTO petitions (first_name, last_name, email, signature, comments)
VALUES ('$first_name', '$last_name', '$email', '$signature_data', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
