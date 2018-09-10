<!DOCTYPE HTML>
<html lang="en-us">
	<head> 
	    <meta charset="UTF-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link rel = "stylesheet" type ="text/css" href = "styles/normalize.css">
		<link rel = "stylesheet" type ="text/css" href = "styles/nav.css">
		<link rel = "stylesheet" type ="text/css" href = "styles/home.css">
		<script src = "scripts/hamburger.js"></script>
     
        	<title>
		The Mountain Spoke 			
		</title>
		</head>
		<body>
        <?php include "_nav.php" ?>
			
			<main>
			
			<div id = "carouselDIV">
			<img id = "left-arrow" class = "arrows" src ="images/left-arrow.png" onclick = "carousel(-1)" alt = "arrow"> 
			<img id = "right-arrow" class = "arrows" src = "images/right-arrow.png" onclick = "carousel(1)" alt = "arrow">
			 <img class = "carousel"
        srcset="images/MB_1100.jpg 1100w,
                images/MB_800.jpg 800w,
                images/MB_500.jpg 500w"
        sizes="175vw"
        src="images/MB_1100.jpg"
        alt="responsive image">
		</div>
			Check out our trails!

			
			<img class = "carousel"  srcset="images/nohands_1100.jpg 1100w,
                images/nohands_800.jpg 800w,
                images/nohands_500.jpg 500w"
        sizes="175vw"
        src="images/nohands_1100.jpg"
        alt="responsive image">
			
			<div class= "carouselLabel">
			Take your riding to the next level! 
  </div>
			
			<div id = "image4" class = "carousel"><img alt = "alt" src = "images/MB.jpg"></div>
			<div class= "carouselLabel">
			Check out our sales!
  </div>
			<div id = "image5" class = "carousel"><img  alt = "alt" src = "images/specialized.jpg"></div>
			<div class= "carouselLabel">
			Check out our trails!
  </div>
			<div id = "image6" class = "carousel"><img alt = "alt" src = "images/repair.jpg"></div>
			<div class= "carouselLabel">
			Check out our trails!
  </div>
  
  <div id = "image7" class = "carousel"><img  alt = "alt" src = "images/sprocket.jpg"></div>
			<div class= "carouselLabel">
			Check out our trails!
  </div>
			
			
			
			</main>
			<?php include '_footer.php' ?>
		</body>
		<script src = "scripts/home.js"></script>
</html>
			