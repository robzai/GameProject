<?php
	//if the confirm password is different from your first input password
	if($_POST['pwd'] != $_POST['repwd']) {
		//shwo error message and navigate to sign up page
		echo "your passwords don't match";		
		echo "<script>setTimeout('window.location=\'signup.php\';', 3000)</script>";
		die();
	} else {
		//if match, insert new player's info into database
		$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
		$sql = "INSERT INTO rank VALUES ('$_POST[username]','$_POST[pwd]',0,0,0,0,0)";
		mysqli_query($db,$sql);	
	}
?>
<html lang="en">
	<head>
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/login.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div class = "header">
							<img src = "pic/header/login.png">
						</div>
						<div class = "login">
							<!-- this is the info that will pass to leaderboard-->
							<form action="homepage.php" method="post">
                                username: <input name="username" /><br><br>
								password: <input name="pwd" /><br><br>
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
