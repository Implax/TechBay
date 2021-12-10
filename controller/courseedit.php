<?php
    require_once (dirname(__FILE__)).'/../controller/controller.php';

    if(isset($_POST['insert'])){
        $id = $_POST['id'];
        $coursename = $_POST['name'];
        $courseprogram = $_POST['program'];
        $courseduration = $_POST['duration'];
        $courseprice = $_POST['price'];

        $updateCourse = updateCourse($id, $coursename,$courseprogram,$courseduration,$courseprice);
    
    if($updateCourse){
        echo "<script language='javascript'>;
               alert('Course Successfully Updated');
              window.location.href='../course_panel.php';
              </script>";
        } else{
              echo "<script>;
              alert('Course Could Not Be Created. Try Again');
              window.location.href='../course_panel.php';
              </script>";
        }
    }
?>