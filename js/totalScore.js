
var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);


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
	//score = 666;
    alert("inWindowOnLoad" + localStorage.levelScore);
    localStorage.totalScore = parseInt(localStorage.totalScore) + parseInt(localStorage.levelScore);
	alert("total score: "+localStorage.totalScore);
     
    //alert(totalScore); 
	//document.getElementById('scoreDisplay').innerHTML = 'score:'+totalScore;
>>>>>>> 701acb21c1d7cf97866f6cc3a97f3a298f9be436
	//document.getElementById('sentScore').setAttribute("data", totalScore);
	//var temp = document.getElementById('sentScore').getAttribute("data");
	//alert("indivData" + temp);
}

function getTotal(){
	return totalScore;
}

