<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
  
 
$color1: #00A6ED;
$color2: #FFD966;
$color3: #F71735;
$color4: #89da59;
$color5: #9881F5;
$color6: #19191a;

body {
  margin: 10%;
}


#slider 
{
  position: relative;
  width: 100%;
  height: 600px;
  overflow: hidden;
  box-shadow: 0 0 30px rgba(0,0,0,0.3);
}
  
    

  

  #prev, #next
  {
    width: 50px;
    line-height: 50px;
    border-radius: 50%;
    font-size: 2rem;
    text-shadow: 0 0 20px rgba(0,0,0,0.6);
    text-align: center;
    color: white;
    text-decoration: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: all 150ms ease;
  }

    #prev, #next :hover 
    {
      background-color: rgba(0,0,0,0.5);
      text-shadow: 0;
    }
  
  #prev 
  {  
    left: 10px;
  }
  #next 
  {
    right: 10px;
  }




  
  </style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form action="">
    <input type="text" name="amountUSD" ><br/>
    <input type="text" name="amountNGN" >
   
</form>

<h2 id="sam"  name="amountNGN">sdfds</h2>
</body>
</html>


<script>
function convertCurrency(value) {
    // your calculation here
    return (value );
}
var sam = document.querySelector("#sam"); //get variable to display text
$('[name="amountUSD"]').on('change keyup', function() { //variable that you are typing in
    value = $(this).val();
    sam.innerHTML = value; // variable you push to
})

var responsiveSlider = function() {

var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next = document.getElementById("next");

window.addEventListener('resize', function() {
  sliderWidth = slider.offsetWidth;
});

var prevSlide = function() {
  if(count > 1) {
    count = count - 2;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = 1) {
    count = items - 1;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
};

var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
  }
};

next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});


};

window.onload = function() {
responsiveSlider();  
}




</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>