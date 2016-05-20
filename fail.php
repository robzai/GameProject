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
							<div id = "scoreDisplay"></div>
							<!-- this is the info that will pass to leaderboard-->
							<form action="leaderboard.php" method="post">
								<input type="hidden" name="ttscore" id="ttscore"/>
                                    Enter your name:<br>
								<input  style="width:100px" name="username" /><br>
								<input type="submit" />
							</form>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
		<script src="js/totalScore.js"></script>
	</body>
</html>