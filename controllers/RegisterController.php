<?php
    require_once 'Model/ModelToDatabase.php';

    class RegisterController extends ModelToDatabase{

        public function controller(){
            if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true){
                echo '<script>window.location.href = "index.php?page=home";</script>';
                exit;
            }
            
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $confirmEmail = $_POST['confirmEmail'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
                $phone = '+63' . $_POST['phone'];
                $gender = $_POST['gender'];
                $dob = $_POST['dob'];
                if ($email != $confirmEmail) {
                    echo "Email does not match";
                    return;
                }
        
                if (strlen($password) < 8) {
                    echo "Password should be longer than 8";
                    return;
                }
        
                if ($password != $confirmPassword) {
                    echo "Password does not match!";
                    return;
                }
        
                if ($this->isUsernameExists($username)) {
                    echo "Username already exists. Please choose a different username: " . $username;
                    return;
                }
        
                if ($this->isEmailExists($email)) {
                    echo "Email already exists";
                    return;
                }       
                $this->addUser($username, $fname, $lname, $email, $password, $phone , $gender, $dob);
                $loggedInUser = $this->userLogin($username, $password);
                $_SESSION['useremail'] = $loggedInUser['useremail'];
                $_SESSION['username'] = $loggedInUser['username'];
                $_SESSION['fname'] = $loggedInUser['fname'];
                $_SESSION['lname'] = $loggedInUser['lname'];
                $_SESSION['phone'] = $loggedInUser['phone'];
                $_SESSION['gender'] = $loggedInUser['gender'];
                $_SESSION['dob'] = $loggedInUser['dob'];
                $_SESSION['LoggedIn'] = true;
                $_SESSION['id'] = $loggedInUser['id'];
                include 'View/WelcomePage.php';
            }
            include 'View/RegisterView.php';
        }
    }
?>