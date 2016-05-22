
var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);

/*
    add every level's score to localStorage.levelScore, 
    and store in localStorage.totalScore
*/
var score;
window.onload=function(){
    //alert("inWindowOnLoad" + localStorage.levelScore);
    localStorage.totalScore = parseInt(localStorage.totalScore) + parseInt(localStorage.levelScore);
	//alert("total score: "+localStorage.totalScore);
     
    //alert(totalScore); 
	//document.getElementById('scoreDisplay').innerHTML = 'score:'+totalScore;
	//document.getElementById('sentScore').setAttribute("data", totalScore);
	//var temp = document.getElementById('sentScore').getAttribute("data");
	document.getElementById('scoreDisplay').innerHTML = 'score:'+ localStorage.totalScore;
	document.getElementById("ttscore").value = localStorage.totalScore;
	alert("updatae total score");
}

//function getTotal(){
//	return totalScore;
//}

