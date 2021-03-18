<?php
session_start(); 

include "../Model/model_add_merchant_store.php";
include "../Model/model_promotions.php";
include "../Model/model_subscriptions.php";

$mer_ID= $_SESSION["mer_ID"];

$message = ''; 
if (isset($_POST['uploadBtn']))
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
    $allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
 
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

  $results = add_merchant_stores($store_name, $store_category,date("Y-m-d"), $fileName, $mer_ID);
  $answer_part2  = get_merchant_stores_WITHNAME($store_name);
  foreach($answer_part2 as $row)
  {
    $test = add_subscriber("true", date("Y-m-d"), null, $row['store_ID'], 5);
  }
  
  $results_array = get_merchant_stores($_SESSION["mer_ID"]);
  $number_of_stores =  count($results_array);
  $_SESSION["number_of_stores"] =  $number_of_stores;
  $number_of_active_promotions = 0;
  foreach($results_array as $row)
  {
   $answer = get_promotions_active($row['store_ID']);
 
   $temp_number = count($answer);
 
   $number_of_active_promotions = $number_of_active_promotions + $temp_number;
  }
  $_SESSION["number_of_active_promotions"] =  $number_of_active_promotions;



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

      .blah
{
 
   
    //object-fit: cover;
    
    height:100%;
    max-width:100%;
    
  
}

      #logo_div
      {
        height:250px;
        width:430px;
        background-color:#53c68c;
        margin-left:200px;
        margin-top:100px;
        
  

        z-index: -3;


        
 
  justify-content:center; /* horizontally center */
    align-items:center;    /* vertically center */
    display:flex;

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
      margin-top:305px;
      margin-left:430px;
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

<div style='width:570px; height:100px; background-color:#53c68c; margin-top:50px;margin-left:400px; position:absolute;'> <h4 style='font-family: Arial Black, Arial, Helvetica;color:white;font-size: 45px;text-align:center; padding-top:20px'>Add Store</h4></div>

<a href="../Backend/merchant_main_panel.php" class="button_returns" style=" margin-left:200px; margin-top:50px;position:absolute; border-radius:10px;">

  <img src="../images/left_return_arrow.png" style="height:30px; ">
  </a>
  <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" style="background-color:none;padding-top:100px;">
    <div class="upload-wrapper" style="padding-bottom:360px; margin-top:50px; background-color:none;">
      <!--<span class="file-name">Choose a file...</span>-->
     

     
     
     
     

     

          <div id="logo_div">
          
          
          <img class='blah ' src='../images/sample_pic_placeholder.PNG' alt='your image' />
            
            
            

          </div>
          <div class="button-wrap button_spot_position">
                <label class="button" for="upload">Add Logo</label>
                   <!--FORM ELEMENT ******  onchange='readURL(this)'***************-->
          </div>

          <div id="text_boxes_div">
            <div class="form-group">
              <label for="usr" >Store Name:</label>
                <input type="text" maxlength = 16 class="form-control" id="store_name"  name ="store_name">      <!--FORM ELEMENT *********************-->
            </div>

            
            <div class="form-group">
              <label for="sel1">Select list:</label>
              <select name="store_category" class="form-control" id="sel1">             <!--FORM ELEMENT *********************-->
                <option>Video Game </option>
                <option>Clothing</option>
                <option>Bar</option>
                <option>Religion</option>
                <option>Resturant</option>
                <option>Cars & Vehicles</option>
                <option>Jewelry</option>
                <option>Arcade</option>
                <option>Furniture</option>
                <option>Shoes</option>
              </select>
            </div>

            <div class="form-group">
              <label for="usr" >Store Logo:</label>
              <input  type="file"  onchange='readURL(this);'  id="upload" name="uploadedFile">    <!--FORM ELEMENT *********************-->   <!--FORM ELEMENT *********************-->
            </div>




            <input type="submit" name="uploadBtn" value="Upload" id="uploading_btn" style='background-color:#53c68c; margin-top:120px;'/>
      </div>

      
      


   





     </input>
     </label>
     
     </div>
    </div>

   
  </form>

  

</body>
</html>


<script>



</script>



<script>

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result)
                        .width(400)
                        
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>


