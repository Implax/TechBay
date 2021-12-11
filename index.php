
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBay</title>

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans&display=swap" rel="stylesheet">

    <!-- CSS and Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
        
            <a class="navbar-brand" href="#">TechBay</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="resources navbar-nav m1-auto">
                    <li class="nav-item option">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item option">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <button type="button" class="btn login">Login</button>
                        </a>
                    </li>
                </ul>
                
            </div>
      </nav>  
    </div>

    <div class="intro-Body">
        <div class="container">
            <div class="row">
                <div class="blurb col-lg-6 col-md-12">
                    <h1 class="blurb-header">Get The Best Free Online Tech Courses</h1>
                    <br>
                    <p class="blurb-text">Access The Best Online Courses With Us. Innovative New Ways To Learn And Enjoy TEchnology.</p>
                    <br>
                   <a href="signup.php"> <button type="button" class="btn btn-lg register-btn">Get Started</button></a>
                </div>
                <div class="blurb col-lg-6 col-md-12">
                    <img class="cImage" src="images/blackman.png" alt="tech-image">
                </div>
            </div>
        </div>

    </div>


    <div class="main-Body">

        <div class="courses-header">
           <h3>OUR COURSES</h3>
           <h2>Explore Our Popular Online Tech Courses</h2>
        </div>

        <section id="courses">
            <div class="course-info">
                <div class="card" style="width: 18rem">
                    <img class="course-img" src="images/pattern-lock.png" alt="pattern">
                    <div class="card-body">
                        <h5 class="card-title">Pattern Recognition</h5>
                        <p class="card-text">Artificial Intelligence</p>
                        <p>2 Months <br> GHS 95.50</p>
                        <a href="signup.php" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem">
                    <img class="course-img" src="images/industrial-robot.png" alt="robot">
                    <div class="card-body">
                        <h5 class="card-title">Robotics</h5>
                        <p class="card-text">Artificial Intelligence</p>
                        <p>2 Months <br> GHS 85.00</p>
                        <a href="signup.php" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem">
                    <img class="course-img" src="images/game-development.png" alt="unity">
                    <div class="card-body">
                        <h5 class="card-title">Introduction to Unity</h5>
                        <p class="card-text">Game Development</p>
                        <p>3 Months <br> GHS 120.00</p>
                        <a href="signup.php" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem">
                    <img class="course-img" src="images/cryptography.png" alt="cryptic">
                    <div class="card-body">
                        <h5 class="card-title">Cryptography</h5>
                        <p class="card-text">Theory of Computation</p>
                        <p>1 Month <br> GHS 65.00</p>
                        <a href="signup.php" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem">
                    <img class="course-img" src="images/hacking.png" alt="hacking">
                    <div class="card-body">
                        <h5 class="card-title">Ethical Hacking</h5>
                        <p class="card-text">Cyber Security</p>
                        <p>3 Months <br> GHS 135.00</p>
                        <a href="signup.php" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
     
    <footer id="footer">
        <div class= "follow">
            <p>Follow Us</p>
            <div class="footer-icons">
                <i class="foot-icon fab fa-twitter"></i>
                <i class="foot-icon fab fa-facebook-f"></i>
                <i class="foot-icon fab fa-instagram"></i>
                <i class="foot-icon fas fa-envelope"></i>
            </div>
        </div>
        <br>
        <p>© Copyright 2021 TechBay</p>
    
      </footer>

</body>
</html>

