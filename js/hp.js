
var hp = 100;
var heart = new Array(hp);
var hpContainer, timer, score=999;
var scoreSend;
//var num=100;

/*window.onload=function(){
	hpContainer = document.getElementById('hp');
	init();
	for(var i = 0; i < hp; i++)
		hpContainer.appendChild(heart[i]);
      timer = setInterval('run()', 1000);
}*/


function init(){
	score = 0;
	for(var i = 0; i < hp; i++){
		heart[i] = document.createElement("div");
		heart[i].className = "hpBar";
	}
}

function run(){
	if(hp > 0)
  	hpContainer.removeChild(heart[--hp]);
  else{
  	clearInterval(timer);
    timer = null;
	updateScore();
    window.location.href='2.php';
  }
}



function minusLife(){
    for(i=0; i<30; i++){
        if(hp>0){
            hpContainer.removeChild(heart[--hp]);
        }else{
			updateScore();
            window.location.href='2.php';
        }  
    }	
}
function addLife(){
    for(i=0; i<10; i++){
        if(hp<100){
            hpContainer.appendChild(heart[hp++]);
        }
    }
}

function updateScore(){
	score = hp * 10 + 1;
	//document.getElementById('score').innerHTML = score;
	//scoreSend = score;
	reset();
    localStorage.levelScore = parseInt(score);
	//alert("inUpdate" + localStorage.levelScore);
}

function reset(){
  	clearInterval(timer);
	while(hp < 100)
		addLife();
    timer = setInterval('run()', 1000);
	
}

//function sendScore(){
//	alert("inSendScore" + score);
//	return score;
//}