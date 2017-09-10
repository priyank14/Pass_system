<?php
require('../connect.php');
session_start();
if (isset($_GET['uid'])) {
	$uid=$_GET['uid'];

	$result=mysqli_query($con,"SELECT * FROM members WHERE uid='$uid'")or die("This is f");
	if($result === FALSE) {
	    die(mysql_error());
	}
	$row = mysqli_fetch_array($result);

	if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}
	$num_rows=mysqli_num_rows($result);
	if ($num_rows==0) {
		header("Location: home.php?e=0");
	}
	
}
if (isset($_GET['e'])) {
	$e=$_GET['e'];
	if ($e==0) {
		echo "<script> var e=0;</script>";
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  
  
  </head>

  <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="request.php">Requests</a></li>
      <li><a href="users.php">All Users</a></li>
      <li><a href="stats.php">Stats</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php

    if(isset(($_SESSION['username']))){
    	echo "<li><a href='update.php'><span class='glyphicon glyphicon-pencil'></span> Update Account</a></li>";
    	echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
    }else{
    	echo "<li><a href='#'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
    }


    ?>
  
    </ul>
  </div>
</nav>

    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="text-center col-md-6 col-md-offset-3" id="form_box">
              <div class="wrapper_header">
                <h1>Welcome</h1>
              </div>


                  <div ><br>
                    <?php

                    	if (isset($_GET['uid'])) {
							
                    			$image1 =$row['avatar'];
		                        $name=$row['name'];
		                        $emp_number=$row['emp_number'];
		                        $gender=$row['gender'];
		                        $validity=$row['validity'];
		                        $time=$row['start_date'];
		                        $uid=$row['uid'];
		                        // echo "Name  :  $name";
		                        // echo "<img src='./upload/$image1' class='img-thumbnail' width='50%'><img><br>";
		                        echo "<div class='row'>
		                        <div class='col-md-8 col-lg-8 col-xs-8 col-sm-8'>
		                        Name  :  $name <br>
		                        Gender  :  $gender <br>
		                        Employee number  :  $emp_number <br>
		                        From  :  $time <br>
		                        Validity  :  $validity month <br>
		                        </div>
		                        <div class='col-md-4 col-sm-4 col-xs-4'>
		                        <img src='../upload/$image1' class='img-thumbnail'><img></div></div><hr>";

						}
							print("<td> 
						    <form action=\"search.php\" method=\"post\">
						        <input type=\"text\" value=\"\" name =\"uid\" placeholder =\"Enter uid \" class=\"form-control\"><br>
						        <input type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-primary\" >
						    </form>
						</td><br>");

                    ?>
                  </div>
  

            </div>
        </div>
   </div>

<script>
	if (e==0) {
		swal('Warning!', 'User do not exists', 'warning');
	}
</script>

</body>
</html>

