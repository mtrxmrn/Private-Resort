<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';
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
                        $this->emailuser($email,$fullname,$date);
                    }
                }
            }
            include 'View/ReservationView.php';
        }

        public function emailuser($email, $fullname, $date){

            $mail = new PHPMailer(true);

        try {
            // SMTP configuration for Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mmatrixmariano1@gmail.com';
            $mail->Password = 'ealinoqcgqyxiayj';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender and recipient details
            $mail->setFrom('mmatrixmariano1@gmail.com', "jim's Resort");
            $mail->addAddress($email, $fullname);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = "Welcome to Jim's Resort";
            $mail->Body = "Dear Mr/Mrs " . $_SESSION['lname']. '. We would like to inform you that your booking in: ' . $date . ' is on process. Please provide us supporting documents to officially verify your booking!. Thank you' ;

            // Send the email
            $mail->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            return false; // Email could not be sent
        }

        }

    }

?>