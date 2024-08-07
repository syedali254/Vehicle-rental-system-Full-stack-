<?php
session_start();
 if (!isset($_SESSION['user'])) {
    header("Location: signin.html"); // Redirect to sign-in page if not logged in
    exit(); // Ensure no further code is executed
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental System</title>
    <link rel="stylesheet" href="add_vehicle.css"> <!-- Link to the updated CSS file -->
</head>
<body>
    <header>
        <div class="header-content">
            <div class="top-nav">
                <ul>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="policy.html">policy</a></li>
                </ul>
            </div>
            <h1>Vehicle Rental System</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
        
    </header>
    <main>
    <nav class="main-nav">
        <ul>
            <li><a href="add_vehicle.html">Add Vehicle</a></li>
            <li><a href="rent_vehicle.html">Rent Vehicle</a></li>
            <li><a href="return_vehicle.html">Return Vehicle</a></li>
            <li><a href="view_vehicle.php">View Vehicles</a></li>
            <li><a href="delete_vehicel.html">Delete Vehicles</a></li>
        </ul>
    </nav>
    </main>

    <div class="content">
        <!-- Main content here -->
    </div>

    <footer>
        
        <div class="footer-content">
            <h2>Contact Us</h2>
            <p>Email: Muhammadali0556@gmail.com</p>
            <p>Phone: +92 3170095943</p>
            <p>Address: Fast Nuces Peshawar, Industrial State</p>
        </div>
    </footer>
    
    
</body>
</html>
