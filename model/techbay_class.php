
<?php

require('../model/db_connection.php');

class Techbay extends db_connection{
    
    //Login and Register Functions
    public function student_register($name, $email, $gender, $country, $password){
        $sql = "INSERT INTO Student (S_name, Email, Gender, Country, S_password, Enroll_Date)  VALUES ('$name', '$email', '$gender', '$country', '$password', CURDATE())";
        
        return $this->db_query($sql);
    }

    public function student_login($s_email, $s_password){
        $sql = "SELECT StudentID FROM Student WHERE Email = '$s_email' and S_password = '$s_password' ";
         
        return $this->db_query($sql);
    }

    
    public function admin_login($a_email, $a_password){
        $sql = "SELECT AdminID FROM Admin_Details WHERE Admin_Email = '$a_email' and Admin_password = '$a_password' ";
         
        return $this->db_query($sql);
    }

    //Count Functions
    public function countStudent(){
        $sql = "SELECT COUNT(StudentID) AS NumberOfStudents FROM Student";

        return $this->db_query($sql);
    }

    public function countInstructor(){
        $sql = "SELECT COUNT(InstructorID) AS NumberOfInstructors FROM Instructor";

        return $this->db_query($sql);
    }

    public function countCourses(){
        $sql = "SELECT COUNT(CourseID) AS NumberOfCourses FROM Course";

        return $this->db_query($sql);
    }

    //Display/Select Functions

    public function displayStudents(){
        $sql = "SELECT StudentID, S_name, Email, Gender, Country, Enroll_Date FROM Student";

        return $this->db_query($sql);
    }

    
    public function displayInstructors(){
        $sql = "SELECT InstructorID, Instructorname, Gender, Reputation, Courses_Taught, Name, Time FROM Student";

        return $this->db_query($sql);
    }

    public function displayCourses(){
        $sql = "SELECT CourseID, Name, Program, Duration, Price FROM Course";

        return $this->db_query($sql);
    }

    //Update and Delete Courses
    public function createCourse($name, $program, $duration, $price){
        $sql = "INSERT INTO Course (Name, Program, Duration, Price) VALUES ('$name', '$program', '$duration', '$price')";

        return $this->db_query($sql);
    }

    public function editCourse($id, $courseName,$courseProgram,$courseDuration,$coursePrice){
        $sql = "UPDATE `Course` SET `Name`=$courseName,`Program`=$courseProgram,`Duration`=$courseDuration,`Price`='$coursePrice' WHERE `CourseID`='$id'";
 
        return $this->db_query($sql);
    }

    public function delete($id,$idRow,$table){
        $sql = "DELETE FROM `$table` WHERE `$idRow` = '$id' ";

        return $this->db_query($sql);
    }



}














?>