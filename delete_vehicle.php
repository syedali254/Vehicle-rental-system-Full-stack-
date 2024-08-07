<?php
// Database connection details
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the vehicle ID from the form and escape it to prevent SQL injection
    $id = intval($_POST['id']);

    // Construct the SQL query
    $sql = "DELETE FROM vehicles WHERE id=$id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Vehicle deleted successfully.";
    } else {
        echo "Error deleting vehicle: " . $conn->error;
    }
}

$conn->close();
?>
