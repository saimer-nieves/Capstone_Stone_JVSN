<?php
session_start(); 
$mer_ID= $_SESSION["mer_ID"];
include "../Model/model_add_merchant_store.php";
include "../Model/model_promotions.php";


$all_owned_stores_array = get_merchant_stores($mer_ID);; //get promotions for store 52


if (isset($_POST['big_sale_submit']) )
{
  //STORE ID 52 IS SAMPLE
//TODO MAKE SURE YOU CREATEA A SESSION VARUIABLE WITH THE USER id 
  echo "YESSSSSSSSS";


  $promotion_type = "big sale";
  $promotion_title = filter_input(INPUT_POST, 'big_sale_title');
  $promotion_subheading = filter_input(INPUT_POST, 'big_sale_subheading');
  $promotion_exp_date = filter_input(INPUT_POST, 'big_sale_expire');
  $promotion_address = filter_input(INPUT_POST, 'big_sale_address');
  $promotion_code = filter_input(INPUT_POST, 'big_sale_code');
  $store_ID = filter_input(INPUT_POST, 'store_name');

  
  $results =add_promotions($promotion_type, $promotion_title,$promotion_subheading, $promotion_exp_date, $promotion_address, $promotion_code,$store_ID);
 // $testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);

 header("Location:promotions.php");
}


$message = ''; 







  


 /* $fileName     this is the variable with the regular name of the image*/






$_SESSION['message'] = $message;




?>

<?php 
include "../includes/back_side_nav.php"; // this outputs information and has to be below the header or it wont work

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   

    <style>
    body
    {
      background-color:none;
    }
        #test
        {
            height:200px;
            width:200px;
           
        }

                
        div.upload-wrapper {
        color: black;
        font-weight: bold;
        display: flex;
        }
        

        input[type="submit"] {
        border: 3px solid #555;
        color: black;
        background: #666;
        margin: 10px 0;
        border-radius: 5px;
        font-weight: bold;
        padding: 5px 20px;
        cursor: pointer;
        }
        
        input[type="submit"]:hover {
        background: #555;
        }
        
       
       
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: black;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 12px 22px 13px 21px;
        cursor: pointer;
        border-radius: 5px;
        background-color: #8ebf42;
        font-size: 16px;
        font-weight: bold;
        color: #fff;

        z-index: 4;
      }

      #logo_div
      {
        height:250px;
        width:430px;
        background-color:#53c68c;
        margin-left:200px;
        margin-top:100px;
        
        padding-top:100px;
        padding-left:90px;

        z-index: -3;
      }


      .login{
      position: absolute;
      top: calc(50% - 75px);
      left: calc(50% - 50px);
      height: 150px;
      width: 350px;
      padding: 10px;
      z-index: 2;
    }

    .login input[type=text]{
      width: 250px;
      height: 30px;
      background: transparent;
      border: 1px solid black;
      border-radius: 2px;
      color: black;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 4px;
    }

    .login input[type=password]{
      width: 250px;
      height: 30px;
      background: transparent;
      border: 1px solid black;
      border-radius: 2px;
      color: black;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 4px;
      margin-top: 10px;
    }

    .login input[type=button]{
      width: 260px;
      height: 35px;
      background: #fff;
      border: 1px solid #fff;
      cursor: pointer;
      border-radius: 2px;
      color: black;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 6px;
      margin-top: 10px;
    }

    .login input[type=submit]:hover{
      opacity: 0.9;
    }

    .login input[type=submit]:active{
      opacity: 0.7;
    }

    .login input[type=text]:focus{
      outline: none;
      border: 1px solid black

    }

    .login input[type=password]:focus{
      outline: none;
      border: 1px solid black;
    }


    .login input[type=password]:focus{
      outline: none;
      border: 1px solid black;
    }

    .login input[type=button]:focus{
      outline: none;
    }

    ::-webkit-input-placeholder{
      color: rgba(255,255,255,0.6);
    }

    ::-moz-input-placeholder{
      color: rgba(255,255,255,0.6);
    }

    #log_in
    {
        background-color:none;
        margin-top:200px;
        height:500px;
        


    }

    #images_holder
    {
      height:100px;
      width:600px;
      background-color:none;
      transform: rotate3d(20, 20, 5,55deg);
      margin-left:850px;
      margin-top:100px;


    
    }
    #divider_Cus_Bus
    {transform: rotate3d(20, 20, 5,50deg);
      height:200px;
      width:700px;
      background-color:red;
    position:absolute;
    left:0px;
    top:175px;
    }
    #divider_Cus_Bus_bottom
    {transform: rotate3d(20, 20, 5,50deg);
      height:200px;
      width:700px;
      background-color:red;
    position:absolute;
    left:720px;
    top:425px;
    }

    .img_design
    { border: 1px solid;

        box-shadow: 1px 10px 10px black;

      height:70px;
      float:left;
      margin:5px 5px 10px 0px;

    }

    #txt_background
    {
      background-color:red;
      height:250px;
      width:600px;
      position:absolute;
      top:300px;
      left:400px;
      border-radius:50px;

      
    }



    #email_error
    {
      position:absolute;
      margin-left:10px;
      color:white;
    }


    #password_error
    {
      position:absolute;
      margin-left:10px;

      margin-top:15px;
      color:white;
    }

    #text_boxes_div
    {
      background-color:none;
      width:350px;
      height:200px;
      
      margin-top:100px;
      float:left;
    }


    #uploading_btn
    {
      margin-left:70px;
      margin-top:70px;
      width:200px;
    }


    .button_spot_position
    {
      position:absolute;
      margin-top:205px;
      left:300px;
    }

    .button_returns {
  background-color: none;
  border: 5px solid #4CAF50;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


#all_promotions
{
  background-color:red;
  width:980px;
  height:530px;
  margin-left:200px;
  margin-top:100px;
  padding:15px;
  position:absolute;
}

#selected_div
{
  background-color:#e7fde2;
  width:1480px;
  height:530px;
  
  margin-top:100px;
  padding:15px;
  position:absolute;
  display:none;
  

}

#coupon
{ background-color:blue;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;

}


#Big_Sale
{ background-color:green;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;
}

#Info
{ background-color:yellow;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;
}

.text_display
{
  margin-top:200px;
}

#selected_div 
{

  opacity: 1;
  -webkit-transition: opacity 0.3s ;
  -moz-transition: opacity 0.3s ;
  -ms-transition: opacity 0.3s ;
  -o-transition: opacity 0.3s ;
  transition: opacity 0.3;
  transition:all 2s;
  
}

#all_promotions 
{

  opacity: 1;
  -webkit-transition: opacity 0.3s ease-in-out;
  -moz-transition: opacity 0.3s ease-in-out;
  -ms-transition: opacity 0.3s ease-in-out;
  -o-transition: opacity 0.3s ease-in-out;
  transition: opacity 0.3 ease-in-out;
}

#all_promotions.fade 
{
  opacity:0;
  transition: all 2s;
}
#selected_div.fade 
{
  opacity:0;
  transition: all 2s;
}


#all_promotions.unfade 
{
  opacity:1;
  transition: all 2s;
}
#selected_div.unfade 
{
  opacity:1;
  transition: all 2s;
}


.lbl_
{
  background-color:red;
  width:300px;
  height:500px;
  float:left;
  text-align:center;
  padding-top:200px;
}


.form_
{
  background-color:none;
  width:645px;
  
  float:left;
  margin-top:20px;
}


.promotion_title
{
  
}




#coupon_selected
{
display:none;
}

#big_sale_selected
{
display:block;

}

#return_menu_btn
{
  color:#53c68c;
  transition:all 1s;
  
  
 
 
}

#return_menu_btn :hover
{
  color:red;
  
  transition:all 1s;
 
}
#left_icon_container
{
  position:absolute;
  margin-left:150px;
  margin-top:300px;
  display:none;
  
}




/*slider */

#slider 
{
  position: relative;
  width: 100%;
  height: 1000px;
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

  #display_sample_coupon
  {
    height:200px;
    width:340px;
    background-color:white;
    float:left;
    margin-top:150px;
    margin-left:20px;
    padding:20px;
    

  }

.main_promotion
{
  float:left;
}


.font_created_by_us
{
  
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  
}

.push_side
{
  margin-left:50px;
}

.form_boxes
{
  margin-left:50px;

  margin-top:40px;
}

#store2
{
  font-family: Arial Black, Arial, Helvetica;
  color:green;
  font-size: 20px;
  text-align:center;
}
#title2
{
  font-family: Arial Black, Arial, Helvetica;
  color:Red;
  font-size: 30px;
  text-align:center;
}
#expire2
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
}
#description2
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  margin-top:10px;
}
#address2
{
  font-family: Arial Black, Arial, Helvetica;
  color:grey;
  font-size: 10px;
  text-align:center;
  margin-top:30px;
 
}

.button_style_by_us
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  background-color:#53C68C;
  font-size: 12px;
  border-radius:20px;

  padding:20px;
  border: none;
  outline:none;
  position:absolute;
  margin-left:750px;
 
}

#coupon_bar
{
  margin-left:70px;
  height:40px;
}

#code
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  margin-top:10px;
}
#title
{
  font-family: Arial Black, Arial, Helvetica;
  color:Red;
  font-size: 30px;
  text-align:center;
}
#subheading
{
  font-family: Arial Black, Arial, Helvetica;
  color:Red;
  font-size: 14px;
  text-align:center;
}

#expire
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
}
  </style>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
  ?>
<a href="../Backend/promotions.php" class="button_returns" style=" margin-left:200px; margin-top:50px;position:absolute; border-radius:10px;">

  <img src="../images/left_return_arrow.png" style="height:30px; ">
  </a>

  
<!-- TESTING PURPOSES  <button>Start Animation</button>-->


<div id="slider">
  <ul id="slideWrap" style="position: relative;
    list-style: none;
    height: 100%;
    width: 9999%;
    padding-left:0px;
    margin: 0;
    transition: all 750ms ease;
    left: 0;"> 
   
    <li style=" height: 100%; float: left;width:1360px; background-color:Red;  "> 
              <div id="all_promotions">

          <!-- TESTING PURPOSES  <div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>  -->
          <!--*****************************************************************************************-->
          <a href="#" id="a_coupon" >
              <div id="coupon">


              <h4 class="text_display"> coupon</h4>


              </div>
            </a>
          <!--*****************************************************************************************-->
          <a href="#" id="a_big_sale">
              <div id="Big_Sale">



              <h4 class="text_display"> Big_Sale</h4>

              </div>
          </a>

            <!--*****************************************************************************************-->
          <a href="#">
              <div id="Info">




              <h4 class="text_display"> Info</h4>

              </div>
          </a>
          <!--*****************************************************************************************-->
          </div>

         

              
              
              
              
              
              
    
    </li>
    <li style=" height: 100%; float: left; width:1400px; background-color:green;">
    
    
              <div id="selected_div">


          <div id="coupon_selected">
            <div class = "main_promotion">
                  <div class="lbl_" >
                  <h4 class="text-light promotion_title">Coupon</h4>
                  </div>
                  <div class="form_">

                              <form method="post" action = "<?php $_PHP_SELF ?>">

                      
                                      
                                      
                                        
                                                  
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">Title: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 80 class="form-control text_box"  name="coupon_title" required>
                                                      </div>
                                                    </div>
                                                    
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">Subheading  </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text"  class="form-control text_box" name="coupon_subheading">
                                                      </div>
                                                    </div>
                                                    
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">Expire</h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="date"  class="form-control text_box" name="coupon_expire">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">address </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="coupon_address" >
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">code </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="coupon_code" >
                                                      </div>
                                                    </div>


                                                  
                                                    <button name="sign_up_btn_cus" type="submit" class=" bg-success button_style_by_us"  href="#">Sign up</i></button>
                                              


                                                

                                                
                                
                                          
                                            
                                          

                            </form>
                            </div>
                            <div id="display_sample_coupon">
                  <h3 id="title">Title here</h3>
                  <h5 id="subheading" name="coupon_subheading"> subheading</h5>
                  <h6 id="expire" name="coupon_expire"> expire</h6>
                  <h6 id="address" name="coupon_address"> address</h6>
                  <img src="../images/coupon_bar_bg_rem.png" id="coupon_bar">
                  <h6 id="code" name="coupon_code"> code</h6>

                  
                </div>

                        </div>

            
          </div>


          

          <div id="big_sale_selected">

              <div class = "main_promotion">
                    <div class="lbl_" >
                    <h4 class="text-light promotion_title">BIG SALE</h4>
                    </div>
                    <div class="form_">

                                <form method="post" action = "<?php $_PHP_SELF ?>">

                        
                                        
                                        
                                          

                                                   
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">COUPON TITLE: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 80 class="form-control text_box"  name="big_sale_title" required>
                                                      </div>
                                                    </div>
                                         
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">VALID UNTIL:</h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="date"  class="form-control text_box" name="big_sale_expire">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">ADDRESS: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="big_sale_address" >
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">DESCRIPTION: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="big_sale_description" >
                                                      </div>
                                                    </div>

                                                      <div class="form-group row form_boxes">
                                                        <label for="sel1" class=" col-sm-2 col-form-label font_created_by_us">STORE:</label>
                                                        <div class="col-sm-7 ">
                                                          <select name="store_name" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                                                            <?php foreach ($all_owned_stores_array as $row): ?>
                                                              <option value="<?php echo $row['store_name'];?>"><?php echo $row['store_name'];?></option>
                                                            <?php endforeach; ?>
                                                            
                                                              
                                                          </select>
                                                        </div>
                                                      </div>


                                                    
                                                      <button name="big_sale_submit" type="submit" class=" bg-success button_style_by_us"  href="#">CREATE PROMOTION</i></button>
                                                


                                                  

                                                  
                                  
                                            
                                              
                                            

                              </form>
                              </div>
                              <div id="display_sample_coupon">
                    <h5 id="store2" name="coupon_store"> Store</h5>
                    <h3 id="title2">Title here</h3>
                    
                    <h6 id="expire2" name="coupon_expire"> expire</h6>
                    <h6 id="description2" name="coupon_description"> description</h6>
                    
                    <h6 id="address2" name="coupon_address"> address</h6>
                    

                    
                  </div>

                      </div>


          </div>
          

          <!--
          <div id="ad">

            <div class="lbl_"></div>
            <div class="form_"></div>

          </div>-->
         
    
    
    
    
    
    </li>
    <li style="  height: 100%; float: left; width:1400px; background-color:blue;"> 
    </li>
    <li style="  height: 100%; float: left; width:1400px; background-color:orange;"></li>
  </ul>
  <a id="prev" href="#">&#8810;</a>
  <a id="next" href="#">&#8811;</a>
</div>





<div id="left_icon_container"><i class="fa fa-arrow-left fa-7x" id="return_menu_btn" aria-hidden="true" ></i></div>







</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>





var all_promotions_div = document.querySelector("#all_promotions")
var selected_div = document.querySelector("#selected_div")
var a_coupon = document.querySelector("#a_coupon")
var a_big_sale = document.querySelector("#a_big_sale")
var a_big_sale = document.querySelector("#a_big_sale")


var coupon_selected = document.querySelector("#coupon_selected");
var big_sale_selected = document.querySelector("#big_sale_selected");
var left_icon_container = document.querySelector("#left_icon_container");


a_coupon.onclick = function()
{
  //coupon_selected.style.display="block";
  //left_icon_container.style.display="block";
 
  




  //all_promotions_div.classList.toggle('fade');




 
 // selected_div.classList.toggle('fade');






 
  
  
  
}
left_icon_container.onclick = function()
{
 
  left_icon_container.style.display="none";



  
  
  
}



a_big_sale.onclick = function()
{

  
}



/*For growing windows */
/**        $(document).ready(function(){
          $("button").click(function(){
            $("#all_promotions").animate({
              left: '250px',
              height: '+=150px',
              width: '+=150px'
            });
          });
        }); */
</script>







<script>

var responsiveSlider = function() {

var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var a_coupon = document.getElementById("a_coupon");
var a_big_sale = document.getElementById("a_big_sale");

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
var timer_count = 0;
/**THIS IS WHAT HAPPENS WHEN YOU PRESS A PROMOTION BUTTON */
a_coupon.addEventListener("click", function() {
  selected_div.style.display="block";
  coupon_selected.style.display="block";
  big_sale_selected.style.display="none";
  all_promotions_div.classList.toggle('fade');
  timer_count++;
  
  console.log("you can see it");
  nextSlide();
  
  
});
a_big_sale.addEventListener("click", function() {

  var timer_count2 = 0;

  timer_count2++;
  selected_div.style.display="block";
  coupon_selected.style.display="none";
  
  big_sale_selected.style.display="block";
  
  all_promotions_div.classList.toggle('fade'); //fades content out
  nextSlide(); //
});

prev.addEventListener("click", function() {
  
  
  prevSlide();
  all_promotions_div.classList.toggle('unfade');

  
  
});


};

window.onload = function() {
responsiveSlider();  
}
















function convertCurrency(value) {
    // your calculation here
    return (value );
}
//COUPON SAMPLE
  //THIS IS TITLE UPDATE
    var title = document.querySelector("#title"); //get variable to display text
    $('[name="coupon_title"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        title.innerHTML = value; // variable you push to
    })
  //TITLE ENDS HERE



  //THIS IS Subheading UPDATE
  var subheading = document.querySelector("#subheading"); //get variable to display text
    $('[name="coupon_subheading"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        subheading.innerHTML = value; // variable you push to
    })
  //Subheading ENDS HERE



  //THIS IS expire UPDATE
  var expire = document.querySelector("#expire"); //get variable to display text
    $('[name="coupon_expire"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        expire.innerHTML = value; // variable you push to
    })
  //expire HERE


  //THIS IS address UPDATE
  var address = document.querySelector("#address"); //get variable to display text
    $('[name="coupon_address"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        address.innerHTML = value; // variable you push to
    })
  //address ENDS HERE

  //THIS IS code UPDATE
  var code = document.querySelector("#code"); //get variable to display text
    $('[name="coupon_code"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        code.innerHTML = value; // variable you push to
    })
  //code ENDS HERE
//END COUPON SAMPLE




//BIG SALE SAMPLE
  //THIS IS TITLE UPDATE
  var title2 = document.querySelector("#title2"); //get variable to display text
    $('[name="big_sale_title"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        title2.innerHTML = value; // variable you push to
    })
  //TITLE ENDS HERE



  //THIS IS Subheading UPDATE
  var subheading2 = document.querySelector("#store2"); //get variable to display text
    $('[name="store_name"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        subheading2.innerHTML = value; // variable you push to
    })
  //Subheading ENDS HERE



  //THIS IS expire UPDATE
  var expire2 = document.querySelector("#expire2"); //get variable to display text
    $('[name="big_sale_expire"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        expire2.innerHTML = value; // variable you push to
    })
  //expire HERE


  //THIS IS address UPDATE
  var address2 = document.querySelector("#address2"); //get variable to display text
    $('[name="big_sale_address"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        address2.innerHTML = value; // variable you push to
    })
  //address ENDS HERE

  //THIS IS code UPDATE
  var code2 = document.querySelector("#description2"); //get variable to display text
    $('[name="big_sale_description"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        code2.innerHTML = value; // variable you push to
    })
  //code ENDS HERE
//END COUPON SAMPLE


</script>
