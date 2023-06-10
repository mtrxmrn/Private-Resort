<?php
    require_once '../Model/ModelToDatabase.php';

    class User extends ModelToDatabase{

        public function Register(){
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $confirmEmail = $_POST['confirmEmail'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $city = $_POST['city'];

            $this->RegisterLogic($username,$fname,$lname,$email,$confirmEmail,$confirmPassword,$city,$password);
        }

    
        public function RegisterLogic($username,$fname,$lname,$email,$confirmEmail,$confirmPassword,$city,$password){
            
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
        }

        public function RegisterView(){
            
            include '../View/domain/register.php';
            $this->Register();
        }

        public function Login(){

            $useremail = $_POST['useremail'];
            $password = $_POST['password'];
            $id = $this->UserLogin($useremail, $password);

            if ($id) {
                // Login successful
                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = $useremail;
                $_SESSION['id'] = $id;
                // Redirect to the dashboard or any other logged-in page
                echo "Hello, ". $useremail . ". Your ID is:" . $id; // Testing lang to pre wala kwenta to
            } else {
                // Login failed
                
                $_SESSION['loggedIn'] = false;
                echo "Invalid username or password!"; // Set an error message to display on the login page
                // Handle the login failure, such as displaying the error message or redirecting back to the login page
                session_destroy();
            
            }
        }

        public function profile(){

            
            $id = $_SESSION['id'];
            $user = $process->userID($id);
            
            $username = $user['Username'];
            $fname = $user['Fname'];
            $lname = $user['Lname'];
            $email = $user['UserEmail'];
            $city = $user['City']; 

            include '../View/domain/profile.php';
        }

    }

   

?>