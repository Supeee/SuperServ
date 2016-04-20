<?php
session_start(); // Starta sessionen ( Alltid överst)

require_once('../www/db_connect.php'); // Databasanslutning (ER SÖKVÄG)
// Ger variabel $dbc som �r databasanslutningen.

 
$query = 'SELECT * FROM members WHERE password=PASSWORD("' . $_POST['password'] . '") AND email="'.$_POST['mail'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
$result = mysqli_query($dbc,$query); // St�ll fr�ga till databasen
$row = mysqli_fetch_array($result); //H�mta den rad man f�r som svar (Om det finns n�gon)

if($row){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: index.php'); // Skickas till index.php
}else{ // Om anv�ndarnamnen inte st�mmer �verens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: login.php'); // Skickas till login.php
}

?>