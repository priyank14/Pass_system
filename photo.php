<?php

require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
if (!isset($_SESSION['emp_no'])) {
  header("Location: index.php");
}

$photo_check_query=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no'AND photo='set'");
$num_rows=mysqli_num_rows($photo_check_query);
if ($num_rows==1) {
  header("Location: home.php");
}

$sql1="SELECT * FROM users WHERE emp_number='$emp_no'";
$result1 = $con->query($sql1);
$row1 = $result1->fetch_assoc();
$no_members = $row1['no_members'];

$result=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'")or die("This is f");
if($result === FALSE) {
    die(mysql_error());
}
$result2=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'")or die("This is f");
if($result2 === FALSE) {
    die(mysql_error());
}

$run=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'")or die("Error");
$num_rows = mysqli_num_rows($run);

$run1=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'AND photo=1")or die("Error");
$num_rows1 = mysqli_num_rows($run1);

if ($num_rows==$num_rows1) {
  $query="UPDATE users SET photo = 'set'";
  if($con->query($query)) {

                   header('Location: home.php');
                } else {
                    echo $con->error;
                }
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
    </head>
    <body>

      <div class="container container-table">
          <div class="row vertical-center-row">
              <div class="text-center col-md-4 col-md-offset-4" id="form_box">
                <div class="wrapper_header">
                  <h1>How many members?</h1>
                </div>

                    <div>
                      <br><br><br>
                      <?php

                      if (isset($_GET['p']))
                      {
                          if ($_GET['p'] == '1')
                          {
                                  echo "<div>
                                    <form action='uploads.php' method='POST' enctype='multipart/form-data'>
                                      <div class='form-group'>
                                        <label for='profile_avatar'>";
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $count=0;
                                            $count++;
                                            echo $row['name'];
                                            $_SESSION['uid']=$uid=$row['uid'];
                                            if ($count==1) {
                                              break;
                                            }
                                        }

                                        echo "</label><br/>
                                        <input type='file' name='image' />
                                        <input type='hidden' name='url' value='1'/>
                                        <input type='submit' class='btn btn-primary'/>
                                      </div>
                                    </form>
                                    </div>";
                          }
                          elseif ($_GET['p'] == '2')
                          {
                                if ($no_members>=2)
                                {
                                  echo "<div id='form'>
                                  <form action='uploads.php' method='POST' enctype='multipart/form-data'>
                                      <div class='form-group'>
                                        <label for='profile_avatar'>";
                                        $count=0;
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $count++;
                                            if ($count==1) {
                                              continue;
                                            }
                                            echo $row['name'];
                                            $_SESSION['uid']=$uid=$row['uid'];
                                            if ($count==2) {
                                              break;
                                            }
                                        }

                                        echo "</label><br/>
                                        <input type='file' name='image' />
                                        <input type='hidden' name='url' value='2'/>
                                        <input type='submit' class='btn btn-primary'/>
                                      </div>
                                    </form>
                                    </div>";
                                }
                                else {
                                header("Location: photo.php?p=1");
                                }
                          }
                          elseif ($_GET['p'] == '3')
                          {
                                if ($no_members>=3)
                                {
                                  echo "<div id='form'>
                                    <form action='uploads.php' method='POST' enctype='multipart/form-data'>
                                      <div class='form-group'>
                                        <label for='profile_avatar'>";
                                        $count=0;
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $count++;
                                            if ($count==1) {
                                              continue;
                                            }
                                            if ($count==2) {
                                              continue;
                                            }
                                            echo $row['name'];
                                            $_SESSION['uid']=$uid=$row['uid'];
                                            if ($count==3) {
                                              break;
                                            }
                                        }

                                        echo "</label><br/>
                                        <input type='file' name='image' />
                                        <input type='hidden' name='url' value='3'/>
                                        <input type='submit' class='btn btn-primary'/>
                                      </div>
                                    </form>
                                    </div>";
                                }
                                else {
                                header("Location: photo.php?p=2");
                                }
                          }
                          elseif ($_GET['p'] == '4') {
                                if ($no_members>=4)
                                {
                                  echo "<div id='form'>
                                  <form action='uploads.php' method='POST' enctype='multipart/form-data'>
                                      <div class='form-group'>
                                        <label for='profile_avatar'>";
                                        $count=0;
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $count++;
                                            if ($count==1) {
                                              continue;
                                            }
                                            if ($count==2) {
                                              continue;
                                            }
                                            if ($count==3) {
                                              continue;
                                            }
                                            echo $row['name'];
                                            $_SESSION['uid']=$uid=$row['uid'];
                                            if ($count==4) {
                                              break;
                                            }
                                        }

                                        echo "</label><br/>
                                        <input type='file' name='image' />
                                        <input type='hidden' name='url' value='4'/>
                                        <input type='submit' class='btn btn-primary'/>
                                      </div>
                                    </form>
                                    </div>";
                                }
                                else {
                                header("Location: photo.php?p=3");
                                }
                          }
                          else {
                              header("Location: home.php");
                          }
                      }
                      else {
                        header("Location: home.php");

                      }


                      ?>



            </div>
          </div>
     </div>
     <script type="text/javascript">
       $(document).ready(function(){
         swal('Congratulations!', 'Details Updated Successful Now update photo', 'success');
      });
     </script>
    </body>
  </html>
