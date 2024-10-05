<?php
session_name('MyCustomSessionName');
session_start(); // Start the session

// Destroy the session
session_destroy();

// Redirect to the homepage or login page
header("Location: index.php"); // Change this to your desired page
exit();
?>
