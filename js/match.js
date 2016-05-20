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




