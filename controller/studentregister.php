<?php

require_once (dirname(__FILE__)).'/../controller/controller.php';

if (isset($_POST['submitBtn'])) {
    $name = $_POST['studentName'];
    $email = $_POST['studentEmail'];
    $gender = $_POST['inputGroupSelect01'];
    $country = $_POST['studentCountry'];
    $password = $_POST['studentPassword'];
    $cpassword = $_POST['studentcPassword']; 

    $errors = [];

    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $errors[0] = "Full Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors[1] = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 8) {
        $errors[2] = "Password must be minimum of 8 characters\n";
    }       
    if($password != $cpassword) {
        $errors[3] = "Passwords must match";
    }

    if (count($errors) <= 0) {
        $password = md5($password);
        $registerStudent = register_student($name, $email, $gender, $country, $password);

        if(!$registerStudent){
            echo "failed";
        }else{
            // redirect
            echo "<script>alert('Successfully Created New Account');</script>";
        }

    }else{
        session_start();
        // store errors inside session
        $_SESSION["errors"] = $errors;
        //print_r($errors);
        header("location: ../signup.php");
    }

}















?>