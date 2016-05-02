<?php
session_start(); // Starta sessionen ( Alltid överst)

	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','xhtksdlolen123');
	DEFINE('DB_DATABASE','secure_login');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);// Ger variabel $dbc som �r databasanslutningen.


if(isset($_POST['mail']) && isset($_POST['username']) && isset($_POST['password'])){
	//registera
	$query = "INSERT INTO members (username, email, password) VALUES ('".$_POST['username']."','".$_POST['mail']."', PASSWORD('".$_POST['password']."'));";
	mysqli_query($dbc,$query);
	$_SESSION['msg'] = "Register success!";
	header('Location: login.php'); 
	// Skickas till login.php
}
else if(isset($_POST['username']) && isset($_POST['password'])){
	//logga in
	$query = 'SELECT * FROM members WHERE password=PASSWORD("' . $_POST['password'] . '") AND username="'.$_POST['username'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
	$result = mysqli_query($dbc,$query); // St�ll fr�ga till databasen
	$row = mysqli_fetch_array($result); //H�mta den rad man f�r som svar (Om det finns n�gon)

	if($row){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
		$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
		$_SESSION['username'] = $row['username'];
		$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
		header('Location: index.php'); // Skickas till index.php
	}else{ // Om anv�ndarnamnen inte st�mmer �verens
		$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
		header('Location: login.php'); // Skickas till login.php
	}	
}





?>