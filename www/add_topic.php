<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="style.css">

	<title>Forsen News</title>
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
  		<li id="selected"><a href="forum.php">Forum</a></li>
  		<li><a href="plebshop.php">Plebshop</a></li>
  		<li><a href="about.php">About</a></li>
  		<li><a href="Logout.php">Logout</a></li>
  		<li><a href="MingLee.php">Minglee</a></li>
  		<li><a href="Admin.php">Admin Login</a></li>
	</ul>
</div>

<p></p>
<?php
include 'logincheck.php';

?>

<?php

require '../Connection/db_connect.php';

$datetime=date("y-m-d h:i:s");

$query = "INSERT INTO forum_question (topic, detail, datetime, name) VALUES ('".$_POST['topic']."','".$_POST['detail']."', '".$datetime."', '".$_SESSION['username']."');";
mysqli_query($dbc,$query);
Echo'<p> <br />
You will be redirected in 5 seconds. 
Your topic was added to: !</p>
';

header('refresh:5; forum.php'); 
?>



</div>

<img id="Knackels" src="IMAGES/knackels.gif">

<div id="footer"></div>

</body>
</html>