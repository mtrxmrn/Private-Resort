<?php

    require_once 'Model/AdminModel.php';

    class DeclinedController extends AdminModel{
        public function controller(){

            $rows = $this->declined();

            include 'View/admin/AdminDeclined.php';
        }
    }



?>