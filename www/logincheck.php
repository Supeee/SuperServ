<?php
session_start();

if(!@$_SESSION['loggedIn']){
	header('Location: login.php');
}

if(@$_SESSION['timeout']+ 60*10 < time()){
 	session_destroy();
 	session_unset();
 	$meddelande = 'You were kicked due to inactivity ';
}else{
	$meddelande = 'You are now logged in ';
	$_SESSION['timeout'] = time();
}

echo $meddelande;
echo $_SESSION['username'];
?>