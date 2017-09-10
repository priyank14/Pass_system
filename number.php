<?php
require('./connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$_SESSION['number']=$number=$_POST['number'];

  $query=mysqli_query($con,"UPDATE users SET no_members='$number' WHERE emp_number='$emp_no'");
  if($query){
    echo "Success";
  }
?>
