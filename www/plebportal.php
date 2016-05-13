<!DOCTYPE html>
<html>
<head>
	<title>The Plebshop</title>
	<link rel="Stylesheet" href="style.css">
</head>
<body>

<script>

	$cart = []; // tom lista
	
	function buyProduct(n,name){
		$length = $cart.length;
		
		$cart[$length] = [];    // lägg en tom lista i lisan (inception)    [ [10,"Kaluha"],[9,"Sleepy"],[3,"Fish"] ]
		
		
		$cart[$length][0] = n;    //[[x,0]]
		$cart[$length][1] = name; //[[0,x]]
		
		document.getElementById('cart').innerHTML = "";
		
		for($i=0;$i<$length+1;$i++){
			document.getElementById('cart').innerHTML += $cart[$i][1] + "<br>";
			
		}
	
	}
	</script>
	
	<div id="cart">
	
	</div>
	

	
<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
 	session_destroy(); // Avsluta sessionen
 	session_unset(); // Avsluta sessionen (gammalt sätt)
 	$meddelande = 'You were kicked due to inactivity '; // Meddelande till användare = Hej då
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Welcome, ';
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}

echo $meddelande; // Visa meddelande ( Hej = Inloggad | Hej då = Utloggad)
echo $_SESSION['username']; 

?>

<?php
	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','xhtksdlolen123');
	DEFINE('DB_DATABASE','secure_login');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$query = "SELECT * FROM products;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="product">
			
					<div class="productPitcure">
						<img src="IMAGES\SnusHoodie.png" />
					</div>
					
					<div class="productName">
						<p> '.$row['name'].' </p1>
					</div>
					
					';
					?>

					<div id="line1"></div>

					<?php
			echo'
					<div class="productDesc">
						<p> '.$row['description'].' </p1>
					</div>

					<div class="productPrice">
						<p> '.$row['price'].' $ |</p1>
					</div>
					';

					?>

					<div class="purchase" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
					<?php
						echo'

						<p> Purchase </p>
					</div>	
				</div>
			';	
	}
?>

</div>
</body>
</html>