var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);

var totalScore = 0;
var score;
//alert(totalScore); 
window.onload=function(){
	score = sentScore();
    totalScore = totalScore + score;
    //alert(totalScore); 
	document.getElementById('scoreDisplay').innerHTML = 'score:'+totalScore;	
}

function getTotal(){
	return totalScore;
}

