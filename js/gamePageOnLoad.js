/*
    this js file is for level one
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
	when wind is loaded flip puzzles after several seconds 
    reset next scores to zero
*/
window.onload = function(){
	initFlip();	
    initHP();
	getLevel();
	//getLevelSrc();  //for testing
}