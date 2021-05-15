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
      <a class="nav-link text-center text-dark" href="home.php">Home</a>
    </li>
    <li class="nav-item col-sm-10">
      <a class="nav-link text-center text-dark" href="menu.php">Menu</a>
    </li>
    <li class="nav-item col-sm-10">
      <a class="nav-link text-center text-dark" href="about_us.php">About Us</a>
    </li>
    <li class="nav-item col-sm-10">
      <a class="nav-link text-center text-dark" href="log_in.php">Log in</a>
    </li>
  </ul>
</nav>


<form action="log_in.php" method="post">
<div class="p-3 form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label text-light">User Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" placeholder="User Name" name = "user">
  </div>
</div>
<div class=" p-3 form-group row">
  <label for="inputPassword" class="col-sm-2 col-form-label text-light">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" placeholder="Password" name = "password">
  </div>
</div>
<div class=" p-3 form-group row">
  <label class="col-sm-2 col-form-label text-light"></label>
  <div class="col-sm-3">
    <input type="submit" class="form-control">
  </div>
</form>



<?php
    session_start();
    if(isset($_POST['user']) && isset($_POST['password']))
    {
      require_once('connect.php');
      $username = $_POST['user'];
      $password = $_POST['password'];
      $temp = "SELECT COUNT(*) from u_s_e_r where user_id = '".$username. "' and password = '".$password."'";
      $stid = oci_parse($conn, $temp);
      oci_execute($stid);
      $bool = false;
      while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        foreach ($row as $item) {
           $temp1 = htmlentities($item, ENT_QUOTES);
           //print "<script>window.alert($temp1);</script>";
           if($temp1 == '1')
           {
             $bool = true;
           }
           else {
             $bool = false;
           }
         }
      }
      //$conn=oci_connect($username, $password,"localhost/XE");
      If ($bool == false)
        echo '<p>Failed to connect to Oracle</p>';
      else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: home.php");
      }
    }


 ?>
</body>
</html>
