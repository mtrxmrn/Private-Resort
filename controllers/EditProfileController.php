<?php
    require_once 'Model/ModelToDatabase.php';
    class EditProfileController extends ModelToDatabase{
        public function controller(){
            
            if(isset($_POST['edit'])){
                $username = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $city = $_POST['city'];
                $id = $_SESSION['id'];

                $result = $this->editUser($username, $fname, $lname, $email, $city, $id);
                if ($result) {
                    $_SESSION['useremail'] = $email;
                    $_SESSION['username'] = $username;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['city'] = $city;    
                    $_SESSION['id'] = $id;
                    echo '<script>window.location.href = "index.php?page=profile";</script>';
                    exit(); // Add an exit() statement after redirecting
                } else {
                    echo '<script>window.location.href = "index.php?page=edit";</script>';
                }  
            
            }
            include 'View/ProfileEditView.php';
        }
    }
?>