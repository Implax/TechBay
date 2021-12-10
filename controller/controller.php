<?php

require_once (dirname(__FILE__)).'/../model/techbay_class.php';

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

    function s_Count(){
        $count = new Techbay;

        $runQuery = $count->countStudent();

        if($runQuery){
            $students = array();
            while($record = $count->db_fetch()){
                $students[] = $record;
            }
            return $students[0];
        }else{
            return false;
        }
    }

    function i_Count(){
        $count = new Techbay;

        $runQuery = $count->countInstructor();

        if($runQuery){
            $instructors = array();
            while($record = $count->db_fetch()){
                $instructors[] = $record;
            }
            return $instructors[0];
        }else{
            return false;
        }        
    }

    function c_Count(){
        $count = new Techbay;

        $runQuery = $count->countCourses();

        if($runQuery){
            $courses = array();
            while($record = $count->db_fetch()){
                $courses[] = $record;
            }
            return $courses[0];
        }else{
            return false;
        }            
    }

    function getCourses(){
    $course = new Techbay;

    // Run query
    $runQuery = $course->displayCourses();

    if($runQuery){
        $courses = array();
        while($record = $course->db_fetch()){
            $courses[] = $record;
        }
        return $courses;
    }else{
        return false;
    }
    }

    function getInstructors(){
        $instructor = new Techbay;
    
        // Run query
        $runQuery = $instructor->displayInstructors();
    
        if($runQuery){
            $instructors = array();
            while($record = $instructor->db_fetch()){
                $instructors[] = $record;
            }
            return $instructors;
        }else{
            return false;
        }
        }

        function getStudents(){
            $student = new Techbay;
        
            // Run query
            $runQuery = $student->displayStudents();
        
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

        function addCourse($name, $program, $duration, $price){
            $course = new Techbay;

            $runQuery = $course->createCourse($name, $program, $duration, $price);

            if($runQuery){
                return $runQuery;
            }else{
                return false;
            }
        }

        function deleteCourse($id){
            $course = new Techbay;

            $runQuery = $course->delete($id,"CourseID","Course");

            if($runQuery){
                return $runQuery;
            }else{
                return false;
            }
        }

        function updateCourse($id, $courseName,$courseProgram,$courseDuration,$coursePrice){
            $course = new Techbay;

            $runQuery = $course->editCourse($id, $courseName,$courseProgram,$courseDuration,$coursePrice);

            if($runQuery){
                return $runQuery;
            }else{
                return false;
            }
        }

        function showCourses($id){
            $course = new Techbay;
        
            // Run query
            $runQuery = $course->showCourse($id);
        
            if($runQuery){
                $courses = array();
                while($record = $course->db_fetch()){
                    $courses[] = $record;
                }
                return $courses;
            }else{
                return false;
            }
        }
        




?>