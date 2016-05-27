
var hp = 100;
var heart = new Array(hp);
var hpContainer, timer, score=999;
var scoreSend;
//var num=100;

/*
    this function initializes the life bar
*/
function init(){
	score = 0;
	for(var i = 0; i < hp; i++){
		heart[i] = document.createElement("div");
		heart[i].className = "hpBar";
	}
}
/*
    this remove life bar as time decreases and 
    navigate to fail page if there is no more life bar
*/
function run(){
	if(hp > 1)
  	hpContainer.removeChild(heart[--hp]);
  else{
  	clearInterval(timer);
    timer = null;
	updateScore();
    window.location.href='fail.php';
  }
}

/*
    this function removes life bar and update score if match wrong
*/
function minusLife(){
    for(i=0; i<30; i++){
        if(hp>1){
            hpContainer.removeChild(heart[--hp]);
        }else{
			updateScore();
            window.location.href='fail.php';
        }  
    }	
}

/*
    this function add life if match right
*/
function addLife(){
    for(i=0; i<10; i++){
        if(hp<100){
            hpContainer.appendChild(heart[hp++]);
        }
    }
}

/*
    calculate score based on life bar left
    and pass score each level
*/
function updateScore(){
	score = hp * 10 + 1;
	//document.getElementById('score').innerHTML = score;
	//scoreSend = score;
	reset();
    localStorage.levelScore = parseInt(score);
	alert("in hp, update each level's score" + localStorage.levelScore);
}

/*
    reset life bar and its interval
*/
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