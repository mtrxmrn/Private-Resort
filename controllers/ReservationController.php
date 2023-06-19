<?php
    require_once 'Model/ModelToDatabase.php';
    class ReservationController extends ModelToDatabase{
        public function controller(){

            if(isset($_POST['submit'])){
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $numPersons = $_POST['numPersons'];
                $notes = $_POST['notes'];
                $id = $_SESSION['id'];

                $reservationexist = $this->isDateExist($date);
                $limituser = $this->isUserReserve($id);
                if($limituser){
                    echo '<script>Swal.fire("Reservation Exist", "Sorry, only one reservation per account", "error");</script>';
                }
                else{
                    if($reservationexist){
                        echo '<script>Swal.fire("Reservation Exist", "The date is taken by other customer", "error");</script>';
                    }
                    else{
                        $this->reserve($id, $fullname,$email,$phone,$date,$time,$numPersons,$notes);
                        $getDate = $this->getUserID($id);
                        $_SESSION['reservedate'] = $getDate['reservedate'];
                    }
                }
                
                
                
            }

            include 'View/ReservationView.php';
        }
    }

?>