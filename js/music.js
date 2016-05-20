
/*
    this function switches different pics 
    for music play and music pause
*/
function playPause() {    
		var music = document.getElementById('bgm');    
		var music_btn = document.getElementById('music');    
		if (music.paused){    
			music.play();    
			music_btn.src = 'pic/music.png';    
		} else {    
			music.pause();    
			music_btn.src = 'pic/close.png';     
		}    
}   