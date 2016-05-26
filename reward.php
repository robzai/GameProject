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
		<title>Free Throw - Reward</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/reward.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>	
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4">
					<div class = "main">
						<div class = "first">
							<img src="pic/button/cangetitem.png" alt="item button">
						</div>
						<div class = "second">
							<img src="pic/button/cangetitem.png" alt="item button">
						</div>
						<div class = "second">
							<img src="pic/button/cangetitem.png" alt="item button">
						</div>
						
						<div id = "homeButton">
							<a href="index_in.php"><img src="pic/button/home.png" alt="item button"></a>
						</div>
					</div>	
				</div>
			</div>
		</div>	
	</body>
</html>