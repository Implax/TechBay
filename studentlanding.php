<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans&display=swap" rel="stylesheet">

    <!-- CSS and Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/studentlanding.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
        
            <a class="navbar-brand" href="index.php">TechBay</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="resources navbar-nav m1-auto">
                    <li class="nav-item option">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item option">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item option">
                    <a class="nav-link" href="login.php">Sign Out</a>
                    </li>
                </ul>
                
            </div>
      </nav>  
    </div>

    <div class="student-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blurb">
                        <h3>Welcome to Your Student Dashboard</h3>
                        <p class="intro">Hand-picked Instructors and expertly crafted courses, designed just for you.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="learn" src="images/learning.png" alt="learn">
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="recommend">Start Off With A Personal Curated Course Handpicked For You</p>
            </div>
            <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="images/unity-web.jpg" class="card-img-top" alt="unity">
                <div class="card-body">
                    <h5 class="card-title">Introduction to Unity</h5>
                    <p class="card-text">Game Development</p>
                    <a href="#" class="btn btn-primary">Start Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>




</body>
</html>