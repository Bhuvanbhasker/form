<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info_db"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// SQL query to insert data into the database
$sql = "INSERT INTO student_info_db (name, email, course) VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
