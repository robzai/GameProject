/*
	the js is to set the tool.
*/

var toolOnOff = 0;  

//everytime the tool is used run the following function.  
function useTool(){		//1
	//alert("use tool");
	var toolNum = getToolNumber();
	//alert("toolNum" + toolNum);
	if(toolNum > 0){
		setToolOn();
		alert("minuns" + (toolNum-1));
		setToolNumber(toolNum-1);
	}			
}

//turn off the tool.	
function setToolOff(){	//2
	toolOnOff = 0;
}

//turn on the tool.
function setToolOn(){	//3
	toolOnOff = 1;
}
	
//return the status of the tool.
function getToolOnOff(){ //4
	return toolOnOff;
}

//return the number of the remaining tool.
function getToolNumber(){	//5
	return parseInt(localStorage.toolNumber);
}

//set the number of available tool.	
function setToolNumber(Num){	//6
	localStorage.toolNumber = Num;
}

//show the number of available tool on html page.
function showToolNum(){
	document.getElementById("numHint").innerHTML = getToolNumber() + "x";
}