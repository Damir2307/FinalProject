<!DOCTYPE html>
<?php session_start(); 
$nameErr = "";
$emailErr ="";
$name ="";
$email  = "";
 $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = t($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = t($_POST["email"]);
  }
   

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = t($_POST["comment"]);
  }
}
function t($d) {
  $d = trim($d);
  $d = stripslashes($d);
  $d = htmlspecialchars($d);
  return $data;
} ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/s1.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Comfortaa|Kanit&display=swap" rel="stylesheet">
	<script src="js/j1.js" defer></script>
	<script src="js/s.js" defer></script>
	<style type="text/css">.err{color: red;}</style>
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
			<div><a href="#">CONTACTS</a></div>
		</div>
		<div id="line32">
			<a href="#"><img src="img/youtube.png"></a>
			<a href="#"><img src="img/insta.png"></a>
			<a href="#"><img src="img/vk.png"></a>
			<a href="logout.php" id="login"><?php if(isset($_SESSION['username'])){echo "Logout";echo "<script>var a=document.getElementById('login');a.href='logout.php';</script>";}else{echo "Login";echo "<script>var a=document.getElementById('login');a.href='login.php';</script>";}?></a>
		</div>
	</div>
	<h2 id="tt">Contacts</h2>
	<div id="ll">Сүлейменов, 17 Тараз/Қазақстан</div>
	<div id="rr">
		<strong>Phone:</strong> +7 (7172) 42-79-36<br>
		<strong>Email:</strong> info@bil-edu.kz
	</div>
	<div id="karta">
	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SHnXwO9Og8Wcn-uDvKMmF1BujNZH_24L" width="380" height="240"></iframe></div>
	<div style="margin-left: 12%;">
	<h2>Comment</h2>
<form method="post" action="">  
  Name: <input type="text" name="name">
  <span class="err">* <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="text" name="email">
  <span class="err">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
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
