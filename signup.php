<?php

?>

<html lang="en">
	<head>
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/homeNLevel.css"/>
		<link href="css/login.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div class = "login">
							<!-- this is the info that will pass to leaderboard-->
							<form action="index_up.php" method="post">
                                username: <input name="username" /><br><br>
								password: <input name="pwd" /><br><br>
								repeat pwd: <input name="repwd" /><br><br>
								<input type="submit" name="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="reset" />
							</form>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
	</body>
</html>
