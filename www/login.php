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

	<title>gachi-gasm-forever.com/home</title>
</head>
<body>

<div id="page-wrap">

<div class="bannerImage">
	<img src="IMAGES/TwistingNether.jpg">
</div>

<div id="container">
	<header>
		<h1>GachiGASM Forever</h1>
	</header>
	<div id="banner">
		<h2>Bring the cancer all the way home!</h2>
	</div>

</div>

<div class="nav">
	<ul>
  		<li><a href="index.php">Home</a></li>
  		<li><a href="forum.php">Forum</a></li>
  		<li><a href="plebshop.php">Plebshop</a></li>
  		<li><a href="about.php">About</a></li>
  		<li id="selected"><a href="login.php">Login</a></li>
  		<li><a href="MingLee.php">Minglee</a></li>
	</ul>
</div>

<header>
<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'] . '<br>';
		unset($_SESSION['msg']);
	}
?>
</header>

<p>Welcome to a fan-made cancer site that supports the king of all plebs, Forsen (also known as: Sebastian Fors). For more information about our dad, please visit http://www.twitch.tv/forsenlol/. Enter the never-lucky give-away!: </p>

<div class="loginboxes">
	<form method="post" action="verification.php">
		<label for="username" id="user">Username: </label><input type="Text" name="username" required placeholder="Username" class="input-txt"> <br />
		<label for="password" id="pass">Password: </label><input type="Password" name="password" required placeholder="Password" class="input-txt"> <br />
		<input type="submit" name="submit" value="Login" id="bot">
	</form>

	<p>Or, register here:</p>

	<a href="register.php"><button id="button">Register</button></a>
</div>
</div>
<marquee id="Sanic" behavior="relative" direction="right" scrollamount="100">
<img src="https://www.nedgame.nl/gfx/sonic.png">
</marquee>


</body>
</html>