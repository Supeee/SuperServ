<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Forum</title>
</head>
<body>

<div id="page-wrap">
	
<div class="bannerImage">
	<img src="IMAGES/el.jpg">
</div>

<div id="container">
	<h1>Elgiganten</h1>
	<div id="banner">
		<h2>Mer än låga priser</h2>
	</div>
</div>

<div class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li id="selected"><a href="forum.php">Forum</a></li>
		<li><a href="leshop.php">Online-shop</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="Logout.php">Logout</a></li>
	</ul>
</div>

<p></p>

<?php
include 'logincheck.php';

?>

<?php

require '../Connection/db_connect.php'

$datetime=date("y-m-d h:i:s");

$query = "INSERT INTO forum_question (topic, detail, datetime, name) VALUES ('".$_POST['topic']."','".$_POST['detail']."','".$datetime."','".$_SESSION['username']."');";
mysqli_query($dbc,$query);
Echo'<p> <br />
You will be redirected in 5 seconds...
Your topic was added to: !</p>
';

header('refresh:5; forum.php');
?>
</div>

<div id="footer"></div>

</body>
</html>