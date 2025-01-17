<?php

require_once 'Model/ModelToDatabase.php';

class LoginController extends ModelToDatabase {
    public function controller() {
        
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true){
            echo '<script>window.location.href = "index.php?page=home";</script>';
            exit;
        }
        if (isset($_POST['submit'])) { // Check if the submit button is pressed
            $username = $_POST['useremail'];
            $password = $_POST['password'];
            if($username == "admin" & $password == "123"){
                echo '<script>window.location.href = "Admin.php";</script>';
            }

            $loggedInUser = $this->userLogin($username, $password);
            if ($loggedInUser) {
                // Store user details in session variables
                $_SESSION['useremail'] = $loggedInUser['useremail'];
                $_SESSION['username'] = $loggedInUser['username'];
                $_SESSION['fname'] = $loggedInUser['fname'];
                $_SESSION['lname'] = $loggedInUser['lname'];
                $_SESSION['phone'] = $loggedInUser['phone'];
                $_SESSION['gender'] = $loggedInUser['gender'];
                $_SESSION['dob'] = $loggedInUser['dob'];
                $_SESSION['LoggedIn'] = true;
                $_SESSION['id'] = $loggedInUser['id'];   
                $_SESSION['reservedate'] = $loggedInUser['reservedate'];
                $this->loginsuccess();
                exit;
            } else {
                $_SESSION['LoggedIn'] = false;
               
                echo '<script>Swal.fire("Oooops", "Incorrect Username or Password", "error");</script>';
               
            }
        }
        include 'View/Login.php';
    }

    public function loginsuccess(){
        include 'View/WelcomePage.php';
    }
}
