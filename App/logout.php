<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Redirect to the login page
header("Location: ../Public/index.php");
exit();
?>
