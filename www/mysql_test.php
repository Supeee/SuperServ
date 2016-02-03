<?php

	require_once('../mysql_connect_prov20160201.php');
	// Ger variabeln $dbc som är anslutningen till databasen.
	
	$query = 'SELECT * FROM Cities ORDER BY Population DESC;';
	
	$result = mysqli_query($dbc, $query);
	
	echo '<table border="solid">';
	while($row = mysqli_fetch_array($result)){
		
	echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td></tr>';

		
		
	}
	echo '</table>';
	




?>