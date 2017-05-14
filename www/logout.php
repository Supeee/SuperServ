<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="style.css">

	<title>Elgiganten</title>
</head>
<body>

<div id="page-wrap">

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
  		<li><a href="login.php">Login</a></li>
	</ul>
</div>

<p>You're now logged out.</p><div class="button1"> <a href="login.php">Login.</a></div>

</div>

</body>
</html>

</body>
</html>