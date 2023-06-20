<?php

 

    class GcashController extends ModelToDatabase{
        public function controller(){

            if(isset($_POST['submit'])){
                $paymentScreenshot = $_FILES['paymentScreenshot'];
                $amount = $_POST['amount'];
                $gcashName = $_POST['gcashName'];
                $gcashNumber = $_POST['gcashNumber'];
                $referenceNumber = $_POST['referenceNumber'];
                $email = $_POST['email'];
                $note = $_POST['note'];
                $id = $_SESSION['id'];

              $this->insertGcash($paymentScreenshot,$amount,$gcashName,$gcashNumber,$referenceNumber,$email,$note,$id);
            }

            include 'View/GcashCredentials.php';
        }
    }

?>