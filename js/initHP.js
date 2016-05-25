function initHP(){
	hpContainer = document.getElementById('hp');
	init();
	for(var i = 0; i < hp; i++)
		hpContainer.appendChild(heart[i]);
    timer = setInterval('run()', 1000);
}