<?php
require('../connect.php');
session_start();
if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}
	$sel = mysqli_query($con,"SELECT * FROM admin_req WHERE status='unset'") or die("mysql_error()");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Swimming pool</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">
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
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="request.php">Requests</a></li>
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
            <div class="text-center col-md-12 col-md-offset-" id="form_box">
              <div class="wrapper_header">
                <h1 style="opacity: 0">Welcome</h1>
              </div>


                  <div ><br>
                  <table class="table table-striped table-bordered">
                  <thead>
                  	<tr>
                  		<th>ID</th>
                  		<th>Name</th>
                  		<th>Email</th>
                  		<th>Employee no</th>
                  		<th>Moblile no</th>
                  		<th>Reason</th>
                  		<th>Action</th>
                  	</tr>
                  </thead>
                  <tbody>
                  	<?php

                    while($row = mysqli_fetch_array($sel)){
                    	$id=$row['id'];
                    	$name=$row['name'];
                    	$email=$row['email'];
                    	$emp_no=$row['emp_no'];
                    	$mob_no=$row['mob_no'];
                    	$reason=$row['reason'];
                    	echo "<tr>
                    	<td>$id</td>
                    	<td>$name</td>
                    	<td>$email</td>
                    	<td>$emp_no</td>
                    	<td>$mob_no</td>
                    	<td>$reason</td>
                    	<td><div class='btn-group'>
						    <button type='button' onclick='delFunction($emp_no);' class='btn btn-danger'>Delete</button>
						    <button type='button' onclick='addFunction($emp_no);' class='btn btn-primary'>Accept</button>
						  </div></td>";
						    
						}

                    ?>
                  </tbody>
                  </table>
                  </div>
  

            </div>
        </div>
   </div>

<script>
function delFunction(p1) {
   window.location.href = "http://localhost/it/dev/del_func.php?emp="+p1;
}
function addFunction(p1) {
   window.location.href = "http://localhost/it/dev/add_func.php?emp="+p1;
}

</script>


</body>
</html>

