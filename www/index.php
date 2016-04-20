<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
 	session_destroy(); // Avsluta sessionen
 	session_unset(); // Avsluta sessionen (gammalt sätt)
 	$meddelande = 'hej då'; // Meddelande till användare = Hej då
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'You are now logged in.'; // Meddeladne till användare = Hej
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}
 
echo $meddelande; // Visa meddelande ( Hej = Inloggad | Hej då = Utloggad)
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="style.css" >

	<title>gachi-gasm-forsen.com/home</title>
</head>
<body>

<a href="logout.php">Log out.</a>


<p>Welcome to a fan-made cancer site that supports the king of all plebs, Forsen (also known as: Sebastian Fors). For more information about our dad, please visit http://www.twitch.tv/forsenlol/. Enter the never-lucky give-away!: </p>

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

</body>
</html>