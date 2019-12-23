<!DOCTYPE html>
<?php session_start();  ?>
<html>
<head>
		<link rel="stylesheet" href="css/s1.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Muli|Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Comfortaa|Kanit&display=swap" rel="stylesheet">
	<script src="js/j1.js" defer></script>
	<script src="js/s.js" defer></script>
</head>
<body>
	<div id="line"></div>
	<div id="line2" >
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
			<a href="login.php" id="login"><?php if(isset($_SESSION['username'])){echo "Logout";}else{echo "Login";}?></a>
		</div>
	</div>
	<div id="line4">
		<div id="line41"></div>
		<div id="line42"></div>
	</div>
	<div id="line5">
		<div id="line50">
			<img style="width: 980px;
	height: 480px;
	object-fit:cover;"src="img/ozkan.jpg">
			<div id="kara">
			</div>
			<div id="soz1">
				International Chemistry Olympiad (IChO): 3 gold, 1 bronze medals
			</div>
			<div id="sari">OLIMPIYAD</div>
		</div>
	</div>
	<div id="line6">
		<div id="nov1" class="l6">
			<img src="img/1.jpg">
			<div id="overlay1"><a href="#">Students of Taraz Bilim Innovation</a></div>
			<div id="new1">NEWS</div>
		</div>
		<div id="nov2" class="l6" >
			<img src="img/2.jpg">
			<div id="overlay2"><a href="#">
Prime Minister of Kazakhstan praised</a></div>
		<div id="new2">NEWS</div>	
		</div>
		<div id="nov3" class="l6">
			<img src="img/3.jpg">
			<div id="overlay3"><a href="#">Galaxy Mile</a></div>
			<div id="new3">NEWS</div>
		</div>
	</div>
	<div id="line7">
		<div id="nov11" class="l7">
			<img src="img/4.jpg">
			<div id="overlay11"><a href="#">
The Congress “ZHAS KOSHBASSHY – 2018”</a></div>
	<div id="new4">NEWS</div>
		</div>
		<div id="nov22" class="l7" >
			<img src="img/5.jpg">
			<div id="overlay22"><a href="#">“The Best Teacher” award in Astana</a></div>
			<div id="new5">NEWS</div>

		</div>
		<div id="nov33" class="l7">
			<img src="img/6.png">
			<div id="overlay33"><a href="#">CONGRATULATIONS!</a></div>
			<div id="new6">NEWS</div>
		</div>
	</div>
	
	<div id="why1"><p>Why choose us?</p></div>
	<div id="why2">
		<div id="birinwi">
			<img src="img/heart.png">
			<div>Friendly staff</div>
			<p>We love our children and they love to learn in our school</p>

		</div>
		<div id="ekinwi">
			<img src="img/book.png">
			<div>Focused on the best education</div>
			<p>The best education is the key to a better future</p>
		</div>
		<div id="uwinwi">
			<img src="img/language.png">
			<div>Education in three languages</div>
			<p>Education is conducted in<br> three languages: Kazakh, Russian and English</p>
		</div>
	</div>
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
