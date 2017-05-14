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
			
					<div class="productPicture">
						<img src="IMAGES\wiiu.jpg" />
					</div>
					
					<div class="productName">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

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
			
				<div class="productSwitch">
			
					<div class="productPictureSwitch">
						<img src="IMAGES\switch.jpg" />
					</div>
					
					<div class="productNameSwtich">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<?php
			echo'
					<div class="productDescSwitch">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceSwitch">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseSwitch" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
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
			
				<div class="productSmash">
			
					<div class="productPictureSmash">
						<img src="IMAGES\smash.jpg" />
					</div>
					
					<div class="productNameSmash">
						<p> '.$row['name'].' </p>
					</div>
					
					';
					?>

					<?php
			echo'
					<div class="productDescSmash">
						<p> '.$row['description'].' </p>
					</div>

					<div class="productPriceSmash">
						<p> '.$row['price'].' $ |</p>
					</div>
					';

					?>

					<div class="purchaseSmash" onmousedown="buyProduct(<?php echo $row['id'];  ?>, '<?php echo $row['name']; ?>')">
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