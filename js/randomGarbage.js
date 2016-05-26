/*
    import randomCan.js
*/
var importRanCan=document.createElement("script");
    importRanCan.setAttribute("type","text/javascript");
    importRanCan.setAttribute("src","./js/randomCan.js");
    document.body.appendChild(importRanCan);

var garbFloder = "./pic/";;
var garbTypeFloder;
var garbNo;
var garbExten = ".png";
//var arr = ["food", "glass", "paper", "red", "refund"];
//creage a 2D array to store the number of differet type garbages
var numGrabInDiffType = [];
	numGrabInDiffType[0] = ["food", 5];
	numGrabInDiffType[1] = ["glass", 1];
	numGrabInDiffType[2] = ["paper", 3];
	numGrabInDiffType[3] = ["red", 6];
	numGrabInDiffType[4] = ["refund", 3];
var numOfGarb = document.getElementsByClassName("draggableTrash");
var idBeg = "gar";
var idEnd = "Front";
var idBack = "back";	
	
function randomGarbType(){
	var grabT = getArr();
	//Math.floor(Math.random()*(max-min+1)+min);
	var ran = Math.floor(Math.random()*(getCans().length)+1);
	//alert("ran in randomGarbType: " + ran);
	garbTypeFloder = grabT[ran];
	//alert("garbTypeFloder in randomGarbType: " + garbTypeFloder);
}

/*
	search the number of garbage pictures of a specific garbage type
*/
function getNumOfPic(){
	//alert("numGrabInDiffType length" + numGrabInDiffType.length);
	for(var i=0; i<numGrabInDiffType.length; i++){
		//alert("get num of pic: " + garbTypeFloder);
		//alert("matching: " + numGrabInDiffType[i][0] + garbTypeFloder);
		if(numGrabInDiffType[i][0] == garbTypeFloder){
			//alert("num of pic" + numGrabInDiffType[i][1]);
			return numGrabInDiffType[i][1];
		}
	}
}


function randomGarbPic(){	
	for(var i=1; i<=numOfGarb.length; i++){
		randomGarbType();
		//Math.floor(Math.random()*(max-min+1)+min);
		garbNo = Math.floor(Math.random()*(getNumOfPic())+1);
		//alert("data-type" + garbTypeFloder);
		alert(idBack + i);
		document.getElementById(idBack + i).setAttribute("data-type",garbTypeFloder);
		//alert("src: " + garbFloder + garbTypeFloder + "/" + garbNo + garbExten);
		document.getElementById(idBeg + i + idEnd).setAttribute("src",garbFloder + garbTypeFloder 
		                                                         + "/" + garbNo + garbExten);
	}
}
