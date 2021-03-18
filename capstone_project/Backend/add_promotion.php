<?php
session_start(); 
$mer_ID= $_SESSION["mer_ID"];
include "../Model/model_add_merchant_store.php";
include "../Model/model_promotions.php";
include "../Model/model_products_BIG_SALE.php";


$all_owned_stores_array = get_merchant_stores($mer_ID);//get promotions for store 52
$all_products_in_big_sale = get_products(53,'Lamborguini big sale'); //get promotions for store 52


foreach($all_owned_stores_array as $row)
{
 
  $all_Big_sale_Promotions = get_active_Big_Sales($row['store_ID']);

}







if (isset($_POST['big_sale_submit']) )
{
    //STORE ID 52 IS SAMPLE
  //TODO MAKE SURE YOU CREATEA A SESSION VARUIABLE WITH THE USER id 
    echo "big sale submit";


    $promotion_type = "big sale";
    $promotion_title = filter_input(INPUT_POST, 'big_sale_title');

    if($promotion_title == 'new big sale')
    {
      $secret_new_sale_name = filter_input(INPUT_POST, 'secret_new_sale_name');
      $promotion_subheading = NULL;
      $promotion_address = filter_input(INPUT_POST, 'big_sale_address');
      $promotion_exp_date = filter_input(INPUT_POST, 'big_sale_expire');
  
      $promotion_description = filter_input(INPUT_POST, 'big_sale_description');
     
      $promotion_code = NULL;
      
      $new_big_sake_store_name = filter_input(INPUT_POST, 'new_big_sake_store_name');
      $store_ID = convert_storename_to_ID($new_big_sake_store_name,$mer_ID);
      
      
      $results = add_promotions( $promotion_type, $secret_new_sale_name, $promotion_subheading, $promotion_address, $promotion_exp_date, $promotion_description, $promotion_code, $store_ID);
    // $testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);

    $fresh_promotion = get_most_recent_promotion($secret_new_sale_name, $store_ID, $promotion_address, $promotion_exp_date, $promotion_description);

    
    $pID = $fresh_promotion[0]["promotion_ID"];
    $pn = $fresh_promotion[0]["promotion_title"];
    
    header("Location:add_products.php?prID=" . $pID. "&pn=" . $pn);

    }
    if($promotion_title != 'new big sale')
    {
      
      $promotion_title = filter_input(INPUT_POST, 'big_sale_title');

    
    $pID = $promotion_title;


    
    $fresh_promotion = get_One_promotion($pID);

    
    
    $pn = $fresh_promotion[0]["promotion_title"];
    
    header("Location:add_products.php?prID=" . $pID. "&pn=" . $pn);
    
    }
   

  





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

   header("Location:promotions.php");


  
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

  header("Location:promotions.php");


  
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





if (isset($_POST['uploadBtn']) )
{
 
   // var_dump($_FILES['uploadedFile']);
   // exit;

  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];

    
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
 
    

    // sanitize file-name
    $newFileName =  $fileName ;
    $_SESSION["fileName"] = $fileName;
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      echo "uploaded INSIDE";
      // directory in which the uploaded file will be moved
      $uploadFileDir = './uploaded_products/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
       // $message ='File is successfully uploaded.';
      }
      else
      {
       // $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      //$message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
   // $message = 'There is some error in the file upload. Please check the following error.<br>';
   // $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }




   $product_title = filter_input(INPUT_POST, 'product_title');
   $product_img = $fileName;
    
   $product_price = filter_input(INPUT_POST, 'product_price');
  
 //   $store_name = filter_input(INPUT_POST, 'store_name_coupon');
  // $store_ID = convert_storename_to_ID($store_name,$mer_ID);
   $store_ID = 53;

    
$results = add_products($store_ID, "Lamborguini big sale" , $product_title, $product_img, $product_price);
header("Location:add_promotions.php#promotionBGS_panel");


}







  


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
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


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

    .upload
    {
      padding-left:50px;
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
  margin-left:250px;
  margin-top:100px;
  padding:15px;
  position:absolute;
}

#selected_div
{
  background-color:#e7fde2;
  width:1300px;
  height:530px;
  
  margin-top:100px;
  padding:20px;
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
.lbl_big_sale2
{
  background-color:#53C68C;
  width:100%;
  height:50px;

  text-align:center;
  
  
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
    position:absolute;
    top:80px;
    left:900px;
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
    position:absolute;
    top:80px;
    left:900px;
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

.secret_name_inside_div
{
  text-transform:uppercase;
  
  display:none;
  
}

.secret_information_boxes
{margin-left:100px;
  margin-top:0px;
  height:40px;

}

.add_product_btn
{
  background-color:red;
  cursor: pointer;
}

.add_products_page
{
  height:500px;
   width:1200px;
    background-color:none;
    margin-top:50px;
    
}

.big_sale_Produc_select
{
 
   padding:10px;
   padding-top:150px;
    background-color:none;
    float:left;
    min-height:500px;
    min-width:300px;
   
}





.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

.product_title
{
  background-color:purple;
  width:100%;
  height:50px;

  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 30px;
  text-align:center;
}


.product_details
{
  background-color:#B1FFEF;
  width:100%;
  height:250px;

  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 30px;
  text-align:center;
}


.card_header
{
  width:100%;
  
  background-color:#53C68C;
  float:left;
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 30px;
  text-align:center;
  padding:15px;
}


.picture_box
{
  height:220px;
  width:200px;
  background-color:#B1FFEF;
  float:left;
  justify-content:center; /* horizontally center */
    align-items:center;    /* vertically center */
    display:flex;
    border-style: double;
    border-top:none;
    border-color:#53C68C;
}



.blah
{
 
   
    //object-fit: cover;
    max-height: 150px;
    max-width:100%;
    border-radius:20px;
  
}

.sample_pics
{
  max-height: 150px;
    max-width:100%;
    border-radius:20px;
}


.product_info
{
  height:220px;
  width:340px;
  background-color:#B1FFEF;
  float:left;
  padding-top:40px;
  text-transform:uppercase;

  border-style: double;
    border-top:none;
    border-left:none;
    border-color:#53C68C;
}

.product_container
{

 background-color:yellow;
 width:100%;
 height:100%;
 

}

.store_product_lbl
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 12px;
  

  box-shadow: 0px 4px 4px 0px 0,0,0,0.25 inset;

  box-shadow: 0px 4px 4px 0px 0,255,102,0.25;


}





.store_product_txt
{
  width:200px;
  height:25px;
}


.product_form_div
{
  
  margin-left:10px;
}

.product_push_btn
{



  font-family: Arial Black, Arial, Helvetica;
  color:white;
  background-color:#53C68C;
  font-size: 12px;
  border-radius:20px;

  padding:20px;
  border: none;
  outline:none;
  
}

.product_sample_display_div
{
  float:left;
  background-color:none;
  height:500px;
  width:600px;
  margin-left:600px;
 
  position:absolute;
}


#insert_product_btn
{

position:fixed;
margin-top:0;




}



.unique_store_sample
{
  margin-top:30px;
  background-color:white;
  width:550px;
  
  border-radius:20px;
  float:left;

 
  border: 2px solid #53C68C;

  box-shadow: 8px 10px 6px -9px rgba(13,23,19,0.9);
-webkit-box-shadow: 8px 10px 6px -9px rgba(13,23,19,0.9);
-moz-box-shadow: 8px 10px 6px -9px rgba(13,23,19,0.9);
}



.sample_pic_div
{
  border-radius:20px;
  background-color:rgba(177,255,239,1);
  width:200px;
  height:100%;
  border-radius:20px;
  float:left;


 
  justify-content:center; /* horizontally center */
    align-items:center;    /* vertically center */
    display:flex;

}

.sample_product_info
{
  background-color:white;
  width:330px;
  
  border-radius:0px;
  
  float:left;
  padding-left:10px;
  padding-top:10px;
  

}


.database_products
{
  background-color:black;
  width:600px;
  border-radius:5px;
  height:400px;
  float:left;
  margin-top:20px;
  overflow-x: hidden;
  overflow-y: auto;
}

.sample_title_product
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  
  font-size: 18px;
  text-transform:uppercase;
}

.sample_title_product_styling{

  font-family: Arial Black, Arial, Helvetica;
  color:black;
  
  font-size: 20px;
  text-transform:uppercase;
}

.sample_price_title{

  
  font-family: Arial Black, Arial, Helvetica;
  color:brown;
  
  font-size: 14px;
  text-transform:uppercase;
}

#sample_price_title{

  
  font-family: Arial Black, Arial, Helvetica;
  color:brown;
  
  font-size: 14px;
  text-transform:uppercase;
}


.disable{
    pointer-events: none ! important;
    opacity: 0.4 ! important;
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
   
    <li style=" height: 100%; float: left;width:1400px; background-color:E6FFFA;   margin-right:100px;"> 
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

    <li style=" height: 100%; float: left; width:1400px; background-color:E6FFFA; margin-right:100px;">
    
    
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
                                                          <select name="store_name_coupon" class="form-control" id="sel1" required>             <!--FORM ELEMENT *********************-->
                                                            
                                                              <option value=""> Select a Store</option>
                                                            <?php foreach ($all_owned_stores_array as $row): ?>
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
                                                      

                                                     
                                                      <select name="big_sale_title" class="form-control big_sale_BG_Value" id="sel1" required>             <!--FORM ELEMENT *********************-->
                                                            
                                                              <option value=""> Select a Big Sale</option></option>
                                                              <option value="new big sale"> NEW BIG SALE</option></option>
                                                            <?php foreach ($all_owned_stores_array as $row):    $all_Big_sale_Promotions = get_active_Big_Sales($row['store_ID']);?>
                                                              <?php foreach ($all_Big_sale_Promotions as $big): ?>
                                                                <option value="<?php echo $big['promotion_ID'];?>"><?php echo $big['promotion_title'];?></option>
                                                              <?php endforeach; ?>
                                                            <?php endforeach; ?>
                                                              
                                                          </select>
                                                      </div>
                                                    </div>


                                                   

                                                <div class="secret_name_inside_div">
                                                    <div class="form-group row form_boxes secret_information_boxes">
                                                        <label  class="col-sm-4 col-form-label" style="float:left;"> <h5 class="font_created_by_us">Big Sale Name: </h5></label>
                                                        <div class="col-sm-6 "  style="float:left;">
                                                        <input type="text"  class="form-control text_box  " name="secret_new_sale_name" style="height:30px; margin-left:-70px;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row form_boxes secret_information_boxes">
                                                    <label for="sel1" class=" col-sm-2 col-form-label font_created_by_us">STORE:</label>
                                                    <div class="col-sm-7 ">
                                                      <select name="new_big_sake_store_name" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                                                       
                                                          <option value=""> Select a Store</option>
                                                        <?php foreach ($all_owned_stores_array as $row): ?>
                                                          <option value="<?php echo $row['store_name'];?>"><?php echo $row['store_name'];?></option>
                                                        <?php endforeach; ?>
                                                        
                                                          
                                                      </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                    
                                               

                                                    
                                         
                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">VALID UNTIL:</h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="date"  class="form-control text_box   big_sale_BG_Date disable" name="big_sale_expire">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">ADDRESS: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box  big_sale_BG_Address disable" name="big_sale_address" >
                                                      </div>
                                                    </div>

                                                    <div class="form-group row form_boxes">
                                                      <label  class="col-sm-2 col-form-label"> <h5 class="font_created_by_us">DESCRIPTION: </h5></label>
                                                      <div class="col-sm-7 ">
                                                      <input type="text" maxlength = 255 class="form-control text_box   big_sale_BG_Description disable" name="big_sale_description" >
                                                      </div>
                                                    </div>

                                                    

                                                      
                                                    
                                                     
                                                      <button name="big_sale_submit" type="submit" class=" bg-success button_style_by_us"  href="#" style="position:fixed; top:600px;">CREATE PROMOTION</i></button>
                                                


                                                  

                                                  
                                  
                                            
                                              
                                            

                              </form>
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
                                                       
                                                          <option value="None"> Select a Store</option></option>
                                                        <?php foreach ($all_owned_stores_array as $row): ?>
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


<?php $sample_index=0;?>




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
 
  
  
});

  var add_product_btn = document.getElementById("add_product_btn")
 add_product_btn.addEventListener("click", function() {

  console.log("youppppp")
  nextSlide(); //


  
 






 });

 
 var insert_product_btn = document.getElementById("insert_product_btn")

 
  insert_product_btn.addEventListener("click", function() {
    
    
    console.log("im adding new products")
    var big_sale_Produc_select = document.querySelector(".big_sale_Produc_select")
    
    big_sale_Produc_select.innerHTML+="";

    var product_sample_display_div = document.querySelector(".product_sample_display_div")
    product_sample_display_div.innerHTML+=" ";

   
   
            

              
              
            
        
        







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


        

        var big_sale_BG_Date = document.querySelector(".big_sale_BG_Date")
        var big_sale_BG_Address = document.querySelector(".big_sale_BG_Address")
        var big_sale_BG_Description = document.querySelector(".big_sale_BG_Description")
   





        var secret_container = document.querySelector(".secret_name_inside_div");
        if (value == 'new big sale')
        {

          big_sale_BG_Date.classList.remove("disable");
          big_sale_BG_Address.classList.remove("disable");
          big_sale_BG_Description.classList.remove("disable");
       
          console.log("Saimer We are in here");
          $( ".secret_name_inside_div" ).slideDown( 400, function() {              });

          






        }
        if (value != 'new big sale')
        {
  
          big_sale_BG_Date.classList.add("disable");
          big_sale_BG_Address.classList.add("disable");
          big_sale_BG_Description.classList.add("disable");
          $( ".secret_name_inside_div" ).slideUp( 400, function() {              });
        }
        
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

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result)
                        .width(200)
                        
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>


<script>

var sample_title_product = document.querySelector(".sample_title_product"); //get variable to display text
    $('[name="product_title"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        sample_title_product.innerHTML = value; // variable you push to
    })


    var sample_price_title = document.querySelector("#sample_price_title"); //get variable to display text
    $('[name="product_price"]').on('change keyup', function() { //variable that you are typing in
        value = $(this).val();
        console.log(value);
        sample_price_title.innerHTML = value; // variable you push to
    })


</script>

<?php foreach ($all_products_in_big_sale as $row): ?>
<script>

  var product_big_box = document.querySelector(".database_products")
  var new_div = document.createElement("div")
  new_div.innerHTML += " <div class='unique_store_sample'> <div class='sample_pic_div'> <img class='sample_pics' src='../Backend/uploaded_products/<?php echo $row['product_img'];?>' alt='your image' class='sample_pics' /> </div> <div class='sample_product_info'> <h3 class='sample_title_product_styling'><?php echo $row['product_title'];?></h3> <h5 class='sample_price_title'> $<?php echo $row['product_price'];?></h5> </div> </div> "

  product_big_box.appendChild(new_div);
</script>



<?php endforeach;?>