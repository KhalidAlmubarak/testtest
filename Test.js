var timeInMin = 1;
var timeInSec = timeInMin*60;
var innerLine = document.getElementById("innerLine");
var innerLineWidth = 99; // 70%, CHANGE HERE IF YOU CHANGEED IT IN CSS
var timeRemaining = document.getElementById("time");

var reductionRate = innerLineWidth/timeInSec; // 
timeRemaining.innerHTML = timeInSec+" s";
 function TimeBar() {

var interval = setInterval(function(){ 
    timeInSec = timeInSec-1;
    timeRemaining.innerHTML = timeInSec+" s";
    innerLineWidth = innerLineWidth-reductionRate
    innerLine.style.width = `${innerLineWidth}%`

    if(timeInSec == 0)
    clearInterval(interval)
    
 }, 1000);






 }

window.onload = TimeBar();


