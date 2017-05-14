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

	<title>Elgiganten</title>
</head>
<body>

<div id="page-wrap">

<header>
<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'] . '<br>';
		unset($_SESSION['msg']);
	}
?>
</header>

<div class="bannerImage">
	<img src="IMAGES/el.jpg">
</div>

<div id="container">
	<header>
		<h1>Elgiganten</h1>
	</header>
	<div id="banner">
		<h2>Mer än låga priser</h2>
	</div>

</div>

<div class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="leshop.php">Online-shop</a></li>
		<li><a href="about.php">About</a></li>
		<li id="selected"><a href="login.php">Login</a></li>
	</ul>
</div>


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

</body>
</html>