<!DOCTYPE html>
<html>
<head>
	<title>The Plebshop</title>
	<link rel="Stylesheet" href="style.css">
</head>
<body>
	
<?php
include 'logincheck.php';
include '../Connection/db_connect.php'
?>

<div class="back"><a href="index.php">Back</a>
</div>

<div id="LeftLine">
	
</div>

<?php
	$query = "SELECT * FROM products where id=1;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="product">
			
					<div class="productPitcure">
						<img src="IMAGES\SnusHoodie.png" />
					</div>
					
					<div class="productName">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="line1"></div>

					<?php
			echo'
					<div class="productDesc">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPrice">
						<p> '.$row['price'].' $ |</p>
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

<div id="MiddleLine">
	
</div>

<?php
	$query = "SELECT * FROM products where id=2;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
	
			echo'
			
				<div class="productThug">
			
					<div class="productPictureThug">
						<img src="IMAGES\forsenshirtThug.jpg" />
					</div>
					
					<div class="productNameThug">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="lineThug"></div>

					<?php
			echo'
					<div class="productDescThug">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceThug">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseThug" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
					<?php
						echo'

						<p> Purchase </p>
					</div>	
				</div>
			';	
	}
?>

<div id="RightLine"></div>

</div>
</body>
</html>