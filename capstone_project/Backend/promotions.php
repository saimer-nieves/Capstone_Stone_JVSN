<?php

session_start(); 
$mer_ID= $_SESSION["mer_ID"];

 include "../Model/model_add_merchant_store.php";
 include "../Model/model_promotions.php";



 $all_owned_stores_array = get_merchant_stores($mer_ID);; //get promotions for store 52


 $total_items = sizeof($all_owned_stores_array);
  for ($x = 0; $x < sizeof($all_owned_stores_array); $x++) {
    $k = array_search($all_owned_stores_array[$x], $all_owned_stores_array); //$k = 1;

 
  }
  

  
 if(isset($_POST['delete_promotions'])){
  $promotion_ID = filter_input(INPUT_POST, 'hidden_PromoteID');
  var_dump($id);
  echo "saimer you deleted this promotion";

  $results = updatePromotions($promotion_ID);


    
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


  header("Location: promotions.php");
   }

 


/*
 foreach ($all_owned_stores_array as $row)
 {
  $store_ID_FOUND = $row['store_ID'];
  $active_results_array =  get_promotions_active( $store_ID_FOUND); //get promotions for store 52
  $expired_results_array =  get_promotions_expired( $store_ID_FOUND);
  
  echo "active inside loop: "; var_dump($active_results_array);
  echo"<br>***** <br>";
  echo "active inside loop: "; var_dump($expired_results_array);
  echo"<br>***** ";
 
 }
 //exit;

 //var_dump($results_array);*/










;?>
<?php



include "../includes/back_side_nav.php";


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<style>

body
{
   // padding-top:100px;
   background-color:#e6fffa;
  
   /
    
   
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

.new_promotion_coupon
{
  width:200px;
  height:150px;
  background-color:#ffffff;
  float:left;
  margin:15px;
  border-style: dashed;
    border-width: 5px;
    border-color:#e73e45;
  border-radius: 2px;
  
}
.new_promotion_big_sale
{
  width:200px;
  height:150px;
  background-color:#3DEFCC;
  float:left;
  
  border-style: solid;
    border-width: 5px;
    border-color:#ffffff;
  border-radius: 2px;
  margin:15px;
}
.new_promotion_info
{
  width:200px;
  height:150px;
  background-color:#D5F317;
  float:left;
  margin:15px;
  border-style: solid;
    border-width: 5px;
    border-color:white;
  border-radius: 2px;
}

.merchant_logo_settings
{
  width:200px;
  height:150px;
  border: 1px solid black;
  border-radius: 2px;
  


}


.new_store_text_div
{
  
  background-color: none;
  font-family: Arial Black, Arial, Helvetica;
  color:rgba(0,0,0,0.7);
 
  text-align: center;
}

.new_store_delete_div
{
  background-color:none;
  height:50px;
  text-align:right;
}



.all_content
{
    background-color:none;
    height:100%;
    width:900px;
    margin-left:200px;
    margin-top:40px;
}

.store_name_section
{

    width:100%;
    height:100px;
    background-color:#D5F317;
    margin-bottom:10px;
    float:left;


    font-family: Arial Black, Arial, Helvetica;
    color:black;
    font-size: 25px;
    text-align:center;
    text-transform: uppercase;
    padding-top:25px;

}

.middle_section_active
{
  text-transform: uppercase;
    width:100%;
    height:70px;
    background-color:#0FF934;
    float:left;

}

.middle_section_inactive
{
  text-transform: uppercase;
    width:100%;
    height:70px;
    background-color:#f2908b;
    float:left;

}

.active_promotions
{
  text-transform: uppercase;
  width:920px;
  min-height: 200px;
  background-color:rgba(15,249,52,0.07);
  float:left;
  margin-bottom:10px;
}

.inactive_promotions
{
  text-transform: uppercase;
  width:920px;
  min-height: 200px;
  background-color:rgba(255,46,0,0.07);
  float:left;

  margin-bottom:10px;
}


.active_title
{
  background-color:#0FF934; 
  height:100%;
  width:100%;
  text-align:center;
  float:left;
  padding-top:20px;


  font-family: Arial Black, Arial, Helvetica;
  color:rgba(0,0,0,0.7);
  font-size: 18px;
}

.inactive_title
{
  background-color:#f2908b; 
  height:100%;
  width:100%;
  float:left;
  text-align:center;
  padding-top:20px;

  font-family: Arial Black, Arial, Helvetica;
  color:rgba(0,0,0,0.7);
  font-size: 18px;
}


.unique_store
{
  float:left;
  margin-bottom:200px;
}


#plus_symbol
{
  background-color:#53C68C;
}

.trash_img
{

  height:30px;
}

.delete_btn_design
{
  padding: 0;
border: none;
background: none;
}

.mouse_will_be_hand
{
  cursor: pointer;
}

#center_view_flip
{
  background-color:none;
  height:250px;
  width:300px;
  left:500px;
  top:250px;
  position:fixed;
  display:none;
}





.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:active .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:white ;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}





#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_big_sale 
{
  height:250px;
  width:270px;
}
#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_big_sale .new_store_text_div
{
  padding-top:30px;
  
  font-size: 20px;
  font-weight: 900;
}






#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_coupon  
{
  height:250px;
  width:270px;
}
#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_coupon  .new_store_text_div
{
  padding-top:30px;
  
  font-size: 20px;
  font-weight: 900;
}







#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_info  
{
  height:250px;
  width:270px;
}
#center_view_flip .flip-card .flip-card-inner .flip-card-front .mouse_will_be_hand .new_promotion_info  .new_store_text_div
{
  padding-top:30px;
  
  font-size: 20px;
  font-weight: 900;
  
}




#center_view_flip .flip-card .flip-card-inner .flip-card-front .new_store_delete_div form .delete_btn_design
{
  display:none;
}



#flip_close_div
{
  width:35px;
  height:35px;
  position:fixed;
  top:250px;
  left:765px;
  background-color:red;
  display:none;
  padding:5px;
}

#flip_close_div:hover
{
  background-color: #F67E7E;
}


#display_sample_coupon
  {
    height:300px;
    width:300px;
    background-color:#ffffff;
  
    display:none;
    padding:5px;
    border-style: solid;
    border-width: 5px;
    border-color:#e73e45;

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




#code
{
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  margin-top:0px;
}











#display_sample_big_sale
  {
    height:300px;
    width:300px;
    background-color:#ffffff;
    display:none;
    padding:5px;
    border-style: solid;
    border-width: 5px;
    border-color:black;

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
















#display_sample_info
  {
    height:300px;
    width:300px;
    background-color:#ffffff;
    display:none;
    padding:5px;
    border-style: solid;
    border-width: 5px;
    border-color:black;

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


.make_hidden
{
  display:none;
}







    </style>
</head>
<body >

<div id="center_view_flip">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          
        </div>



        <div class="flip-card-back">
          
              <div id="display_sample_coupon">
                    
                    <h3 id="title">Title here</h3>
                    
                    <h5 id="subheading" name="coupon_subheading"> subheading</h5>
                    <h6 id="expire" name="coupon_expire"> expire</h6>
                    <h6 id="description" name="coupon_description"> saimer nieves went to buy a mansion in florida and california and england he then bought a house for all his relatives</h6>
                    <img src="../images/coupon_bar_bg_rem.png" id="coupon_bar">
                    <h6 id="code" name="coupon_code"> code</h6>

                    
              </div>


              <div id="display_sample_big_sale">
                    

                                <h5 id="store2" name="big_sale_store"> </h5><br>
                                <h3 id="title2" name="big_sale_title">Title here</h3>
                                
                                <h6 id="expire2" name="big_sale_expire"> expire</h6>
                                <h6 id="description2" name="big_sale_description"> description</h6>

                                
                                
                                  <h6 id="address2" name="big_sale_address"> address</h6>
                              

                                
              </div>


              <div id="display_sample_info">
                
                            <div style="background-color:#ff8080;">
                              
                              <h3 id="title3" name="big_sale_title">Title here</h3>
                              <h5 id="store3" name="big_sale_store"> </h5> 
                              <h6 id="address3" name="big_sale_address"> address</h6>
                 
                            </div>

                            <div>

                              <h6 id="description3" name="big_sale_description"> description</h6>

                            </div>
                            
                             
                          

                            
              </div>

        </div>
      </div>
    </div>
        
        
    </div>
    <a id="close_flip_div_btn"><div id="flip_close_div"><span class="glyphicon glyphicon-remove text-dark fa-2x" id="close_flip_div_icon"></div></a>
    <?php

foreach ($all_owned_stores_array as $row): 
  $store_ID_FOUND = $row['store_ID'];
  $active_results_array =  get_promotions_active( $store_ID_FOUND); //get promotions for store 52
  $expired_results_array =  get_promotions_expired( $store_ID_FOUND);

 

 endforeach;
    ?>

    <main>
      



        <div class="all_content">
        


        
        </div>




























    </main>

    









   


              <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                <button name="plus_promotion_btn" type="button" id="plus_symbol" style="position:fixed; top:600px; left:1120px; height:100px; width:150px;font-weight:bold;" ><img src="../images/plus_icon.png" style="width:30px;"></i></button>
              </form>
            

        















</body>
</html>

<script>

var all_content_div = document.querySelector(".all_content");




                var plus_symbol = document.querySelector("#plus_symbol");
                var active_promotions = document.querySelector("#active_promotions"); //create a div then give class of Active_store div use php to bring info from the tables
                var all_expired = document.querySelector("#inactive_promotions"); //create a div then give class of Active_store div use php to bring info from the tables
                
              


                
                plus_symbol.addEventListener("click", send_to_next_site);

                function send_to_next_site ()
                {
                  window.location.href = "../Backend/add_promotion.php";
                }


                
                  document.onload = add_store();

                  function add_store()
                  {
                    
                    
                        



                        <?php foreach ($expired_results_array as $row): ?>
                            var new_store_div =  document.createElement("div");
                            var new_store_text_div =  document.createElement("div");
                            var new_img =  document.createElement("img");
                            var a_tags_to_view = document.createElement("a");


                            <?php if($row['promotion_type'] == "coupon"):?>
                              new_store_div.setAttribute("class","new_promotion_coupon");
                              <?php endif;?>
                            <?php if($row['promotion_type'] == "big sale"):?>
                              new_store_div.setAttribute("class","new_promotion_big_sale");
                            <?php endif;?>
                            <?php if($row['promotion_type'] == "info"):?>
                              new_store_div.setAttribute("class","new_promotion_info");
                            <?php endif;?>
                            new_store_text_div.setAttribute("class","new_store_text_div");
                            a_tags_to_view.setAttribute("class","a_tags_to_view");
                            a_tags_to_view.setAttribute("href","#");

                          // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");


                            new_store_text_div.innerHTML = "<?php echo $row['promotion_type'];?><br> <?php echo $row['promotion_title'];?>";
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_div.appendChild(new_store_text_div);
                            a_tags_to_view.appendChild(new_store_div);
                            //new_store_div.appendChild(new_img);
                            

                            inactive_promotions_div.appendChild(a_tags_to_view);


                            console.log("saimer plus");
                        <?php endforeach; ?>




                 
                  }
                  
    
                  console.log("sdasdsad");


                  
</script>


<?php $index_num = 0;?>
<script>



    //PROBLEM BEGINS HERE


    console.log("sdasdsad");



    <?php foreach ($all_owned_stores_array as $row):?>
        var each_unique_div =  document.createElement("div");
              each_unique_div.setAttribute("class","unique_store");  //UNIQUE


              var store_name_section_div =  document.createElement("div");
              store_name_section_div.setAttribute("class","store_name_section"); //STORE TITLE
              store_name_section_div.setAttribute("id","store_num<?php echo $row["store_ID"];?>"); //STORE TITLE

              var middle_section_active =  document.createElement("div");
              middle_section_active.setAttribute("class","middle_section_active");  // MIDDLE SECTION FOR TITLES
             
              var middle_section_inactive =  document.createElement("div");
              middle_section_inactive.setAttribute("class","middle_section_inactive");  // MIDDLE SECTION FOR TITLES


              var active_title_div =  document.createElement("div");
              active_title_div.setAttribute("class","active_title"); //ACTIVE TITLES

              var inactive_title_div =  document.createElement("div");
              inactive_title_div.setAttribute("class","inactive_title"); //INACTIVE TITLE

              var active_promotions_div =  document.createElement("div");
              active_promotions_div.setAttribute("class","active_promotions"); //ACTIVE PROMOTION

              var inactive_promotions_div =  document.createElement("div");
              inactive_promotions_div.setAttribute("class","inactive_promotions"); //INACTIVE PROMOTIONS

              all_content_div.appendChild(each_unique_div);
              each_unique_div.appendChild(store_name_section_div);
              each_unique_div.appendChild(middle_section_active);
              each_unique_div.appendChild(active_promotions_div);
              each_unique_div.appendChild(middle_section_inactive);
              

              console.log("junior outside");
            



              active_title_div.innerHTML = "Active";
              inactive_title_div.innerHTML = "Inactive";
              
              each_unique_div.appendChild(inactive_promotions_div);


              middle_section_active.appendChild(active_title_div);
              middle_section_inactive.appendChild(inactive_title_div);
            console.log("sdasdsad");
            // store_ID, store_name, store_category, store_day_created, store_img_logo, mer_ID
            store_name_section_div.innerHTML = "<?php echo $row['store_name'];?>";
            
    <?php 
      $store_ID_FOUND = $row['store_ID'];
      $active_results_array =  get_promotions_active( $store_ID_FOUND);
      $expired_results_array =  get_promotions_expired( $store_ID_FOUND);
      foreach ($active_results_array as $col):?>
                            var new_store_div_OUTERSHELL =  document.createElement("div");
                            var new_store_div =  document.createElement("div");
                            var new_store_text_div =  document.createElement("div");
                            var new_store_delete_div =  document.createElement("div");
                            var img_delete_trash =  document.createElement("img");
                            var button_delete_image = document.createElement("button");
                            var hidden_input = document.createElement("input");
                            var hidden_p_tag = document.createElement("p");
                            var form_ = document.createElement("form");
                            var a_tags_to_view = document.createElement("a");

//********************************************************************* */

                            var hidden_p_Promotion_type = document.createElement("p");
                            var hidden_p_Promotion_Title = document.createElement("p");
                            var hidden_p_Subheading = document.createElement("p");
                            var hidden_p_Address = document.createElement("p");
                            var hidden_p_exp_date = document.createElement("p");
                            var hidden_p_description = document.createElement("p");
                            var hidden_p_code = document.createElement("p");
                      

                            hidden_p_Promotion_type.setAttribute("class","hidden_Promotion_type<?php echo $index_num;?>  make_hidden");
                            hidden_p_Promotion_Title.setAttribute("class","hidden_promotion_title<?php echo $index_num;?> make_hidden");
                             hidden_p_Subheading.setAttribute("class","hidden_promotion_subheading<?php echo $index_num;?> make_hidden");
                             hidden_p_Address.setAttribute("class","hidden_promotion_address<?php echo $index_num;?> make_hidden");
                             hidden_p_exp_date.setAttribute("class","hidden_promotion_date<?php echo $index_num;?> make_hidden");
                             hidden_p_description.setAttribute("class","hidden_promotion_description<?php echo $index_num;?> make_hidden");
                             hidden_p_code.setAttribute("class","hidden_promotion_code<?php echo $index_num;?> make_hidden");


                             hidden_p_Promotion_type.innerHTML = "<?php echo $col['promotion_type'];?>";
                             hidden_p_Promotion_Title.innerHTML = "<?php echo $col['promotion_title'];?>";
                             hidden_p_Subheading.innerHTML = "<?php echo $col['promotion_subheading'];?>";
                             hidden_p_Address.innerHTML = "<?php echo $col['promotion_address'];?>";
                             hidden_p_exp_date.innerHTML = "<?php echo $col['promotion_exp_date'];?>";
                             hidden_p_description.innerHTML = "<?php echo $col['promotion_description'];?>";
                             hidden_p_code.innerHTML = "<?php echo $col['promotion_code'];?>";

//********************************************************************* */
                            form_.setAttribute("action","<?php $_PHP_SELF ?>");
                            form_.setAttribute("method","post");
                            hidden_input.setAttribute("type","hidden");
                            hidden_input.setAttribute("name","hidden_PromoteID");
                            hidden_p_tag.setAttribute("class","hidden_p<?php echo $index_num;?>");
                            
                            a_tags_to_view.setAttribute("class","a_tags_to_view<?php echo $index_num;?> mouse_will_be_hand");
                            a_tags_to_view.setAttribute("id","a_id<?php echo $index_num;?>");

                            hidden_input.setAttribute("value","<?php echo $col['promotion_ID'];?>");
                            hidden_input.setAttribute("class","hidden_P_ID<?php echo $index_num;?>");
                            hidden_p_tag.innerHTML = "<?php echo $col['promotion_ID'];?>";
                            img_delete_trash.setAttribute("src","../images/delete_img_trash.png");
                            img_delete_trash.setAttribute("class","trash_img");
                            button_delete_image.setAttribute("name","delete_promotions");
                            button_delete_image.setAttribute("class","delete_btn_design");
                            button_delete_image.appendChild(img_delete_trash);


                            <?php if($col['promotion_type'] == "coupon"):?>
                              new_store_div.setAttribute("class","new_promotion_coupon ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");




                              
                              <?php endif;?>
                            <?php if($col['promotion_type'] == "big sale"):?>
                              new_store_div.setAttribute("class","new_promotion_big_sale ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");
                            <?php endif;?>
                            <?php if($col['promotion_type'] == "info"):?>
                              new_store_div.setAttribute("class","new_promotion_info ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");
                            <?php endif;?>
                            new_store_text_div.setAttribute("class","new_store_text_div");
                            new_store_delete_div.setAttribute("class","new_store_delete_div");
                          // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");

                            new_store_text_div.innerHTML = "<?php echo $col['promotion_type'];?><br> <?php echo $col['promotion_title'];?>";
                            form_.appendChild(hidden_input);

                           
                            form_.appendChild(hidden_p_Promotion_type);
                            form_.appendChild(hidden_p_Promotion_Title);
                            form_.appendChild(hidden_p_Subheading);
                            form_.appendChild(hidden_p_Address);
                            form_.appendChild(hidden_p_exp_date);
                            form_.appendChild(hidden_p_description);
                            form_.appendChild(hidden_p_code);


                            form_.appendChild(button_delete_image);
                            new_store_delete_div.appendChild(form_);
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_div.appendChild(new_store_delete_div);
                            new_store_div.appendChild(new_store_text_div);
                            //new_store_div.appendChild(new_img);
                            a_tags_to_view.appendChild(new_store_div);
                            new_store_div_OUTERSHELL.appendChild(a_tags_to_view);
                            active_promotions_div.appendChild(new_store_div_OUTERSHELL);


                            console.log("saimer plus");
                            <?php $index_num++;?>
       // $promotion_title = $row['promotion_title'];
        //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
        //store_name_section_div.innerHTML += "<?php //echo $col['promotion_ID'];?> <?php// echo $col['promotion_title'];?>";
      <?php endforeach; ?>
     
      <?php foreach ($expired_results_array as $col):?>
      
                            var new_store_div =  document.createElement("div");
                            var new_store_div_OUTERSHELL =  document.createElement("div");
                            var new_store_text_div =  document.createElement("div");
                            var new_store_delete_div =  document.createElement("div");
                            var a_tags_to_view = document.createElement("a");
                            var hidden_p_tag = document.createElement("p");
                            
//********************************************************************* */

 
                            var hidden_p_Promotion_type = document.createElement("p");
                            var hidden_p_Promotion_Title = document.createElement("p");
                            var hidden_p_Subheading = document.createElement("p");
                            var hidden_p_Address = document.createElement("p");
                            var hidden_p_exp_date = document.createElement("p");
                            var hidden_p_description = document.createElement("p");
                            var hidden_p_code = document.createElement("p");
                      


                            hidden_p_Promotion_type.setAttribute("class","hidden_Promotion_type<?php echo $index_num;?> make_hidden");
                            hidden_p_Promotion_Title.setAttribute("class","hidden_promotion_title<?php echo $index_num;?> make_hidden");
                             hidden_p_Subheading.setAttribute("class","hidden_promotion_subheading<?php echo $index_num;?> make_hidden");
                             hidden_p_Address.setAttribute("class","hidden_promotion_address<?php echo $index_num;?> make_hidden");
                             hidden_p_exp_date.setAttribute("class","hidden_promotion_date<?php echo $index_num;?> make_hidden");
                             hidden_p_description.setAttribute("class","hidden_promotion_description<?php echo $index_num;?> make_hidden");
                             hidden_p_code.setAttribute("class","hidden_promotion_code<?php echo $index_num;?> make_hidden");

                             hidden_p_Promotion_type.innerHTML = "<?php echo $col['promotion_type'];?>";
                             hidden_p_Promotion_Title.innerHTML = "<?php echo $col['promotion_title'];?>";
                             hidden_p_Subheading.innerHTML = "<?php echo $col['promotion_subheading'];?>";
                             hidden_p_Address.innerHTML = "<?php echo $col['promotion_address'];?>";
                             hidden_p_exp_date.innerHTML = "<?php echo $col['promotion_exp_date'];?>";
                             hidden_p_description.innerHTML = "<?php echo $col['promotion_description'];?>";
                             hidden_p_code.innerHTML = "<?php echo $col['promotion_code'];?>";

//********************************************************************* */
              
                           
                            hidden_p_tag.setAttribute("class","hidden_p<?php echo $index_num;?>");

                            <?php if($col['promotion_type'] == "coupon"):?>
                              new_store_div.setAttribute("class","new_promotion_coupon ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");
                              <?php endif;?>
                            <?php if($col['promotion_type'] == "big sale"):?>
                              new_store_div.setAttribute("class","new_promotion_big_sale ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");
                            <?php endif;?>
                            <?php if($col['promotion_type'] == "info"):?>
                              new_store_div.setAttribute("class","new_promotion_info ");
                              new_store_div_OUTERSHELL.setAttribute("class"," all_new_active_promotion");
                            <?php endif;?>
                            new_store_text_div.setAttribute("class","new_store_text_div");
                            new_store_delete_div.setAttribute("class","new_store_delete_div");
                            a_tags_to_view.setAttribute("class","a_tags_to_view<?php echo $index_num;?> mouse_will_be_hand");
                            a_tags_to_view.setAttribute("id","a_id<?php echo $index_num;?>");

                            hidden_p_tag.innerHTML = "<?php echo $col['promotion_ID'];?>";
                          //  a_tags_to_view.setAttribute("href","#");
                            // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");


                            new_store_text_div.innerHTML = "<u><?php echo $col['promotion_type'];?></u><br> <?php echo $col['promotion_title'];?>";
                          
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_delete_div.appendChild(hidden_p_tag);

                            new_store_delete_div.appendChild(hidden_p_Promotion_type);
                            new_store_delete_div.appendChild(hidden_p_Promotion_Title);
                            new_store_delete_div.appendChild(hidden_p_Subheading);
                            new_store_delete_div.appendChild(hidden_p_Address);
                            new_store_delete_div.appendChild(hidden_p_exp_date);
                            new_store_delete_div.appendChild(hidden_p_description);
                            new_store_delete_div.appendChild(hidden_p_code);



                            new_store_div.appendChild(new_store_delete_div);
                            new_store_div.appendChild(new_store_text_div);
                            a_tags_to_view.appendChild(new_store_div);
                            new_store_div_OUTERSHELL.appendChild(a_tags_to_view);
                            //new_store_div.appendChild(new_img);
                            

                            inactive_promotions_div.appendChild(new_store_div_OUTERSHELL);


                            console.log("saimer plus");
       // $promotion_title = $row['promotion_title'];
        //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
        //store_name_section_div.innerHTML += "<?php// echo $col['promotion_ID'];?> <?php //echo $col['promotion_title'];?>";
        //$promotion_title = $row['promotion_title'];
       // echo "<br><br>". $col['promotion_ID']."<br><br><br><br>". "<br><br>". $col['promotion_title']."<br><br><br><br>";
       // store_name_section_div.innerHTML += "<?php// echo $col['promotion_ID'];?> <?php //echo $col['promotion_title'];?>";
       <?php $index_num++;?>
      <?php endforeach;?>

    <?php endforeach;?>


</script>


<?php for ( $x=0; $x<$index_num; $x++):?>

<script>

var a_tags_to_view = document.querySelector(".a_tags_to_view");
var center_view_flip = document.querySelector("#center_view_flip");
var flip_card_front = document.querySelector(".flip-card-front");
var flip_close_div = document.querySelector("#flip_close_div");
var close_flip_div_btn = document.querySelector("#close_flip_div_btn");
var all_new_active_promotion_array_OUTERSHELL = document.querySelectorAll(".all_new_active_promotion");


var hidden_ID_value = document.querySelectorAll(".all_new_active_promotion");


var n = 0;


$(document).ready(function(){
          var count = 0;
          $(".a_tags_to_view<?php echo $x;?>").click(function(){

            var p_tag_Type =  document.querySelector(".hidden_Promotion_type<?php echo $x;?>");
            var promotion_type = p_tag_Type.innerHTML;
            
            

              var p_tag_ID =  document.querySelector(".hidden_p<?php echo $x;?>");
              var promotion_ID =  document.querySelector(".hidden_P_ID<?php echo $x;?>");
              
              var p_tag_Type =  document.querySelector(".hidden_Promotion_type<?php echo $x;?>");
              var p_tag_Title =  document.querySelector(".hidden_promotion_title<?php echo $x;?>");  
              var p_tag_Subheading =  document.querySelector(".hidden_promotion_subheading<?php echo $x;?>");
              var p_tag_Address =  document.querySelector(".hidden_promotion_address<?php echo $x;?>");
              var p_tag_Date =  document.querySelector(".hidden_promotion_date<?php echo $x;?>");
              var p_tag_Description =  document.querySelector(".hidden_promotion_description<?php echo $x;?>");
              var p_tag_Code =  document.querySelector(".hidden_promotion_code<?php echo $x;?>");
              


            var promotion_type = p_tag_Type.innerHTML;

            if(promotion_type == "coupon")
            {

              flip_card_front.innerHTML = all_new_active_promotion_array_OUTERSHELL["<?php echo $x;?>"].innerHTML;
              center_view_flip.style.display="block";
              flip_close_div.style.display="block";
              var info_template =  document.querySelector("#display_sample_info");
              var coupon_template =  document.querySelector("#display_sample_coupon");
              coupon_template.style.display="block"
              var big_sale_template =  document.querySelector("#display_sample_big_sale");
              big_sale_template.style.display="none";
              info_template.style.display="none";




              var title =  document.querySelector("#title");
              var subheading =  document.querySelector("#subheading");
              var expire =  document.querySelector("#expire");
              var description =  document.querySelector("#description");
              var code =  document.querySelector("#code");
            
              title.innerHTML= p_tag_Title.innerHTML;
              subheading.innerHTML= p_tag_Subheading.innerHTML;
              expire.innerHTML= p_tag_Date.innerHTML;
              description.innerHTML= p_tag_Description.innerHTML;
              code.innerHTML= p_tag_Code.innerHTML;
            
            }



            if(promotion_type == "big sale")
            {
              var info_template =  document.querySelector("#display_sample_info");
              var coupon_template =  document.querySelector("#display_sample_coupon");
              var big_sale_template =  document.querySelector("#display_sample_big_sale");
              
              coupon_template.style.display="none";
              info_template.style.display="none";
              big_sale_template.style.display="none";
              center_view_flip.style.display="none";
              flip_close_div.style.display="none";





          
              var title2 =  document.querySelector("#title2");
            
              var expire2 =  document.querySelector("#expire2");
              var description2 =  document.querySelector("#description2");
              var address2 =  document.querySelector("#address2");
            
              
              title2.innerHTML= p_tag_Title.innerHTML;
              expire2.innerHTML= p_tag_Date.innerHTML;
              description2.innerHTML= p_tag_Description.innerHTML;
              address2.innerHTML= p_tag_Address.innerHTML;

             // console.log(promotion_ID.value) //WORKING HERE
              window.location = "../Backend/view_big_sale.php?prID=" + promotion_ID.value + "&pn=" + p_tag_Title.innerHTML;
              //header("Location:add_products.php?prID=" . $pID. "&pn=" . $pn);
              
              

            
            }




            if(promotion_type == "info")
            {

              flip_card_front.innerHTML = all_new_active_promotion_array_OUTERSHELL["<?php echo $x;?>"].innerHTML;
              center_view_flip.style.display="block";
              flip_close_div.style.display="block";

              var info_template =  document.querySelector("#display_sample_info");
              var coupon_template =  document.querySelector("#display_sample_coupon");
              var big_sale_template =  document.querySelector("#display_sample_big_sale");
              info_template.style.display="block";
              big_sale_template.style.display="none";
              coupon_template.style.display="none";




          
              var title3 =  document.querySelector("#title3");
            
              
              var address3 =  document.querySelector("#address3");
              var description3 =  document.querySelector("#description3");
            
              
              title3.innerHTML= p_tag_Title.innerHTML;
              
              address3.innerHTML= p_tag_Address.innerHTML;
              description3.innerHTML= p_tag_Description.innerHTML;
            
            }

          

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

<script>


</script>

<?php endfor;?> 