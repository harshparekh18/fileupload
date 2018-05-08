<?php

session_start();

if (!isset($_SESSION["email"])) {
  header("location: app-login.php");  # code...
}

include("nav_sidebar.php");
?>


          <!-- begin .main-content -->
          <div class="main-content bg-clouds">
            <!-- begin .container-fluid -->
            <div class="container-fluid p-t-15">
              <div class="box b-a">
                <div class="box-body">
    
                </div>
              </div>

            </div>
            <!-- END: .container-fluid -->

          </div>
          <!-- END: .main-content -->

       <?php
       include("footer.php");
       ?>