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

    <link rel="stylesheet" href="css/admin_dashboard.css">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="instructor" viewBox="0 0 16 16">
          <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z"/>
          <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z"/>  
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="courses" viewBox="0 0 16 16">
          <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
        </symbol>
      </svg>


    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
    
        <a class="navbar-brand" href="index.php">TechBay</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="resources navbar-nav m1-auto">
                <li class="nav-item option">
                    <a class="nav-link" style="color: #2d3092;" href="index.php">Home</a>
                </li>
                <li class="nav-item name">
                    <a class="nav-link" style="color: #2d3092;" href="">Richard C.</a>
                </li>
                <li class="nav-item">
                    <img src="images/man.png" class="my-profile rounded-circle" width="32" alt="my-icon">
                </li>
            </ul>
        </div>
    </nav>  
    </div>

    <main>
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <span class="fs-5">Admin Panel</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="course_panel.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#courses"/></svg>
                  Courses
                </a>
              </li>
              <li>
                <a href="student_panel.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Students
                </a>
              </li>
              <li>
                <a href="instructor_panel.php" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#instructor"/></svg>
                  Instructors
                </a>
              </li>
            </ul>
            <hr>
                <a href="index.php" class="nav-link link-dark">
                  Sign Out
                </a>
          </div>

          <div class="container">
            <div class="row">

              <div class="col-lg-4 col-sm-12">
                <div class="card" style="width: 18rem; background-color: #1367c8;">
                  <div class="card-body">
                    <img class="icons" src="images/student_icon.png" alt="student">
                    <p class="head">TOTAL STUDENTS</p>
                    <p class="figure">
                      <?php
                        require_once (dirname(__FILE__)).'../controller/controller.php';

                        $count = s_Count();
                        foreach ($count as $value) {
                          echo $value;
                        }
                        
                      ?>
                    </p>
                  </div>
                </div>
              </div>

                <div class="col-lg-4 col-sm-12">
                  <div class="card" style="width: 18rem; background-color: #ffaa16;">
                    <div class="card-body">
                      <img class="icons" src="images/instructor.png" alt="instructor">
                      <p class="head">TOTAL INSTRUCTORS</p>
                      <p class="figure">
                      <?php
                        require_once (dirname(__FILE__)).'../controller/controller.php';

                        $count = i_Count();
                        foreach ($count as $value) {
                          echo $value;
                        }
                      ?>
                      </p>
                    </div>
                  </div>
                </div>

              <div class="col-lg-4 col-sm-12">
                <div class="card" style="width: 18rem; background-color: #ff1616;">
                  <div class="card-body">
                    <img class="icons" src="images/course.png" alt="courses">
                    <p class="head">TOTAL COURSES</p>
                    <p class="figure">
                    <?php
                        require_once (dirname(__FILE__)).'../controller/controller.php';

                        $count = c_Count();
                        foreach ($count as $value) {
                          echo $value;
                        }
                      ?>
                    </p>
                  </div>
                </div>
              </div>
        
            </div>
          </div>

          <div class="container">
            <div class="col-lg-12">
              <div class="card f_courses" style="width: 30rem;">
                <div class="card-header">
                  Featured Courses
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item s_courses">
                    <img class="my_courses" src="images/industrial-robot.png" alt="robots">
                    <p class="description">Robotics</p>
                  </li>
                  <li class="list-group-item s_courses">
                    <img class="my_courses" src="images/game-development.png" alt="robots">
                    <p class="description">Game Development</p>
                  </li>
                  <li class="list-group-item s_courses">
                    <img class="my_courses" src="images/cryptography.png" alt="robots">
                    <p class="description">Cryptography</p>
                  </li>
                </ul>
              </div>   
            </div>
          </div>
    </main>

    <!-- Main Content -->
    

</body>
</html>
