<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href="/style.css">

	<title>Forsen News</title>
</head>
<body>

<div id="page-wrap">

<div class="bannerImage">
	<img src="/IMAGES/TwistingNether.jpg">
</div>

<div id="container">
	<header>
		<h1>GachiGASM Forever</h1>
	</header>
	<div id="banner">
		<h2>Bring the cancer all the way home!</h2>
	</div>

</div>

<div class="nav">
	<ul>
  		<li><a href="/index.php">Home</a></li>
  		<li id="selected"><a href="/forum.php">Forum</a></li>
  		<li><a href="/plebshop.php">Plebshop</a></li>
  		<li><a href="/about.php">About</a></li>
  		<li><a href="/Logout.php">Logout</a></li>
  		<li><a href="/MingLee.php">Minglee</a></li>
	</ul>
</div>

<p></p>
<?php
include '../logincheck.php';

require '../../Connection/db_connect.php';
?>

<img id="KnackelsIndex" src="/IMAGES/knackels.gif">

<?php
	$query = "SELECT * FROM forum_question where id=".$_GET['topic'].";";
	$result = mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	?>

<div class="topicsIndex">
	<div id="page-wrap">
					<div class="topicNameIndex">
						<p> 
						<?php echo $row['topic'] ?>
						</p>
					</div>
					

					
					<div class="detailIndex">
						<p>
					<?php echo $row['detail'] ?> 
						</p>
					</div>

					<script type="text/javascript">
						var link;
						var element;
						function openPopUp(url)
						{
							link = url;
							element = document.getElementById("background");
							element.style.display = "block";
							element = document.getElementById("popup");
							element.style.display = "block";
						  
						}

						function closePopUp()
						{
							element = document.getElementById("popup");
							element.style.display = "none";
							element = document.getElementById("background");
							element.style.display = "none";
						}

						function leave() {
						  var myWindow = window.open("", "_self");
						  myWindow.document.write("");
						  setTimeout (function() {myWindow.close();},1);
						}

					</script>
					<div id="background" class="dimLayer"></div>

					<div id="popup" class="popUpDisplay">
					    <div class="popUpTitle">
					    	<p>Delete post</p>
					    	<span onClick="closePopUp()"><img alt="Close Popup" src="/IMAGES/close.png"/></span>
					    </div>
					    <div class="data">
							<ul class="buttons">
								<li><span class="button" onclick="window.open(link), leave()">Continue</span></li>
								<li><span class="button" id="Cancel" onClick="closePopUp()">Cancel</span></li>
							</ul>
					    </div>
					</div>

			        <div id="link">
					    <a href="javascript:openPopUp('/forum/removetopic.php?topic=<?php echo $row['id']; ?>')"><button>Delete</button></a>
				    </div>

					<div class="nameIndex">
						<p>
					<?php echo $row['name'] ?> 
						</p>
					</div>

					<div class="dateIndex">
						<p>
					<?php echo $row['datetime'] ?> 
						</p>
					</div>

					<div class="viewcounter">
						<?php

						// Gammal version som funkar fast det är samma view count för alla topics.

						/*

						$query = 'SELECT view FROM forum_question';
						$result = mysqli_query($dbc,$query);
						$row=mysqli_fetch_array($result);
						$view=$row['view'];
						
						if(empty($view)){
						$view=1;
						$query1="INSERT INTO forum_question(view) VALUES ('$view')";
						$result1 = mysqli_query($dbc,$query1);
						}
						echo $view;
						echo " views.";
						$addcounter=$view+1;
						$query2="update forum_question set view='$addcounter'";
						$result = mysqli_query($dbc,$query2);
						
						*/

						// Här funkar det EJ, pls fix jaok :C

						$query = "SELECT view FROM forum_question where id=".$_GET['view'].";";
						$result = mysqli_query($dbc,$query);
						$row=mysqli_fetch_array($result);
						$view=$row['view'];

						if(empty($view)){
						$view=1;
						$query1="INSERT INTO forum_question(view) VALUES ('$view')";
						$result1 = mysqli_query($dbc,$query1);
						}
						echo $view;
						echo " views.";
						$addcounter=$view+1;
						$query2="update forum_question set view='$addcounter'";
						$result = mysqli_query($dbc,$query2);

						?>
					</div>
	</div>
</div>	
<?php

	$query = "SELECT * FROM forum_answer WHERE question_id=".$_GET['topic'].";";
	$result = mysqli_query($dbc,$query);
	while($row=mysqli_fetch_array($result)){						
			?>
			
				<div class="topics">
					
					<div class="answerTopic">
						<p> 
						</p>
					</div>
					
				

					
					<a href="/forum/index.php?topic=<?php echo $row['id']; ?>"><div class="answerdetail">
						<p> 
						
						</p>
					</div></a>
				</div>
	<?php
	} // Avsluta while-loop
?>

</div>

<div id="footer"></div>

</body>
</html>