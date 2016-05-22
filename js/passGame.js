/*
    import showclosediv.js
*/
var importEasterValue=document.createElement("script");
	importEasterValue.setAttribute("type","text/javascript");
    importEasterValue.setAttribute("src","./js/showclosediv.js");
    document.body.appendChild(importEasterValue);

/*
    import match.js
*/
var importMatch=document.createElement("script");
	importMatch.setAttribute("type","text/javascript");
    importMatch.setAttribute("src","./js/match.js");
    document.body.appendChild(importMatch);	
	
	
/*
    Get the number of draggable garbages
*/
var garbageNotDraggedYet = 0;
var numDraggable= document.getElementsByClassName("draggableTrash");
garbageNotDraggedYet = numDraggable.length;

/*
    Each garbage bag has a garbageType. So if the 
	garbageType != undefined, it must be a garbage bag.
	If a garbage bag is dropped successfully,
    the number of garbages left decreases
*/
function dropGarbage(){
	if(returnGarbageType() != undefined)
		garbageNotDraggedYet--;
}

/*
    If the number of garbages left is 0, 
    it returns true
*/
function checkSuccess(){
	return garbageNotDraggedYet == 0; 
}


/*
    Return true is the Easter game is played
    Get the Boolean value from the showclosediv.js
*/
function checkEasterGamePlayed() {
	return getBooleanValueForEaster() == 1;
}