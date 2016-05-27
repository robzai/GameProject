var importFailOnload=document.createElement("script");
importFailOnload.setAttribute("type","text/javascript");
importFailOnload.setAttribute("src","./js/totalScore.js");
document.body.appendChild(importFailOnload);

/*
    import medal.js
*/
var importMedal=document.createElement("script");
    importMedal.setAttribute("type","text/javascript");
    importMedal.setAttribute("src","./js/medal.js");
    document.body.appendChild(importMedal);	

window.onload=function(){
	totalScore();
	showMedalAchieve();
}