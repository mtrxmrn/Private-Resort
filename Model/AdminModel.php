<?php
    require_once 'dbconn.php';

    class AdminModel extends Database {
        
        protected function pending() {
             $sql = "SELECT r.id, r.email, r.`fullname`, r.`reservedate`, r.pending, g.`gcashName`, g.`gcashNumber`, g.amount
            FROM reservation r
            INNER JOIN gcash g ON r.id = g.id
            WHERE r.pending = 0"; // 0 is equal to pending
        
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
            $sqlGcash = "DELETE FROM gcash WHERE id = ?";
            $sqlReservation = "DELETE FROM reservation WHERE id = ?";
        
            try {
                $pdo = $this->connect();
                $pdo->beginTransaction();
        
                $stmtGcash = $pdo->prepare($sqlGcash);
                $stmtGcash->execute([$id]);
        
                $stmtReservation = $pdo->prepare($sqlReservation);
                $stmtReservation->execute([$id]);
        
                $pdo->commit();
            } catch (PDOException $e) {
                $pdo->rollBack();
                die("Error executing query: " . $e->getMessage());
            }
        }
        

        protected function reserved() {
            $sql = "SELECT r.id, r.email, r.`fullname`, r.`reservedate`, r.pending, g.`gcashName`, g.`gcashNumber`, g.amount
           FROM reservation r
           INNER JOIN gcash g ON r.id = g.id
           WHERE r.pending = 1"; // 1 is equal to reserved
       
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
