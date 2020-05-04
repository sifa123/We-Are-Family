

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>We Are Family</title>
  <link rel="stylesheet" type="text/css" href="Gallery.css">
</head>
<body>

<h2 style="text-align:center"><a href="index.php">We Are Family</a></h2>



<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 11</div>
    <img src="Bridal Heritage (55).jpg" style="width:100%;height: 800px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 11</div>
    <img src="fb2.jpg" style="width:100%;height: 400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 11</div>
    <img src="Family.jpg" style="width:100%;height: 700px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 11</div>
    <img src="DSC00758.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 11</div>
    <img src="DSC_7932.JPG" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 11</div>
    <img src="Bridal Heritage (60).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">7 / 11</div>
    <img src="20191213_113544.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 11</div>
    <img src="20200131_213751.jpg" style="width:100%;height: 700px;">
  </div>
  <div class="mySlides">
    <div class="numbertext">9 / 11</div>
    <img src="20200302_193959.jpg" style="width:100%">
    
  </div>
  
<div class="mySlides">
    <div class="numbertext">10 / 11</div>
    <img src="20200306_205243.jpg" style="width:100%;height: 500px">
    
  </div>
  <div class="mySlides">
    <div class="numbertext">10 / 11</div>
    <img src="20200413_154837.jpg" style="width:100%">
    
  </div>
  

  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="Bridal Heritage (55).jpg" style="width:100%" onclick="currentSlide(1)" alt="Sifa">
    </div>
    <div class="column">
      <img class="demo cursor" src="fb2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Awaidha">
    </div>
    <div class="column">
      <img class="demo cursor" src="Family.jpg" style="width:100%" onclick="currentSlide(3)" alt="Family">
    </div>
    <div class="column">
      <img class="demo cursor" src="DSC00758.JPG" style="width:100%" onclick="currentSlide(4)" alt="Again Sifa">
    </div>
    <div class="column">
      <img class="demo cursor" src="DSC_7932.JPG" style="width:100%" onclick="currentSlide(5)" alt="Rakib">
    </div>    
    <div class="column">
      <img class="demo cursor" src="Bridal Heritage (60).jpg" style="width:100%" onclick="currentSlide(6)" alt=" Again Awaidha">
    </div>
    <div class="column">
      <img class="demo cursor" src="20191213_113544.jpg" style="width:100%" onclick="currentSlide(7)" alt="VOOOO">
    </div>
    <div class="column">
      <img class="demo cursor" src="20200131_213751.jpg" style="width:100%" onclick="currentSlide(8)" alt="PiPi and Aazan">
    </div>
    <div class="column">
      <img class="demo cursor" src="20200302_193959.jpg" style="width:100%" onclick="currentSlide(9)" alt="FupuAmma and Abdullah">
    </div>
    <div class="column">
      <img class="demo cursor" src="20200306_205243.jpg" style="width:100%" onclick="currentSlide(10)" alt="PiPi and Ma">
    </div>
    <div class="column">
      <img class="demo cursor" src="20200413_154837.jpg" style="width:100%" onclick="currentSlide(11)" alt="Biriyani">
    </div>
    
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
