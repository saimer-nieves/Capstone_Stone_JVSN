<?php



session_start(); 

include "../Model/model_add_merchant_store.php";

include "../Model/model_promotions.php";
include "../Model/model_subscriptions.php";

$all_manual_stores = get_all_admin_stores(0);




;?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../Backend/assets/img/favicon.png" rel="icon">
  <link href="../Backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../Backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/owl.carousel/../Backend/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../Backend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../Backend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>


#main_store1
{
  background-color:none;
  width:100%;
  padding:10px;
  position:absolute;
}

.store_sizing
{
    height:150px;
    width:300px;
    margin-left:40px;
    margin-bottom:40px;
}
.store_logo
{
  width:100%;
  height:100%;
  padding:0px;
  margin:0px;
}

.store_detail_sizing
{
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}


.store1{

    background-color:yellow;


    float:left;
 
   
    
}

#store1_detail1
{
  display:none;
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}

#store1_detail2
{
  display:none;
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}



.store2{

    background-color:orange;
    float:left;
  
   
}
.store3{

    background-color:blue;
    float:left;

}
.store4{

    background-color:#ddd;
    float:left;

}

.store5{

    background-color:#999;
    float:left;

}
.store6{

    background-color:yellow;
    float:left;

}

.store7{

    background-color:orange;
    float:left;

}
.store8{

    background-color:white;
    float:left;

}


* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
 // background: #EEE;
}

.gallery-cell {
  width: 1400px;
  height: 400px;
  margin-right: 10px;
  //background: #8C8;
  
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  
  line-height: 200px;
  font-size: 80px;
  color: white;
}


.store_pic_ad
{
  width:730px;

}

.store_detail
{
  display:block;
  float:left;
  background-color:red;
  width:100px;
  height:50px;

}


.all_store_container
{

  background-color:red;
  width:1500px;
  height:500px;
  margin-left:60px;
  position:absolute;
}



.unique_store_OUTER
{
  background-color:green;
  padding:10px;
  margin-right:35px;
  float:left;
  margin:10px;
  position:relative;
  height:200px;
  width:330px;
  margin-top:15px;
  margin-left:0px;
}
.unique_store
{
  background-color:blue;
  width:300px;
  height:180px;
  float:left;
  display: block;
  position:absolute;
    z-index: 5;

    
/* Center and scale the image nicely */
background-position: center  !important;
background-repeat: no-repeat   !important;
background-size: cover   !important;
    
}

.store_info_box
{
  width:250px;
  height:100px;
  background-color:yellow;
  
  
  margin-left:0;
position:absolute;
  display: block;
    z-index: 4;


}


.next_slide , .next_slide2
{
  background-color:green;
  height:100px;
  width:100px;
  border-radius:50px;
  position:absolute;
  margin-top:270px;
  margin-left:1450px;
  z-index:1001;
}


.prev_slide , .prev_slide2
{
  background-color:blue;
  height:100px;
  width:100px;
  border-radius:50px;
  position:absolute;
  margin-top:270px;
  margin-left:0px;
  z-index:1001;
}


.text_info0
{
  text-transform:uppercase;


}


.unique_logo_display
{
  margin: 0;
 
  

}
.carousel-item {
  height: 47vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



  </style>
</head>












<body>

  <!-- ======= Header ======= -->
  <?php 
    include "../includes/back_customer_nav.php";

  ?>
  <!-- ======= Hero Section ======= -->



<div id="slider">
  <ul id="slideWrap" style="position: relative;
    list-style: none;
    height: 100%;
    width: 400%;
    padding-left:0px;
    margin: 0;
    transition: all 750ms ease;
    left: 0;"> 


  <li style=" height: 100%; float: left; width:1580px; background-color:E6FFFA; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container all_store_container0">


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>
  <li style=" height: 100%; float: left; width:1580px; background-color:E6FFFA; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container all_store_container1">


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>

  <li style=" height: 100%; float: left; width:1580px; background-color:E6FFFA; margin-right:0px;">

<section id="hero" class="d-flex align-items-center">



<div class="all_store_container all_store_container2">




</div>
 


</section><!-- End Hero -->

</li>
  

</ul>

<div class="next_slide"> </div>
<div class="prev_slide"> </div>
</div>
















<!--NEXT SECTION-->
<section id="about" class="about" style="background-color:red;padding:none; height:auto; width:100%;">

  <div style='background-color:blue; height:600px; width:750px; float:left;'>
  <div id="carouselExampleIndicators" class="carousel slide here_container" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  
  
  </div>







  <div style='background-color:yellow; height:600px; width:750px; float:left;'></div>


</section><!-- End About Section -->



















<div id="slider2">
<ul id="slideWrap2" style="position: relative;
    list-style: none;
    height: 100%;
    width: 400%;
    padding-left:0px;
    margin: 0;
    transition: all 750ms ease;
    left: 0;"> 


  <li style=" height: 100%; float: left; width:1580px; background-color:E6FFFA; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container">


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>
  
  
</ul>


<div class="next_slide2"> </div>
<div class="prev_slide2"> </div>
</div>

</div>


</body>

</html>





  <script>
//PASTER HERE





  
<?php  $index_num = 0; ?>
<?php  $store_container = 0; ?>
<?php  $z_index_num = 1000;?>



  
<?php  foreach($all_manual_stores as $row) : ?>
    <?php if( $index_num < 8 ):?>
        var all_container1 = document.querySelector(".all_store_container0")
        all_container = all_container1
        all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display' style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'> Saimer</div> </div> "

      <?php endif;?>

      
    <?php if( $index_num < 16 &&  $index_num >= 8):?>
      var all_container2 = document.querySelector(".all_store_container1")
        all_container = all_container2
        all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display'  style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'> Saimer</div> </div> "

    <?php endif;?>
     
    <?php if( $index_num < 24 &&  $index_num >= 16):?>
    var all_container3 = document.querySelector(".all_store_container2")

  
  
    <?php endif;?>




      var box =  document.querySelector(".uniqueStore<?php echo $index_num;?>");
      box.style.zIndex = "<?php echo $z_index_num;?>";

      <?php  $z_index_num--;?>

      var info_box =  document.querySelector(".store_info_box<?php echo $index_num;?>");
      info_box.style.zIndex = "<?php echo $z_index_num;?>";



    <?php  $z_index_num--;?>
    <?php  $index_num++;?>

    <?php endforeach;?>











  

 
    

    
    














  </script>







<?php  $index_num_for = 0; ;?>
<?php  foreach($all_manual_stores as $row) : ?>


<script>

var store_info_box = document.querySelector(".store_info_box<?php echo $index_num_for;?>")
var text_info = document.querySelector(".text_info0")
      $('.uniqueStore<?php echo $index_num_for;?>').hover(function(e) {

        console.log("saimer right")
        store_info_box.style.display = "block"
      

                  e.preventDefault();
                  $('.store_info_box<?php echo $index_num_for;?>').animate(
                    {
                      'margin-left' : '300px' ,
                    
                      
                    },
                    {
                      easing: 'linear',
                      duration: 200,
                      complete: console.log("completed completed")

                    }
                  );
                
                

      } ,
      
      
          function(e) {

      console.log("saimer right")
      store_info_box.style.display = "block"
                e.preventDefault();
                $('.store_info_box<?php echo $index_num_for;?>').animate(
                  {
                  
                    'margin-left' : '0' 
                  },
                  {
                    easing: 'linear',
                    duration: 200,
                    complete: console.log("completed completed")

                  }
                );
              
              

      } 
      
      );






</script>


<?php  $index_num_for++;?>
<?php endforeach;?>

  
      
   



</script>


  <!-- Vendor JS Files -->
  <script src="../Backend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Backend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../Backend/assets/vendor/php-email-form/validate.js"></script>
  <script src="../Backend/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../Backend/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../Backend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../Backend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="../Backend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../Backend/assets/vendor/aos/aos.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>


  <!-- Template Main JS File -->
  <script src="../Backend/assets/js/main.js"></script>











<script>




var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next_slide_btn = document.querySelector(".next_slide");
var prev_slide_btn = document.querySelector(".prev_slide");

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





next_slide_btn.addEventListener("click", function() {
  
  nextSlide();

console.log("saimer")
  
  
});
prev_slide_btn.addEventListener("click", function() {
  
  prevSlide();

console.log("saimer")
  
  
});




</script>



<script>






// var nextSlide = function() {
//   if(count < items) {
//     slideList.style.left = "-" + count * sliderWidth + "px";
//     count++;
    
//   }
//   else if(count = items) {
//     slideList.style.left = "0px";
//     count = 1;
    
//   }
// };


// var next_slide_btn = document.getElementById("next_slide");
// next_slide_btn.addEventListener("click", function() {
//   console.log("homie")
//  // nextSlide();

  


  
  
// });


// prev.addEventListener("click", function() {
  
  
//   //prevSlide();
//   console.log("homie prev")
 
  
  
// });



// };







  
 




</script>



<script>




var slider2 = document.getElementById("slider2");
var sliderWidth2 = slider2.offsetWidth;
var slideList2 = document.getElementById("slideWrap2");
var count2 = 1;
var items2 = slideList.querySelectorAll("li").length;
var prev2 = document.getElementById("prev2");
var next_slide_btn2 = document.querySelector(".next_slide2");
var prev_slide_btn2 = document.querySelector(".prev_slide2");

window.addEventListener('resize', function() {
  sliderWidth2 = slider2.offsetWidth;
}); 


var prevSlide2 = function() {
  if(count2 > 1) {
    count2 = count2 - 2;
    slideList2.style.left = "-" + count2 * sliderWidth2 + "px";
    count2++;
  }
  else if(count = 1) {
    count2 = items2 - 1;
    slideList2.style.left = "-" + count2 * sliderWidth2 + "px";
    count2++;
  }
};




var nextSlide2 = function() {
  if(count2 < items2) {
    slideList2.style.left = "-" + count2 * sliderWidth2 + "px";
    count2++;
    
  }
  else if(count2 = items2) {
    slideList2.style.left = "0px";
    count2 = 1;
    
  }
};





next_slide_btn2.addEventListener("click", function() {
  
  nextSlide2();

console.log("saimer")
  
  
});
prev_slide_btn2.addEventListener("click", function() {
  
  prevSlide2();

console.log("saimer")
  
  
});




</script>


<script>
var container = document.querySelector('.here_container')

<?php foreach($all_manual_stores as $row):?>
    //container.innerHTML += " <div class='carousel-inner' role='listbox'> <!-- Slide One - Set the background image for this slide in the line below --> <div class='carousel-item active' style='background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')'> <div class='carousel-caption d-none d-md-block'> <h2 class='display-4'>First Slide</h2> <p class='lead'>This is a description for the first slide.</p> </div> </div>"
<?php endforeach;?>

</script>