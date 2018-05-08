<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Register</title>

  <!-- Core stylesheet files. REQUIRED -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">

  <!-- Font Awesome -->
  <!-- WARNING: Font Awesome doesn't work if you view the page via file:// -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css">

  <!-- animate.css -->
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.css">
  <!-- END: core stylesheet files -->
  <!-- Theme main stlesheet files. REQUIRED -->
  <link rel="stylesheet" href="../assets/css/chl.css">
  <link rel="stylesheet" href="../assets/css/theme-peter-river.css">
  <!-- END: theme main stylesheet files -->

  <style media="screen">
    .app {
      background-image: url("../assets/img/bg.svg");
      background-repeat: no-repeat;
      background-size: cover;
    }

  </style>
</head>

<body class="bg-clouds">
  <div class="app">
    <div class="app-login">
      <div class="text-center box shadow-5 animated fadeInLeft b-r-4 p-a-20">
        <h4>Register a new admin</h4>
        <form class="text-left" role="form" action="" method="post">
          <div class="form-group has-feedback">
            <input class="form-control" placeholder="Username" type="text" name="name">
            <span class="form-control-feedback">
              <i class="fa fa-fw fa-user"></i>
            </span>
          </div>
          <div class="form-group has-feedback">
            <input class="form-control" placeholder="Email" type="email" name="email">
            <span class="form-control-feedback">
              <i class="fa fa-fw fa-envelope"></i>
            </span>
          </div>
          <div class="form-group has-feedback">
            <input class="form-control" placeholder="Password" type="password" name="password">
            <span class="form-control-feedback">
              <i class="fa fa-fw fa-key"></i>
            </span>
          </div>
          <div class="form-group has-feedback">
            <input class="form-control" placeholder="Retype password" type="password" name="confirm_password">
            <span class="form-control-feedback">
              <i class="fa fa-fw fa-key"></i>
            </span>
          </div>
          <div class="checkbox">
            <label>
              <input class="hidden" type="checkbox" name="name" value="">
              <i class="fa fa-lg text-primary"></i>
              I agree to the
              <a href="javascript:;" data-toggle="modal" data-target="#loginModal">terms</a>
            </label>
          </div>
          <input type="submit" class="btn btn-primary btn-block m-b-15" name="register">Register</button>
          <!-- <p class="text-right">
            <a href="app-login.html">I already have a membership</a>
          </p> -->
        </form>
      </div>

    </div>
  </div>


<?php

if(isset($_POST["register"]))
{
// Create connection
include ('connection.php');
session_start();

$name=$_POST['name'];
$confirm_password=$_POST['confirm_password'];
$email=$_POST['email'];
$password=$_POST['password'];
$date=date("Y-m-d");


  $get_email="SELECT * from admin where email='$email'";
  $statement=$connect->prepare($get_email);
  $statement->execute();
  $count=$statement->rowCount();
  if($count)
  {
     echo "<script>alert('Email already registered!');</script>";
     echo "<script>window.open('index.php','_self');</script>";
  }

  else
  {

  if($password==$confirm_password)
  {

    $hash=password_hash($password,PASSWORD_DEFAULT);
  $query="INSERT into admin(username,email,password,date)VALUES('$name','$email','$hash','$date')";
  $statement=$connect->prepare($query);
  if($statement->execute())
  {
    $_SESSION["email"]=$email;
    header("location: index.php");
  }
  else
  {
     echo "<script>alert('Signup unsuccessful');</script>";

    echo "<script>window.open('index.php','_self');</script>";

  }

  }

  else
  {
     echo "<script>alert('Passwords do not match');</script>";

    echo "<script>window.open('app-register.php','_self');</script>";

  }



  }

}


?>


  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="loginModalLabel">Terms</h4>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">I agree</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Core javascript files. REQUIRED -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../assets/vendor/jquery/jquery.js"></script>

  <!-- Bootstrap -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>
