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
    echo "big sale submit";


    $promotion_type = "big sale";
    $promotion_title = filter_input(INPUT_POST, 'big_sale_title');
    $promotion_subheading = NULL;
    $promotion_address = filter_input(INPUT_POST, 'big_sale_address');
    $promotion_exp_date = filter_input(INPUT_POST, 'big_sale_expire');

    $promotion_description = filter_input(INPUT_POST, 'big_sale_description');
    $promotion_code = NULL;
    $store_name = filter_input(INPUT_POST, 'store_name_big_sale');
    $store_ID = convert_storename_to_ID($store_name,$mer_ID);
    
    $results = add_promotions( $promotion_type, $promotion_title, $promotion_subheading, $promotion_address, $promotion_exp_date, $promotion_description, $promotion_code, $store_ID);
  // $testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);

  // header("Location:promotions.php");





  $results_array = get_merchant_stores($_SESSION["mer_ID"]);
  $number_of_stores =  count($results_array);
  
  $number_of_active_promotions = 0;
  foreach($results_array as $row)
  {
   $answer = get_promotions_active($row['store_ID']);
 
   $temp_number = count($answer);
 
   $number_of_active_promotions = $number_of_active_promotions + $temp_number;
  }
  $_SESSION["number_of_active_promotions"] =  $number_of_active_promotions;

}






if (isset($_POST['coupon_submit']) )
{
    //STORE ID 52 IS SAMPLE
  //TODO MAKE SURE YOU CREATEA A SESSION VARUIABLE WITH THE USER id 
    echo "coupon submit";


    $promotion_type = "coupon";
    $promotion_title = filter_input(INPUT_POST, 'coupon_title');
    $promotion_subheading = filter_input(INPUT_POST, 'coupon_subheading');
    $promotion_address = NULL;
    $promotion_exp_date = filter_input(INPUT_POST, 'coupon_expire');
    $promotion_description = filter_input(INPUT_POST, 'coupon_description');
    $promotion_code = filter_input(INPUT_POST, 'coupon_code');
    $store_name = filter_input(INPUT_POST, 'store_name_coupon');
    $store_ID = convert_storename_to_ID($store_name,$mer_ID);

    
    $results = add_promotions( $promotion_type, $promotion_title, $promotion_subheading, $promotion_address, $promotion_exp_date, $promotion_description, $promotion_code, $store_ID);
  // $testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);

  // header("Location:promotions.php");


  
  $results_array = get_merchant_stores($_SESSION["mer_ID"]);
  $number_of_stores =  count($results_array);
 
  $number_of_active_promotions = 0;
  foreach($results_array as $row)
  {
   $answer = get_promotions_active($row['store_ID']);
 
   $temp_number = count($answer);
 
   $number_of_active_promotions = $number_of_active_promotions + $temp_number;
  }
  $_SESSION["number_of_active_promotions"] =  $number_of_active_promotions;
}







if (isset($_POST['info_submit']) )
{
  //STORE ID 52 IS SAMPLE
  //TODO MAKE SURE YOU CREATEA A SESSION VARUIABLE WITH THE USER id 
    echo "info submit button";


    $promotion_type = "info";
    $promotion_title = filter_input(INPUT_POST, 'info_title');
    $promotion_subheading = NULL;
    $promotion_address = filter_input(INPUT_POST, 'info_address');
    $promotion_exp_date = filter_input(INPUT_POST, 'info_expire');
    $promotion_description = filter_input(INPUT_POST, 'info_description');
    $promotion_code = NULL;
  
    $store_name = filter_input(INPUT_POST, 'store_name_info');
    $store_ID = convert_storename_to_ID($store_name,$mer_ID);

    
    $results = add_promotions( $promotion_type, $promotion_title, $promotion_subheading, $promotion_address, $promotion_exp_date, $promotion_description, $promotion_code, $store_ID);
  // $testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);

  //header("Location:promotions.php");


  
  $results_array = get_merchant_stores($_SESSION["mer_ID"]);
  $number_of_stores =  count($results_array);
 
  $number_of_active_promotions = 0;
  foreach($results_array as $row)
  {
   $answer = get_promotions_active($row['store_ID']);
 
   $temp_number = count($answer);
 
   $number_of_active_promotions = $number_of_active_promotions + $temp_number;
  }
  $_SESSION["number_of_active_promotions"] =  $number_of_active_promotions;
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
  background-color:none;
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
  border: 2px solid black;

}

#coupon
{ background-color:red;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;
  text-transform: uppercase;
  font-family: Arial Black, Arial, Helvetica;
  color:white;
}


#Big_Sale
{ background-color:#53C68C;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;
  text-transform: uppercase;
   font-family: Arial Black, Arial, Helvetica;
   color:white;
}

#Info
{ background-color:#3DEFCC;
  width:300px;
  height:500px;
  float:left;
  margin-right:15px;
  text-align:center;
  text-transform: uppercase;
   font-family: Arial Black, Arial, Helvetica;
    color:white;
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


.lbl_coupon
{
  background-color:red;
  width:300px;
  height:500px;
  float:left;
  text-align:center;
  padding-top:200px;
}
.lbl_big_sale
{
  background-color:#53C68C;
  width:300px;
  height:500px;
  float:left;
  text-align:center;
  padding-top:200px;
}
.lbl_info
{
  background-color:#3DEFCC;
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
#info_selected
{
display:none;

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
    left: 30px;
    top:350px;
    display:none;
  }
  #next 
  {
    right: 10px;
    display:none;
  }

  #display_sample_coupon
  {
    height:250px;
    width:340px;
    background-color:#ffffff;
    float:left;
    margin-top:120px;
    margin-left:20px;
    padding:5px;
    border-style: solid;
    border-width: 5px;
    border-color:#e73e45;

  }

  #display_sample_big_sale
  {
    height:200px;
    width:340px;
    background-color:#ffffff;
    float:left;
    margin-top:150px;
    margin-left:20px;
    padding:5px;
    border-style: solid;
    border-width: 5px;
    border-color:black;

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
  padding:0px;
  margin:0px;
}
#expire2
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  padding:0px;
  margin:0px;
}
#description2
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  margin-top:15px;
}
#address2
{
  font-family: Arial Black, Arial, Helvetica;
  color:grey;
  font-size: 10px;
  text-align:center;
  margin-top:35px;
 
}








#store3
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 10px;
  text-align:center;
  text-shadow: 1px 2px 1px black;

  
}
#title3
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 30px;
  text-align:center;
  padding:0px;
  padding-bottom:10px;
  margin:0px;
  text-shadow: 1px 2px 1px black;
  border-bottom: solid 1px black;
}

#description3
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  margin-top:25px;
}
#address3
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 10px;
  text-align:center;
  padding-bottom:10px;
  text-shadow: 1px 2px 1px black;

 
 
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
  margin-top:0px;
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
  padding:0px;
  margin:0px;
}

#expire
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  padding:0px;
  margin-top:5px;
}

#description
{
  font-family: Arial Black, Arial, Helvetica;
  color:grey;
  font-size: 10px;
  text-align:center;
  margin-top:15px;
  margin-bottom:20px;
 
}

#store_name_coupon
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 12px;
  text-align:center;
  padding:0px;
  margin:0px;
  margin-bottom: 15px;
}

#sign_up_btn_cus
{
  
  position:absolute;
  margin-top:-80px;
  width:180px;
}
  </style>
</head>
<body style=" overflow:hidden;">
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
   
    <li style=" height: 100%; float: left;width:1360px; background-color:E6FFFA;   "> 
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



              <h4 class="text_display"> Big Sale</h4>

              </div>
          </a>

            <!--*****************************************************************************************-->
          <a href="#" id="a_info">
              <div id="Info">




              <h4 class="text_display"> Info</h4>

              </div>
          </a>
          <!--*****************************************************************************************-->
          </div>

         

              
              
              
              
              
              
    
    </li>
    <li style=" height: 100%; float: left; width:1400px; background-color:E6FFFA;">
    
    
              <div id="selected_div">


          <div id="coupon_selected">
            <div class = "main_promotion">
                  <div class="lbl_coupon" >
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
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">description </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="coupon_description" >
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">code </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box" name="coupon_code" >
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                        <label for="sel1" class=" col-sm-2 col-form-label font_created_by_us">STORE:</label>
                                                        <div class="col-sm-7 ">
                                                          <select name="store_name_coupon" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                                                            <?php foreach ($all_owned_stores_array as $row): ?>
                                                              <option value="None"> Select a Store</option></option>
                                                              <option value="<?php echo $row['store_name'];?>"><?php echo $row['store_name'];?></option>
                                                            <?php endforeach; ?>
                                                            
                                                              
                                                          </select>
                                                        </div>
                                                      </div>

                                                  
                                                    <button name="coupon_submit" id="sign_up_btn_cus"  type="submit" class=" bg-success button_style_by_us"  href="#">Create Promotion</i></button>
                                              


                                                

                                                
                                
                                          
                                            
                                          

                            </form>
                            </div>
                            <div id="display_sample_coupon">
                  <h5 id="store_name_coupon" name="store_name_coupon"> Store</h5>
                  <h3 id="title">Title here</h3>
                  
                  <h5 id="subheading" name="coupon_subheading"> subheading</h5>
                  <h6 id="expire" name="coupon_expire"> expire</h6>
                  <h6 id="description" name="coupon_description"> DESCRIPTION</h6>
                  <img src="../images/coupon_bar_bg_rem.png" id="coupon_bar">
                  <h6 id="code" name="coupon_code"> code</h6>

                  
                </div>

                        </div>

            
          </div>


          

          <div id="big_sale_selected">

              <div class = "main_promotion">
                    <div class="lbl_big_sale" >
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
                                                          <select name="store_name_big_sale" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                                                            <?php foreach ($all_owned_stores_array as $row): ?>
                                                              <option value="None"> Select a Store</option></option>
                                                              <option value="<?php echo $row['store_name'];?>"><?php echo $row['store_name'];?></option>
                                                            <?php endforeach; ?>
                                                            
                                                              
                                                          </select>
                                                        </div>
                                                      </div>


                                                    
                                                      <button name="big_sale_submit" type="submit" class=" bg-success button_style_by_us"  href="#">CREATE PROMOTION</i></button>
                                                


                                                  

                                                  
                                  
                                            
                                              
                                            

                              </form>
                              </div>
                              <div id="display_sample_big_sale">
                    

                                <h5 id="store2" name="big_sale_store"> Store</h5>
                                <h3 id="title2" name="big_sale_title">Title here</h3>
                                
                                <h6 id="expire2" name="big_sale_expire"> expire</h6>
                                <h6 id="description2" name="big_sale_description"> description</h6>

                                
                                
                                  <h6 id="address2" name="big_sale_address"> address</h6>
                              

                                
                              </div>

                      </div>


          </div>
          


          <div id="info_selected">

            <div class = "main_promotion">
                <div class="lbl_info" >
                <h4 class="text-light promotion_title">INFO </h4>
                </div>
                <div class="form_">

                            <form method="post" action = "<?php $_PHP_SELF ?>">

                    
                                    
                                    
                                                  <div class="form-group row form_boxes">
                                                    <label for="sel1" class=" col-sm-2 col-form-label font_created_by_us">STORE:</label>
                                                    <div class="col-sm-7 ">
                                                      <select name="store_name_info" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                                                        <?php foreach ($all_owned_stores_array as $row): ?>
                                                          <option value="None"> Select a Store</option></option>
                                                          <option value="<?php echo $row['store_name'];?>"><?php echo $row['store_name'];?></option>
                                                        <?php endforeach; ?>
                                                        
                                                          
                                                      </select>
                                                    </div>
                                                  </div>

                                              
                                                <div class="form-group row form_boxes">
                                                  <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">INFO TICKET TITLE: </h5></label>
                                                  <div class="col-sm-7 ">
                                                  <input type="text" maxlength = 80 class="form-control text_box"  name="info_title" required>
                                                  </div>
                                                </div>

                                                <div class="form-group row form_boxes">
                                                  <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">ADDRESS: </h5></label>
                                                  <div class="col-sm-7 ">
                                                  <input type="text" maxlength = 255 class="form-control text_box" name="info_address" >
                                                  </div>
                                                </div>

                                                <div class="form-group row form_boxes">
                                                  <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">VALID UNTIL:</h5></label>
                                                  <div class="col-sm-7 ">
                                                  <input type="date"  class="form-control text_box" name="info_expire">
                                                  </div>
                                                </div>

                                                

                                                <div class="form-group row form_boxes">
                                                  <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">DESCRIPTION: </h5></label>
                                                  <div class="col-sm-7 ">
                                                  <input type="text" maxlength = 255 class="form-control text_box" name="info_description" >
                                                  </div>
                                                </div>

                                                  


                                                
                                                  <button name="info_submit" type="submit" class=" bg-success button_style_by_us"  href="#">CREATE PROMOTION</i></button>
                                            


                                              

                                              
                              
                                        
                                          
                                        

                          </form>
                          </div>
                          <div id="display_sample_big_sale">
                
                            <div style="background-color:#ff8080;">
                              
                              <h3 id="title3" name="big_sale_title">Title here</h3>
                              <h5 id="store3" name="big_sale_store"> Store</h5> 
                              <h6 id="address3" name="big_sale_address"> address</h6>
                 
                            </div>

                            <div >

                              <h6 id="description3" name="big_sale_description"> description</h6>

                            </div>
                            
                             
                          

                            
                          </div>

                  </div>


          </div>


          <!--
          <div id="ad">

            <div class="lbl_"></div>
            <div class="form_"></div>

          </div>-->
         
    
    
    
    
    
    </li>
    
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
var a_info = document.querySelector("#a_info")


var coupon_selected = document.querySelector("#coupon_selected");
var big_sale_selected = document.querySelector("#big_sale_selected");
var info_selected = document.querySelector("#info_selected");
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
var a_info = document.getElementById("a_info");

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
  prev.style.display="block";
  big_sale_selected.style.display="none";
  info_selected.style.display="none";
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
  prev.style.display="block";
  info_selected.style.display="none";
  all_promotions_div.classList.toggle('fade'); //fades content out
  nextSlide(); //
});
a_info.addEventListener("click", function() {

  var timer_count2 = 0;

  timer_count2++;
  selected_div.style.display="block";
  coupon_selected.style.display="none";
  
  big_sale_selected.style.display="none";
  info_selected.style.display="block";
  prev.style.display="block";
  
  all_promotions_div.classList.toggle('fade'); //fades content out
  nextSlide(); //
});

prev.addEventListener("click", function() {
  
  
  prevSlide();
  all_promotions_div.classList.toggle('unfade');
  prev.style.display="none";
  
  
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
  var description = document.querySelector("#description"); //get variable to display text
    $('[name="coupon_description"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        description.innerHTML = value; // variable you push to
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

  //THIS IS Subheading UPDATE
  var store_name_coupon = document.querySelector("#store_name_coupon"); //get variable to display text
    $('[name="store_name_coupon"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        store_name_coupon.innerHTML = value; // variable you push to
    })
  //Subheading ENDS HERE




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
  var store_name_big_sale = document.querySelector("#store2"); //get variable to display text
    $('[name="store_name_big_sale"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        store_name_big_sale.innerHTML = value; // variable you push to
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



//INFO SALE




//BIG SALE SAMPLE
  //THIS IS TITLE UPDATE
  var title3 = document.querySelector("#title3"); //get variable to display text
    $('[name="info_title"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        title3.innerHTML = value; // variable you push to
    })
  //TITLE ENDS HERE



  //THIS IS Subheading UPDATE
  var store_name_info = document.querySelector("#store3"); //get variable to display text
    $('[name="store_name_info"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        store_name_info.innerHTML = value; // variable you push to
    })
  //Subheading ENDS HERE


  //THIS IS address UPDATE
  var info_address = document.querySelector("#address3"); //get variable to display text
    $('[name="info_address"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        info_address.innerHTML = value; // variable you push to
    })
  //address ENDS HERE

  //THIS IS DESCRIPTION UPDATE
  var info_description = document.querySelector("#description3"); //get variable to display text
    $('[name="info_description"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        info_description.innerHTML = value; // variable you push to
    })
  //code ENDS HERE
//END COUPON SAMPLE

</script>
