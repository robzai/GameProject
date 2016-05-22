
var playedEasterGame = 0;

/*
    Return playedEasterGame. playedEasterGame is 1 
    when the easter game is played, else 0
*/
function getBooleanValueForEaster(){
	return playedEasterGame;
}

/*
    g is an object. it goanna change based on different id
*/
function g(obj) {
	return document.getElementById(obj);
}

/*
    control the easter egg game
*/
var newgame = {
	title:null,
	/*
        show: the div with id mask and newgame will show 
    */
	show:function(){
		g("mask").style.width = "100%";
		g("mask").style.height = "100%";
		g("mask").style.display = "block";
		g("newgame").style.display = "block";
		g("newgame").style.left = "5%";
	},
	/*
        hide: the div with id mask ,
        newgame and easter will hide 
    */					
	hide:function(){
		g("mask").style.display = "none";
		g("newgame").style.display = "none";
		g("easter").style.display = "none";						
	},

}
	
	/*
        control the setting bar 
    */
	var set = {
		title:null,
		/*
            showset: the div with id mask1 will show 
        */
		showset:function(){
			g("mask1").style.width = "40%";
			g("mask1").style.height = "10%";
			g("mask1").style.display = "block";
		},
		
		/*
            closemusic: the div with id mask1 will hide 
        */
		closemusic:function() {
			g("mask1").style.display = "none";
		}
	}
	
	/*
        if sth's id is easter and it is clicked, 
        will excute the show method in "newgame"
   
	g("easter").onclick = function(){
		newgame.show();
		this.blur();
	}; */
	
	/*
        if sth's id is fnquit and it is clicked, 
        will excute the hide method in "newgame"
    */
	g("fnquit").onclick = function(){
		newgame.hide();
        
        /*
            change the value of the playedEasterGame when 
            the easter game played successfully
        */
		playedEasterGame = 1;
		
		/*
            Navigate to pass page when no garbage left 
            and easter game played.
        */
		if(checkSuccess() && checkEasterGamePlayed()){
				updateScore();
				window.location.href='pass.html';
		}
	};
	
	/*
        if sth's id is set and it is clicked, 
        will excute the showset method in "set"
    */				
	g("set").onclick = function() {
		set.showset();
		this.blur();
	};
	/*
        if sth's id is music and it is clicked, 
        will excute the closemusic method in "set"
    */	
	g("music").onclick = function() {
		set.closemusic();
	};	
	/*
        if sth's id is closese and it is clicked, 
        will excute the closemusic method in "set"
    */	
	g("closese").onclick = function() {
		set.closemusic();
	};
				
			
				