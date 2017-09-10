<?php

if (isset($_GET['e'])) {
	$e=$_GET['e'];
	if ($e==1) {
		echo "<script> var e=1;</script>";
	}
	if ($e=='wrong-username-password') {
		echo "<script> var e=2;</script>";
	}
  if ($e==3) {
    echo "<script> var e=3;</script>";
  }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Swimming pool</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="switch.js"></script>
  
  </head>

  <body>


    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="text-center col-md-4 col-md-offset-4" id="form_box">
              <div class="wrapper_header">
                <h1>Admin Pannel</h1>
              </div>
                  <div id="one"><br>
                    <form class="" action="login.php" method="post">
                          <div class="form-group">
                            <input type="text" name="username" value="" class="form-control" placeholder="Username">
                            <input type="hidden" name="uid" value="<?php if (isset($_GET['uid'])) {echo $_GET['uid'];} ?>">
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" value="" class="form-control" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <input type="submit" name="log_btn" id="login_btn" value="Login" class="form-control btn btn-primary"><br>
                          </div>
                          <a href="#" id="want_admin">Request to be a admin</a>
                    </form>
                  </div>

                  <div id="two" style="display: none">
                    <form class="" action="request_action.php" method="post"><br>
                          <div class="form-group">
                            <input type="text" name="name" value="" class="form-control" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" name="email" value="" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <input type="number" name="emp_no" value="" class="form-control" placeholder="Employee no">
                          </div>
                          <div class="form-group">
                            <input type="number" name="mob_no" value="" class="form-control" placeholder="Mobile no">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows="5" name="reason" value="" placeholder="Tell us why you want to be admin"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" name="log_btn" id="login_btn" value="Request" class="form-control btn btn-primary"><br>
                          </div>
                          <a href="#" id="already_admin">Already a admin</a>
                    </form>
                  </div>
  

            </div>
        </div>
   </div>

<script>
	if (e==1) {
		swal('Warning!', 'Your are not logged in', 'warning');
	}
	if (e==2) {
		swal('Error!', 'Wrong Username or Password', 'error');
	}
  if (e==3) {
    swal('Error!', 'Email is been used by admin  Please try different email', 'error');
  }
</script>
</body>
</html>
