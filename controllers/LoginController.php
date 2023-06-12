<?php

require_once 'Model/ModelToDatabase.php';

class LoginController extends ModelToDatabase {
    public function controller() {
        if (isset($_POST['submit'])) { // Check if the submit button is pressed
            $username = $_POST['useremail'];
            $password = $_POST['password'];

            $loggedInUser = $this->userLogin($username, $password);
            if ($loggedInUser) {
                // Store user details in session variables
                $_SESSION['useremail'] = $loggedInUser['UserEmail'];
                $_SESSION['username'] = $loggedInUser['Username'];
                $_SESSION['fname'] = $loggedInUser['Fname'];
                $_SESSION['lname'] = $loggedInUser['Lname'];
                $_SESSION['city'] = $loggedInUser['City'];
                $_SESSION['LoggedIn'] = true;
                $_SESSION['id'] = $loggedInUser['ID'];

                echo '<script>window.location.href = "index.php?page=home";</script>';
                exit(); // Add an exit() statement after redirecting
            } else {
                $_SESSION['LoggedIn'] = false;
                echo "Invalid username or password"; // Display an error message
            }
        }
        include 'View/Login.php';
    }
}
