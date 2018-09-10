
//function getTownData(){
 var requestURL = 'https://byui-cit230.github.io/weather/data/towndata.json';
    var requestTown = new XMLHttpRequest();
    requestTown.open('GET', requestURL);
    requestTown.responseType = 'json';
    requestTown.send();
    requestTown.onload = function() {
      var obj = requestTown.response;
      console.log(obj);
     test(obj);
    }

	
function test(obj) {
	if(obj != null){
	var towns = obj.towns;
    var events = towns[2].events;
	var title = document.createElement('h2');
     title.innerHTML = towns[2].name + " Town Events";	
	 document.getElementById('events').appendChild(title);
	for(var i = 0; i < events.length; i ++){
		    var event = document.createElement('p'); 
			event.innerHTML = events[i];
			document.getElementById('events').appendChild(event);
	
	}
	
	
 
 }
 
 
 }
	
	var requestURL = 'https://openweathermap.org/data/2.5/weather?q=Greenville,us&units=imperial&appid=b6907d289e10d714a6e88b30761fae22';
    var request = new XMLHttpRequest();
    request.open('GET', requestURL,'jsonp');
    request.responseType = 'json';
    
    request.onload = function() {
      var obj = request.response;
      getWeather(obj);
    
    }
request.send();
	
	function getWeather(obj) {
	 var section = document.querySelector('section');
	
	if(obj){
	var main  = obj.main;
	var wind = obj.wind;
	var weather= obj.weather[0];
	document.getElementById('cityTitle').innerHTML = obj.name;
	document.getElementById('windSpeed').innerHTML = wind.speed;
	document.getElementById('hi').innerHTML = main.temp_max; 
    document.getElementById('low').innerHTML = main.temp_min;
	document.getElementById('weatherIcon').src = "http://openweathermap.org/img/w/"+weather.icon+".png";
	document.getElementById('currentCondition').innerHTML = weather.main;
	}
	}
	
	
	
	
	
	