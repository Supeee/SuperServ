<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="/style.css">

	<title>Forsen News</title>
</head>
<body>

<div id="page-wrap">

<div class="bannerImage">
	<img src="/IMAGES/TwistingNether.jpg">
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
  		<li><a href="/index.php">Home</a></li>
  		<li id="selected"><a href="/forum.php">Forum</a></li>
  		<li><a href="/plebshop.php">Plebshop</a></li>
  		<li><a href="/about.php">About</a></li>
  		<li><a href="/Logout.php">Logout</a></li>
  		<li><a href="/MingLee.php">Minglee</a></li>
	</ul>
</div>

<p></p>
<?php
include '../logincheck.php';

?>

<?php

require '../../Connection/db_connect.php';
?>

<?php
	$query = "SELECT * FROM forum_question where id=".$_GET['topic'].";";
	$result = mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
?>

<?php

	echo $row['id'] 

?>

<?php
/*
 if (isset($_GET['id']) && is_numeric($_GET['id'])) {
		
    $id = $_GET['id'];
    
    $result = mysqli_query ("DELETE forum_question WHERE id = $id");
    $retval = mysqli_query($sql, $dbc);
    
    if(! $retval ) {
       die('Could not delete data: ' . mysqli_error());
    }
    
    echo "Deleted data successfully";
}
*/
/*
$query = "DELETE FROM forum_question WHERE id='".$_GET['id']."';";
$result = mysqli_query($dbc, $query);
*/

Echo'<p> <br />
You will be redirected in 5 seconds. 
Your topic has been deleted.</p>
'; 

?>

<img id="KnackelsIndex" src="/IMAGES/knackels.gif">

</div>

<div id="footer"></div>

</body>
</html>