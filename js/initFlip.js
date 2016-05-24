function initFlip(){
	localStorage.levelScore = parseInt(0);
	localStorage.totalScore = parseInt(0);
	setTimeout(function(){
        var flippers = document.getElementsByClassName("flipper");
        //confirm(flippers.length);
        for(var i=0; i<flippers.length; i++){
            flippers[i].style.transform = "rotateY(180deg)";
        }					
    }
	, 2000);
}