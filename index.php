<html lang="en">
	<head>
		<title>Free Throw - Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/homeNLevel.css"/>
		<link href="css/level1.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<?php include("php/connectdb.php"); ?>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div id="bannerPosition">
							<img class="banner" src="pic/banner.png" alt="Free Throw banner">
							<br/>
							<br/>
							<br/>
							<a href="levelpage.html"><img class="bannerNButtons" src="pic/startbutton.png" alt="start"></a>
							<br/>
							<a href="tutorial.html"><img class="bannerNButtons" src="pic/howtoplaybutton.png" alt="howtoplay"></a>
							<?php 
							
								welcome back $_POST["username"];
							
							?>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
	</body>
</html>