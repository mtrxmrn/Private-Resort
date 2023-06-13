<?php
    require_once 'dbconn.php';

    class ModelToDatabase extends Database {

        protected function addUser($username, $fname, $lname, $email, $password, $city) {

            $sql = "INSERT INTO users (Username, Fname, Lname, UserEmail, UserPass, City) VALUES (?, ?, ?, ?, ?, ?)";
            try {
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$username, $fname, $lname, $email, $password, $city]);
                return $stmt;
            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }
        }

        protected function isUsernameExists($username){

        // Check if the username exists in the database
        $sql = "SELECT COUNT(*) FROM users WHERE Username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();

        return ($count > 0); // Returns true if the count is greater than 0
        }

        protected function isEmailExists($email){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM users WHERE UserEmail = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $count = $stmt->fetchColumn();
    
            return ($count > 0); // Returns true if the count is greater than 0
        }
        
       protected function userLogin($useremail, $password){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM users WHERE (UserEmail = ? OR Username = ?) AND UserPass = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$useremail, $useremail, $password]); // Use $useremail twice for email and username checks
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                // Fetch the user data separately
                $sql = "SELECT * FROM users WHERE (UserEmail = ? OR Username = ?) AND UserPass = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$useremail, $useremail, $password]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return $user;
            }

            return false; // Return false if login fails
        }


            protected function getUserID($id)
            {
            $sql = "SELECT * FROM users WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
            }
            
        public function sendEmail($senderEmail, $senderName, $recipientEmail, $recipientName, $subject, $body){
        
            $mail = new PHPMailer(true);

            try {
                // SMTP configuration for Gmail
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'your@gmail.com';
                $mail->Password = 'your-gmail-password';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient details
                $mail->setFrom($senderEmail, $senderName);
                $mail->addAddress($recipientEmail, $recipientName);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;

                // Send the email
                $mail->send();
                return true; // Email sent successfully
            } catch (Exception $e) {
                return false; // Email could not be sent
            }
        }
    }

    

?>