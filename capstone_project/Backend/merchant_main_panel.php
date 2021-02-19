<?php

 
session_start();

//CODE BELOW IS TO KICK PEOPLE OFF IF THEY ARE NOT LOGGED IN
/*if ($_SESSION["username"] == null)
{
     header("Location: login.php");

}*/

 include "../Model/model_add_merchant_store.php";
 
  echo $_SESSION["mer_ID"].$_SESSION["mer_fname"] .$_SESSION["mer_lname"] .$_SESSION["mer_email"] .$_SESSION["mer_phone"] ;

 $mer_ID= $_SESSION["mer_ID"];
 $mer_fname= $_SESSION["mer_fname"];
 $mer_lname= $_SESSION["mer_lname"];
 $mer_email= $_SESSION["mer_email"];
 $mer_phone= $_SESSION["mer_phone"];


 $results_array = get_merchant_stores($mer_ID);

 //var_dump($results_array);










;?>


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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

        <script src="assets/demo/datatables-demo.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<style>

body
{
   // padding-top:100px;
   background-color:#e6fffa;
}

#body-row
{
    margin-left:0;
    margin-right:0;
}
#sidebar-container 
{
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a 
{
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a 
{
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after 
{
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after 
{
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}

#merchant_owner
{
    width:400px;
   height:600px;
   background-color:red;
   float:left;
   margin-left:100px;
   margin-top:100px;
}

#all_merchant_stores
{ width:700px;
   height:600px;
   background-color:blue;
   float:left;
   margin-left:50px;
   margin-top:100px;

}


#all_stores_top
{
    width:700px;
    height:400px;
    background-color:red;
}

#all_stores_bottom
{
    width:700px;
    height:200px;
    background-color:green;
}

.new_store_div
{
  width:200px;
  height:150px;
  background-color:blue;
  float:left;
  margin:20px 0px 0px 20px;
  border: 2px solid red;
  border-radius: 15px;
}

.merchant_logo_settings
{
  width:200px;
  height:150px;
  border: 2px solid red;
  border-radius: 15px;
  


}


.new_store_text_div
{
  width:120px;
  height:30px;
  background-color:yellow;
  position:absolute;
  margin-top:60px;
  margin-left:45px;
  font-family:sans-serif;
  text-shadow: 2px 2px 5px red;
  text-align: center;
}
    </style>
</head>
<body>
    


    <main>
      





        <div id="merchant_owner"></div>
        <div id="all_merchant_stores">
            <div id="all_stores_top">
            







            </div>


            <div id="all_stores_bottom">
              <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                <button name="plus_merchant_btn" type="button" id="plus_symbol" style="margin-top:50px; margin-left:500px; height:100px; width:150px;font-weight:bold;" ><img src="../images/plus_icon.png" style="width:30px;"></i></button>
              </form>
            </div>

        
        </div>





































    </main>
</body>
</html>

<script>

                var plus_symbol = document.querySelector("#plus_symbol");
                var all_stores_top = document.querySelector("#all_stores_top"); //create a div then give class of Active_store div use php to bring info from the tables
                
              


                
                plus_symbol.addEventListener("click", send_to_next_site);

                function send_to_next_site ()
                {
                  window.location.href = "../Backend/add_merchant.php";
                }


                
                  document.onload = add_store();

                  function add_store()
                  {
                    <?php foreach ($results_array as $row): ?>
                    var new_store_div =  document.createElement("div");
                    var new_store_text_div =  document.createElement("div");
                    var new_img =  document.createElement("img");


                    new_store_div.setAttribute("class","new_store_div");
                    new_store_text_div.setAttribute("class","new_store_text_div");

                    new_img.setAttribute("src","../Backend/uploaded_files/<?php echo $row['store_img_logo']; ?>");
                    new_img.setAttribute("class","merchant_logo_settings");


                    new_store_text_div.innerHTML = "<?php echo $row['store_name'];?>";
                    //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                    new_store_div.appendChild(new_store_text_div);
                    new_store_div.appendChild(new_img);
                    

                    all_stores_top.appendChild(new_store_div);


                    console.log("saimer plus");
                    <?php endforeach; ?>
                  }



</script>
