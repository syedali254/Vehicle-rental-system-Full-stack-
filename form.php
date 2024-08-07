<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css"/>
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="simple.php" method="POST">
            <div class="login">
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="number" name="contact" placeholder="Phone" required>
                <select name="nationality" required>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="Others">Others</option>
                </select>
                <br>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $nationality = $_POST["nationality"];

        // Database connection
        $servername = "localhost";
        $username = "root"; // default username for XAMPP
        $password = ""; // default password for XAMPP
        $dbname = "user_db1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if user exists
        $sql = "SELECT * FROM user WHERE email='$email' AND firstname='$firstname' AND lastname='$lastname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User exists, redirect to simple.php
            header("Location: simple.php");
            exit();
        } else {
            echo "Account does not exist.";
        }

        $conn->close();
    }
    ?>
</body>
</html>
