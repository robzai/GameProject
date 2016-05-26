var garbageType;
var canType;
var sourceID;
var easterEggOn;
/*
    get garbage type from active element
*/
function getGarbageType($sourceElement){
	garbageType = $sourceElement.attr("data-type");
	//alert(garbageType);
}

/*
    get bin type from dropped element
*/
function getCanType($dst){
	canType = $dst.attr("data-type");
	//alert(canType);
}

/*
    get picture id
*/
function getSrc($src){
	sourceID = $src.attr("id");
	//alert(sourceID);
}

/*
    return a boolean regarding whether 
    the garbage is matched correctly
*/
function match(){
	alert ("match garb can: " + garbageType +" " +canType);
	return ((garbageType == canType) || (garbageType == "easter") );
}

/*
	return the garbageType
*/
function returnGarbageType(){
	return garbageType;
}


