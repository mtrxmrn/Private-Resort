<?php
    require_once 'Model/ModelToDatabase.php';
    
    class HomeController extends ModelToDatabase {
        
        public function controller() {
            include 'View/Homepage.php';
        }
    }
?>
