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


.next_slide
{
  background-color:green;
  height:100px;
  width:100px;
  border-radius:50px;
  position:absolute;
  margin-left:1300px;
}


.prev_slide
{
  background-color:blue;
  height:100px;
  width:100px;
  border-radius:50px;
  position:absolute;
  margin-left:1100px;
}


.text_info0
{
  text-transform:uppercase;


}


.unique_logo_display
{
  margin: 0;
 
  

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

    

    <div class="all_store_container">


 
    
    </div>
     <div id="next_slide"> </div>
 
 
    </section><!-- End Hero -->

  </li>
  <li style=" height: 100%; float: left; width:1600px; background-color:E6FFFA; ">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container">

      
      
    
    </div>
     <div clss="next_slide"> </div>
     <div clss="prev_slide"> </div>
 
 
    </section><!-- End Hero -->

  </li>
  <li style=" height: 100%; float: left; width:1600px; background-color:E6FFFA; margin-right:200px;">

    <section id="hero" class="d-flex align-items-center">

    

   
    
    </div>
    
 
 
    </section><!-- End Hero -->

  </li>

</ul>
<a id="prev" href="#">&#8810;</a>
  <a id="next" href="#">&#8811;</a>
</div>


<div class="next_slide"> </div>
<div class="prev_slide"> </div>
</body>

</html>

<?php  $index_num = 0; ;?>
<?php  $z_index_num = 1000;?>

<?php  foreach($all_manual_stores as $row) : ?>


  <script>
//PASTER HERE
    var all_container = document.querySelector(".all_store_container")

   
    all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display' style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'> Saimer</div> </div> "

   var box =  document.querySelector(".uniqueStore<?php echo $index_num;?>");
  box.style.zIndex = "<?php echo $z_index_num;?>";

  <?php  $z_index_num--;?>

   var info_box =  document.querySelector(".store_info_box<?php echo $index_num;?>");
   info_box.style.zIndex = "<?php echo $z_index_num;?>";

  </script>

<?php  $z_index_num--;?>
<?php  $index_num++;?>

<?php endforeach;?>









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