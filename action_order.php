<?php
// Start session and include Firebase connection files
session_name('MyCustomSessionName');
session_start();
require_once './config.php';
require_once './firebaseRDB.php';

// Initialize FirebaseRDB class
$db = new firebaseRDB($databaseURL);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $productKey = $_POST['product_key']; 
    $totalAmount = $_POST['total_amount']; // Assuming total_amount is entered in the form
   
    // Check if the user session is available
    if (isset($_SESSION['user'])) {
        $userKey = $_SESSION['user']['id'];  // Retrieve user key from the session
       
        // Prepare data to insert
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'user_key' => $userKey, // Storing the user key
            'total_amount' => $totalAmount , // Storing the total amount
            'product_key' => $productKey //
        ];

        // Insert data into Firebase
        try {
            $inserted = $db->insert('bookings', $data);
            echo '<script>
            alert("Booking details saved successfully!");
            window.location.href = "index.php";
          </script>';
    
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        // User session is not available, redirect to login
        echo '<script>alert("Please log in to continue."); window.location.href = "login.php";</script>';
    }
}
?>
