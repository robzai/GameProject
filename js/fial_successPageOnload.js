var importFailOnload=document.createElement("script");
importFailOnload.setAttribute("type","text/javascript");
importFailOnload.setAttribute("src","./js/totalScore.js");
document.body.appendChild(importFailOnload);

window.onload=function(){
	totalScore();
}