<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
		<!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body style="overflow-x: hidden; background-color:#FCD2D1;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
        <h4 style="padding-left:15px;font-family:'Comic Sans MS';">BookMYshow</h4>
      </div>
      <div class="col-md-7" style="text-align: right;">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="movies.php">Movies</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">User Login</a></li>
          <li><a href="admin/login.php">Admin Login</a></li>
        </ul>
      </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
      <div class="col-md-12" style="padding:15px;margin-left:15px;margin-right:15px;">
        <h4>Grab your tickets now !!!</h4>
        <p>Welcome to movie seat booking !! </p>
          <p>Take a coke and some popcorn, and come to unwind yourself .</p>
        
      </div>
    </div>

    <!-- kantara movie -->
    <center><h3><u><b>Movies you shouldn't miss </b></u></h3></center>
    <div class="row" style="margin:20px;">
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202210/kantaraott-one_one.jpg?VersionId=OqGcBf5jUzOcRkvRj7dHKbvkS.Au.vK2" alt="Card image cap" alt="image unavialbile right now">
          <div class="card-body">
            <h5 class="card-title">Movie availability</h5>
            <p class="card-text">Movie in theatre</p>
            <a href="viewMovie.php?mid=1" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>


<!-- drishyam 2 movie -->
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Drishyam_2_2022_film_poster.jpg/220px-Drishyam_2_2022_film_poster.jpg">
          <div class="card-body">
            <h5 class="card-title">Movie availability </h5>
            <p class="card-text"> Movie in theatre</p>
            <a href="viewMovie.php?mid=2" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>




<!-- uunchai movie -->
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://m.media-amazon.com/images/M/MV5BZmNjNGYxOGEtYjkwMC00YmQyLThjZTYtMThlMmY0MmIzZmRiXkEyXkFqcGdeQXVyMTkzOTcxOTg@._V1_.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie availability</h5>
            <p class="card-text">Movie in theatre</p>
            <a href="viewMovie.php?mid=3" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>


      <!-- bhediya movie -->
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/2/29/Bhediya_film_poster.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Movie availability</h5>
            <p class="card-text">Movie in theatre</p>
            <a href="viewMovie.php?mid=4" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
