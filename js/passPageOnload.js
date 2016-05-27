/*
    import totalScore.js
*/	
var importTotalScore=document.createElement("script");
    importTotalScore.setAttribute("type","text/javascript");
    importTotalScore.setAttribute("src","./js/totalScore.js");
    document.body.appendChild(importTotalScore);
/*
    import level.js
*/	
var importLevel=document.createElement("script");
    importLevel.setAttribute("type","text/javascript");
    importLevel.setAttribute("src","./js/level.js");
    document.body.appendChild(importLevel);

/*
    import medal.js
*/
var importMedal=document.createElement("script");
    importMedal.setAttribute("type","text/javascript");
    importMedal.setAttribute("src","./js/medal.js");
    document.body.appendChild(importMedal);	

window.onload=function(){
	//alert("pass onload");
	$("#next").attr("href", getLevelSrc())
	totalScore();
	showMedalAchieve();
}