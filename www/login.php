<?php

session_start(); //Starta sessionen

if(@$_SESSION['loggedIn']){ //Kolla om man är inloggad
header('Location: index.php'); // Om man är inloggad skickas man till index.php
}

?>

<!DOCTYPE html>
<html>
<head>

	<link rel="Stylesheet" href="style.css" >

	<title>gachi-gasm-forsen.com/home</title>
</head>
<body>

<div id="random_box"></div>

<header>
	Forsen gachi-muchi fan-merch
</header>

<main>

<p>Welcome to a fan-made cancer site that supports the king of all plebs, Forsen (also known as: Sebastian Fors). For more information about our dad, please visit http://www.twitch.tv/forsenlol/. Enter the never-lucky give-away!: </p>

<div id="loginboxes">
	<form method="post" action="verification.php">
		<p>Email: </p><input type="Text" name="mail" required> <br />
		<p>Password: </p><input type="Password" name="password" required> <br />
		<input type="submit" name="submit" value="Login" id="bot">
	</form>
	<a href="register.php"><button>Register</button></a>
	</div>

<marquee id="MingLee" direction="up" width="1280" height="600" scrollamount="50" behavior="alternate">
  <marquee behavior="alternate">
<img src="https://yt3.ggpht.com/-8Xq3Hg_HbsE/AAAAAAAAAAI/AAAAAAAAAAA/PwM8Kv1Cg0c/s900-c-k-no/photo.jpg" width="240" height="240">
  </marquee>
</marquee>

<marquee id="Sanic" behavior="relative" direction="right" scrollamount="100">
<img src="https://www.nedgame.nl/gfx/sonic.png">
</marquee>

</main>

</body>
</html>