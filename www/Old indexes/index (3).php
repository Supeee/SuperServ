<?php include("auth.php"); require_once('../mysql_connect_SuperServ.php'); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Forsen login page</title>
</head>
<body>

<div id="forsenbox">
	<form method="post" action="verification.php">
		<p>Email: </p><input type="Text" name="mail" required> <br />
		<p>Password: </p><input type="Password" name="Password" required> <br />
		<input type="submit" name="submit" value="login" id="bot">
	</form>
	<a href="register.php"><button>Register</button></a>
	</div>

<div class="form">
	<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
	<p>This is secure area.</p>
	<p><a href="dashboard.php">Dashboard</a></p>
	<a href="logout.php">Logout</a>
</div>

</body>
</html>