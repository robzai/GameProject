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
<html>
	<head>
		<title>Free Throw - level9</title>
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
		<div data-level = "9" id="level" class = "container">
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
							<div style = "float: left">
								<img data-type="" id="can1" class="can" draggable="false" src="" ondragover="allowDrop(event)" ondrop="drop(event)" 
								height = "75" width ="75">
							</div>		
							<div style = "float: left">
								<img data-type="" id="can2" class="can" draggable="false" src="" ondragover="allowDrop(event)" 
								ondrop="drop(event)" height = "75" width ="75">
							</div>
							<div style = "float: left">
								<img data-type="" id="can3" class="can" draggable="false" src="" ondragover="allowDrop(event)" ondrop="drop(event)" 
								height = "75" width ="75">
							</div>		
							<div style = "float: left">
								<img data-type="" id="can4" class="can" draggable="false" src="" ondragover="allowDrop(event)" 
								ondrop="drop(event)" height = "75" width ="75">
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
												<img data-canDrag="not" id="gar1Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back1" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" id="gar2Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back2" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" id="gar3Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back3" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" id="gar4Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back4" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 5-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar5Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back5" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" id="gar6Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "" id ="back6" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>
								</div>	
								<div data-canDrag="not" class = "garbage"></div>	
								<!-- garbage 7-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar7Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "" id ="back7" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" id="gar8Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "" id ="back8" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div>
									</div>																
								</div>
								<div data-canDrag="not" class = "garbage"></div>
								<!-- garbage 9-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar9Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "" id ="back9" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>
								</div>

								<!-- garbage 10-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar10Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "" id ="back10" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>
								</div>
								<!-- garbage 11-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar11Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back11" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 12-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar12Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back12" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 13-->								
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar13Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back13" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>								
								</div>
								<!-- garbage 14-->
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" id="gar14Front" draggable="false" src="">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "" id ="back14" class="draggableTrash" draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>								
								</div>
	
							</div><!-- end of touch-->
						</div><!-- end of game-->
						<div class = "footer">
							<!-- setting button-->
							<a  href="levelpage.php"><img class = "setting" src="pic/end.png"></a>
							<!-- hints tool button-->
							<img class = "hints" src="pic/starTool.png"  onclick="useTool()">
							<div id="numHint" class = "numofhints"></div>
						</div><!-- end of footer-->
					</div><!-- end of main -->
					<script src="js/showclosediv.js"></script>
					<script src="js/memorizetime.js"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
					<script src="js/jquery.drag-drop.plugin.js"></script>
					<script src="js/gamePageOnLoad.js"></script>
					<script src="js/dragdrop.js"></script>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>	
		</div>
	</body>
</html> 