
var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);

var totalScore = 0;
var score;
//alert(totalScore); 
window.onload=function(){
	//score = sendScore();
	score = 666;
    //alert("inWindowOnLoad" + sendScore());
	
    totalScore = totalScore + score;

	document.getElementById('scoreDisplay').innerHTML = 'score:'+totalScore;
	document.getElementById("ttscore").value = totalScore;
	/*$.ajax({
		type: "POST",
		url: '../2.php',
		data: {scores: 'totalScore'},
	);*/
    //alert(totalScore); 

	//document.getElementById('sentScore').setAttribute("data", totalScore);
	//var temp = document.getElementById('sentScore').getAttribute("data");
	//alert("indivData" + temp);
}

function getTotal(){
	return totalScore;
}

