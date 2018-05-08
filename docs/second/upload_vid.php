<?php

session_start();

if (!isset($_SESSION["email"])) {
  header("location: app-login.php");  # code...
}

include("nav_sidebar.php");
?>

<!DOCTYPE html>
<html>
<body>



	

</body>
</html>