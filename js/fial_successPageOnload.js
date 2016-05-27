/*
    import totalScore.js
*/
var importTotalScore=document.createElement("script");
importTotalScore.setAttribute("type","text/javascript");
importTotalScore.setAttribute("src","./js/totalScore.js");
document.body.appendChild(importTotalScore);

/*
    import medal.js
*/
var importMedal=document.createElement("script");
    importMedal.setAttribute("type","text/javascript");
    importMedal.setAttribute("src","./js/medal.js");
    document.body.appendChild(importMedal);	

/*
	this function will run when pass of fail page is loaded
*/
window.onload=function(){
	//this function is in totalScore.js
	totalScore();
	//this function is in medal.js
	showMedalAchieve();
}