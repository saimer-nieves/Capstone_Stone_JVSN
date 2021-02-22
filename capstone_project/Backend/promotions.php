<?php

session_start(); 
$mer_ID= $_SESSION["mer_ID"];

 include "../Model/model_add_merchant_store.php";
 include "../Model/model_promotions.php";



 $all_owned_stores_array = get_merchant_stores($mer_ID);; //get promotions for store 52
 var_dump($all_owned_stores_array);
 
 echo "<br><br><br><br><br><br>".sizeof($all_owned_stores_array);

 $total_items = sizeof($all_owned_stores_array);
  for ($x = 0; $x < sizeof($all_owned_stores_array); $x++) {
    $k = array_search($all_owned_stores_array[$x], $all_owned_stores_array); //$k = 1;

    echo "<br><br><br>".$k;
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

.new_promotion
{
  width:200px;
  height:150px;
  background-color:blue;
  float:left;
  margin:5px;
//  border: 2px solid red;
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
    background-color:red;
    margin-bottom:10px;

}

.middle_section_title
{

    width:100%;
    height:70px;
    background-color:yellow;
    

}

.active_promotions
{
  
  width:440px;
  height:400px;
  background-color:orange;
  float:left;
  margin:15px 20px 20px 0px;
}

.inactive_promotions
{
  
  width:440px;
  height:400px;
  background-color:purple;
  float:left;

  margin:15px 0px 0px 0px;
}


.active_title
{
  background-color:red; 
  height:100%;
  width:50%;
  text-align:center;
  float:left;
  padding-top:20px;
}

.inactive_title
{
  background-color:gray; 
  height:100%;
  width:50%;
  float:left;
  text-align:center;
  padding-top:20px;
}


.unique_store
{
  float:left;
  margin-bottom:200px;
}
    </style>
</head>
<body >
    
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


                            new_store_div.setAttribute("class","new_promotion");
                            new_store_text_div.setAttribute("class","new_store_text_div");

                          // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");


                            new_store_text_div.innerHTML = "<?php echo $row['promotion_type'];?><br> <?php echo $row['promotion_title'];?>";
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_div.appendChild(new_store_text_div);
                            //new_store_div.appendChild(new_img);
                            

                            inactive_promotions_div.appendChild(new_store_div);


                            console.log("saimer plus");
                        <?php endforeach; ?>




                 
                  }
                  
    
                  console.log("sdasdsad");


                  
</script>



<script>



    //PROBLEM BEGINS HERE


    console.log("sdasdsad");



    <?php foreach ($all_owned_stores_array as $row):?>
        var each_unique_div =  document.createElement("div");
              each_unique_div.setAttribute("class","unique_store");  //UNIQUE


              var store_name_section_div =  document.createElement("div");
              store_name_section_div.setAttribute("class","store_name_section"); //STORE TITLE

              var middle_section_title_div =  document.createElement("div");
              middle_section_title_div.setAttribute("class","middle_section_title");  // MIDDLE SECTION FOR TITLES


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
              each_unique_div.appendChild(middle_section_title_div);
              

              console.log("junior outside");
            



              active_title_div.innerHTML = "Acttive";
              inactive_title_div.innerHTML = "Inacttive";
              each_unique_div.appendChild(active_promotions_div);
              each_unique_div.appendChild(inactive_promotions_div);


              middle_section_title_div.appendChild(active_title_div);
              middle_section_title_div.appendChild(inactive_title_div);
            console.log("sdasdsad");
            // store_ID, store_name, store_category, store_day_created, store_img_logo, mer_ID
            store_name_section_div.innerHTML = "<?php echo $row['store_name'];?>";
    <?php 
      $store_ID_FOUND = $row['store_ID'];
      $active_results_array =  get_promotions_active( $store_ID_FOUND);
      $expired_results_array =  get_promotions_expired( $store_ID_FOUND);
      foreach ($active_results_array as $col):?>
      
                            var new_store_div =  document.createElement("div");
                            var new_store_text_div =  document.createElement("div");
                            var new_img =  document.createElement("img");


                            new_store_div.setAttribute("class","new_promotion");
                            new_store_text_div.setAttribute("class","new_store_text_div");

                          // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");


                            new_store_text_div.innerHTML = "<?php echo $col['promotion_type'];?><br> <?php echo $col['promotion_title'];?>";
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_div.appendChild(new_store_text_div);
                            //new_store_div.appendChild(new_img);
                            

                            active_promotions_div.appendChild(new_store_div);


                            console.log("saimer plus");
       // $promotion_title = $row['promotion_title'];
        //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
        //store_name_section_div.innerHTML += "<?php //echo $col['promotion_ID'];?> <?php// echo $col['promotion_title'];?>";
      <?php endforeach; ?>

      <?php foreach ($expired_results_array as $col):?>
      
        var new_store_div =  document.createElement("div");
                            var new_store_text_div =  document.createElement("div");
                            var new_img =  document.createElement("img");


                            new_store_div.setAttribute("class","new_promotion");
                            new_store_text_div.setAttribute("class","new_store_text_div");

                          // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                          // new_img.setAttribute("class","merchant_logo_settings");


                            new_store_text_div.innerHTML = "<?php echo $col['promotion_type'];?><br> <?php echo $col['promotion_title'];?>";
                            //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                            new_store_div.appendChild(new_store_text_div);
                            //new_store_div.appendChild(new_img);
                            

                            inactive_promotions_div.appendChild(new_store_div);


                            console.log("saimer plus");
       // $promotion_title = $row['promotion_title'];
        //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
        //store_name_section_div.innerHTML += "<?php// echo $col['promotion_ID'];?> <?php //echo $col['promotion_title'];?>";
        //$promotion_title = $row['promotion_title'];
       // echo "<br><br>". $col['promotion_ID']."<br><br><br><br>". "<br><br>". $col['promotion_title']."<br><br><br><br>";
       // store_name_section_div.innerHTML += "<?php// echo $col['promotion_ID'];?> <?php //echo $col['promotion_title'];?>";
      <?php endforeach;?>

    <?php endforeach;?>


</script>