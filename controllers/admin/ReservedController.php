<?php

    require_once 'Model/AdminModel.php';

    class ReservedController extends AdminModel{
        public function controller(){

            $rows = $this->reserved();

            include 'View/admin/AdminReserved.php';
        }
    }



?>