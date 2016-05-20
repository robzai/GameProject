/*
	when wind is loaded flip puzzles after 3 seconds
*/
var importJS=document.createElement("script");
    //import hp.js
    importJS.setAttribute("type","text/javascript");
    importJS.setAttribute("src","./js/hp.js");
    document.body.appendChild(importJS);

window.onload = function(){
	//localStorage.levelScore = parseInt(0);
	//localStorage.totalScore = parseInt(0);
	setTimeout(function(){
        var flippers = document.getElementsByClassName("flipper");
        //confirm(flippers.length);
        for(var i=0; i<flippers.length; i++){
            flippers[i].style.transform = "rotateY(180deg)";
        }					
    }
	, 2000);		
    hpContainer = document.getElementById('hp');
	init();
	for(var i = 0; i < hp; i++)
		hpContainer.appendChild(heart[i]);
    timer = setInterval('run()', 1000);
}