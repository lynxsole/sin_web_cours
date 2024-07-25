<?php
$user = "root";
$pass = "";

try {
    // Use PDO for secure database connection
    $getDB = new PDO('mysql:host=localhost;dbname=masson_bdd;charset=utf8', $user, $pass);
    $getDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
    $getDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Set default fetch mode
} catch (PDOException $e) {
    // Log the error message and stop the script
    error_log($e->getMessage(), 3, '.\log\errors.log'); // Log errors to a file
    echo "Database connection failed. Please try again later."; // Generic error message for users
    exit();
}
?>
