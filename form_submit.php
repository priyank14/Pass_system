<?php
include('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$_SESSION['uid']=$uid = uniqid('S');
$name=$_POST['profile_name'];
$gender=$_POST['gender'];
$validity=$_POST['validity'];
$limit=$_POST['limit'];
if ($validity==1) {
  $cost=100;
}
if ($validity==2) {
  $cost=175;
}
if ($validity==3) {
  $cost=250;
}
if ($validity==4) {
  $cost=300;
}




      $sql="INSERT INTO members (uid,emp_number,name,gender,validity,cost) VALUES('$uid','$emp_no','$name','$gender','$validity','$cost')";
      $con->query($sql);

      $sql1="SELECT no_members FROM users WHERE emp_number='$emp_no'";
      $result = $con->query($sql1);
      $row = $result->fetch_assoc();
      $no_members = $row['no_members'];

      if ($no_members==$limit) {
        $sql = "UPDATE users set status = 'set' WHERE emp_number='$emp_no' ";

          if($con->query($sql)) {
            }
          }


?>
