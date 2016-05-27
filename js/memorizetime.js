/*
	js to set the memorize time, after this time garbage
	pictures will flip over
*/

/*
    import initFlip.js
*/	
var importInitFlip=document.createElement("script");
    importInitFlip.setAttribute("type","text/javascript");
    importInitFlip.setAttribute("src","./js/initFlip.js");
    document.body.appendChild(importInitFlip);

/*
    import initHP.js
*/	
var importInitHP=document.createElement("script");
    importInitHP.setAttribute("type","text/javascript");
    importInitHP.setAttribute("src","./js/initHP.js");
    document.body.appendChild(importInitHP);
	
var m = 0;
var s = 15;
var interv;
/*
    display remaining time for memorizing garbages
*/
function showtime(){
	document.getElementById('m').innerHTML = m;
	document.getElementById('s').innerHTML = s;
	//debugger;
		//s = s-1;
		if (m!=0) {
			if(s == 0) {
				m--;
				s=59;
			}else{
				s--;
			}
		} else{
			 if (s !=0) {
				s--;
			}else{
				initFlip();	
				initHP();
				var time = document.getElementById("timer");
				time.style.visibility = 'hidden';
				clearInterval(interv); 
			}
		}
}
/*
    set the interval for the counting down time display
*/
//var settime = setInterval(showtime,1000);
function startTimmer(){
	var colon = document.getElementsByClassName("bd");
	colon[0].innerHTML = ":";
	showtime();
	interv = setInterval(showtime,1000);
}