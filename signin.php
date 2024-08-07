<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_rent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['password'])) {
        // Successful login
        session_start();
        $_SESSION['user'] = $row['name'];
        header("Location: index.html"); // Redirect to the index page
    } else {
        echo "Incorrect password. <a href='sigin.html'>Try again</a>";
    }
} else {
    echo "No user found with this email. <a href='sigin.html'>Try again</a>";
}

$conn->close();
?>
