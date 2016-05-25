var toolOnOff = 0;  
    
function useTool(){		//1
	alert("use tool");
	var toolNum = getToolNumber();
	if(toolNum > 0){
		setToolOn();
		setToolNumber(toolNum-1);
	}			
}
	
function setToolOff(){	//2
	toolOnOff = 0;
}

function setToolOn(){	//3
	toolOnOff = 1;
}
	
function getToolOnOff(){ //4
	return toolOnOff;
}
	
function getToolNumber(){	//5
	return parseInt(localStorage.toolNumber);
}
	
function setToolNumber(Num){	//6
	localStorage.toolNumber = Num;
}