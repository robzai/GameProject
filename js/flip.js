			/*
			   when wind is loaded flip puzzles after 3 seconds
			*/
			window.onload = function(){
				setTimeout(function(){
					var flippers = document.getElementsByClassName("flipper");
					//confirm(flippers.length);
					for(var i=0; i<flippers.length; i++){
						flippers[i].style.transform = "rotateY(180deg)";
					}					
				}
				, 500);			
			}