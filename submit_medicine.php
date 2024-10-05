<?php


// Include your Firebase configuration and FirebaseRDB class
require_once './config.php'; // Ensure this file contains your Firebase credentials
require_once './firebaseRDB.php'; // Ensure this file contains the firebaseRDB class definition

// Start the session
session_name('MyCustomSessionName'); // Ensure session name is consistent
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    echo '<script>alert("User not logged in."); window.location.href = "login.html";</script>';
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $medicineName = $_POST['medicine_name'] ?? '';
    $medicineCategory = $_POST['medicine_category'] ?? '';
    $salePrice = $_POST['sale_price'] ?? '';
    $medicineId = $_POST['medicine_id'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validate the form data
    if (empty($medicineName) || empty($medicineCategory) || empty($salePrice) || empty($medicineId) || empty($description)) {
        echo '<script>alert("Please fill in all fields."); window.history.back();</script>';
        exit;
    }

    // Prepare data to be sent to Firebase
    $data = [
        'medicine_name' => $medicineName,
        'medicine_category' => $medicineCategory,
        'sale_price' => $salePrice,
        'medicine_id' => $medicineId,
        'description' => $description
    ];

    // Initialize the FirebaseRDB class with the database URL
    $db = new firebaseRDB($databaseURL);

    // Insert data into Firebase
    $response = $db->insert('medicines', $data);

    // Check if the insertion was successful
    if ($response) {
        echo "<script>alert('Medicine added successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Failed to add medicine. Please try again.'); window.history.back();</script>";
    }
}
?>
