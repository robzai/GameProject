<?php
	session_start();
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT numoftools FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$num = $row["numoftools"];	
?>
<html lang="en">
	<head>
		<title>Success</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/pass.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "successmain">
						<div class = "score">
							<form name="upscore" action="leaderboard.php" method="post">
								<input type="hidden" name="ttscore" id="ttscore"/>
							</form>
							<div id = "scoreDisplay"></div>
							<div class = "home1">
								<a href ="homepage.php"><img src = "pic/button/homeButton.png"></a>
							</div>
							<div class = "next1">
								<img src="pic/button/rankButton.png" onclick="upscore.submit()"> 
							</div>
						</div>
					</div>	
				</div>
                <div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>				
		<script src="js/fial_successPageOnload.js"></script>
	</body>
</html>