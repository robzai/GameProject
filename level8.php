<?php
	session_start();
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT numoftools FROM rank WHERE userName LIKE '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$num = $row["numoftools"];	
?>
<html>
	<head>
		<title>Free Throw - level8</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/level1.css" rel="stylesheet" type="text/css" />
        <link href="css/hp.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="css/bootstrap/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
		<script src = "js/music.js"></script>
	</head>
	<body>
		<audio id="bgm" src="wonderful1.mp3"  loop="loop" autoplay></audio>  
		<div class = "container">
			<div class = "row">
				<div class="col-xs-4 visible-md visible-lg"></div>
				<div class="col-xs-4">
					<div class = "main">
						<div class = "timer" id = "timer">
							<div class="Countdown" id="time">
								<span id="m"></span><span class="bd">:</span><span id="s"></span>
							</div>
						</div>
						<div id="hp"></div>
						<!-- bin div ganna contain all different trashes here, and garbage pics can be dragged into these trashes -->
						<div class = "bin">
							<!-- glass bin -->
							<div style = "float: left">
								<img data-type = "glass" id="glassCan" class="can" draggable="false" src="pic/glassCan.png" ondragover="allowDrop(event)" ondrop="drop(event)" 
								height = "75" width ="80">
							</div>
							<!-- mixed bin -->			
							<div style = "float: left">
								<img data-type = "mixed" id="mixedCan" class="can" draggable="false" src="pic/mixed.png" ondragover="allowDrop(event)" 
									ondrop="drop(event)" height = "75" width ="80">
							</div>
						</div>
		
						<!-- main game part, players need to memorize all garbage pics below -->
						<div class = "game">
							<div id="canTouch">							
								<!-- garbage 1-->							
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/milk.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 2-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/milk.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>									
								<!-- garbage 3-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/milk.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 4-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/news.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<div class = "garbage"></div>
								<!-- garbage 5-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/cake.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img id ="back2" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>	
									
								<!-- garbage 6-->	
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/cake.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" 
													src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>
								</div>	
								<div class = "garbage"></div>								
								<div class = "garbage"></div>
								<!-- garbage 7-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/cake.png">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" 
												src = "pic/back.png">
											</div>
										</div>
									</div>																
								</div>


								<!-- garbage 8-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/cake.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" 
												src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>
								</div>
								<div class = "garbage"></div>								
								<!-- garbage 3-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/milk.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 4-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/news.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 3-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/milk.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 4-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img draggable="false" src="pic/news.png" height ="65" width="65">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png"  height ="65" width="65">
											</div>
										</div> 
									</div>								
								</div>
	
							</div><!-- end of touch-->
						</div><!-- end of game-->
						<div class = "footer">
							<!-- setting button-->
							<a  href="index.html"><img class = "setting" src="pic/end.png"></a>
							<!-- hints tool button-->
							<img class = "hints" src="pic/help.png">
						</div><!-- end of footer-->
					</div><!-- end of main -->
					<script src="js/showclosediv.js"></script>
					<script src="js/memorizetime.js"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
					<script src="js/jquery.drag-drop.plugin.js"></script>
					<script src="js/flip.js"></script>
					<script src="js/dragdrop.js"></script>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>	
		</div>
	</body>
</html> 