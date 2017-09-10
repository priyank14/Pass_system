<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Swimming pool</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="./switch.js"></script>
  </head>
  <body>

<?php

require('./connect.php');

$emp_no="";
$emp_fname="";
$emp_lname="";
$password="";
$password1="";
$gender="";
$emp_number="";
$emp_password="";
$error_array = array();

include('register.php');
include('login.php');

?>



    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="text-center col-md-4 col-md-offset-4" id="form_box">
              <div class="wrapper_header">
                <h1>Log in or Sign up Below</h1>
              </div>
              <!-- Register starts here -->
                <div class="first"><br>
                  <form class="" action="index.php" method="post">
                        <div class="form-group">
                          <input type="number" name="emp_no" value="" class="form-control" placeholder="Employee no">
                          <?php if(in_array("Employee no already in use<br>", $error_array)) echo  "<div class='err'>Employee no already in use</div>";
                          else if(in_array("Employee no sholud be of 6 characters<br>", $error_array)) echo  "<div class='err'>Employee no sholud be of 6 characters</div>"; ?>
                        </div>
                        <div class="form-group">
                          <input type="text" name="emp_fname" value="" class="form-control" placeholder="Employee First Name">
                          <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo  "<div class='err'>Your first name must be between 2 and 25 characters</div>"; ?>
                        </div>
                        <div class="form-group">
                          <input type="text" name="emp_lname" value="" class="form-control" placeholder="Employee Last Name">
                          <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "<div class='err'>Your last name must be between 2 and 25 characters</div>"; ?>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" value="" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password1" value="" class="form-control" placeholder="Password Again">
                          <?php if(in_array("Password should be more than 6 characters<br>", $error_array)) echo "<div class='err'>Password should be more than 6 characters</div>";
					                       else if(in_array("Your passwords do not match<br>", $error_array)) echo "<div class='err'>Your passwords do not match</div>";?>
                        </div>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="male" checked>Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="female">Female
                        </label>
                        <div class="form-group">
                          <input type="submit" name="reg_btn" value="Submit" class="form-control btn btn-primary"><br>
                        </div>
                        <a href="#" id="signin" class="signin">Already have an account? Login here!</a><br><br>
                  </form>
                </div>
                <!-- Register ends here -->
                  <!-- Login starts here -->
                  <div class="second"><br>
                    <form class="" action="index.php" method="post">
                          <div class="form-group">
                            <input type="number" name="emp_number" value="" class="form-control" placeholder="Employee no">
                          </div>
                          <div class="form-group">
                            <input type="password" name="emp_password" value="" class="form-control" placeholder="Password">
                            <?php if(in_array("Employee no or password is incorrect", $error_array)) echo "<div class='err'>Employee no or password is incorrect</div>"; ?>
                          </div>
                          <div class="form-group">
                            <input type="submit" name="log_btn" id="login_btn" value="Submit" class="form-control btn btn-primary"><br>
                          </div>
                          <a href="#" id="signup" class="signup">Need and account? Register here!</a><br><br>
                    </form>
                  </div>

                <!-- Login ends here -->

            </div>
        </div>
   </div>

  </body>
</html>
