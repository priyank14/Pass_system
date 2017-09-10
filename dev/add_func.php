<?php

require('../connect.php');

session_start();
if (!isset($_SESSION['username'])) {
	   header("Location: index.php?uid=$uid&e=1");
	}

if ($_GET['emp']) {
	$emp=$_GET['emp'];

	$query1=mysqli_query($con,"SELECT * FROM admin_req WHERE emp_no=$emp") or die("error");
	if ($query1) {
		$result=mysqli_fetch_array($query1);
		$email=$result['email'];
		echo "$email";

		$query=mysqli_query($con,"UPDATE admin_req SET status='set' WHERE emp_no=$emp")or die("Problem");
		// if ($query) {
		// 	header("Location: request.php");
		// }

		$user_rand= substr(md5(microtime()),rand(0,26),5);
		$user_pass= substr(md5(microtime()),rand(0,26),5);
		echo "$user_rand <br> $user_pass";

		$query2=mysqli_query($con,"INSERT INTO admin VALUES('','$user_rand','$user_pass','$email')")or die("Problem");

		 header("Location: ../mail/test.php?email=$email&msg=2");
	}

	

}

?>