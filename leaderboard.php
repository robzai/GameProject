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
								$uri = "mongodb://rebecca:111111@ds036069.mlab.com:36069/game_project_db";
								$client = new MongoClient($uri);
								$db = $client->selectDB("game_project_db")->grades;
								$document = array( 
									"player" => "$_POST[username]", 
									"score" => $_POST['mark']
								);
								$db->insert($document);
								// -1 is DESC; 1 is asc
								$sort = array('score' => -1);
								// how many results you whant to show
								$top = $db->find(array(), array('_id' => false))->sort($sort)->limit(3);
								
								echo "<table><tr><th>ID</th><th>Name</th></tr>";
			// output data of each row
    foreach($top as $doc) {
        echo "<tr><td>".$doc['player']]."</td><td>".$doc['score']."</td></tr>";
    }
    echo "</table>";
								


		/*		while($row = mysql_fetch_array($result)) {
								echo "<tr>";
								echo "<td><img src= "pic/leader/golden.png"></td>"
								echo "<td class="first">" Rebecca</td>
									<td class="first">Rebecca</td>
								</tr>
								<tr>
									<td><img src= "pic/leader/silver.png"></td>
									<td class="second">Rebecca</td>
									<td class="second">Rebecca</td>
								</tr>
								<tr>
									<td><img src= "pic/leader/cu.png"></td>
									<td class="third">Rebecca</td>
									<td class="third">Rebecca</td>
								</tr>
								<tr>
									<td></td>
									<td>444</td>
									<td>rrrr</td>
								</tr>
								<tr>
									<td></td>
									<td>444</td>
									<td>rrrr</td>
								</tr>
							</div>
						<div class = "frame"></div>
					</table>*/
					?>
					</div>
				</div>	
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>
	</body>
</html>