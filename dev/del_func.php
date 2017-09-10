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

		$query=mysqli_query($con,"DELETE FROM admin_req WHERE emp_no='$emp'")or die("Problem");
		// if ($query) {
		// 	header("Location: request.php");
		// }

		$msg="WE are sorry to tell you that your request to be a admin is being denied";
		header("Location: ../mail/test.php?email=$email&msg=1");
	}

	

}

?>