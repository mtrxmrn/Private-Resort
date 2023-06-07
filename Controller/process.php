<?php
    include_once '../Model/ModelToDatabase.php';

    class process extends ModelToDatabase{

        public function register($username,$fname,$lname,$email,$password,$city){
            $this->AddUser($username,$fname,$lname,$email,$password,$city);
        }
       
        public function checkUser($username){
            return $this->isUsernameExists($username);
        }

        public function checkEmail($email){
            return $this->isEmailExists($email);
        }
    }
?>