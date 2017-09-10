<?php

require('../connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$emp_no=$_POST['emp_no'];
	$mob_no=$_POST['mob_no'];
	$reason=$_POST['reason'];
	if(empty($name)||empty($email)||empty($emp_no)||empty($mob_no)||empty($reason)){
		header("Location: index.php?err=0");
		die();
	}
	echo "$name <br>";
	echo "$email <br>";
	echo "$emp_no <br>";
	echo "$mob_no <br>";
	echo "$reason <br>";
	$query1=mysqli_query($con,"SELECT * from admin_req WHERE email='$email' OR emp_no='$emp_no' OR mob_no='$mob_no'")or die("Problem haha");
	$num=mysqli_num_rows($query1);
	if($num>0){
		header("Location: index.php?err=1");
		die();
	}

	$query1=mysqli_query($con,"SELECT * from admin WHERE email='$email'")or die("Problem haha");
	$num=mysqli_num_rows($query1);
	if($num>0){
		header("Location: index.php?e=3");
		die();
	}

	$query=mysqli_query($con,"INSERT INTO admin_req VALUES('','$name','$email','$emp_no','$mob_no','$reason','unset')")or die("Problem");
	header("Location: index.php");

}

?>