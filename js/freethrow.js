/*g is an object. it goanna change based on different id*/
function g(obj) {
	return document.getElementById(obj);
}
/*control the easter egg game*/
	var newgame = {
		title:null,
		/*show: the div with id mask and newgame goanna show */
		show:function(){
			g("mask").style.width = "100%";
			g("mask").style.height = "100%";
			g("mask").style.display = "block";
			g("newgame").style.display = "block";
			g("newgame").style.left = "5%";
		},
		/*hide: the div with id mask ,newgame and easter goanna hide */					
		hide:function(){
			g("mask").style.display = "none";
			g("newgame").style.display = "none";
			g("easter").style.display = "none";						
		},

	}
	/*control the setting bar */
	var set = {
		title:null,
		/*showset: the div with id mask1 goanna show */
		showset:function(){
			g("mask1").style.width = "40%";
			g("mask1").style.height = "10%";
			g("mask1").style.display = "block";
		},
		/*closemusic: the div with id mask1 goanna hide */
			closemusic:function() {
				g("mask1").style.display = "none";
			}
	}
	/*if sth's id is easter and it is clicked, goanna excute the show method in "newgame"*/
	g("easter").onclick = function(){
		newgame.show();
		this.blur();
	;
				
	/*if sth's id is fnquit and it is clicked, goanna excute the hide method in "newgame"*/
	g("fnquit").onclick = function(){
		newgame.hide();
	};
				
	/*if sth's id is set and it is clicked, goanna excute the showset method in "set"*/				
	g("set").onclick = function() {
		set.showset();
		his.blur();
	};
	/*if sth's id is music and it is clicked, goanna excute the closemusic method in "set"*/	
	g("music").onclick = function() {
		set.closemusic();
	};	
	/*if sth's id is closese and it is clicked, goanna excute the closemusic method in "set"*/	
	g("closese").onclick = function() {
		set.closemusic();
	};
	/* when wind is loaded flip puzzles after 3 seconds */
	window.onload = function(){
		setTimeout(function(){
			var flippers = document.getElementsByClassName("flipper");
			//confirm(flippers.length);
			for(var i=0; i<flippers.length; i++){
				flippers[i].style.transform = "rotateY(180deg)";
			}
					
		}, 3000);			
	
		/*set the id of an element to transfer as text format*/
		function drag(ev){
			ev.dataTransfer.setData("text", ev.target.id);
		}
		/*allow an element to be droped*/
		function allowDrop(ev) {
			ev.preventDefault();
		}
		/* hide the source puzzle when it is droped in a garbage can*/
		function drop(ev) {
			ev.preventDefault();
			var elementId = ev.dataTransfer.getData("text");
			var element = document.getElementById(elementId);
			element.style.visibility = 'hidden';
		}	
			
		var m = 00;
		var s = 3;
		var time = document.getElementById("timer");
	function showtime(){
		document.getElementById('m').innerHTML = m;
		document.getElementById('s').innerHTML = s;
		s = s-1;
		if (m!=0) {
			if(s == 0) {
				m--;
				s=60;
			}
		} else if (m = 0 && s > 0) {
			s--;
		}else if(m==0 && s==0){
			time.style.visibility = 'hidden';
		}
	}
	clearInterval(settime); 
	var settime = setInterval(function(){
		showtime();},1000);
}
