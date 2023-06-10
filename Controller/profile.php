<?php

    session_start();

    include_once 'process.php';
    
    $id = $_SESSION['id'];
    $process = new process();
    $user = $process->userID($id);
    
    $username = $user['Username'];
    $fname = $user['Fname'];
    $lname = $user['Lname'];
    $email = $user['UserEmail'];
    $city = $user['City']; 

    include '../View/domain/profile.php';
?>