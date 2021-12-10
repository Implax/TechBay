<?php
require_once (dirname(__FILE__)).'/../controller/controller.php';

    //Form Data
    $adminEmail = $_POST['aEmail'];
    $adminPassword = $_POST['aPassword'];

    $login = login_admin($adminEmail, $adminPassword);

    if($login){
        echo "<script language='javascript'>;
         alert('Log In Successful!');
        window.location.href='../admin_dashboard.php';
        </script>";
  } else{
        echo "<script>;
        alert('Invalid credentails. Try Again');
        window.location.href='../admin.php';
        </script>";
  }
?>






















?>