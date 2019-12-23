<?php
	session_start();
	header("location:adminpage.php");
	$con=mysqli_connect("localhost","root","","register");
	$email=$_POST['email'];
	$pass=$_POST["password"];
	$s="update logins set password='$pass' where email='$email' ";
	mysqli_query($con,$s);

?>