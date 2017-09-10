<?php


if(isset($_POST['search'])) {
	$uid=$_POST['uid'];
	echo "$uid";
	header("Location: home.php?uid=$uid");
}

?>
