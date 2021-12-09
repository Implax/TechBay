<?php

require('../model/techbay_class.php');

    function register_student($name, $email, $gender, $country, $password){
        $student = new Techbay;

        $runQuery = $student->student_register($name, $email, $gender, $country, $password);

        if($runQuery){
            return $runQuery;
        }else{
            return false;
        }
    }



?>