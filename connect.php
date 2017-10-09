<?php

$servername = "localhost";
$username = "root";
$password = "";

//Checking connection

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS dbms";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully<br>";

} else {
    echo "Error creating database: " . $conn->error;
}
$dbname='dbms';
$con = new mysqli($servername, $username, $password, $dbname);

//Creating table users

$sql="CREATE TABLE IF NOT EXISTS `users` (
  `emp_number` int(7) NOT NULL,
  `emp_fname` varchar(20) NOT NULL,
  `emp_lname` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `status` varchar(6) NOT NULL,
  `no_members` int(5) DEFAULT '0',
  `photo` varchar(6) NOT NULL,
  `paid` varchar(4) NOT NULL DEFAULT 'no',
  PRIMARY KEY (emp_number)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($con->query($sql) === TRUE) {
    // echo "Table users  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}

//Creating table payment

$sql="CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) AUTO_INCREMENT,
  `emp_no` int(7) NOT NULL ,
  `payment_id` varchar(60) NOT NULL UNIQUE,
  `payment_request_id` varchar(60) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (emp_no) REFERENCES users(emp_number)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($con->query($sql) === TRUE) {
    // echo "Table payment  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}

//Creating table members

$sql="CREATE TABLE IF NOT EXISTS `members` (
  `uid` varchar(64) NOT NULL UNIQUE,
  `emp_number` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `validity` int(2) NOT NULL,
  `cost` int(5) NOT NULL,
  `avatar` varchar(68) NOT NULL,
  `photo` int(2) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (emp_number) REFERENCES users(emp_number)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($con->query($sql) === TRUE) {
    // echo "Table members  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}

//Creating table admin_req


$sql="CREATE TABLE IF NOT EXISTS `admin_req` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `emp_no` int(7) NOT NULL,
  `mob_no` int(12) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (emp_no) REFERENCES users(emp_number)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($con->query($sql) === TRUE) {
    // echo "Table admin_req  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}

//Creating table admin

$sql="CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(20) UNIQUE,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($con->query($sql) === TRUE) {
    // echo "Table admin_req  created successfully<br>";
} else {
//     echo "Error creating table: " . $con->error;
  }


$sql="INSERT INTO `admin` VALUES('','admin','admin','admin@gmail.com')";
if ($con->query($sql) === TRUE) {
    // echo "Table users  created successfully<br>";
} else {
    // echo "Error creating table: " . $con->error;
}
?>

