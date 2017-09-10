<?php
require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
if (!isset($_SESSION['emp_no'])) {
  header("Location: index.php");
}


$photo_check_query=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no' AND status='set' AND photo='unset'");
$num_rows2=mysqli_num_rows($photo_check_query);

$status_check_query=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no'AND status='unset'");
$num_rows1=mysqli_num_rows($status_check_query);
if ($num_rows1==1) {
  header("Location: form.php");
}

else if ($num_rows2==1) {
  header("Location: photo.php?p=1");
}

$pay_check_query=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no'AND status='set' AND photo='set' AND paid='no'");
$num_rows3=mysqli_num_rows($pay_check_query);
if ($num_rows3>=1) {
  header("Location: cart.php");
}


$result=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'")or die("This is f");
if($result === FALSE) {
    die(mysql_error());
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
            <div class="text-center col-md-6 col-md-offset-3" id="form_box">
              <div class="wrapper_header">
                <h1>Welcome</h1>
              </div>


                  <div  id="target"><br>
                     <?php

                     $result=mysqli_query($con,"SELECT * FROM members WHERE emp_number='$emp_no'")or die("This is f");
                     if($result === FALSE) {
                         die(mysql_error());
                     }
                     while($row = mysqli_fetch_array($result))
                     {
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
                        <div class='col-md-8'>
                        Name  :  $name <br>
                        Gender  :  $gender <br>
                        Employee number  :  $emp_number <br>
                        From  :  $time <br>
                        Validity  :  $validity month <br>
                        <img src='qr/qrcode.php?text=http://localhost/it/dev/home.php?uid=$uid' alt='QR Code'>
                        </div>
                        <div class='col-md-4'>
                        <img src='./upload/$image1' class='img-thumbnail'><img></div></div><hr>";
                     }

                     ?>
                  </div>

            </div>
        </div>
   </div>


</body>

<script type="text/javascript">
  
</script>

</html>
