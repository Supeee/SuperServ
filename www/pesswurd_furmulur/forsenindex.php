<?php

if(!isset($_POST['Pleb'])){
	die(
		header('Location: /form.php')
		);
}

require_once('../../mysql_connect_SuperServ.php');
// ger variabel $dbc
 
 
 $query = 'INSERT INTO pleblist(Pleb,Mailerino,shortbeskr,beskr,rating) 
VALUES("'
. $_POST['Pleb'] .'","'
. $_POST['Mailerino'] . '","'
. $_POST['shortbeskr'] .'","'
. $_POST['beskr'] .'","'
. $_POST['rating'].'");';
mysqli_query($dbc,$query);