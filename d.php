<?php
	session_start();
	header("location:adminpage.php");
	$con=mysqli_connect("localhost","root","","register");
	$name=$_POST["name"];
	$s="delete from logins where Name='$name'";
	mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

?>