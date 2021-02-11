<?php
session_start(); 
include "../includes/back_side_nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #test
        {
            height:200px;
            width:200px;
           
        }

                
        div.upload-wrapper {
        color: white;
        font-weight: bold;
        display: flex;
        }
        

        input[type="submit"] {
        border: 3px solid #555;
        color: white;
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
        
       
        .container {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      }
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: #b8b8b8;
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
      }

      #logo_div
      {
        height:200px;
        width:400px;
        background-color:yellow;
        margin-left:200px;
        margin-top:100px;
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
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <!--<span class="file-name">Choose a file...</span>-->
     

     
     
     
     

     

      <div id="logo_div">
      
      <div class="container">
      <div class="button-wrap">
        <label class="button" for="upload">Add Logo</label>
        <input  type="file" id="upload" name="uploadedFile">
      </div>
      
      
      </div>
    </div>


   





     </input>
     </label>
    </div>
 
    <input type="submit" name="uploadBtn" value="Upload" id="uploading_btn" />
  </form>


  <div id="uploaded_display" style="background-color:red; ">



  </div>

  

</body>
</html>


<script>



</script>

