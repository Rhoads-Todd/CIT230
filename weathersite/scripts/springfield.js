//Get Town Data
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
	 var section = document.getElementById('events');
	
	if(obj != null){
	var towns = obj.towns;
    var events = towns[6].events;
	var title = document.createElement('h2');
     title.innerHTML = towns[6].name + " Town Events";	
	 document.getElementById('events').appendChild(title);
	for(var i = 0; i < events.length; i ++){
		    var event = document.createElement('p'); 
			event.innerHTML = events[i];
			document.getElementById('events').appendChild(event);
	
	}
	
	//Get Weather Data
	var requestURLSpringfield = 'https://openweathermap.org/data/2.5/weather?q=Springfield,us&units=imperial&appid=b6907d289e10d714a6e88b30761fae22';
    var requestSpringfield = new XMLHttpRequest();
    requestSpringfield.open('GET', requestURLSpringfield,'jsonp');
    requestSpringfield.responseType = 'json';
    
    requestSpringfield.onload = function() {
      var Sobj = requestSpringfield.response;
      getSpringfieldWeather(Sobj);
	  console.log(Sobj);
    
    }
	}
requestSpringfield.send();
	
	function getSpringfieldWeather(Sobj) {
	 var section = document.querySelector('section');
	
	if(Sobj){
	var main  = Sobj.main;
	var wind = Sobj.wind;
	var weather= Sobj.weather[0];
	document.getElementById('cityTitle').innerHTML = Sobj.name;
	document.getElementById('windSpeed').innerHTML = wind.speed;
	document.getElementById('hi').innerHTML = main.temp_max; 
    document.getElementById('low').innerHTML = main.temp_min;
	document.getElementById('weatherIcon').src = "http://openweathermap.org/img/w/"+weather.icon+".png";
	document.getElementById('currentCondition').innerHTML = weather.main;
	}
	}
	}
	