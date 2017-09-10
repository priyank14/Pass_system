<?php

if(isset($_POST['reg_btn'])){
  $emp_no=$_POST['emp_no'];
  $emp_fname=$_POST['emp_fname'];
  $emp_lname=$_POST['emp_lname'];
  $password=$_POST['password'];
  $password1=$_POST['password1'];
  $gender=$_POST['gender'];


    if(strlen($emp_fname) > 25 || strlen($emp_fname) < 2) {
    array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
     }

     if(strlen($emp_lname) > 25 || strlen($emp_lname) < 2) {
    array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
     }

     if(strlen($emp_no) > 6 || strlen($emp_no) < 6) {
    array_push($error_array, "Employee no sholud be of 6 characters<br>");
     }

     if(strlen($password) < 6) {
     array_push($error_array, "Password should be more than 6 characters<br>");
      }

     if($password != $password1) {
        array_push($error_array,  "Your passwords do not match<br>");
      }
  $e_check=mysqli_query($con, "SELECT emp_number FROM users WHERE emp_number='$emp_no'");
  $num_rows = mysqli_num_rows($e_check);
  if($num_rows > 0) {
      array_push($error_array, "Employee no already in use<br>");
    }

    $errors= count($error_array);
    if ($errors==0) {
      $reg_query=mysqli_query($con,"INSERT INTO users VALUES ('','$emp_no','$emp_fname','$emp_lname','$password','$gender','unset','','unset','no')")or die("Some prob");
      if ($reg_query) {
        echo "<script>swal('Congratulations!', 'Registration Successful', 'success');</script>";
      }else {
        die("Reg unsuccesfull");
      }
    }
}

?>
