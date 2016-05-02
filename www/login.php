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
<div class="nav">
	<ul>
  		<li><a href="index.php">Home</a></li>
  		<li><a href="news.php">News</a></li>
  		<li><a href="plebshop.php">Plebshop</a></li>
  		<li><a href="about.php">About</a></li>
  		<li><a href="login.php">Login</a></li>
  		<li><a href="MingLee.php">Minglee</a></li>
	</ul>
</div>

<script>
    paypal.minicart.reset();
</script>

<div id="random_box"></div>

<header>
<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'] . '<br>';
		unset($_SESSION['msg']);
	}
?>
	Forsen gachi-muchi fan-merch!
</header>

<main>

<p>Welcome to a fan-made cancer site that supports the king of all plebs, Forsen (also known as: Sebastian Fors). For more information about our dad, please visit http://www.twitch.tv/forsenlol/. Enter the never-lucky give-away!: </p>

<div id="loginboxes">
	<form method="post" action="verification.php">
		<p>Username: </p><input type="Text" name="username" required> <br />
		<p>Password: </p><input type="Password" name="password" required> <br />
		<input type="submit" name="submit" value="Login" id="bot">
	</form>

	<p>Or, register here:</p>

	<a href="register.php"><button>Register</button></a>
	</div>

<marquee id="Sanic" behavior="relative" direction="right" scrollamount="100">
<img src="https://www.nedgame.nl/gfx/sonic.png">
</marquee>

</main>

</body>
</html>