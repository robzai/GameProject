<?php
	session_start();
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error()); 
	//new total score from this play time
	$total = $_POST["ttscore"];
	echo "$total";
	//select score record from datdabase
	$data = "SELECT score FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$r = mysqli_query($db,$data);
	$row = mysqli_fetch_assoc($r);
	//compare new score with record
	//if new score is higher update the record
	if ($total > $row['score']) {
		$com = "UPDATE rank SET score = $total WHERE userName LIKE '$_SESSION[username]'";
		mysqli_query($db, $com);
	}
	$sql = "SELECT * FROM rank ORDER BY score DESC";
	$result = mysqli_query($db,$sql);
?>
<html>
	<head>
		<title>Free Throw - LeaderBoard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/leaderboard.css" rel="stylesheet" type="text/css" />
		<link href="css/tutorial.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class ="main">
						<div class = "scoretable">
							<?php		
								echo "<table><tr><td></td><td class='title'>Name</td><td class='title'>Score</td></tr>";
								// output data of each row
								$i = 0;
								while($row = mysqli_fetch_assoc($result)) {
										if ($i == 0) {
											echo "<tr><td><img src= 'pic/leader/golden.png'></td><td class='first'>".$row['userName']."</td>";
											echo"<td class='first'>".$row['score']."</td></tr>";
											$i++;
										}else if ($i == 1) {
											echo "<tr><td><img src= 'pic/leader/silver.png'></td><td class='second'>".$row['userName']."</td>";
											echo"<td class='second'>".$row['score']."</td></tr>";
											$i++;
										}else if($i == 2) {
											echo "<tr><td><img src= 'pic/leader/cu.png'></td><td class='third'>".$row['userName']."</td>";
											echo"<td class='third'>".$row['score']."</td></tr>";
											$i++;
										} else if($i ==5) {
											break;
										} else {
											echo "<tr><td></td><td>".$row["userName"]."</td>";
											echo "<td>".$row["score"]."</td></tr>";
											$i++;
										}
								}
								echo "</table>";
							?>
					</div>
					
					<div id = "homeButton">
						<a href="homepage.php"><img src="pic/button/homeButton.png" alt="home button"></a>
					</div>
				</div>	
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>
	</body>
</html>