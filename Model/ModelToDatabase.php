<?php
    require_once 'dbconn.php';

    class ModelToDatabase extends Database {

        protected function addUser($username, $fname, $lname, $email, $password, $phone, $gender, $dob) {

            $sql = "INSERT INTO users (username, fname, lname, useremail, userpass, phone, gender, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            try {
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$username, $fname, $lname, $email, $password, $phone, $gender, $dob]);
                return $stmt;
            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }
        }

        protected function isUsernameExists($username){

        // Check if the username exists in the database
        $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();

        return ($count > 0); // Returns true if the count is greater than 0
        }

        protected function isEmailExists($email){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM users WHERE useremail = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $count = $stmt->fetchColumn();
    
            return ($count > 0); // Returns true if the count is greater than 0
        }
        
       protected function userLogin($useremail, $password){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM users WHERE (useremail = ? OR username = ?) AND userpass = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$useremail, $useremail, $password]); // Use $useremail twice for email and username checks
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                // Fetch the user data separately
                $sql = "SELECT * FROM users WHERE (useremail = ? OR username = ?) AND userpass = ?";
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

        protected function editUser($username, $fname, $lname, $email, $city, $id){
            $sql = "UPDATE users SET username = ?, fname = ?, lname = ?, useremail = ?, city = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $success = $stmt->execute([$username, $fname, $lname, $email, $city, $id]);
            if ($success) {
                // Database update was successful
                echo "Update successful!";
            } else {
                // Database update failed
                $errorInfo = $stmt->errorInfo();
                echo "Update failed: " . $errorInfo[2]; // Output the specific error message
            }
            return $success;
        }

        protected function reserve($id,$fullname,$email,$phone,$date,$time,$numPersons,$notes){
            $sql = "INSERT INTO reservation (id, fullname, email, phone, reservedate, reservetime, personcount, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $sql2 = "UPDATE users SET reservedate = ? WHERE id = ?";
            try {
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$id, $fullname, $email, $phone, $date, $time, $numPersons, $notes]);
                
                $stmt2 = $this->connect()->prepare($sql2);
                $stmt2->execute([$date,$id]);

                return $stmt;
            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }
        }


        protected function isDateExist($date){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM reservation WHERE reservedate = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$date]);
            $count = $stmt->fetchColumn();
    
            return ($count > 0); // Returns true if the count is greater than 0
        }

        protected function isUserReserve($id){

            // Check if the email exists in the database
            $sql = "SELECT COUNT(*) FROM reservation WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $count = $stmt->fetchColumn();
    
            return ($count > 0); // Returns true if the count is greater than 0
        }
        


        
    }

    

?>