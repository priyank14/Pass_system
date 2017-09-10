<?php
require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$status_check_query=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no'AND status='set'");
$num_rows=mysqli_num_rows($status_check_query);
if ($num_rows==1) {
  header("Location: home.php");

$query=mysqli_query($con,"SELECT * FROM users WHERE emp_number='$emp_no'");
}

?>
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
    <script src="option.js"></script>
    <script src="next.js"></script>
  </head>
  <body>

    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="text-center col-md-4 col-md-offset-4" id="form_box">
              <div class="wrapper_header">
                <h1>How many members?</h1>
              </div>

                  <div id="select">
                    <br><br><br>
                    <div id="form">
                      <div class="form-group">
                        <select class="form-control" name="number" id="number">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="button"  id="submitButton" value="submit" class="btn btn-primary" >
                      </div>
                    </div>

                  </div>

                  <div id="one" style="display:none;">
                    <br><br>
            <form  action="form_submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="profile_name1">Name</label><br/>
                      <input class="form-control" type="text" name="profile_name1" id="profile_name1" placeholder="Member Name" required/><br/>
                    </div>

                    <div class="form-group">
                      <label class="radio-inline">
                        <input id="gender1" type="radio" name="gender1" value="male" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input id="gender1" type="radio" name="gender1" value="female">Female
                      </label>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="validity1" id="validity1">
                        <option value="1">1 month</option>
                        <option value="2">2 month</option>
                        <option value="3">3 month</option>
                        <option value="4">4 month</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="limit1" value="1" id="limit1">
                      <input type="button"  id="submitButton1" value="next" class="btn btn-primary" >
                    </div>
              </form>
                  </div>

                  <div id="two" style="display:none;">
                    <br><br>
            <form  action="form_submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="profile_name2">Name</label><br/>
                      <input class="form-control" type="text" name="profile_name2" id="profile_name2" placeholder="Member Name" required/><br/>
                    </div>

                    <div class="form-group">
                      <label class="radio-inline">
                        <input id="gender2" type="radio" name="gender2" value="male" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input id="gender2" type="radio" name="gender2" value="female">Female
                      </label>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="validity2" id="validity2">
                        <option value="1">1 month</option>
                        <option value="2">2 month</option>
                        <option value="3">3 month</option>
                        <option value="4">4 month</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="limit2" value="2" id="limit2">
                      <input type="button"  id="submitButton2" value="next" class="btn btn-primary" >
                    </div>
              </form>
                  </div>

                  <div id="three" style="display:none;">
                    <br><br>
            <form  action="form_submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="profile_name3">Name</label><br/>
                      <input class="form-control" type="text" name="profile_name3" id="profile_name3" placeholder="Member Name" required/><br/>
                    </div>

                    <div class="form-group">
                      <label class="radio-inline">
                        <input id="gender3" type="radio" name="gender3" value="male" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input id="gender3" type="radio" name="gender3" value="female">Female
                      </label>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="validity3" id="validity3">
                        <option value="1">1 month</option>
                        <option value="2">2 month</option>
                        <option value="3">3 month</option>
                        <option value="4">4 month</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="limit3" value="3" id="limit3">
                      <input type="button"  id="submitButton3" value="next" class="btn btn-primary" >
                    </div>
              </form>
                  </div>

                  <div id="four" style="display:none;">
                    <br><br>
            <form  action="form_submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="profile_name4">Name</label><br/>
                      <input class="form-control" type="text" name="profile_name4" id="profile_name4" placeholder="Member Name" required/><br/>
                    </div>

                    <div class="form-group">
                      <label class="radio-inline">
                        <input id="gender4" type="radio" name="gender4" value="male" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input id="gender4" type="radio" name="gender4" value="female">Female
                      </label>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="validity4" id="validity4">
                        <option value="1">1 month</option>
                        <option value="2">2 month</option>
                        <option value="3">3 month</option>
                        <option value="4">4 month</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="limit4" value="4" id="limit4">
                      <input type="button"  id="submitButton4" value="next" class="btn btn-primary" >
                    </div>
              </form>
                  </div>
          </div>
        </div>
   </div>
  </body>
</html>
