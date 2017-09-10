<?php

if (isset($_POST['log_btn'])) {
  $emp_number=$_POST['emp_number'];
  $emp_password=$_POST['emp_password'];
  $e_check=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_number'AND password='$emp_password'");
  $num_rows = mysqli_num_rows($e_check);
  if($num_rows > 0) {
      session_start();
     $_SESSION['emp_no']=$emp_number;
      header("Location: home.php");
    }
    else {
      array_push($error_array, "Employee no or password is incorrect");
    }
}

?>
