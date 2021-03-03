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
  <header id="header" class="align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><span>Bethany</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="../Backend/assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>

            <li><a href="sign_up.php">BI W</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

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

   
   

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Testimonials</h2>
              <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <div class=" "  style="background-color:green; width:730px;" >
                <img src="../images/air_jordan_ad.jpg" class="store_pic_ad">
                </div>

                <div class="">
                 
                </div>

            </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    


  </main><!-- End #main -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
 
  </section><!-- End Hero -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Bethany </h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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