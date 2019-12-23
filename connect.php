<?php 
$con=mysqli_connect("localhost","root","","register");
$sql = "SELECT * FROM logins";
$result = $con->query($sql);
?>