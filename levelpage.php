<?php
	//make sure the player is under login status.
	session_start();
	//connect to database
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT numoftools FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$num = $row["numoftools"];	
?>


<html lang="en">
	<head>
		<title>Choose Level</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		 <div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div>
						<map name="levels" id="levels">
							<!--Image map for 'level 1'. It starts Level 1 game-->
							<area shape="rect" coords="54,131,115,206"
								  href="level1.php"
								  alt="level 1" />
							<!--Image map for 'level 2'. It starts Level 2 game-->
							<area shape="rect" coords="136,131,195,206"
								  href="level2.php"
								  alt="level 2" />
							<!--Image map for 'level 3'. It starts Level 3 game-->
							<area shape="rect" coords="215,131,272,206"
								  href="level3.php"
								  alt="level 3" />
							<!--Image map for 'level 4'. It starts Level 4 game-->
							<area shape="rect" coords="54,212,114,289"
								  href="level4.php"
								  alt="level 4" />
							<!--Image map for 'level 5'. It starts Level 5 game-->
							<area shape="rect" coords="136,212,191,289"
								  href="level5.php"
								  alt="level 5" />
							<!--Image map for 'level 6'. It starts Level 6 game-->
							<area shape="rect" coords="215,212,272,289"
								  href="level6.php"
								  alt="level 6" />
							<!--Image map for 'level 7'. It starts Level 7 game-->
							<area shape="rect" coords="54,296,111,371"
								  href="level7.php"
								  alt="level 7" />
							<!--Image map for 'level 8'. It starts Level 8 game-->
							<area shape="rect" coords="136,295,193,371"
								  href="level8.php"
								  alt="level 8" />
							<!--Image map for 'level 9'. It starts Level 9 game-->
							<area shape="rect" coords="215,297,272,371"
								  href="level9.php"
								  alt="level 9" />
							<area shape="rect" coords="133,403,187,455"
								  href="index_in.php"
								  alt="home button" />								  
						</map>
						<div>
							<img src="css/pic/chooseLevelBG.png" usemap="#levels" alt="background"></a>
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>
	</body>
</html>