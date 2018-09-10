
<?php include '_header.php';?>
<link rel= "stylesheet" type = "text/css" href = "css/normalize.css">
		<link rel= "stylesheet" type = "text/css" href = "css/town-page.css">
		<link rel= "stylesheet" type = "text/css" href = "css/town-page-medium.css">
	    <link rel= "stylesheet" type = "text/css" href = "css/town-page-large.css">
		<link rel= "stylesheet" type = "text/css" href = "css/nav.css">
		<link rel= "stylesheet" type = "text/css" href = "css/nav-medium.css">
		<link rel= "stylesheet" type = "text/css" href = "css/nav-large.css">
		
		<script  src = "scripts/springfield.js"></script>
		<script  src = "scripts/windchill.js"></script>
		<script src = "scripts/hamburger.js"></script>
		<title>
		Springfield Weather
		</title>
		</head>
		
<?php include '_nav.php';?>


			<div id= "slider">
			
			   <img class = "sliderImages"
        srcset="image/springfield_1200.jpg 1200w,
                image/springfield_800.jpg 800w,
                image/springfield_500.jpg 500w"
        sizes="175vw"
        src="image/springfield.jpg"
        alt="responsive image">
		</div>
			
	        <div  onload = "startSpringfield()" id="headerDiv">
			<header>
				<h3 id = "title">Under The Weather Umbrella</h3>
				<p id= "tagline">
                	Predicting the Future  
                    <img id = "crab" alt ="crabPic" src="image/crab_.png">
                </p>        
			</header>					
				
				<img id= "headerimage" alt ="umbrella" src= "image/umbrella2.jpg">	
	        </div>
		
	<main>
		
		<section class="weather-summary">
			<h3 id = "cityTitle"></h3>
      
      
        <strong id = "currentCondition"></strong>
        <picture>
         <img src="" alt="Sunny Symbol" id="weatherIcon">   
        </picture>
	  <div class ="conditions">
	      <p>High: <span id ="hi"></span> &deg;F</p>  
	      <p>Low: <span id ="low"></span> &deg;F</p>  
          <p>Precipitation: 0%</p>  
          <p>Wind Speed: <span  id= "windSpeed"></span> <span>mph</span></p> 
          <p id ="windChill"></p>
      </div> 
	<div id = "events"></div>	  	  
    </section>
        
    <section class="forecast">
      <h3>Ten Day Forecast</h3>
      <table>
        <thead>
          <tr>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Day 4</th>
            <th>Day 5</th>
            <th>Day 6</th>
            <th>Day 7</th>
            <th>Day 8</th>
            <th>Day 9</th>
            <th>Day 10</th>
          </tr>
	</thead>
        <tbody>  
          <tr>
            <td>89&deg;F</td>
            <td>87&deg;F</td>
            <td>78&deg;F</td>
            <td>75&deg;F</td>
            <td>72&deg;F</td>
            <td>72&deg;F</td>
            <td>79&deg;F</td>
            <td>83&deg;F</td>
            <td>85&deg;F</td>
            <td>89&deg;F</td>
          </tr>
	</tbody>
      </table>
    </section>
      
    <article>
	<div class = "t-a">
      <h3 id = "articleTitle">Mr Plow Saves Springfield!</h3>
       	  
       <img id = "articleImage"
        srcset="image/mrplow_1000.png 1000w,
                image/mrplow_500.png 500w,
                image/mrplow_300.png  300w  "
        sizes="175vw"
        src="plow.jpg"
        alt="Mr. Plow">
		
	  <p class="town-article">
	  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
	  Vestibulum tortor quam, feugiat vitae, ultricies eget, 
	  tempor sit amet, ante. 
	  Donec eu libero sit 
	  amet quam egestas semper. 
	  Aenean ultricies mi vitae est. 
	  Mauris placerat eleifend leo. 
	  Quisque sit amet est et sapien 
	  ullamcorper pharetra. Vestibulum erat wisi, condimentum 
	  sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget 
	  condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. 
	  Donec non enim in turpis  tincidunt  Nam dui mi, tortor neque egestas 
	  pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, 
	  augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. 
	  tincidunt quis, accumsan porttitor, facilisis luctus, metus
	  
      </p>
	  </div>
    </article>		  
    </main>
	</div>
  <?php include '_footer.php';?>
  
  </body>
  </html>