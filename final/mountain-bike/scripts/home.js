var slideIndex = 0;
var offset = 0;
var x = document.getElementsByClassName('carousel');
var y = document.getElementsByClassName('carouselLabel');

carousel(offset);

function carousel(offset) {
    var i;
	var j;
	console.log(y.length);
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
	  }
	  
	  for (j = 0; j < y.length; j++) {
      y[j].style.display = "none"; 
	  }
	  
    slideIndex+= offset;
	console.log(slideIndex);
    if (slideIndex > x.length || slideIndex == 0 ) {slideIndex = 1} 
	if(slideIndex == -1) {
		slideIndex = x.length;
	}
    x[slideIndex-1].style.display = "block"; 
	y[slideIndex-1].style.display = "block";
}