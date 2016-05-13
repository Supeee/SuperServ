<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="style.css">

	<title>Forsen News</title>
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
  		<li><a href="index.php">Home</a></li>
  		<li id="selected"><a href="newspage.php">News</a></li>
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

<p>Welcome to our very own news-page! Here the admins post the latest news about Forsen and his cancer adventures (including Salty Sunday episodes, brought to you by Tempostorm.com!)</p>

</div>

<img id="Knackels" src="IMAGES/knackels.gif">

</body>
</html>