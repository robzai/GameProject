/*import showclosediv.js*/
var importEasterValue=document.createElement("script");
	importEasterValue.setAttribute("type","text/javascript");
    importEasterValue.setAttribute("src","./js/showclosediv.js");
    document.body.appendChild(importEasterValue);

	
/*Get the number of draggable garbages*/
var garbageNotDraggedYet = 0;
var numDraggable= document.getElementsByClassName("draggableTrash");
garbageNotDraggedYet = numDraggable.length;

/*If the garbage is dropped successfully, number of garbages left decreases*/
function dropGarbage(){
	garbageNotDraggedYet--;
}

/*If the number of garbages left is 0, it returns true*/
function checkSuccess(){
	return garbageNotDraggedYet == 0; 
}


/*Return true is the Easter game is played
 *Get the Boolean value from the showclosediv.js*/
function checkEasterGamePlayed() {
	return getBooleanValueForEaster() == 1;
}