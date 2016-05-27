/*
	this js file is to control the link in the pass page
*/

var level = "level"
var extension = ".php";

//store the current level in local storage
function setLevel(levelNo){
	//alert("levelNO is" + levelNo);
	localStorage.level = levelNo;
	//alert("localStorage level is" + localStorage.level);
}
//return the link of the next level
function getLevelSrc(){
	//alert("next level is" + (parseInt(localStorage.level) + 1));
	return level + (parseInt(localStorage.level) + 1) + extension;
}
//get the level number from a html page 
function getLevel(){
	setLevel($("#level").attr("data-level"));
}
//return the current level from local storage as an int
function getLocalLevel(){
	return parseInt(localStorage.level);
}