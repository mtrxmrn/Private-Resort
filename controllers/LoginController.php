<?php

require_once 'Model/ModelToDatabase.php';


class LoginController extends ModelToDatabase {
    public function controller() {
        
            if (isset($_POST['submit'])) { // Check if the submit button is pressed
            $username = $_POST['useremail'];
            $password = $_POST['password'];
            if ($this->userLogin($username, $password)) {
                $loggedInUser = $this->userLogin($username, $password);
                $_SESSION['useremail'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $loggedInUser;
                header("Location: index.php?page=home");
                exit(); // Add an exit() statement after redirecting
            } else {
                echo "Invalid username or password"; // Display an error message
            }
        }
        include 'View/Login.php';
    }

    public function processLogin() {

    }
}
