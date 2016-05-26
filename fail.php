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
		<title>Fail</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/homeNLevel.css"/>
		<link href="css/fail.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div class = "score">
							<form name="upscore" action="leaderboard.php" method="post">
								<input type="hidden" name="ttscore" id="ttscore"/>
							</form>
							<div id = "scoreDisplay"></div>
							<div class = "home">
								<a href ="#"><img src = "pic/button/chooseLevelButton.png"></a>
							</div>
							<div class = "next">
								<img src="pic/button/rankButton.png" onclick="upscore.submit()"> 
							</div>
							
							
							<!-- this is the info that will pass to leaderboard-->

						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
		<script src="js/fial_successPageOnload.js"></script>
	</body>
</html>