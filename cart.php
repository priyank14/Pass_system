<?php
require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];


$query=mysqli_query($con, "SELECT * FROM members WHERE emp_number='$emp_no'");
if(!$query){
  header("Location: home.php");
  die();
}

  $sum=0;
  $query1=mysqli_query($con, "SELECT * FROM members WHERE emp_number='$emp_no'");
  while($row1 = mysqli_fetch_array($query1))
  {
    $sum=$sum+$row1['cost'];
  }
  $_SESSION['sum']=$sum


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Swimming pool</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./switch.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
  </head>
  <body>
    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="text-center col-md-4 col-md-offset-4" id="form_box">
              <div class="wrapper_header">
                <h1>Pay</h1>
              </div>

                  <div><br>
                    <table style="width:100%; text-allign:centre;">
                      <tr>
                        <td><h3>Name</h3></td>
                        <td><h3>Duration</h3></td>
                        <td><h3>Cost</h3></td>
                      </tr>
                      <?php
                      while($row = mysqli_fetch_array($query)){
                        $a=$row['name'];
                        $b=$row['validity'];
                        $c=$row['cost'];

                        echo "<tr>
                        <td>$a</td>
                        <td>$b</td>
                        <td>$c</td>
                        </tr>";
                      }
                      ?>
                      <tr>
                        <td colspan="2"> <b>Total Cost</b></td>
                        <td><?php echo $sum; ?></td>
                      </tr>
                      <tr>
                        <td colspan="3"><button class="btn btn-primary btn-block" type="button" name="btn" onclick="location.href='checkout.php';">Checkout</button></td>
                      </tr>
                    </table>
                    <br>
                  </div>

            </div>
        </div>
   </div>
   <script type="text/javascript">
       $(document).ready(function(){
         swal('Congratulations!', 'Photos Updated just payment left', 'success');
      });
     </script>
  </body>
</html>
