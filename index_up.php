<?php
	session_start();
	if($_POST['pwd'] != $_POST['repwd']) {
		echo "your passwords don't match";
		header("Location: signup.php");
	} else {
		$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
		$sql = "INSERT INTO rank VALUES ('$_POST[username]','$_POST[pwd]',0,0)";
		mysqli_query($db,$sql);
		$_SESSION['username']=$_POST['username'];
		$_SESSION['pwd']=$_POST['pwd'];		
	}
?>
<html lang="en">
	<head>
		<title>Free Throw - Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/homeNLevel.css"/>
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
							<a href = "level1.php"> <img src = "pic/button/start.png"> </a>
						</div>
						<div class = "tutorial">
							<a href = "signup.php"> <img src = "pic/button/tutorial.png"> </a>
						</div>
						<div class = "archi">
							<a href = "#"> <img src = "pic/button/archi.png"> </a>
						</div>					
					</div>	
				</div>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>
		</div>	
	</body>
</html>