<?php
require_once (dirname(__FILE__)).'/../controller/controller.php';

    //Form Data
    $studentEmail = $_POST['sEmail'];
    $studentPassword = $_POST['sPassword'];

    $password = md5($studentPassword);  
    $login = login_student($studentEmail, $password);

    if($login){
        echo "<script language='javascript'>;
         alert('Log In Successful!');
        window.location.href='../studentlanding.php';
        </script>";
  } else{
        echo "<script>;
        alert('Invalid credentails. Try Again');
        window.location.href='../login.php';
        </script>";
  }
?>





















?>