<?php
    require_once 'Model/ModelToDatabase.php';
    class ProfileController extends ModelToDatabase{
        
        public function controller(){
    
          
            include 'View/ProfileView.php';
        }

    }
?>