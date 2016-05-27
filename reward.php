<?php
	//make sure the player is under login status
	session_start();
	//connect to the database
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	//get the player's info from database
	$sql = "SELECT * FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	//set the total as the highest mark user has 
	$total = $row["score"];
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
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div class = "displayscore">
							//show the player's highest score
							<?php echo "Highest Score: ".$total ?>
						</div>
						<div class = "medal">
							<?php 
								//show different pics under different conditions
								if ( $total > 500) {
									echo "<img class = '1sttool' src='pic/medal/cu.png' alt='item button'>";								
								} else {
									echo "<img class = '1sttool' src='pic/medal/cu_black.png' alt='item button'>";								
								}
								if ( $total > 2000 ) {
									echo "<img  class = '1sttool' src='pic/medal/silver.png' alt='item button'>";			
								} else {
									echo "<img  class = '1sttool' src='pic/medal/silver_black.png' alt='item button' onclick = ''>";								
								}
								if ( $total > 6000 ) {
									echo "	<img  class = '1sttool' src='pic/medal/golden.png' alt='item button'>";	
								} else {
									echo "	<img  class = '1sttool' src='pic/medal/golden_black.png' alt='item button' onclick = ''>";						
								}
							?>	
						</div>
						<div id = "homeButton">
							<a href="homepage.php"><img src="pic/button/homeButton.png" alt="home button"></a>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>

			</div>
		</div>	
	</body>
</html>