var garbageType;
var canType;
var sourceID;
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
	sourceID = $src.attr("id");;
	//alert(sourceID);
}

/*
    return a boolean regarding whether 
    the garbage is matched correctly
*/
function match(){
	//alert (garbageType +" " +canType);
	return (garbageType == canType);

}




