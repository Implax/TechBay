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

    function login_admin($a_email, $a_password){
        $admin = new Techbay;

        $runQuery = $admin->admin_login($a_email, $a_password);

        if($runQuery){
            $admins = array();
            while($record = $admin->db_fetch()){
                $admins[] = $record;
            }
            return $admins;
        }else{
            return false;
        }
    }

    function login_student($s_email, $s_password){
        $student = new Techbay;

        $runQuery = $student->student_login($s_email, $s_password);

        if($runQuery){
            $students = array();
            while($record = $student->db_fetch()){
                $students[] = $record;
            }
            return $students;
        }else{
            return false;
        }
    }




?>