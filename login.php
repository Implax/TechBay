<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans&display=swap" rel="stylesheet">

    <!-- CSS and Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid"></div>
    <nav class="navbar navbar-expand-lg navbar-dark">
    
        <a class="navbar-brand" href="index.php">TechBay</a>
    </nav>

    <h3>Kindly Login Below To Be Redirected To The Student Dashboard</h3>

    <div class="container">
        <div class="row">
            <div class="form col-lg-6 col-sm-12">
                <img src="images/student.png" alt="student">
            </div>
            <div class="form details col-lg-6 col-sm-12">
                <form class="row g-3" action="controller/studentlogin.php" method="POST">
                    <div class="col-12">
                        <label for="studentEmail" class="form-label">Email</label>
                        <input type="text" name="sEmail" class="form-control" id="studentEmail">
                    </div>
                    <div class="col-12">
                        <label for="studentPassword" class="form-label">Password</label>
                        <input type="password" name="sPassword" class="form-control" id="studentPassword">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
