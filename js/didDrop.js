	/*
		import match.js
	*/
	var importMatch=document.createElement("script");
	importMatch.setAttribute("type","text/javascript");
	importMatch.setAttribute("src","./js/match.js");
	document.body.appendChild(importMatch);
	
    /*
        import hp.js
    */
	var importHP=document.createElement("script");
    importHP.setAttribute("type","text/javascript");
    importHP.setAttribute("src","./js/hp.js");
    document.body.appendChild(importHP);
	
	/*
        import passGame.js
    */
	var importPass=document.createElement("script");
	importPass.setAttribute("type","text/javascript");
    importPass.setAttribute("src","./js/passGame.js");
    document.body.appendChild(importPass);
	
	/*
        import showclosediv.js
    */
	var importShowclosediv=document.createElement("script");
	importShowclosediv.setAttribute("type","text/javascript");
    importShowclosediv.setAttribute("src","./js/showclosediv.js");
    document.body.appendChild(importShowclosediv);
	
	/*
		import level.js
	*/
	var importLevel=document.createElement("script");
	importLevel.setAttribute("type","text/javascript");
	importLevel.setAttribute("src","./js/level.js");
	document.body.appendChild(importLevel);

function didDrop($src, $dst){
	// this function is in match.js							
	getSrc($src);
	// this function is in match.js
	getCanType($dst);
	// see if the garbage and the bin are match
	// this function is in match.js
	if (match()){
		//this function is in hp.js
        addLife();
    }else{
		//this function is in hp.js
        minusLife();
    }
	$src.hide();
	// show the easrter egg game if an easter egg is dropped
	if(returnGarbageType() == "easter"){
		newgame.show();
	}
	// this function is in passGame.js
	dropGarbage();
	if(1){
		//if(checkSuccess() && checkEasterGamePlayed()){	//this function is in passGame.js
		//alert("in drag-drop plugin,level success, score will be update after this message");
        updateScore();
		if(parseInt(getLocalLevel()) == 9){	//this function is in level.js
			window.location.href='success.html';
			return;
		}
		window.location.href='pass.html';
	}
}