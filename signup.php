<?php
// start session so that errors can be available in this file to print
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans&display=swap" rel="stylesheet">

    <!-- CSS and Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid"></div>
    <nav class="navbar navbar-expand-lg navbar-dark">
    
        <a class="navbar-brand" href="index.php">TechBay</a>
    </nav>

    <h2>Welcome to TechBay!</h2>
    <h3>Create An Account With Us To Access The Best Courses Available</h3>

    <?php
            if(isset($_SESSION["errors"])){
                $errors = $_SESSION["errors"];
            }
            // destroy session after displaying errors
            session_destroy();
    ?>

    <div class="container">
        <div class="row">
            <div class="form col-lg-6 col-sm-12">
                <img src="images/progressive.png" alt="admin">
            </div>
            <div class="form details col-lg-6 col-sm-12">
                <form class="row g-3" action="controller/studentregister.php" method="POST" enctype="multitype/form-data">
                    <div class="col-12">
                        <label for="studentName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="studentName" required="">
                        <small class="text-danger"><?php if (isset($errors[0])) echo $errors[0]; ?></small> 
                    </div>
                    <div class="col-12">
                        <label for="studentEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="studentEmail" required="">
                        <small class="text-danger"><?php if (isset($errors[1])) echo $errors[1]; ?></small> 
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="inputGroupSelect01">Gender</label>
                        <select class="form-select" name="inputGroupSelect01">
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                          <option value="3">Other</option>
                        </select>
                      </div>
                      <div class="col-6">
                        <label for="studentCountry" class="form-label">Country</label>
                        <input type="text" class="form-control" name="studentCountry" required="">
                    </div>
                    <div class="col-12">
                        <label for="studentPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="studentPassword" required="">
                        <small class="text-danger"><?php if (isset($errors[2])) echo $errors[2]; ?></small>
                    </div>
                    <div class="col-12">
                        <label for="studentPassword" class="form-label">Re-Enter Password</label>
                        <input type="password" class="form-control" name="studentcPassword" required="">
                        <small class="text-danger"><?php if (isset($errors[2])) echo $errors[3]; ?></small>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submitBtn">Create An Account</button>
                    </div>
                    <p class="login_text">Already have an account? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
