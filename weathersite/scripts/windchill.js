function findWindChill(){
	var windChill;
	var low = parseFloat(document.getElementById('hi').innerHTML);
	var hi = parseFloat(document.getElementById('low').innerHTML);
	var average = (hi + low) / 2;
	
	var windSpeed = parseFloat(document.getElementById('windSpeed').innerHTML);
	
	
	//f = 35.74 + 0.6215 t - 35.75 s0.16 + 0.4275 t s0.16 
	
	
	var windChillUnfiltered = 35.74 + .6125 * average + Math.pow(windSpeed, 0.16) * [.4275 * average -35.75];
	windChill = Math.round(windChillUnfiltered * 10)/10 ;
	
	console.log(average);
	
	 document.getElementById('windChill').innerHTML = "Feels Like: " + windChill + " &deg;F" ;
	
}

//Greenville
var requestURLGreenville = 'https://openweathermap.org/data/2.5/weather?q=Greenville,us&units=imperial&appid=b6907d289e10d714a6e88b30761fae22';
    var requestGreenville = new XMLHttpRequest();
    requestGreenville.open('GET', requestURLGreenville,'jsonp');
    requestGreenville.responseType = 'json';
    
    requestGreenville.onload = function() {
      var Gobj = requestGreenville.response;
      getGreenvilleWeather(Gobj);
     
    
    }





 function getGreenvilleWeather(Gobj) {
	 var section = document.querySelector('section');
	
	if(Gobj){
	var main  = Gobj.main;
	var wind = Gobj.wind;
	var weather= Gobj.weather[0];
	
	document.getElementById('windSpeed'). innerHTML = wind.speed;
	document.getElementById('hi').innerHTML = main.temp_max; 
    document.getElementById('low').innerHTML = main.temp_min;
	document.getElementById('weatherIcon').src = "http://openweathermap.org/img/w/"+weather.icon+".png";
	document.getElementById('currentCondition').innerHTML = weather.main;
	}

	//Franklin
var requestURLFranklin = 'https://openweathermap.org/data/2.5/weather?q=Franklin,us&units=imperial&appid=b6907d289e10d714a6e88b30761fae22';
    var requestFranklin = new XMLHttpRequest();
    requestFranklin.open('GET', requestURLFranklin,'jsonp');
    requestFranklin.responseType = 'json';
    
    requestFranklin.onload = function() {
      var Fobj = requestFranklin.response;
      getFranklinWeather(Fobj);
     
    
    }





 function getFranklinWeather(Fobj) {
	 var section = document.querySelector('section');
	
	if(Fobj){
	var main  = Fobj.main;
	var wind = Fobj.wind;
	var weather= Fobj.weather[0];
	
	document.getElementById('id'). innerHTML = weather.id;
	document.getElementById('windSpeed'). innerHTML = wind.speed;
	document.getElementById('hi').innerHTML = main.temp_max; 
    document.getElementById('low').innerHTML = main.temp_min;
	document.getElementById('weatherIcon').src = "http://openweathermap.org/img/w/"+weather.icon+".png";
	document.getElementById('currentCondition').innerHTML = weather.main;
	}
	
	//Springfield
	var requestURLSpringfield = 'https://openweathermap.org/data/2.5/weather?q=Greenville,us&units=imperial&appid=b6907d289e10d714a6e88b30761fae22';
    var requestSpringfield = new XMLHttpRequest();
    requestSpringfield.open('GET', requestURLSpringfield,'jsonp');
    requestSpringfield.responseType = 'json';
    
    requestSpringfield.onload = function() {
      var Sobj = requestSpringfield.response;
      getSpringfieldWeather(Sobj);
     
    
    }

	
	function getSpringfieldWeather(Sobj) {
	 var section = document.querySelector('section');
	
	if(Sobj){
	var main  = Sobj.main;
	var wind = Sobj.wind;
	var weather= Sobj.weather[0];
	
	document.getElementById('windSpeed'). innerHTML = wind.speed;
	document.getElementById('hi').innerHTML = main.temp_max; 
    document.getElementById('low').innerHTML = main.temp_min;
	document.getElementById('weatherIcon').src = "http://openweathermap.org/img/w/"+weather.icon+".png";
	document.getElementById('currentCondition').innerHTML = weather.main;
	}
 }
 }
 }