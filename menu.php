<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
<br>


<form method="post">
  <div class="container d-flex justify-content-start">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="photos/food_1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Chicken Wings</h4>
      <h1>Price: 100 taka</h1>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <button type = "submit" name = "food[]" value = "food_1" class="btn btn-primary ">Add to Cart</button>
    </div>
  </div>
</div>


  <div class = "container d-flex justify-content-end">
  <div class="card " style="width:400px">
    <img class="card-img-top" src="photos/food_2.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Triple Treat Bucket</h4>
      <h1>Price: 850 taka</h1>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <button type = "submit" name = "food[]" value = "food_2" class="btn btn-primary ">Add to Cart</button>
    </div>
  </div>
  </div>

</form>
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
  if(isset($_POST['food'])){

  $foods = $_POST["food"];
  print $foods[0];
  print "<script> alert('something') </script >";}
  //require_once('connect.php');
  //$stid = oci_parse($conn, 'SELECT DISTINCT dept_name FROM department');


 ?>

</body>
</html>
