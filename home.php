<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>

  .carousel-item{
    height: 450px;
    width: inherit;
}
.carousel-item img{
    height: 450px;
    width: inherit;
}
  </style>
</head>
<body class = "bg-dark">
<nav class="navbar navbar-expand-sm bg-warning navbar-dark ">
  <ul class="navbar-nav ">
    <li class="nav-item active col-sm-10">
      <a class="nav-link text-center text-dark" href="#">Home</a>
    </li>
    <li class="nav-item col-sm-10">
      <a class="nav-link text-center text-dark" href="menu.php">Menu</a>
    </li>
    <li class="nav-item col-sm-10">
      <a class="nav-link text-center text-dark" href="about_us.php">About Us</a>
    </li>
    <li class="nav-item col-sm-10 " id = "DOC1" style="display: block">
      <a class="nav-link text-center text-dark" href="log_in.php">Log in</a>
    </li>
    <li class="nav-item col-sm-10 disabled" id = "DOC2" style="display: none">
      <a class="nav-link text-center text-dark" href="#">Logged in</a>
    </li>
  </ul>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos\kfc_1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="photos\kfc_2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="photos\kfc_3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  <?php
    session_start();
    if(isset($_SESSION['username']))
    {
      $username = $_SESSION['username'];
      $password = $_SESSION['password'];

      $conn=oci_connect($username,$password,"localhost/XE");
      If ($conn)
      {
          print '<script>document.getElementById("DOC1").style.display = "none";
                  document.getElementById("DOC2").style.display = "block";</script>';
      }
    }

    //require_once('connect.php');
    //$stid = oci_parse($conn, 'SELECT DISTINCT dept_name FROM department');



   ?>



</body>
</html>
