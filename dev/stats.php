<?php
require('../connect.php');
session_start();
if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}
	
  $query=mysqli_query($con,"SELECT * FROM members");
  $no_mem=mysqli_num_rows($query);

  $query1=mysqli_query($con,"SELECT * FROM members");
  $cost=0;
  while($row = mysqli_fetch_array($query1)){
    $cost=$cost+$row['cost'];
  }

  $query2=mysqli_query($con,"SELECT * FROM members Where gender='male'");
  $no_mem2=mysqli_num_rows($query2);

  $query3=mysqli_query($con,"SELECT * FROM members Where gender='female'");
  $no_mem3=mysqli_num_rows($query3);

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
      <li><a href="request.php">Requests</a></li>
      <li><a href="users.php">All Users</a></li>
      <li  class="active"><a href="stats.php">Stats</a></li>
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
                <h1 style="opacity: 0">Welcome</h1>
              </div>


                  <div ><br>
                    <p><h3>No of Users: <?php echo $no_mem; ?></h3></p>
                    <p><h3>Amout Recived: <?php echo $cost; ?></h3></p>
                    <p><h3>No of Males: <?php echo $no_mem2; ?></h3></p>
                    <p><h3>No of Females: <?php echo $no_mem3; ?></h3></p>
                  </div>
  

            </div>
        </div>
   </div>



</body>
</html>