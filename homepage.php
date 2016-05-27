<?php 
	//make sure the player is under login status.
	session_start();
	//if there is no login player set.
	if(!isset($_SESSION['username'])) {
		//connect to database
		$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
		//select the password from database where the user name equals to the player input
		$sql = "SELECT pwd FROM rank WHERE userName LIKE '$_POST[username]'";
		//do the select execution
		$result = mysqli_query($db,$sql);
		//get the number of result
		$num = mysqli_num_rows($result);
		//if there is no result
		if ($num <= 0) {
			//tell the player to sign up first, and then navigate to sign up page
			echo "You need to sign up first!";		
			echo "<script>setTimeout('window.location=\'signup.php\';', 3000)</script>";
			die();
		}
    //while there are results 
	while($row = mysqli_fetch_assoc($result)){
		//seperate the result by key and value. key means the title
		foreach($row as $key=>$value){
			//if the record and player input match
			if (strcmp($value,$_POST['pwd']) == 0) {
				//set the session username and password
				$_SESSION['username']=$_POST['username'];
				$_SESSION['pwd']=$_POST['pwd'];
			} else {
				//if doesn't match, show the error message and navigate to login page again
				echo "please check your username and password again!";
				echo "<script>setTimeout('window.location=\'login.php\';', 3000)</script>";
				die();
			}	
		}
	}
	}
?>
<html lang="en">
	<head>
		<title>Free Throw - Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/index.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<marquee direction="left" scrollamount="7">
							<img src='pic/header/rollone.png'/>
						</marquee>
						<marquee direction="right" scrollamount="7">
							<img src='pic/header/rolltwo.png'>
						</marquee>
						<div class = "start"> 
							<a href = "levelpage.php"> <img src = "pic/button/start.png"> </a>
						</div>
						<div class = "tutorial">
							<a href = "tutorialPage.php"> <img src = "pic/button/tutorial.png"> </a>
						</div>
						<div class = "archi">
							<a href = "reward.php"> <img src = "pic/button/archi.png"> </a>
						</div>	
						<div class = "logout">
							<a href="logout.php">logout</a>	
						</div>
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
	</body>
</html>