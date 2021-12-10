<?php
require_once (dirname(__FILE__)).'/../controller/controller.php';

echo $_GET['id'];
if(isset($_GET['id'])){
    $deleteCourse = deleteCourse($_GET['id']);
    if($deleteCourse){
            echo "<script language='javascript'>;
            alert('Delete Successful!');
            window.location.href='../course_panel.php';
            </script>";
    }else{
        echo "Something went wrong";
    }
}