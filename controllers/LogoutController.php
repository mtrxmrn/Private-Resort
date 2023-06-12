<?php

    class LogoutController{
        public function controller(){
            session_start();
            // Unset all session variables
            $_SESSION = array();
    
            // Destroy the session
            session_destroy();
    
            // Redirect to the home page or any other desired page
            echo '<script>window.location.href = "index.php?page=home";</script>';
            exit;
        }
    }
   
?>