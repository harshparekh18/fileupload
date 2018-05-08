<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>

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
        <h1 class="f-4 m-a-0">LOGIN</h1>
        <h4>Log in to start your session</h4>
        <form class="text-left" role="form" action="" method="post">
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
          <button type="submit" class="btn btn-primary btn-block m-b-15" name="login">Login</button>
          <a href="app-forgot.html">
            <small>Forgot password?</small>
          </a>
         <!--  <p class="text-muted text-right">
            Do not have an account?
            <a href="app-register.html">Create an account</a>
          </p> -->
        </form>

      </div>
    </div>

<?php
if(isset($_POST["login"]))
{
session_start();
include('connection.php');
$email=$_POST['email'];
$password=$_POST['password'];
$hash=password_hash($password,PASSWORD_DEFAULT);

  $query="SELECT * from admin where email='$email'";
  $statement=$connect->prepare($query);
  $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $passdb=$row['password'];
  $verify=password_verify($password,$passdb);


  $count=$statement->rowCount();
  if($count && $verify)
  {

    
    $_SESSION["email"]=$email;
    header("location: index.php");
  }
  else
  {
     echo "<script>alert('Invalid Entry');</script>";
    echo "<script>window.open('index.php','_self');</script>";
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
