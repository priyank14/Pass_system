<?php

require('../connect.php');
session_start();
if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}
  $username=$_SESSION['username'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user=$_POST['user_name'];
	$password=$_POST['pwd'];
	if(empty($user)||empty($password)){
		header("Location: update.php?err=0");
		die();
	}
	$query=mysqli_query($con,"UPDATE admin SET username='$user',password='$password' WHERE username='$username'");

	session_unset('username');
	session_destroy();
	session_start();
	$_SESSION['username']=$user;

	header("Location: update.php");
	
	

}

?>