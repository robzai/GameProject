/*
var numGarbagesRest;
var  flippers= document.getElementsByClassName("flipper");
numGarbagesRest = flippers.length;

function dropGarbage(){
	numGarbagesRest--;
}

function checkSuccess(){
	return numGarbagesRest == 0; 
}
*/




var garbageNotDraggedYet = 0;
var playedEasterGame = 0;
var numDraggable= document.getElementsByClassName("draggableTrash");
garbageNotDraggedYet = numDraggable.length;

function dropGarbage(){
	garbageNotDraggedYet--;
}

function checkSuccess(){
	return garbageNotDraggedYet == 0; 
}

/*----------------NOT DONE YET! ---------------*/
/*----------------FUNCTION FOR NAVIGATING TO PASS PAGE IS IN macth.js---------------*/