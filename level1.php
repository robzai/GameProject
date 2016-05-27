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
		<title>Free Throw - level 1</title>
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
		<div data-level = "1" id="level" class = "container">
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
									<img data-type = "paper" id="glassCan" class="can" draggable="false" 
									src="pic/can/paper.png" ondragover="allowDrop(event)" ondrop="drop(event)" 
									height = "75" width ="80">
							</div>
							<!-- mixed bin -->			
							<div style = "float: left">
									<img data-type = "mixed" id="mixedCan" class="can" draggable="false" 
									src="pic/can/container.png" ondragover="allowDrop(event)" 
									ondrop="drop(event)" height = "75" width ="80">
							</div>
							<div style = "float: left">
								<img data-type = "food" id="mixedCan" class="can" 
								draggable="false" src="pic/can/food.png" ondragover="allowDrop(event)" 
								ondrop="drop(event)" height = "75" width ="80">
							</div>
						</div>
		
						<!-- main game part, players need to memorize all garbage pics below -->
						<div class = "game">
							<div id="canTouch">
								<!-- garbage 1-->
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<!-- garbage players need to memorize -->
												<img data-canDrag="not" draggable="false" src="pic/container/3.png">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
											<!-- back side of the garbage, dragable -->
												<img data-type = "mixed" id ="back0" class="draggableTrash" 
												draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" draggable="false" src="pic/paper/3.png">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img data-type = "paper" id ="back1" class="draggableTrash" 
												draggable="true" ondragstart="drag(event)" src = "pic/back.png">
											</div>
										</div> 
									</div>
								</div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<!-- garbage 3-->	
								<div class = "garbage">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
											<!-- garbage players need to memorize -->
												<img data-canDrag="not" draggable="false" src="pic/food/1.png">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, dragable -->
												<img  data-type = "food" id ="back1" class="draggableTrash" 
												draggable="true" ondragstart="drag(event)" src = "pic/back.png">
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
												<img data-canDrag="not" draggable="false" src="pic/paper/3.png">
											</div>
											<!-- picture on the back can be druged -->
											<div class="back">
												<!-- back side of the garbage, easter egg game -->
												<img data-type = "easter" id ="easter" class="draggableTrash" 
												src="pic/egg.png" id="easter">
											</div>
										</div> 
									</div>
								</div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
								<div data-canDrag="not" class = "garbage"></div>
							</div>	<!-- end of canTouch-->
							
							<!-- easter egg game -->
							<!-- a div cover on main game -->
							<div id="mask"></div>
							<!-- game  -->
							<div id="newgame">
								Find out the pig with hat XD			
								<map name="pigHat" id="pigHat">
									<!-- the place is the pig with hat, only this area is clickable -->
									<area shape="rect" coords="165,260,210,335" id="fnquit" alt="Pig wearing a hat" />
								</map>
								<img src="pic\eastergame.png" usemap="#pigHat" alt="Hidden and Find picture">
							</div>
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
					<script src="js/gamePageOnLoad-1.js"></script>
					<script src="js/dragdrop.js"></script>
					<script src="js/tool.js"></script>
				<div class="col-xs-4 visible-md visible-lg"></div>
			</div>	
		</div>
	</body>
</html>