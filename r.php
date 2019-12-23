<?php
	session_start();
	header("location:register.php");
	$con=mysqli_connect("localhost","root","","register");
	$email=$_POST['email'];
	$password1=$_POST["ps1"];
	$name=$_POST["name"];
	$surname=$_POST['sname'];
	$s="select * from logins where Email='$email'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if ($num ==1) {
		alert("Username already taken");
	}
	else{
		$reg="insert into logins(Email,Surname,Name,password) values ('$email','$surname','$name','$password1')";
		mysqli_query($con,$reg);
		
	}


?>