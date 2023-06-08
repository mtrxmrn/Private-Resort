<?php
    include_once 'process.php';

    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $city = $_POST['city'];

    $process = new process();

    if($email == $confirmEmail){
        if(strlen($password) >= 8){
            if($password == $confirmPassword){
                if (!$process->checkUser($username)){
                    if(!$process->checkEmail($email)){
                        if($email == $confirmEmail){
                            $process->register($username, $fname, $lname, $email, $password, $city);
                        }
                        else{
                            echo "Email does not match";
                        }  
                    }
                    else{
                        echo "Email already exists";
                    }
                } else {
                    echo "Username already exists. Please choose a different username." . $username;
                }
            }else{
                echo "Password does not match!";
            }  
        }
        else{
            echo "Password Should be longer than 8";
        }    
    }   
    else{
        echo "Email does not match!";
    }

    
    
    
?>