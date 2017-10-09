<?php

require('../connect.php');
session_start();
if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}
  $username=$_SESSION['username'];

// 	$result=mysqli_query($con,"SELECT * FROM members")or die("This is f");
// if($result === FALSE) {
//     die(mysql_error());
// }

 $query=mysqli_query($con,"SELECT * FROM admin WHERE name='$username'")or die("Error");
 $result=mysqli_fetch_array($query);
 $temp_pass=$result['password'];

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
      <li><a href="home.php">Home</a></li>
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
            <div class="text-center col-md-10 col-md-offset-1" id="form_box">
              <div class="wrapper_header">
                <h1 style="opacity: 0">Welcome</h1>
              </div>


                  <div ><br>
                      <form action="update_action.php" method="post">
                        <div class="form-group">
                          <label for="user_name">Username:</label>
                          <input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo $username; ?>">
                        </div>

                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="text" class="form-control" name="pwd" id="pwd" value="<?php echo $temp_pass; ?>">
                        </div>

                       <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
  

            </div>
        </div>
   </div>

</body>
</html>

