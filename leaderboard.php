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
						<div class = "rank">
							<img src = "pic/rank.png">
						</div>
						<div class = "scoretable">
							<?php
								$uri = "mongodb://rebecca:111111@ds036069.mlab.com:36069/game_project_db";
								$client = new MongoClient($uri);
								$db = $client->selectDB("game_project_db")->grades;
			
								$document = array( 
									"player" => $_POST["username"], 
									"score" => (int)$_POST["ttscore"]
								);
								$db->insert($document);
								// -1 is DESC; 1 is asc
								$sort = array('score' => -1);
								// how many results you whant to show
								$top = $db->find(array(), array('_id' => false))->sort($sort)->limit(5);
								
								echo "<table><tr><td></td><td class='title'>Name</td><td class='title'>Score</td></tr>";
								// output data of each row
								$i = 0;
								foreach ($top as $doc){
									if ($i == 0) {
										echo "<tr><td><img src= 'pic/leader/golden.png'></td><td class='first'>".$doc['player']."</td><td class='first'>".$doc['score']."</td></tr>";
										$i++;
									}else if ($i == 1) {
										echo "<tr><td><img src= 'pic/leader/silver.png'></td><td class='second'>".$doc['player']."</td><td class='second'>".$doc['score']."</td></tr>";
										$i++;
									}else if($i == 2) {
										echo "<tr><td><img src= 'pic/leader/cu.png'></td><td class='third'>".$doc['player']."</td><td class='third'>".$doc['score']."</td></tr>";
										$i++;
									} else {
										echo "<tr><td></td><td>".$doc['player']."</td><td>".$doc['score']."</td></tr>";
										$i++;
									}
								}
								echo "</table>";
					?>
					</div>
				</div>	
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>
	</body>
</html>