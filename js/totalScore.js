var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);

var totalScore = 0;
var score;
//alert(totalScore); 
window.onload=function(){
	score = sentScore();
	//alert(score);
    totalScore = totalScore + score;
    alert(totalScore); 	
}
