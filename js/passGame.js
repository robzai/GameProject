
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
