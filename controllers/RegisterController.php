<?php
    require_once 'Model/ModelToDatabase.php';

    class RegisterController extends ModelToDatabase{

        public function controller(){
           
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $confirmEmail = $_POST['confirmEmail'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
                $city = $_POST['city'];
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
                $this->addUser($username, $fname, $lname, $email, $password, $city);
                $loggedInUser = $this->userLogin($username, $password);
                $_SESSION['useremail'] = $loggedInUser['UserEmail'];
                $_SESSION['username'] = $loggedInUser['Username'];
                $_SESSION['fname'] = $loggedInUser['Fname'];
                $_SESSION['lname'] = $loggedInUser['Lname'];
                $_SESSION['city'] = $loggedInUser['City'];
                $_SESSION['LoggedIn'] = true;
                $_SESSION['id'] = $loggedInUser['ID'];
                echo '<script>window.location.href = "index.php?page=home";</script>';
            }
            include 'View/RegisterView.php';
        }
    }
?>