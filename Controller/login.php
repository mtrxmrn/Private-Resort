<?php
session_start(); // Start the session

include_once 'process.php';
$useremail = $_POST['useremail'];
$password = $_POST['password'];

$connect = new process();
$id = $connect->loginUser($useremail, $password);

if ($id) {
    // Login successful
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $useremail;
    $_SESSION['id'] = $id;
     // Redirect to the dashboard or any other logged-in page
     echo "Hello, ". $useremail . ". Your ID is:" . $id;
} else {
    // Login failed
    
    $_SESSION['loggedIn'] = false;
    echo "Invalid username or password!"; // Set an error message to display on the login page
    // Handle the login failure, such as displaying the error message or redirecting back to the login page
    session_destroy();
}
?>