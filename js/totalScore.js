
var hpJS=document.createElement("script");
hpJS.setAttribute("type","text/javascript");
hpJS.setAttribute("src","./js/hp.js");
document.body.appendChild(hpJS);

/*
    add every level's score to localStorage.levelScore, 
    and store in localStorage.totalScore
*/
var score;
function totalScore(){
    localStorage.totalScore = parseInt(localStorage.totalScore) + parseInt(localStorage.levelScore);
	document.getElementById('scoreDisplay').innerHTML = 'score:'+ localStorage.totalScore;
	document.getElementById("ttscore").value = localStorage.totalScore;
	//alert("total score: "+localStorage.totalScore);

	//alert("updatae total score");
}

function getTotal(){
	return parseInt(localStorage.totalScore);
}

