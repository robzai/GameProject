<?php
	session_start();
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
							<li><a href="#pic1"><img src="pic/tutorial/tutorial1.png" alt="tutorial1" /></a></li>
							<li><a href="#pic2"><img src="pic/tutorial/tutorial2.png" alt="tutorial2" /></a></li>
							<li><a href="#pic3"><img src="pic/tutorial/tutorial3.png" alt="tutorial3" /></a></li>
							<li><a href="#pic4"><img src="pic/tutorial/tutorial4.png" alt="tutorial4" /></a></li>
							<li><a href="#pic5"><img src="pic/tutorial/tutorial5.png" alt="tutorial5" /></a></li>
							<li><a href="#pic6"><img src="pic/tutorial/tutorial6.png" alt="tutorial6" /></a></li>
							<li><a href="#pic7"><img src="pic/tutorial/tutorial7.png" alt="tutorial7" /></a></li>
							<li><a href="#pic8"><img src="pic/tutorial/tutorial8.png" alt="tutorial8" /></a></li>
							<li><a href="#pic9"><img src="pic/tutorial/tutorial9.png" alt="tutorial9" /></a></li>
							<li><a href="#pic10"><img src="pic/tutorial/tutorial10.png" alt="tutorial10" /></a></li>
							<li class="close"><a href="homepage.php"><img src="pic/button/homeButton.png" alt="home button" /></a></li>
						</ul>
						<div id="fullsize">
							<div id="pic1"><img src="pic/tutorial/tutorial1.png" alt="tutorial1" /></div>
							<div id="pic2"><img src="pic/tutorial/tutorial2.png" alt="tutorial2" /></div>
							<div id="pic3"><img src="pic/tutorial/tutorial3.png" alt="tutorial3" /></div>
							<div id="pic4"><img src="pic/tutorial/tutorial4.png" alt="tutorial4" /></div>
							<div id="pic5"><img src="pic/tutorial/tutorial5.png" alt="tutorial5" /></div>
							<div id="pic6"><img src="pic/tutorial/tutorial6.png" alt="tutorial6" /></div>
							<div id="pic7"><img src="pic/tutorial/tutorial7.png" alt="tutorial7" /></div>
							<div id="pic8"><img src="pic/tutorial/tutorial8.png" alt="tutorial8" /></div>
							<div id="pic9"><img src="pic/tutorial/tutorial9.png" alt="tutorial9" /></div>
							<div id="pic10"><img src="pic/tutorial/tutorial10.png" alt="tutorial10" /></div>
							<div id="close"></div>
						</div>
					</div>
				</div>	
			    <div class="col-xs-4 visible-md visible-lg"></div>
		    </div>
	    </div>
	</body>



</html>