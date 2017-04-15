<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

<div id="page-wrap">
	
<div class="bannerImage">
	<img src="IMAGES/el.jpg">
</div>

<div id="container">
	<h1>Elgiganten</h1>
	<div id="banner">
		<h2>Mer än låga priser</h2>
	</div>
</div>

	<div class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li id="selected"><a href="forum.php">Forum</a></li>
			<li><a href="leshop.php">Online-shop</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="Logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="bg-wrap">
		
		<p></p>
		<div id="checkers">
			<?php
			include 'logincheck.php';
			?>
		</div>

		<div class="ptags">
			<p>Välkommen till Elgigantens forum, här får du svar om produkter och köp, från vår support.</p>
		</div>

		<div class="add_question">
			
			<table width="500" border="10" align="center">
				<tr>
				<form id="form1" name="form1" method="post" action="add_topic.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="black">
					
					<tr>
						<td colspan="3" bgcolor="black"><strong>Create New Topic</strong> </td>
					</tr>
					
					<tr>
						<td width="14%"><strong>Topic</strong></td>
						<td width="2%">:</td>
						<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
					</tr>

					<tr>
						<td valign="top"><strong>Detail</strong></td>
						<td valign="top">:</td>
						<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
					</tr>
					
					</table>
					</td>
				</form>
				</tr>
			</table>
		</div>

		<div class="aline">
			<h5>Topics</h5>
		</div>


		<?php
		include '../Connection/db_connect.php'
		?>

		<?php
			$query = "SELECT * FROM forum_question;";
			$result = mysqli_query($dbc,$query);
			while($row=mysqli_fetch_array($result)){			
		?>
						<a href="/forum/index.php?topic=<?php echo $row['id']; ?>">
						<div class="topics">
						
							<div class="topicName">
								<p> 
								<?php echo $row['topic'] ?>
								</p>
							</div>
							
						

							<div class="detail">
								<p> 
								<?php echo substr($row['detail'],0,60);
								if(strlen($row['detail']) >= 60){
									echo "..."; 
									}
									?> 
								</p>
							</div>
						</div>
						</a>
			<?php
			} // Avsluta while-loop
		?>
	</div>

</div>
</body>
</html>