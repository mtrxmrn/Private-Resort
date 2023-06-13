<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
class ContactUsController
{
    public function controller()
    {
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $senderEmail = $_POST['email'];
            $senderName = $_POST['name'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // Validate and process the email sending
            if ($this->sendEmail($senderEmail, $senderName, $subject, $message)) {
                echo "Sent successfuly";
                echo '<script>window.location.href = "index.php?page=home";</script>';
            } else {
                echo "Error";
                echo '<script>window.location.href = "index.php?page=contact";</script>';
                exit;
            }
        } else {
            // Render the contact form view
            include 'View/ContactUs.php';
        }
    }

    private function sendEmail($senderEmail, $senderName, $subject, $message)
    {
        // Create a new PHPMailer instance
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
            $mail->setFrom($senderEmail,"Jim's Resort - " . $senderName);
            $mail->addAddress('johnmatrixmariano@gmail.com', 'Jims Resort');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send the email
            $mail->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            return false; // Email could not be sent
        }
    }
}
?>
