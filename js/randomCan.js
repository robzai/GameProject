/*
	this js is to random generate garbage bins.
	http://www.111cn.net/wy/js-ajax/55544.htm
*/
var canFloder = "./pic/can/";
var picExten = ".png";
var Id = "can";
var arr = ["food", "glass", "paper", "red", "refund", "container"];
var cans;

//this set the randome principle of the garbage bins
function randomsort(a, b) {
        return Math.random()>.5 ? -1 : 1; 
}

//make the items within the above array in random order.
function fecthRandCan(){
	arr.sort(randomsort);
	//alert(arr);
	fetchCan();
}
//put bins in the game page
function fetchCan(){
	cans = document.getElementsByClassName("can");
	for (var i=1; i<=cans.length; i++){
		document.getElementById(Id+i).setAttribute("src",canFloder + arr[i] + picExten);
		document.getElementById(Id+i).setAttribute("data-type",arr[i]);
	}
}
// 
function getArr(){
	return arr;
}
//return the number of bins we need
function getCans(){
	return cans;
}