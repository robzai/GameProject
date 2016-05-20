var garbageType;
var canType;
var sourceID;

function getGarbageType($sourceElement){
	garbageType = $sourceElement.attr("data-type");
	//alert(garbageType);
}

function getCanType($dst){
	canType = $dst.attr("data-type");
	//alert(canType);
}

function getSrc($src){
	sourceID = $src.attr("id");;
	//alert(sourceID);
}

function match(){
	//alert (garbageType +" " +canType);
	return (garbageType == canType);

}

/*------ Below the script is for navigating to pass page when a player finishes the game successfully------------*/

/*var garbageNotDraggedYet = 0;
var playedEasterGame = 0;
var numDraggable= document.getElementsByClassName("draggableTrash");
garbageNotDraggedYet = numDraggable.length;

function dropGarbage(){
	garbageNotDraggedYet--;
}

function checkSuccess(){
	return garbageNotDraggedYet == 0; 
}*/



