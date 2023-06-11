<?php
    require_once 'Model/ModelToDatabase.php';
    class ProfileController extends ModelToDatabase{
        
        public function controller(){
            include_once 'process.php';
    
            $id = $_SESSION['id'];
            $this->getUserID($id);
            
            $username = $user['Username'];
            $fname = $user['Fname'];
            $lname = $user['Lname'];
            $email = $user['UserEmail'];
            $city = $user['City']; 

            include 'View/ProfileView.php';
        }

    }
?>