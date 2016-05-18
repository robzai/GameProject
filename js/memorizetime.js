var m = 00;
var s = 10;
function showtime(){
	document.getElementById('m').innerHTML = m;
	document.getElementById('s').innerHTML = s;
	s = s-1;
	if (m!=0) {
		if(s == 0) {
			m--;
			s=60;
		}
	} else if (m = 0 && s !=0) {
		s--;
	}else if(m==0 && s==0){
		var time = document.getElementById("timer");
		time.style.visibility = 'hidden';
	}
}
clearInterval(settime); 
var settime = setInterval(function(){
	showtime();
},1000);