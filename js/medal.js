/*
	js to show a pop-up window when player achieve a medal
*/

/*
    import totalScore.js
*/
var importTotalScore=document.createElement("script");
    importTotalScore.setAttribute("type","text/javascript");
    importTotalScore.setAttribute("src","./js/totalScore.js");
    document.body.appendChild(importTotalScore);

localStorage.medal1 = 0;
localStorage.medal2 = 0;
localStorage.medal3 = 0;
	
function showMedalAchieve(){
	if(getTotal()>500 && localStorage.medal1 == 0){
		alert("medal1 achieved");
		localStorage.medal1 = 1;
	}
	if(getTotal()>2000 && localStorage.medal1 == 0){
		alert("medal2 achieved");
		localStorage.medal2 = 1;
	}
	if(getTotal()>6000 && localStorage.medal1 == 0){
		alert("medal3 achieved");
		localStorage.medal3 = 1;
	}
}