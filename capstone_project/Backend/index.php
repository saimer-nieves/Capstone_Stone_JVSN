<?php



session_start(); 

include "../Model/model_add_merchant_store.php";
 $index_num = 0;
$all_manual_stores = get_merchant_stores(4);



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



  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php 
    include "../includes/back_customer_nav.php";

  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div id="main_store1"> 

        <!-- Flickity HTML init -->
        <div class="gallery js-flickity"
          data-flickity-options='{ "wrapAround": true }'>
         
          <div class="gallery-cell galcel1">


                <div class="store1 store_sizing"  onmouseover="mouseOver100()" onmouseout="fade_exit()" ></div>
                <div class="store_detail">Jc Penny store</div>
                
                <div class="store2 store_sizing"  onmouseover="mouseOver100()" onmouseout="fade_exit()" ></div>
                <div class="store_detail">Jc Penny store</div>
              
      






          </div>
          <div class="gallery-cell galcel3"></div>
          <div class="gallery-cell galcel4"></div>
          <div class="gallery-cell galcel5"></div>
        </div>
    
      
    </div>
 
  </section><!-- End Hero -->

  <main id="main"  onmouseover="mouseOver1()">

   
   

    

    


  </main><!-- End #main -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
 
  </section><!-- End Hero -->
  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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

</body>

</html>


<script>

      var store1= document.querySelector(".galcel1");
      var store_box =  document.createElement("div");
      store_box.setAttribute("class","store1 store_sizing ");

          console.log(store1)
      
   



</script>












<script>



function mouseOver10() {
  $(".new_promotion").slideDown(500);
}



</script>


<?php for ( $x=0; $x<10; $x++):?>
      <script>  

      var new_promotion_box = document.querySelector(".new_promotion");
        $(document).ready(function(){
          var count = 0;
          $(".bid<?php echo $x;?>").click(function(){
            
            $(".all_pid").slideUp();
            
            
            if(count == 0)
            {
            
              $(".new_promotion").slideDown(500);
              $(".new_store_text_div").slideDown(500);
              $(".pid<?php echo $x;?>").slideDown(500);
              $("#promotion_div_box").slideDown(500);
              
              
              
              if(new_promotion_box.style.opacity < 1)
              {
                var opacity= opacity + 0.01;
                new_promotion_box.style.opacity= opacity;
              }
              
              
              
              
              
              count++;





            }
            else if(count == 1)
            {
            
              if(new_promotion_box.style.opacity > 0)
              {
                var opacity= opacity - 0.1;
                new_promotion_box.style.opacity= opacity;
              }
              $(".new_promotion").slideUp(500);
              $(".new_store_text_div").slideUp(500);
              $(".pid<?php echo $x;?>").slideUp();
              $("#promotion_div_box").slideUp();
              count--;
            }
          });

          
        
        
        })
        </script>
<?php endfor;?>