<?php



session_start(); 

include "../Model/model_add_merchant_store.php";

include "../Model/model_promotions.php";
include "../Model/model_subscriptions.php";

$all_manual_stores = get_all_admin_stores(0);
$all_created_stores = get_all_stores(0);




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
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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

  background-color:none;
  width:1200px;
  height:420px;
  margin-left:60px;
  position:absolute;
}

.all_created_store_container
{

  background-color:none;
  width:1200px;
  height:420px;
  margin-left:60px;
  position:absolute;
}



.unique_store_OUTER
{
  background-color:none;
  padding:10px;
  margin-right:35px;
  float:left;
  margin:10px;
  position:relative;
  height:180px;
  width:290px;
  margin-top:15px;
  margin-left:0px;
}
.unique_store
{
  background-color:none;
  width:250px;
  height:150px;
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
  height:60px;
  width:50px;
  border-radius:50px;
  position:absolute;
  margin-top:270px;
  margin-left:1250px;
  z-index:1001;
}


.prev_slide , .prev_slide2
{
  background-color:blue;
  height:50px;
  width:50px;
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


.description
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;

  font-size: 15px;
}


.app-coverbtn
{
    position: absolute;
  
    width: 50px;
    height: 50px;
    margin:0px;
    background-color: .fff;
    border-radius: 50%;
    box-shadow: 0 0 0 8px .feeeed;
    overflow: hidden;
    z-index:9999;
}

.checkboxbtn
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin: 0;
    opacity: 0;
    z-index: 3;
    background-color:red;
}

.bin-iconbtn
{
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    width: 42px;
    height: 58px;
    margin: -29px auto 0 auto;
    border-radius: 50%;
    z-index: 2;
}

.lidbtn
{
    position: relative;
    width: 50px;
    height: 4px;
    left: -4px;
    border-radius: 4px;
}

.lidbtn:before
{
    content: '';
    position: absolute;
    top: -4px;
    right: 0;
    left: 0;
    width: 10px;
    height: 6px;
    margin: 0 auto;
    border-radius: 10px 10px 0 0;
}

.boxbtn
{
    position: relative;
    height: 52px;
    margin-top: 2px;
    border-radius: 0 0 8px 8px;
  
}

.box-innerbtn
{
    position: relative;
    top: 4px;
    width: 34px;
    height: 44px;
    margin: 0 auto;
    background-color: .fff;
    border-radius: 0 0 5px 5px;
}

.bin-linesbtn
{
    position: relative;
    top: 7px;
    margin: 0 auto;
}

.bin-linesbtn, .bin-linesbtn:before, .bin-linesbtn:after
{
    width: 3px;
    height: 30px;
    border-radius: 4px;
}

.bin-linesbtn:before, .bin-linesbtn:after
{
    content: '';
    position: absolute;
}

.bin-linesbtn:before
{
    left: -10px;
}

.bin-linesbtn:after
{
    left: 10px;
}

.layerbtn
{
    position: absolute;
    right: -0;

    width: 0;
    height: 0;
    background-image: url('../images/minus_unsub.png');
    background-size:50px;
    border-radius: 50%;
    transition: 0.25s ease all;
    
}

.lidbtn, .lidbtn:before, .boxbtn, .bin-linesbtn, .bin-linesbtn:before, .bin-linesbtn:after
{
    background-color: .F44336;
    transition: 0.2s ease background-color;
}

.checkboxbtn:checked ~ .bin-iconbtn .lidbtn, .checkboxbtn:checked ~ .bin-iconbtn .lidbtn:before, .checkboxbtn:checked ~ .bin-iconbtn .boxbtn, .checkboxbtn:checked ~ .bin-icon .box-innerbtn
{
    background-color: .fff;
}

.checkboxbtn:checked ~ .bin-iconbtn .bin-linesbtn, .checkboxbtn:checked ~ .bin-iconbtn .bin-linesbtn:before, .checkboxbtn:checked ~ .bin-iconbtn .bin-linesbtn:after
{
    background-color: .03A9F4;
}

.checkboxbtn:checked + .bin-iconbtn .boxbtn
{
    animation: shake 0.2s ease 0.1s;
}

.checkboxbtn:checked + .bin-iconbtn .lidbtn
{
    animation: lift-up 0.8s ease 0.1s, shake_u 0.8s ease 0.1s, shake_l 0.2s ease 0.8s;
}

.checkboxbtn:checked ~ .layerbtn
{
    width: 50px;
    height: 60px;
}

@keyframes shake
{
    0%{  transform: rotateZ(3deg); }
    25%{  transform: rotateZ(0);}
    75%{ transform: rotateZ(-3deg); }
    100%{ transform: rotateZ(0); }
}

@keyframes lift-up
{
    0%{ top:0; }
    50%{ top:-35px;}
    100%{ top:0; }
}

@keyframes shake_u
{
    0%{ transform: rotateZ(0); }
    25%{ transform:rotateZ(-15deg); }
    50%{ transform:rotateZ(0deg); }
    75%{ transform:rotateZ(15deg); }
    100%{ transform:rotateZ(0); }
}

@keyframes shake_l
{
    0%{ transform:rotateZ(0); }
    80%{ transform:rotateZ(3deg); }
    90%{ transform:rotateZ(-3deg); }
    100%{ transform:rotateZ(0); }
}

.unsub_content
{

}

.all_created_store_container {
  margin-top:900px;
}


.pressed_btn_txt 
{
  display:none;
}


.name_box_txt{
  display:none;
}



.store_ID
{
  display:none;
}


.button_son 
{
  display:none;
}
  </style>
</head>












<body style=' background-color:rgb(0,0,0,0.75); height:auto;'>

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


  <li style=" height: 100%; float: left; width:1380px; background-color:none; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container all_store_container0">


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>
  <li style=" height: 100%; float: left; width:1280px; background-color:none; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_store_container all_store_container1">


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>

  <li style=" height: 100%; float: left; width:1580px; background-color:none; margin-right:0px;">

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
<section id="about" class="about" style="padding:none; height:auto; width:100%; background-color:rgba(0,0,0,0.5);">

  <div style='background-color:blue; margin:20px; height:360px; width:610px; float:left; background-position: center  !important; background-repeat: no-repeat   !important; background-size: cover   !important; background-image:url(../images/promotion_photo.jpg)'>
  
  </div>
  
  
  </div>







  <div style=' height:400px; width:650px; float:left;' class='description'>

    <h4 >

     <h2> Where does it come from?</h2>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and E
<br><br>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cite
      
    </h4>

  </div>


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


  <li style=" height: auto; float: left; width:1400px; background-color:E6FFFA; margin-right:0px;">

    <section id="hero" class="d-flex align-items-center">

    

    <div class="all_created_store_container " style='width:1200px; background-color:none;'>


 
    
    </div>
     
 
 
    </section><!-- End Hero -->

  </li>
  
  
</ul>


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
        all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display' style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'><form name='ContactForm' method='post' action=''> <div class='form-group'> <label for='name' style='display:none;'>Name:</label> <input type='text' style='display:none;' class='form-control name_box_txt'> </div> <button type='submit'  style='display:none;'  class='btn button_son btn-default<?php echo $index_num;?>'>Submit</button> <input type='text' class='pressed_btn_txt pressed_btn_txt<?php echo $index_num;?>  name<?php echo $index_num;?>' value='0'>  <input type='text' class='store_ID admin_store_ID<?php echo $index_num;?>' value=<?php echo $row['admin_store_ID'];?> > <div class='subscribe_outershell subscribe_outershell<?php echo $index_num;?>'> <div class='app-coverbtn app-coverbtn<?php echo $index_num;?>'> <div class='unsub_content unsub_content<?php echo $index_num;?>'> <input type='checkbox' class='checkboxbtn checkboxbtn<?php echo $index_num;?>'> <img src='../images/subscribe_plus.png' alt='plus' class ='plus_pic' style='position:absolute; height:50px;'> <div class='layerbtn layerbtn<?php echo $index_num;?>'></div> </div></div></div></form></div> </div> "

      <?php endif;?>

      
    <?php if( $index_num < 16 &&  $index_num >= 8):?>
      var all_container2 = document.querySelector(".all_store_container1")
        all_container = all_container2
        all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display' style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'><form name='ContactForm' method='post' action=''> <div class='form-group'> <label style='display:none;' for='name'>Name:</label> <input style='display:none;' type='text' class='form-control name_box_txt'> </div> <button type='submit'  style='display:none;'  class='btn button_son btn-default<?php echo $index_num;?>'>Submit</button> <input type='text' class='pressed_btn_txt pressed_btn_txt<?php echo $index_num;?>  name<?php echo $index_num;?>' value='0'>  <input type='text' class='store_ID admin_store_ID<?php echo $index_num;?>' value=<?php echo $row['admin_store_ID'];?> > <div class='subscribe_outershell subscribe_outershell<?php echo $index_num;?>'> <div class='app-coverbtn app-coverbtn<?php echo $index_num;?>'> <div class='unsub_content unsub_content<?php echo $index_num;?>'> <input type='checkbox' class='checkboxbtn checkboxbtn<?php echo $index_num;?>'> <img src='../images/subscribe_plus.png' alt='plus' class ='plus_pic' style='position:absolute; height:50px;'> <div class='layerbtn layerbtn<?php echo $index_num;?>'></div> </div></div></div></form></div> </div> "

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








     
<?php  $created_index_num = 0; ?>
<?php  $created_store_container = 0; ?>
<?php  $created_z_index_num = 1000;?>
<?php $box_sizing = 820;?>


  
<?php  foreach($all_created_stores as $row) : ?>
    
        var created_all_container1 = document.querySelector(".all_created_store_container")
        created_all_container1.style.height= '<?php echo $box_sizing;?>px'
      //  all_container.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store uniqueStore<?php echo $index_num;?>  unique_logo_display' style='background-image:url(../images/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box store_info_box<?php echo $index_num;?> text_info<?php echo $index_num;?>'> </div> </div> "

        created_all_container1.innerHTML += " <div class='unique_store_OUTER'> <div class='unique_store created_uniqueStore<?php echo $created_index_num;?>  unique_logo_display' style='background-image:url(../Backend/uploaded_files/<?php echo $row['store_img_logo'];?>); ' ></div> <div class='store_info_box created_store_info_box<?php echo $created_index_num;?> created_text_info<?php echo $created_index_num;?>'> <input type='text' class='pressed_btn_txt created_pressed_btn_txt<?php echo $created_index_num;?>' value='0'> <div class='subscribe_outershell subscribe_outershell<?php echo $created_index_num;?>'> <div class='app-coverbtn created_app-coverbtn<?php echo $created_index_num;?>'> <div class='unsub_content created_unsub_content<?php echo $created_index_num;?>'> <input type='checkbox' class='checkboxbtn checkboxbtn<?php echo $created_index_num;?>'> <img src='../images/subscribe_plus.png' alt='plus' class ='plus_pic' style='position:absolute; height:50px;'> <div class='layerbtn layerbtn<?php echo $created_index_num;?>'></div> </div></div></div></div> </div> "
                                        

 


      var created_box =  document.querySelector(".created_uniqueStore<?php echo $created_index_num;?>");
      created_box.style.zIndex = "<?php echo $created_z_index_num;?>";

      <?php  $created_z_index_num--;?>

      var created_info_box =  document.querySelector(".created_store_info_box<?php echo $created_index_num;?>");
      created_info_box.style.zIndex = "<?php echo $created_z_index_num;?>";



    <?php  $created_z_index_num--;?>
    <?php  $created_index_num++;?>
    <?php $box_sizing = $box_sizing + 50;?>

    <?php endforeach;?>











  

 
    

    
    














  </script>









<script>

<?php  $index_num_for = 0; ;?>
<?php  foreach($all_manual_stores as $row) : ?>

var store_info_box = document.querySelector(".store_info_box<?php echo $index_num_for;?>")
var text_info = document.querySelector(".text_info0")
      $('.uniqueStore<?php echo $index_num_for;?>').hover(function(e) {

        console.log("saimer right")
        store_info_box.style.display = "block"
      

                  e.preventDefault();
                  $('.store_info_box<?php echo $index_num_for;?>').animate(
                    {
                      'margin-left' : '252px' ,
                    
                      
                    },
                    {
                      easing: 'linear',
                      duration: 200,
                      complete: console.log("completed inside store logo")

                    }
                  );
                
                

      } 

      );

      $('.store_info_box<?php echo $index_num_for;?>').hover(function(e) {

      console.log("saimer inside info from info")
      store_info_box.style.display = "block"

              
              

      } ,


function(e) {


console.log("saimer right")
store_info_box.style.display = "block"


          e.preventDefault();
          $('.store_info_box<?php echo $index_num_for;?>').animate(
            {
              'margin-left' : '0px' ,
            
              
            },
            {
              easing: 'linear',
              duration: 200,
              complete: console.log("completed inside info")

            }
          );
        
        

} 


);




      <?php  $index_num_for++;?>
<?php endforeach;?>


</script>



  
      
  


<?php  $created_index_num_for = 0;?>


<?php  foreach($all_created_stores as $row) : ?>


<script>

var created_store_info_box = document.querySelector(".created_store_info_box<?php echo $created_index_num_for;?>")
var created_text_info = document.querySelector(".created_text_info<?php echo $created_index_num_for;?>")
      $('.created_uniqueStore<?php echo $created_index_num_for;?>').hover(function(e) {

        console.log("saimer on the new store")
        created_store_info_box.style.display = "block"
      

                  e.preventDefault();
                  $('.created_store_info_box<?php echo $created_index_num_for;?>').animate(
                    {
                      'margin-left' : '252px' ,
                    
                      
                    },
                    {
                      easing: 'linear',
                      duration: 200,
                      complete: console.log("completed inside store")

                    }
                  );
                
                

      } 
      );


//--------------------------------
$('.created_store_info_box<?php echo $created_index_num_for;?>').hover(function(e) {

console.log("saimer on the new store")
created_store_info_box.style.display = "block"


          e.preventDefault();
          $('.created_store_info_box<?php echo $created_index_num_for;?>').animate(
            {
              'margin-left' : '252px' ,
            
              
            },
            {
              easing: 'linear',
              duration: 200,
              complete: console.log("completed inside info")

            }
          );
        
        

        }

        ,
      
      
          function(e) {

      console.log("saimer right")
      created_store_info_box.style.display = "block"
                e.preventDefault();
                $('.created_store_info_box<?php echo $created_index_num_for;?>').animate(
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


<?php  $created_index_num_for++;?>
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


    //container.innerHTML += " <div class='carousel-inner' role='listbox'> <!-- Slide One - Set the background image for this slide in the line below --> <div class='carousel-item active' style='background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')'> <div class='carousel-caption d-none d-md-block'> <h2 class='display-4'>First Slide</h2> <p class='lead'>This is a description for the first slide.</p> </div> </div>"


</script>


  
<?php  $our_index_num = 0; ?>
<?php  $store_container = 0; ?>
<?php  $z_index_num = 1000;?>


<?php foreach($all_manual_stores as $row):?>
<script>



var checkbox<?php echo $our_index_num;?>  = document.querySelector(".app-coverbtn<?php echo $our_index_num;?> ");
console.log(checkbox<?php echo $our_index_num;?> )
var pressed_btn_txt<?php echo $our_index_num;?>  = document.querySelector(".pressed_btn_txt<?php echo $our_index_num;?> ");
console.log(pressed_btn_txt<?php echo $our_index_num;?> )
var unsub_content<?php echo $our_index_num;?>  = document.querySelector(".unsub_content<?php echo $our_index_num;?> ");
var plus_pic<?php echo $our_index_num;?>  = document.querySelector(".plus_pic<?php echo $our_index_num;?> ");


  checkbox<?php echo $our_index_num;?>.addEventListener('click', function() {

    if(pressed_btn_txt<?php echo $our_index_num;?>.value == 0)
    {
   
      pressed_btn_txt<?php echo $our_index_num;?>.value = 1
      console.log('here1')
      unsub_content<?php echo $our_index_num;?>.style.display = 'block'
      return
    }

    if(pressed_btn_txt<?php echo $our_index_num;?>.value == 1)
    {
   
      pressed_btn_txt<?php echo $our_index_num;?>.value = 0
      console.log('here2')
   

    }
   
   

});





</script>

<?php  $our_index_num++;?>

<?php endforeach;?>
























<?php  $ourcreated__index_num = 0; ?>
<?php  $store_container = 0; ?>
<?php  $z_index_num = 1000;?>


<?php foreach($all_manual_stores as $row):?>
<script>



var created_checkbox<?php echo $ourcreated__index_num;?>  = document.querySelector(".created_app-coverbtn<?php echo $ourcreated__index_num;?> ");

var created_pressed_btn_txt<?php echo $ourcreated__index_num;?>  = document.querySelector(".created_pressed_btn_txt<?php echo $ourcreated__index_num;?> ");

var created_unsub_content<?php echo $ourcreated__index_num;?>  = document.querySelector(".created_unsub_content<?php echo $ourcreated__index_num;?> ");
var plus_pic<?php echo $ourcreated__index_num;?>  = document.querySelector(".plus_pic<?php echo $ourcreated__index_num;?> ");


created_checkbox<?php echo $ourcreated__index_num;?>.addEventListener('click', function() {

    if(created_pressed_btn_txt<?php echo $ourcreated__index_num;?>.value == 0)
    {
   
      created_pressed_btn_txt<?php echo $ourcreated__index_num;?>.value = 1
      console.log('here1')
      created_unsub_content<?php echo $ourcreated__index_num;?>.style.display = 'block'
      return
    }

    if(created_pressed_btn_txt<?php echo $ourcreated__index_num;?>.value == 1)
    {
   
      created_pressed_btn_txt<?php echo $ourcreated__index_num;?>.value = 0
      console.log('here2')
   

    }
   
   

});





</script>

<?php  $ourcreated__index_num++;?>

<?php endforeach;?>





<?php  $ajax_index_num = 0; ?>




  
<?php  foreach($all_manual_stores as $row) : ?>

<script>
$(document).ready(function() {
	var delay = 2000;
	$('.btn-default<?php echo $ajax_index_num;?>').click(function(e){
		e.preventDefault();
    console.log('you ajax me')
		var name<?php echo $ajax_index_num;?> = $('.name<?php echo $ajax_index_num;?>').val();
		var admin<?php echo $ajax_index_num;?> = $('.admin_store_ID<?php echo $ajax_index_num;?>').val();

    console.log('inside ajax')
    console.log(admin<?php echo $ajax_index_num;?>)
    
		
					
			$.ajax
			({
             type: "POST",
			 url: "ajax.php",
       data: 'name=' + 'saimer' ,
            
			 beforeSend: function() {
		
			 },		 
             success: function(data)
			 {
				 setTimeout(function() {
                  
                }, delay);
			
             }
			 });
		
	});

			
});

//Email validation Function	
// function isValidEmailAddress(emailAddress) {
//     var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
//     return pattern.test(emailAddress);
// };
</script>
<?php  $ajax_index_num++; ?>
<?php endforeach;?>