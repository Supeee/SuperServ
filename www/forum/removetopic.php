<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="/style.css">

	<title>Nyheter</title>
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
  		<li><a href="/index.php">Home</a></li>
  		<li id="selected"><a href="/forum.php">Forum</a></li>
  		<li><a href="/leshop.php">Online-shop</a></li>
  		<li><a href="/about.php">About</a></li>
  		<li><a href="/Logout.php">Logout</a></li>
	</ul>
</div>

<p></p>
<?php
include '../logincheck.php';
require '../../Connection/db_connect.php';
?>

<?php
	$query = "DELETE FROM forum_question where id=".$_GET['topic'].";";
	$result = mysqli_query($dbc,$query);

Echo'<p> <br />
You will be redirected in 5 seconds. 
Your topic has been deleted.</p>
'; 

header('refresh:5; ../forum.php');

?>

</div>

<div id="footer"></div>

</body>
</html>