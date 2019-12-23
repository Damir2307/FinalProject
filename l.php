<?php
	session_start();
	header("location:register.php");
	$con=mysqli_connect("localhost","root","","register");
	$email=$_POST['email'];
	$password1=$_POST["ps1"];
	$s="select * from logins where Email='$email' && password='$password1'";

	$result=mysqli_query($con,$s);
	@$num=mysqli_num_rows($result);
	$r = $con->query($s);
	if ($num ==1) {	
		$_SESSION['username']=$email;
		$_SESSION['name']=$result["Name"];
		header("location:index.php");
	}
	else{
		header("location:login.php");
	}

?>