<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A New Course</title>

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans&display=swap" rel="stylesheet">

    <!-- CSS and Bootsrap -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/coursecreate.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>
</head>

    <h4>Create A New Course</h4>
    <div class="course-body">
          <form method="post" action="controller/addcourse.php" id="insert_form">
          <label>Enter Course Name</label>
          <input type="text" name="name" id="name" class="form-control" />
          <br />
          <label>Enter Program</label>
          <input type="text" name="program" id="program" class="form-control">
          <br />  
          <label>Enter Duration</label>
          <input type="text" name="duration" id="duration" class="form-control" />
          <br />  
          <label>Enter Price</label>
          <input type="number" name="price" id="price" class="form-control" />
          <br />
          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
          </form>
        </div>


</body>
</html>