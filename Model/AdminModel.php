<?php
    require_once 'dbconn.php';

    class AdminModel extends Database {
        
        protected function pending() {
             $sql = "SELECT r.id, r.email, r.`fullname`, r.`reservedate`, r.pending, g.`gcashName`, g.`gcashNumber`, g.amount
            FROM reservation r
            INNER JOIN gcash g ON r.id = g.id
            WHERE r.pending = 0"; // 0 = pending, 1 = reserved, 2 = declined
        
            try {
                $stmt = $this->connect()->query($sql);
                if ($stmt) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $results;

                } else {
                    return []; // Return an empty array if the query fails
                }
            } catch (PDOException $e) {
                die("Error executing query: " . $e->getMessage());
            }
        }

        protected function confirm($id) {
            $sql = "UPDATE reservation SET pending = 1 WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }

        protected function decline($id) {
            $sql = "UPDATE reservation SET pending = 2 WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
        

        protected function reserved() {
            $sql = "SELECT r.id, r.email, r.`fullname`, r.`reservedate`, r.pending, g.`gcashName`, g.`gcashNumber`, g.amount
           FROM reservation r
           INNER JOIN gcash g ON r.id = g.id
           WHERE r.pending = 1"; // 0 = pending, 1 = reserved, 2 = declined
       
           try {
               $stmt = $this->connect()->query($sql);
               if ($stmt) {
               $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
               
               return $results;

               } else {
                   return []; // Return an empty array if the query fails
               }
           } catch (PDOException $e) {
               die("Error executing query: " . $e->getMessage());
           }
       }

       protected function declined() {
        $sql = "SELECT r.id, r.email, r.`fullname`, r.`reservedate`, r.pending, g.`gcashName`, g.`gcashNumber`, g.amount
       FROM reservation r
       INNER JOIN gcash g ON r.id = g.id
       WHERE r.pending = 2"; // 0 = pending, 1 = reserved, 2 = declined
   
       try {
           $stmt = $this->connect()->query($sql);
           if ($stmt) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
           return $results;

           } else {
               return []; // Return an empty array if the query fails
           }
       } catch (PDOException $e) {
           die("Error executing query: " . $e->getMessage());
       }
   }
        
    }
?>

<!-- Rest of the code remains the same -->
