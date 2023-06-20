<?php

    require_once 'Model/AdminModel.php';

    class PendingController extends AdminModel{

        public function controller() {

            // Call the pending() method to fetch the pending reservations
            $rows = $this->pending();

            foreach($rows as $row){
                echo $row['id'];
            }
            if (isset($_POST['confirm'])) {
                $id = $_POST['id'];
                $this->confirm($id);
               
            echo '<script type="text/javascript">window.location.href = window.location.href;</script>';


            }
            if (isset($_POST['decline'])) {
                $id = $_POST['id'];
                $this->decline($id);
                echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
            }
    
            include 'View/admin/AdminPending.php';
        }

    }

?>