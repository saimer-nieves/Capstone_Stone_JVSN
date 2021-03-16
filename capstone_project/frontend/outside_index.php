<?php 

include "../includes/header.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Capstone Origin</title>
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


  <style>

body
{}
#hero
{
    background-image:url("../images/main_back2.png");
    padding:0px;
  
}

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

#all_store_logos
{
    width:100%;
    background-color:#e6fffa;
    height:100%;
    position:absolute;

}

.angle_form
{
    
    transform: rotate(60deg);
    position:absolute;
    
    
}

#store1
{
    margin-left:375px;
    top:0px;
    border: 1px solid;
    height:200px;
    box-shadow: -10px 30px 25px black;

  
  
 
}
#store2
{
    margin-left:705px;
    top:540px;
    

    border: 1px solid;
    height:200px;
    box-shadow: -10px 30px 25px black;
}

#store3
{
    margin-left:760px;
    top:175px;
    border: 1px solid;

    box-shadow: -10px 15px 25px black;
  
 
}
#store4
{
    margin-left:820px;
    top:-210px;
    border: 1px solid;

box-shadow: -10px 15px 25px black;
    
}
#store5
{
    margin-left:395px;
    top:550px;
    border: 1px solid;

box-shadow: -10px 15px 25px black;
}
#store6
{
    margin-left:683px;
    top:-100px;
    border: 1px solid;

    box-shadow: -10px 15px 25px black;
 
}

#store8
{
    margin-left:995px;
    top:448px;
    border: 1px solid;


    box-shadow: -10px 15px 25px black;
    
  
}
#store9
{
    margin-left:1085px;
    top:55px;
    border: 1px solid;

    box-shadow: -10px 10px 25px black;
}
#store10
{
    margin-left:1060px;
    top:550px;

}
#store11
{
    margin-left:610px;
    top:270px;

    border: 1px solid;

    box-shadow: -10px 10px 25px black;
   
}
#store12
{
    margin-left:1242px;
    top:0px;
    border: 1px solid;
  
    box-shadow: -10px 10px 25px black;
}

#store14
{
    margin-left:1133px;
    top:315px;
    border: 1px solid;
    
    box-shadow: -10px 30px 25px black;

    
}

#store15
{
    margin-left:170px;
    top:530px;
    border: 1px solid;
    
    box-shadow: -10px 30px 25px black;
  

    
}

#look_up
{
    position:absolute;
    top:200px;
    margin-left:600px;
    
}

#top_bar
{
    opacity:0.5;
    background-color: transparent;
}

.divider
{
    background-color:#53c68c;
    width:100%;
    height:60px;
    margin-bottom:10px;
}
  </style>
</head>

<body>

 <!-- ======= Header ======= -->
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">




    <!--#anim {
  animation-name: colorful;
  animation-duration: 3s;


@keyframes colorful 
  0% 
    background-color: blue;
  
  100% 
    background-color: yellow;
  
-->
        <div id="all_store_logos">

            <div class="angle_form " id="store1"> <img src="../images/jc_2.jpg" style="width:380px; Height:220px;"></div>
            <div class="angle_form" id="store2"> <img src="../images/ae_logo.png" style="width:350px; Height:220px;"></div>
            <div class="angle_form" id="store3"> <img src="../images/gamestop_logo.png" style="width:380px;height:220px;"></div>
            <div class="angle_form" id="store4"> <img src="../images/macy_logo.png" style="width:400px; height:220px;"></div>
            <div class="angle_form" id="store5"> <img src="../images/nike_logo1.jpg" style="width:400px;"></div>
            <div class="angle_form" id="store14"> <img src="../images/gap_logo.jpeg" style="width:380px; height:220px;"></div>
            <div class="angle_form" id="store6"> <img src="../images/cheesecake_logo.jpg" style="width:220px;"></div>
            
            <div class="angle_form" id="store8"> <img src="../images/dairy_queen_logo.png" style="width:220px; height:220px;"></div>
            <div class="angle_form" id="store9"> <img src="../images/cured_collection_logo.jpg" style="width:180px; height:220px;"></div>
            <div class="angle_form" id="store10"> <img src="../images/childrenplace_logo.jpg" style="height:220px;"></div>
            <div class="angle_form" id="store11"> <img src="../images/dave_buster_logo2.jpg" style="width:220px;"></div>
            <div class="angle_form" id="store12"> <img src="../images/dunkin_logo.jpg" style="width:380px; height:220px;"></div>
          
            <div class="angle_form" id="store15"> <img src="../images/cliffbar_logo.jpeg" style="width:150px;"></div>


            
            

        </div>
Luisa Martinez
















 
  </section><!-- End Hero -->
  <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" style="position:absolute; right:740px; top:698px;">
            
            <img src="../images/front_index_pic.PNG" style="width:700px; height:400px; margin-top:80px; margin-left:20px;">

        
      </div>
  <div class="divider"></div>
 <!-- ======= About Section ======= -->
 <section id="about" class="about" style="background-color:#e6fffa;padding:none; height:400px;">
      <div class="container" style="height:400px;">
   
        <div class="row content">
        
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200" style="position:absolute; left:700px;">
         
        </div>

      </div>
    </section><!-- End About Section -->
    <div class="divider"></div>
  <main id="main"  onmouseover="mouseOver1()">

   
   


    


  </main><!-- End #main -->
  
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

         

          <div class="col-lg-2 col-md-6 footer-links">
            <h3 style="font-family:arial black;">ORIGIN</h3>
            <h7 style="font-family:arial black;">99 NEIT ST ,
PROVIDENCE , RI 02860
USA</h7>
           
          </div>

         
         

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
      
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



function mouseOver10() {
  $("#store1_detail1").fadeIn(1000);
}

function mouseOver100() {
  $("#store1_detail2").fadeIn(1000);
}

function fade_exit() {
  $("#store1_detail1").fadeOut(500);
  $("#store1_detail2").fadeOut(500);
}



</script>