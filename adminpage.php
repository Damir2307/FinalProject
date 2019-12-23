<!DOCTYPE html>
<?php session_start();  ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/s2.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Comfortaa|Kanit&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Permanent+Marker&display=swap" rel="stylesheet">
	<script src="js/j1.js" defer></script>
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
			<div><a href="about.php">ABOUT US</a></div>
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
	<div id="welcome">
		<div id="w1">
			Welcome Damir
		</div>
		<div id="uakit">
			13 December 13:20
		</div>
	</div>
	<div id="line01">
		<div id="sizik1">
			<div id="nnn">
				<div id="siz11">
					<img src="img/mes.png">
				</div>
			</div>
			<div id="siz12">
				<div id="j1">
					<strong>125</strong> Emails
				</div>
				<div id="j2">
					6 new arrivals
				</div>
			</div>
		</div>
		<div id="sizik1">
			<div id="nnn">
				<div id="siz22">
					<div><strong>T</strong></div>
				</div>
			</div>
			<div id="siz12">
				<div id="j1">
					<strong>38</strong> Teachers
				</div>
				<div id="j2">
					2 new teachers
				</div>
			</div>
		</div>
		<div id="sizik1">
			<div id="nnn">
				<div id="siz11">
					<img src="img/users.png">
				</div>
			</div>
			<div id="siz12">
				<div id="j1">
					<strong>600</strong> Users
				</div>
				<div id="j2">
					2 admins
				</div>
			</div>
		</div>
	</div>

		<div id="users" style="margin-top: 3%;
	margin-left: 2%;">
			<div id="y2"><p>Users</p></div>
				<?php include "connect.php";while($row = $result->fetch_assoc()) {
        echo json_encode($row). "<br>";}?>
			</div>

		</div>
		<h1>Delete username by name</h1>
		<div id="deletee">
		<form action="d.php" method="post">
		<input type="text" placeholder="Enter Name" name="name" required>
	    <button type="submit" class="regbtn" name="sub">Delete</button>
	    </form>
	</div>
	<h1>Update password by email</h1>
	<div id="Update">
		<form action="u.php" method="post">
		<input type="text" placeholder="Enter your email" name="email" required>
		<input type="password" placeholder="new password" name="password" required>
	    <button type="submit" class="regbtn" name="sub">Update</button>
	    </form>
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



