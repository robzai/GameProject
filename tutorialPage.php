<?php
	//make sure the player is under login status.
	session_start();
	//connect to database
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT numoftools FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$num = $row["numoftools"];	
?>

<html>
	<head>
		<title>Free Throw - Tutorial Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/tutorial.css">
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div id="gallery">
						<ul id="thumbnails">
							<li><a href="#pic1"><img src="pic/tutorial/tutorial1.png" alt="pic1" /></a></li>
							<li><a href="#pic2"><img src="pic/tutorial/tutorial2.png" alt="pic2" /></a></li>
							<li><a href="#pic3"><img src="pic/tutorial/tutorial3.png" alt="pic3" /></a></li>
							<li><a href="#pic4"><img src="pic/tutorial/tutorial4.png" alt="pic4" /></a></li>
							<li class="close"><a href="homepage.php"><img src="pic/button/homeButton.png" alt="home button" /></a></li>
						</ul>
						<div id="fullsize">
							<div id="pic1"><img src="pic/tutorial/tutorial1.png" alt="pic1" /></div>
							<div id="pic2"><img src="pic/tutorial/tutorial2.png" alt="pic2" /></div>
							<div id="pic3"><img src="pic/tutorial/tutorial3.png" alt="pic3" /></div>
							<div id="pic4"><img src="pic/tutorial/tutorial4.png" alt="pic4" /></div>
							<div id="close"></div>
						</div>
					</div>
				</div>	
			    <div class="col-xs-4 visible-md visible-lg"></div>
		    </div>
	    </div>
	</body>



</html>