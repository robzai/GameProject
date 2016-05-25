/*
    import hp.js
*/
var importJS=document.createElement("script");
    importJS.setAttribute("type","text/javascript");
    importJS.setAttribute("src","./js/hp.js");
    document.body.appendChild(importJS);
/*
    import level.js
*/	
var importLevel=document.createElement("script");
    importLevel.setAttribute("type","text/javascript");
    importLevel.setAttribute("src","./js/level.js");
    document.body.appendChild(importLevel);
/*
    import initFlip.js
*/	
var importInitFlip=document.createElement("script");
    importInitFlip.setAttribute("type","text/javascript");
    importInitFlip.setAttribute("src","./js/initFlip.js");
    document.body.appendChild(importInitFlip);

/*
    import initHP.js
*/	
var importInitHP=document.createElement("script");
    importInitHP.setAttribute("type","text/javascript");
    importInitHP.setAttribute("src","./js/initHP.js");
    document.body.appendChild(importInitHP);
/*
    import initScore.js
*/	
var importInitScore=document.createElement("script");
    importInitScore.setAttribute("type","text/javascript");
    importInitScore.setAttribute("src","./js/initScore.js");
    document.body.appendChild(importInitScore);	
/*
    import initScore.js
*/	
var importMemorizetime=document.createElement("script");
    importMemorizetime.setAttribute("type","text/javascript");
    importMemorizetime.setAttribute("src","./js/memorizetime.js");
    document.body.appendChild(importMemorizetime);		
	
/*
	when wind is loaded flip puzzles after several seconds 
    reset next scores to zero
*/
window.onload = function(){
	startTimmer();
	//initFlip();	
    //initHP();
	getLevel();
	if(getLocalLevel() == 1){
		initScore();
	}
	setToolNumber(1);
	//getLevelSrc();  //for testing
}