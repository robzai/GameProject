/*
	initialize the flip function
*/

function initFlip(){
    var flippers = document.getElementsByClassName("flipper");
    //confirm(flippers.length);
    for(var i=0; i<flippers.length; i++){
        flippers[i].style.transform = "rotateY(180deg)";
    }					
}