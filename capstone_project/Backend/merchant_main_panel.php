<?php

 
session_start();

//CODE BELOW IS TO KICK PEOPLE OFF IF THEY ARE NOT LOGGED IN
/*if ($_SESSION["username"] == null)
{
     header("Location: login.php");

}*/

 include "../Model/model_add_merchant_store.php";
 include "../Model/model_promotions.php";
 include "../Model/model_sign_ups.php";
 
  //echo $_SESSION["mer_ID"].$_SESSION["mer_fname"] .$_SESSION["mer_lname"] .$_SESSION["mer_email"] .$_SESSION["mer_phone"] ;

 $mer_ID= $_SESSION["mer_ID"];
 $mer_fname= $_SESSION["mer_fname"];
 $mer_lname= $_SESSION["mer_lname"];
 $mer_email= $_SESSION["mer_email"];
 $mer_phone= $_SESSION["mer_phone"];


 $results_array = get_merchant_stores($mer_ID);
 $number_of_stores =  count($results_array);
 $number_of_active_promotions = 0;
 foreach($results_array as $row)
 {
  $answer = get_promotions_active($row['store_ID']);

  $temp_number = count($answer);

  $number_of_active_promotions = $number_of_active_promotions + $temp_number;
 }
 //var_dump($results_array);



  
 if(isset($_POST['delete_store'])){
  $store_ID = filter_input(INPUT_POST, 'hidden_storeID');
  //var_dump($store_ID);
  //echo "saimer you deleted this store";

  $results = deleteStore($store_ID);

   
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

 
 if(isset($_POST['update_profile_btn'])){
  $mer_ID_updater = $_SESSION["mer_ID"]; 
  $mer_fname = filter_input(INPUT_POST, 'mer_fname');
  $mer_lname = filter_input(INPUT_POST, 'mer_lname');
  $mer_phone = filter_input(INPUT_POST, 'mer_phone');
  $mer_email = filter_input(INPUT_POST, 'mer_email');


  $results = updateMerchantProfile($mer_ID_updater, $mer_fname, $mer_lname, $mer_email, $mer_phone);
  
   $_SESSION["mer_ID"] = $mer_ID_updater;
  $_SESSION["mer_fname"] = $mer_fname;
  $_SESSION["mer_lname"] = $mer_lname;
  $_SESSION["mer_email"] = $mer_email;
  $_SESSION["mer_phone"] = $mer_phone;

  header("Location: merchant_main_panel.php");
   }

 








;?>

<?php $index_num = 0;?>
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


	<link rel="apple-touch-icon" sizes="76x76" href="../frontend/assets_login/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../frontend/assets_login/img/favicon.png" />


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- CSS Files -->
	<link href="../frontend/assets_login/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../frontend/assets_login/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../frontend/assets_login/css/demo.css" rel="stylesheet" />

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
   height:620px;
   background-color:#53C68C;
   float:left;
   margin-left:100px;
   margin-top:100px;
}

#all_merchant_stores
{ width:700px;
   height:600px;
   background-color:none;
   float:left;
   margin-left:50px;
   margin-top:100px;

}


#all_stores_top
{
    width:700px;
    height:400px;
    background-color:none;
}

#all_stores_bottom
{
    width:700px;
    height:200px;
    background-color:none;
}

.new_store_div
{
  width:200px;
  height:150px;
  background-color:blue;
  float:left;
  margin:20px 0px 0px 20px;

  border-radius: 15px;
  box-shadow:  5px 10px 10px rgba(18,89,53,0.7);
}

.merchant_logo_settings
{
  width:200px;
  height:150px;
  border: 5px solid  #53C68C;
  border-radius: 15px;
  


}


.new_store_text_div
{
  width:200px;
  
  background-color:rgba(44,41,41,0.8);
  position:absolute;
  margin-top:60px;
  
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 17px;

  font-family:sans-serif;
 // text-shadow:5px 5px 20px #53C68C;
  text-align: center;
  text-transform: uppercase;
  padding-top:10px;
  padding-bottom:10px;
  font-weight: 900;

}



#plus_symbol
{
  position:fixed;
  top:540px;
  left:650px;
}


.mouse_will_be_hand
{
  cursor: pointer;
}


.trash_img
{

  height:30px;
  padding:0px;
  margin:0px;
}



.delete_btn_design
{
  padding: 0;
border: none;
background: none;
border-radius:10px;
width:30px;
height:32px;
}

.new_store_delete_div
{
  background-color:none;
  height:50px;
  text-align:right;
  position:absolute;
  margin-left:160px;
  margin-top:5px;
}

.our_textbox_sizing
{
    background-color:#E6FFFA;
    height:35px;
    border-radius:3px;
}


.our_text_font
{
  font-family: Arial Black, Arial, Helvetica;
  text-align:right;
  margin-left:50px;
 
}

.p_styling
{
  font-family: Arial Black, Arial, Helvetica;
  color:white; 
  font-size:15px;
}



.button_style_by_us
{
  font-family: Arial Black, Arial, Helvetica;
  color:#53C68C;
  background-color:#E6FFFA;
  font-size: 12px;
  border-radius:20px;

  padding:10px;
  border: none;
  outline:none;
 

}
    </style>
</head>
<body>
    


    <main>
      





        <div id="merchant_owner">
          <form method="post" action = "<?php $_PHP_SELF ?>">

                                        <center> <h3>Merchant Login</h3></center><br>
                                            
                                                <div class="form-group row" style="margin-top:0px; padding-top:10px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">FIRSTNAME: </label>
                                                    <div class="col-sm-6 our_textbox_sizing">
                                                    <input type="text" class="form-control "  value="<?php echo $mer_fname;?>"  placeholder="email" name="mer_fname" id="username">
                                                  
                                                    </div>
                                                </div>


                                                <div class="form-group row" style="margin-top:0px; padding-top:10px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">LASTNAME: </label>
                                                    <div class="col-sm-6 our_textbox_sizing">
                                                    <input type="text" class="form-control "  value="<?php echo $mer_lname;?>" name="mer_lname" id="username">
                                                  
                                                    </div>
                                                </div>





                                                <div class="form-group row" style="margin-top:0px; padding-top:50px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">EMAIL: </label>
                                                    <div class="col-sm-6 our_textbox_sizing">
                                                    <input type="text" class="form-control "  value="<?php echo $mer_email;?>" placeholder="email" name="mer_email" id="username">
                                                  
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="margin-top:0px; padding-top:10px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">PHONE: </label>
                                                    <div class="col-sm-6 our_textbox_sizing">
                                                    <input type="text" class="form-control " value="<?php echo $mer_phone;?>"  placeholder="email" name="mer_phone" id="username">
                                                  
                                                    </div>
                                                </div>
                                               

                                               
                                                <div class="form-group row" style="margin-top:0px; padding-top:30px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">Stores Count: </label>
                                                    <div class="col-sm-6 ">
                                                    <p class="p_styling"> <?php echo $number_of_stores;?> stores</p>
                                                  
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="margin-top:0px; padding-top:10px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">All subs Count: </label>
                                                    <div class="col-sm-6 ">
                                                    <p class="p_styling">27 subs</p>
                                                  
                                                  
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group row" style="margin-top:0px; padding-top:10px;">
                                                    <label  class="col-sm-3 col-form-label our_text_font" style="color:white; font-size:11px;">Active Promotions: </label>
                                                    <div class="col-sm-6 ">
                                                    <p class="p_styling"> <?php echo $number_of_active_promotions ;?> promotions</p>
                                                  
                                                  
                                                    </div>
                                                </div>

                                                <button name="update_profile_btn" type="submit" class=" button_style_by_us" href="#" style="width:150px;   margin-left:130px; margin-top:20px;" pb-role="submit">UPDATE PROFILE</button>

                                               
		

        

          </form>
        
        
        </div>
















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
                    var new_store_delete_div =  document.createElement("div");
                    var new_img =  document.createElement("img");

                    var img_delete_trash =  document.createElement("img");  //trash image => button =>
                                                                                          // hidden_input => form_
                    var button_delete_image = document.createElement("button");
                    var hidden_input = document.createElement("input");
                    var form_ = document.createElement("form");
                    var a_tags_to_view = document.createElement("a");

                    form_.setAttribute("action","<?php $_PHP_SELF ?>");
                    form_.setAttribute("method","post");
                    hidden_input.setAttribute("type","hidden");
                    hidden_input.setAttribute("name","hidden_storeID");
                    hidden_input.setAttribute("value","<?php echo $row['store_ID'];?>");
                    a_tags_to_view.setAttribute("class","a_tags_to_view<?php echo $index_num;?> mouse_will_be_hand");
                    a_tags_to_view.setAttribute("href","promotions.php#store_num<?php echo $row["store_ID"];?>");
                    img_delete_trash.setAttribute("src","../images/delete_img_trash.png");
                    img_delete_trash.setAttribute("class","trash_img");
                    button_delete_image.setAttribute("name","delete_store");
                    button_delete_image.setAttribute("class","delete_btn_design");
                    button_delete_image.appendChild(img_delete_trash);

                    // <a href="directry/filename.html#section5" >click me</a>
                    new_store_div.setAttribute("class","new_store_div");
                    new_store_text_div.setAttribute("class","new_store_text_div");
                    new_store_delete_div.setAttribute("class","new_store_delete_div");
                    new_img.setAttribute("src","../Backend/uploaded_files/<?php echo $row['store_img_logo']; ?>");
                    new_img.setAttribute("class","merchant_logo_settings");


                    form_.appendChild(hidden_input);
                    form_.appendChild(button_delete_image);
                    new_store_delete_div.appendChild(form_);
                    new_store_text_div.innerHTML = "<?php echo $row['store_name'];?>";
                    //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                    new_store_div.appendChild(new_store_delete_div);
                    new_store_div.appendChild(new_store_text_div);
                    new_store_div.appendChild(new_img);
                    a_tags_to_view.appendChild(new_store_div);

                    all_stores_top.appendChild(a_tags_to_view);


                    console.log("saimer plus");
                    <?php $index_num++;?>
                    <?php endforeach; ?>
                  }



</script>



<?php for ( $x=0; $x<$index_num; $x++):?>

    <script>

    var a_tags_to_view = document.querySelector(".a_tags_to_view");
    var center_view_flip = document.querySelector("#center_view_flip");
    var flip_card_front = document.querySelector(".flip-card-front");
    var flip_close_div = document.querySelector("#flip_close_div");
    var close_flip_div_btn = document.querySelector("#close_flip_div_btn");
    var all_new_active_promotion_array = document.querySelectorAll(".all_new_active_promotion");
    var n = 0;


    $(document).ready(function(){
              var count = 0;
              $(".a_tags_to_view<?php echo $x;?>").click(function(){
                flip_card_front.innerHTML = all_new_active_promotion_array["<?php echo $x;?>"].innerHTML;
                center_view_flip.style.display="block";
                flip_close_div.style.display="block";
                console.log(all_new_active_promotion_array);
          
              });

              
            
            
            })

    $(document).ready(function(){
              var count = 0;
              $("#flip_close_div").click(function(){
                
                center_view_flip.style.display="none";
                flip_close_div.style.display="none";
          
              });

              
            
            
            })

    </script>

<?php endfor;?>

