<?php
session_start();

require_once('../Connection/db_connect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
	$query = 'SELECT * FROM admin WHERE password=PASSWORD("' . $_POST['password'] . '") AND username="'.$_POST['username'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);	
	
	if($row){
		$_SESSION['loggedIn'] = TRUE;
		$_SESSION['username'] = $row['username'];
		$_SESSION['timeout'] = time(); 
		header('Location: Admin/Adminindex.php');
	}else{
		$_SESSION['loggedIn'] = FALSE;
		header('Location: fakuman.php');
	}	
}





?>