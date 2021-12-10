<?php
require_once (dirname(__FILE__)).'/../controller/controller.php';

$coursename = $_POST['name'];
$courseprogram = $_POST['program'];
$courseduration = $_POST['duration'];
$courseprice = $_POST['price'];

$createCourse = addCourse($coursename, $courseprogram, $courseduration, $courseprice);

if($createCourse){
    echo "<script language='javascript'>;
           alert('Course Successfully Created');
          window.location.href='../view/project.php';
          </script>";
    } else{
          echo "<script>;
          alert('Course Could Not Be Created. Try Again');
          window.location.href='../view/project.php';
          </script>";
    }
?>