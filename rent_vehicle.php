


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

$id = $_POST['id'];
$days = $_POST['days'];

// Retrieve the vehicle details
$sql = "SELECT * FROM vehicles WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $model = $row['model'];
    $year = $row['year'];
    $price_per_day = $row['price'];
    $total_price = $price_per_day * $days;

    // Update the vehicle status
    $update_sql = "UPDATE vehicles SET status='rented', days_rented='$days' WHERE id='$id'";

    if ($conn->query($update_sql) === TRUE) {
        echo "<h1>Vehicle Rented Successfully</h1>";
        echo "<h2>Bill Receipt</h2>";
        echo "<p>Vehicle ID: $id</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Model: $model</p>";
        echo "<p>Year: $year</p>";
        echo "<p>Price per Day: $$price_per_day</p>";
        echo "<p>Days Rented: $days</p>";
        echo "<p>Total Price: $$total_price</p>";
    } else {
        echo "Error: " . $update_sql . "<br>" . $conn->error;
    }
} else {
    echo "Vehicle not found.";
}

$conn->close();
?>
