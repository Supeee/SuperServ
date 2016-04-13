<?php
session_start(); // Starta sessionen ( Alltid överst)

if(!isset($_POST['Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Lösenord via formuläret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}

require_once('C:/wamp/SQL Files/connection/mysql_connect_db_webshop.php'); // Databasanslutning (ER SÖKVÄG)
// Ger variabel $dbc som �r databasanslutningen.
 
 
$query = 'SELECT Username, Password FROM Admins WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Username="'.$_POST['Name'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
$result = mysqli_query($dbc,$query); // St�ll fr�ga till databasen
$username = mysqli_fetch_array($result); //H�mta den rad man f�r som svar (Om det finns n�gon)

if($username['Username'] = $_POST['Name']){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: index.php'); // Skickas till index.php
}else{ // Om anv�ndarnamnen inte st�mmer �verens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: login.php'); // Skickas till login.php
}

?>