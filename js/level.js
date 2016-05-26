var level = "level"
var extension = ".php";

//localStorage.level = 0;

function setLevel(levelNo){
	//alert("levelNO is" + levelNo);
	localStorage.level = levelNo;
	//alert("localStorage level is" + localStorage.level);
}

function getLevelSrc(){
	//alert("next level is" + (parseInt(localStorage.level) + 1));
	return level + (parseInt(localStorage.level) + 1) + extension;
}

function getLevel(){
	setLevel($("#level").attr("data-level"));
}

function getLocalLevel(){
	return parseInt(localStorage.level);
}