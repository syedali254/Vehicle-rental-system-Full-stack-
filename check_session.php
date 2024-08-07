<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: sign-in.html"); // Redirect to sign-in page if not logged in
    exit();
}
?>
