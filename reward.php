<?php
	session_start();
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT * FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$total = $row["score"];
	$cu = $row["1sttool"];	
	$silver = $row["2ndtool"];	
	$golden = $row["3rdtool"];	
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
							<?php echo "Highest Score: ".$total ?>
						</div>
						<div class = "first">
							<?php 
								if ( $total > 500) {
									echo "<div id = '1sttool'>";
									echo "<img src='pic/button/getitem.png' alt='item button'>";
									echo "</div>";									
								} else {
									echo "<div id = '1sttool'>";
									echo "<img src='pic/button/canfetitem.png' alt='item button'>";
									echo "</div>";								
								}
							?>
						</div>
						<div class = "second">
							<?php 
								if ( $total > 2000 ) {
									echo "<div id = '1sttool'>";
									echo "<img src='pic/button/getitem.png' alt='item button'>";								
									echo "</div>";
								} else {
									echo "<div id = '1sttool'>";
									echo "<img src='pic/button/canfetitem.png' alt='item button' onclick = ''>";
									echo "</div>";								
								}
							?>
						</div>
						<div class = "second">
							<?php 
								if ( $total > 4000 ) {
									echo "<div id = '1sttool'>";
									echo "	<img src='pic/button/getitem.png' alt='item button'>";
									echo "</div>";	
								} else {
									echo "<div id = '1sttool'>";
									echo "	<img src='pic/button/canfetitem.png' alt='item button' onclick = ''>";
									echo "</div>";							
								}
							?>	
						</div>
						<div id = "homeButton">
							<a href="index_in.php"><img src="pic/button/homeButton.png" alt="home button"></a>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>

			</div>
		</div>	
	</body>
</html>