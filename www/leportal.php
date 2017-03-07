<!DOCTYPE html>
<html>
<head>
	<title>Online-shoppen</title>
	<link rel="Stylesheet" href="style.css">
</head>
<body>
	
<?php
include 'logincheck.php';
include '../Connection/db_connect.php';
?>

<div class="back"><a href="index.php">Tillbaka</a>
</div>

<div id="LeftLine">
	
</div>

<?php
	$query = "SELECT * FROM products where id=1;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="product">
			
					<div class="productPicture">
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

<?php
	$query = "SELECT * FROM products where id=3;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="productTrump">
			
					<div class="productPictureTrump">
						<img src="IMAGES\tuckfrump.jpg" />
					</div>
					
					<div class="productNameTrump">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="lineTrump"></div>

					<?php
			echo'
					<div class="productDescTrump">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceTrump">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseTrump" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
					<?php
						echo'

						<p> Purchase </p>
					</div>	
				</div>
			';	
	}
?>

<?php
	$query = "SELECT * FROM products where id=4;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="productGASM">
			
					<div class="productPictureGASM">
						<img src="IMAGES\GachiGASM.jpg" />
					</div>
					
					<div class="productNameGASM">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="lineGASM"></div>

					<?php
			echo'
					<div class="productDescGASM">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceGASM">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseGASM" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
					<?php
						echo'

						<p> Purchase </p>
					</div>	
				</div>
			';	
	}
?>

<?php
	$query = "SELECT * FROM products where id=5;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="productFrank">
			
					<div class="productPictureFrank">
						<img src="IMAGES\b0ss.png" />
					</div>
					
					<div class="productNameFrank">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="lineFrank"></div>

					<?php
			echo'
					<div class="productDescFrank">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceFrank">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseFrank" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
					<?php
						echo'

						<p> Purchase </p>
					</div>	
				</div>
			';	
	}
?>

<?php
	$query = "SELECT * FROM products where id=6;";
	$result = mysqli_query($dbc,$query);
	
	while($row=mysqli_fetch_array($result)){			
			
			echo'
			
				<div class="productReynoodle">
			
					<div class="productPictureReynoodle">
						<img src="IMAGES\reynoodle.jpg" />
					</div>
					
					<div class="productNameReynoodle">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<div id="lineReynoodle"></div>

					<?php
			echo'
					<div class="productDescReynoodle">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceReynoodle">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseReynoodle" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
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