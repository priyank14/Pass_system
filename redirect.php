<?php

require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$payment_id=$_GET['payment_id'];
$payment_request_id=$_GET['payment_request_id'];
$query=mysqli_query($con,"INSERT INTO payment VALUES('','$emp_no','$payment_id','$payment_request_id')");
if($query){
}else {
  die("nooo");
}
$sql_query=mysqli_query($con,"UPDATE users set paid= 'yes' WHERE emp_number='$emp_no' ");
if($sql_query){
  header("Location: home.php");
}else {
  die("nooo");
}

?>
