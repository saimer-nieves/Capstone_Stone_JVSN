<?php
session_start(); 

include "../Model/model_add_merchant_store.php";



$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{


  /*THIS SECTION TAKES CARE OF UPLOADING FILE TO FOLDER */
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
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './uploaded_files/';
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










  


 /* $fileName     this is the variable with the regular name of the image*/
  $store_name = filter_input(INPUT_POST, 'store_name');
  $store_category = filter_input(INPUT_POST, 'store_category');

  $results = add_merchant_stores($store_name, $store_category,date("Y-m-d"), $fileName, 1);



  header("Location: merchant_main_panel.php");
  
  
}
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
      margin-left:100px;
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
  margin-left:280px;
  margin-top:100px;
  padding:15px;
  position:absolute;
}

#selected_div
{
  background-color:orange;
  width:980px;
  height:530px;
  margin-left:1280px;
  margin-top:100px;
  padding:15px;
  position:absolute;
  

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

  opacity: 0;
  -webkit-transition: opacity 0.3s ease-in-out;
  -moz-transition: opacity 0.3s ease-in-out;
  -ms-transition: opacity 0.3s ease-in-out;
  -o-transition: opacity 0.3s ease-in-out;
  transition: opacity 0.3 ease-in-out;
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
}
#selected_div.fade 
{
  opacity:1;
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
  background-color:blue;
  width:645px;
  height:500px;
  float:left;
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

<div id="selected_div">


    <div id="coupon_selected">

      <div class="lbl_" >
      <h4 class="text-light promotion_title">Coupon</h4>
      </div>
      <div class="form_">

                  <form method="post" action = "<?php $_PHP_SELF ?>">

           
                          
                          
                            

                                      
                                        <label> <h5>mom Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="cus_fname" >
                                      
                                      
                                        <label> <h5>Last Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="cus_lname" required>
                                        
                                        
                                         <label> <h5>Email: abc@abc.abc  </h5></label>
                                        <input type="email"  class="form-control text_box" name="cus_email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' required>
                              
                                        
                                         <label> <h5>Phone : (###) ###-####</h5></label>
                                        <input type="tel" maxlength = 20 id="phone" name="cus_phone" placeholder="(###) ###-####"  pattern="[(][0-9]{3}[)][ ][0-9]{3}-[0-9]{4}" class="form-control text_box" required >
                                  
                                        <label> <h5>Password : </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="cus_password" >
                                        

                                       
                                        <button name="sign_up_btn_cus" type="submit" class=" bg-success"  href="#">Sign up</i></button>
                                  


                                    

                                    
                    
                              
                                
                               

                </form>
         



                </div>

    </div>


    <div id="big_sale_selected">

      <div class="lbl_">
      <h4 class="text-light promotion_title">Big Sale</h4>
      </div>
      <div class="form_">

                  <form method="post" action = "<?php $_PHP_SELF ?>">

           
                          
                          
                            

                                      
                                        <label> <h5>sale Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="cus_fname" >
                                      
                                      
                                        <label> <h5>sale Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="cus_lname" required>
                                        
                                        
                                         <label> <h5>Email: abc@abc.abc  </h5></label>
                                        <input type="email"  class="form-control text_box" name="cus_email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' required>
                              
                                        
                                         <label> <h5>Phone : (###) ###-####</h5></label>
                                        <input type="tel" maxlength = 20 id="phone" name="cus_phone" placeholder="(###) ###-####"  pattern="[(][0-9]{3}[)][ ][0-9]{3}-[0-9]{4}" class="form-control text_box" required >
                                  
                                        <label> <h5>Password : </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="cus_password" >
                                        

                                       
                                        <button name="sign_up_btn_cus" type="submit" class=" bg-success"  href="#">Sign up</i></button>
                                  


                                    

                                    
                    
                              
                                
                               

                </form>
         



                </div>

    </div>

<!--
    <div id="ad">

      <div class="lbl_"></div>
      <div class="form_"></div>

    </div>-->
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
var left_icon_container = document.querySelector("#left_icon_container");


a_coupon.onclick = function()
{
  coupon_selected.style.display="block";
  left_icon_container.style.display="block";
  
  $("#all_promotions").animate({right: '950px'});
 console.log("saimer")
  //all_promotions_div.classList.toggle('fade');




  $("#selected_div").animate({right: '150px'});
 // selected_div.classList.toggle('fade');
  
  
  
}
left_icon_container.onclick = function()
{
  //coupon_selected.style.display="none";
 // left_icon_container.style.display="none";


 $("#all_promotions").animate({right: '200px'});
 a_coupon.animate({right: '200px'});

  
  
  
}



a_big_sale.onclick = function()
{
  big_sale_selected.style.display="block";
  return_menu_btn.style.display="block";
  $("#all_promotions").animate({right: '950px'});
 console.log("saimer")
 // all_promotions_div.classList.toggle('fade');




  $("#selected_div").animate({right: '150px'});
 // selected_div.classList.toggle('fade');
  
  
  
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