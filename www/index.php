<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="style.css">

	<title>gachi-gasm-forever.com/home</title>
</head>
<body>

<div id="page-wrap">

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
  		<li id="selected"><a href="index.php">Home</a></li>
  		<li><a href="newspage.php">News</a></li>
  		<li><a href="plebshop.php">Plebshop</a></li>
  		<li><a href="about.php">About</a></li>
  		<li><a href="Logout.php">Logout</a></li>
  		<li><a href="MingLee.php">Minglee</a></li>
	</ul>
</div>

<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
 	session_destroy(); // Avsluta sessionen
 	session_unset(); // Avsluta sessionen (gammalt sätt)
 	$meddelande = 'You were kicked due to inactivity '; // Meddelande till användare = Hej då
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'You are now logged in '; // Meddeladne till användare = Hej
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}
?>
<p></p>
<?php

echo $meddelande; // Visa meddelande ( Hej = Inloggad | Hej då = Utloggad)
echo $_SESSION['username']; 
?>

<p>Welcome to a fan-made cancer site that supports the king of all plebs, Forsen (also known as: Sebastian Fors). For more information about our dad, please visit http://www.twitch.tv/forsenlol/. Enter the never-lucky give-away!: </p>

<div><a id="cory" href="cory_secret_hideout.php">Cory's confinement, do not open.</a>
</div>
</div>
<marquee behavior="relative" direction="right" scrollamount="98">
<img id="Tails" src="http://nerdkeller.eu/wp-content/uploads/9489132_60x60.png.gif">
</marquee>

<marquee id="Sanic" behavior="relative" direction="right" scrollamount="100">
<img src="https://www.nedgame.nl/gfx/sonic.png">
</marquee>

</body>
</html>