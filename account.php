<?php
$con = mysqli_connect('localhost', 'root', '','customer_login');

// get the post records
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `login` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>