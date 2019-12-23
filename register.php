<!DOCTYPE html>
<?php session_start();  ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/s1.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/	css?family=Bebas+Neue|Bitter|Comfortaa|Kanit&display=swap" rel="stylesheet">
	<script src="js/j1.js" defer></script>
	<link rel="stylesheet" type="text/css" href="css/s3.css">	
	<script src="js/s.js" defer></script>
</head>
<body>
	<div id="line"></div>
	<div id="line2">
		<a href="index.php" style="text-decoration: none; color:rgb(38,59,87); margin-top: 10px;"><div id="ati" style="color:rgb(38,59,87);"><img src="img/111.png">Taraz Bilim-Innovation Lyceum</div></a>
		<div id="soz">"The preschool and basic education should generate a starting<br> intellectual potential and a good health of young Kazakhstans<br> citizens. They should be distinguished by an inquisitive mind,<br> boundless curiosity and vital energy."</div>
		<div id="prezident">nazarbaev</div>
	</div>
	<div id="line3">
		<div id="line31">
			<div><a href="about.html">ABOUT US</a></div>
			<div><a href="news.php">NEWS</a></div>
			<div><a href="teachers.php">OUR TEACHERS</a></div>
			<div><a href="contacts.php">CONTACTS</a></div>
		</div>
		<div id="line32">
			<a href="#"><img src="img/youtube.png"></a>
			<a href="#"><img src="img/insta.png"></a>
			<a href="#"><img src="img/vk.png"></a>
			
		</div>
	</div>
	<div></div>
	<form action="r.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for=""><b>Surname</b></label>
    <input type="text" placeholder="Surname" name="sname" required>
    <label for=""><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="ps1" required>

    <hr>
    <button type="submit" class="regbtn" name="sub">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<h4 id="partners">PARTNERS</h4>
	<div id="part">
		<img src="img/11.png">
		<img src="img/22.png">
		<img src="img/33.png">
		<img src="img/44.png">
	</div>

		<div id="footer">
		<div id="usti">
		<div id="sol">
			<img src="img/logo.png">
		</div>
		<div id="orta">
			<div id="f1">
				<div id="">ABOUT US</div>
				<a href="#">History</a>
				<a href="#">List of lyceums</a>
			</div>
			<div id="f3">
				<div id="">COMISSION</div>
				<a href="#">Entry rules</a>
				<a href="#">Required documents</a>
			</div>
		</div>
		<div id="on">
			<div id="f4">
				<div id="">LINKS</div>
				<a href="#">Accessibility info</a>
				<a href="#">Legal information </a>
				<a href="#">Privacy policy</a>
			</div>
			<div id="f2">
				<div id="">CONTACTS</div>
				<p>Сүлейменов, 17 Тараз/Қазақстан</p>
				<p>тел: +7 (7172)42-79-36</p>
				<p>факс: +7 (7172)42-79-36</p>
				<p>email: info@bil-edu.kz</p>
			</div>
		</div>
		</div>
		<div id="asti">
			© 2017, "BILIM-INNOVATION" International educational fund. All rights reserved.
		</div>
	</div>
</body>
</html>