<!DOCTYPE HTML>
<html lang="en-us">
	<head> 
	    <meta charset="UTF-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="image/crab_opt.png" />
		<title>
		
		Storm Center
		
		</title>
		<link rel= "stylesheet" type = "text/css" href = "css/normalize.css">
		<link rel= "stylesheet" type = "text/css" href = "css/stormcenter-main.css">
		<link rel= "stylesheet" type = "text/css" href = "css/stormcenter-medium.css">
		<link rel= "stylesheet" type = "text/css" href = "css/stormcenter-large.css">
		<script src = "scripts/storm-tracker.js"></script>
        <script src = "scripts/hamburger.js" ></script>	
	</head>
	<body>
	
		<?php include '_nav.php' ?>
			<div id = "header" >
			<img id = "headerImg" src = "image/storm-center.jpg">
			<h1>The Storm Center</h1>
			</div>
            <div class = "div">
            <div class="container">
  

    <label for="fname">Full Name</label><br>
    <input type="text" id="fname" name="firstname" required placeholder="Your name.." ><br><br>

   <label for = "email"> E-mail</label><br>
   <input name = "e-mail"type = "email" id = "email" required placeholder = "crabman@thecrabshack.net"> <br><br>
   
   <label  for = "phone"> Phone Number </label> <br>
   <input name = "tphone" type= "tel" required><br><br>
   
   <label for ="zip">Zip Code </label> <br>
   <input name = "zipc" type ="number" required><br><br>

	<label  for = "storm-date">Storm Date </label> <br>
	<input name  = "date" type = "date"> <br><br>
	
	<label name= "stormtype" for = "storm-type">Storm Type</label> <br>
	<select   type = "list">
		<option value ="FlashFlood">Flash Flood</option>
		<option value = "Hail">Hail </option>
		<option value ="Hurricane">Hurricane</option> 
		<option value ="Thunderstorm">Thunderstorm</option> 
		<option value ="Tornado">Tornado</option> 
	</select> <br><br>
	
	
	<label for="rating">Severity (1 to 10)</label><br>
		<input  name = "severity" type="range" id="rating" value="5" min="1" max="10" step="1" oninput="adjustRating(this.value)" onchange="adjustRating(this.value)">
		<span id="ratingvalue">5</span><br><br>

	<label for ="storm-region"> Storm Region</label> <br> 
	<select name = "region" type ="list"> 
	    <option selected disabled >Select Region...</option>
		<option  value="Franklin">Franklin</option>
		<option  value="Greenville">Greenville</option>  
		<option  value="Springfield">Springfield</option>
		</select><br><br>
		
		<strong>Are you in immediate danger?</strong> <br><br>
	<input type = "radio" name = "danger" value = "yes"> Yes<br><br>
	<input type = "radio" name = "danger" value = "maybe"> Maybe<br><br>
	<input type = "radio" name = "danger" value = "no"> No<br>
	
	<p><strong>Is there anything else  we should know?</strong> </p>
	<input width = "100px" height = "200px" type = "textarea" for = "additionalinfo" id = "addinfo"></input>		
		 
 

    
  
     

    

   <br><br><a href="thanks.php"> <button type="submit" >Submit</button></a>

  </form>
</div>			
</div> 		
<?php include '_footer.php' ?>
    </body>

</html>