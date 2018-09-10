
   var requestURL = 'https://byui-cit230.github.io/weather/data/towndata.json';
    var request = new XMLHttpRequest();
    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
      var obj = request.response;
      console.log(obj);
     test(obj);
    }
	request.send();
	
function test(obj) {
	 var section = document.querySelector('section');
	
	if(obj != null){
	var towns = obj.towns;
    for (var i = 0; i < towns.length; i++)
	{  if (i == 0 || i== 2 || i == 6){
	   var myDiv = document.createElement('div');
           myDiv.id = "myDiv";
       var myArticle = document.createElement('article');
       var townTitle = document.createElement('h1');
	   var par1 = document.createElement('p');
	   var par2 = document.createElement('p');
	   var par3 = document.createElement('p');
	   var par4 = document.createElement('p');
	   townTitle.textContent = towns[i].name;
	   par1.textContent = "Year Founded: " + towns[i].yearFounded;
	   par2.textContent = "Their Town Motto: " + towns[i].motto;
	   par3.textContent = "Their Population: " + towns[i].currentPopulation;
	   par4.textContent = "The Annual Rainfall: " + towns[i].averageRainfall + " inches";
	   myArticle.appendChild(townTitle);
        myArticle.appendChild(par1);
		myArticle.appendChild(par2);
		myArticle.appendChild(par3);
		myArticle.appendChild(par4);
		myDiv.appendChild(myArticle);
	      section.appendChild(myDiv);
	}
	}
	}
 }



	

		
