var level = "level"
var extension = ".html";

localStorage.level = 0;

function setLevel(levelNo){
	localStorage.level = levelNo;
}

function getLevelSrc(){
	alert(level + localStorage.level + extension);
	return level + localStorage.level + extension;
}

function getLevel(){
	setLevel($("#level").attr("data-level"));
}