<?php
session_start();

	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','xhtksdlolen123');
	DEFINE('DB_DATABASE','secure_login');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);


if(isset($_POST['mail']) && isset($_POST['username']) && isset($_POST['password'])){
	$query = "INSERT INTO members (username, email, password) VALUES ('".$_POST['username']."','".$_POST['mail']."', PASSWORD('".$_POST['password']."'));";
	mysqli_query($dbc,$query);
	$_SESSION['msg'] = "Register success!";
	header('Location: login.php'); 
}
else if(isset($_POST['username']) && isset($_POST['password'])){
	$query = 'SELECT * FROM members WHERE password=PASSWORD("' . $_POST['password'] . '") AND username="'.$_POST['username'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);

	if($row){
		$_SESSION['loggedIn'] = TRUE;
		$_SESSION['username'] = $row['username'];
		$_SESSION['timeout'] = time(); 
		header('Location: index.php');
	}else{
		$_SESSION['loggedIn'] = FALSE;
		header('Location: fakuman.php');
	}	
}





?>