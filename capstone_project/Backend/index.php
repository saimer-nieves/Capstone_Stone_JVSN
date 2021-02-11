<?php
session_start(); 


?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
  <style>

div.upload-wrapper {
  color: white;
  font-weight: bold;
  display: flex;
}
 
input[type="file"] {
  position: absolute;
  left: -9999px;
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
 
label[for="file-upload"] {
  padding: 0.7rem;
  display: inline-block;
  background: #fa5200;
  cursor: pointer;
  border: 3px solid #ca3103;
  border-radius: 0 5px 5px 0;
  border-left: 0;
}
label[for="file-upload"]:hover {
  background: #ca3103;
}
 
span.file-name {
  padding: 0.7rem 3rem 0.7rem 0.7rem;
  white-space: nowrap;
  overflow: hidden;
  background: #ffb543;
  color: black;
  border: 3px solid #f0980f;
  border-radius: 5px 0 0 5px;
  border-right: 0;
}


.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
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
      <span class="file-name">Choose a file...</span>

      <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile"></label>
    </div>
 
    <input type="submit" name="uploadBtn" value="Upload" id="uploading_btn" />
  </form>


  <div id="uploaded_display" style="background-color:red; ">



  </div>

  

<div class="grid-container">
  <div class="item1" style="height:200px;"><img src="uploaded_files/<?php echo $_SESSION["fileName"];?>" id="image_display" style="width:100%; height:200px;  background-size: cover;"></div>
  <div class="item2">Menu</div>
  <div class="item3">Main</div>  
  <div class="item4">Right</div>
  <div class="item5">Footer</div>
</div>
</body>
</html>


<script>



</script>

