<?php
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

$name = $_POST['name'];
$model = $_POST['model'];
$year = $_POST['year'];
$price = $_POST['price'];

$sql = "INSERT INTO vehicles (name, model, year, price) VALUES ('$name', '$model', '$year', '$price')";//we made table vehiclews

if ($conn->query($sql) === TRUE) {
    echo "New vehicle added successfully";
} else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
