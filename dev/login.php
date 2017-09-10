<?php
require('../connect.php');

 if(isset($_POST['log_btn']))
 {

	    $username=$_POST['username'];
	 	$password=$_POST['password'];
	 	$uid=$_POST['uid'];
	 	$query=mysqli_query($con, "SELECT * FROM admin WHERE username='$username'AND password='$password'");
	    $num_rows = mysqli_num_rows($query);
	    if($num_rows > 0) {
	      session_start();
	     $_SESSION['username']=$username;
	     if (empty($uid)) {
	     	header("Location: home.php");
	     	die();
	     }
	     header("Location: home.php?uid=$uid");
       }
       else{
       		header("Location: index.php?e=wrong-username-password");
       }
 }
?>
