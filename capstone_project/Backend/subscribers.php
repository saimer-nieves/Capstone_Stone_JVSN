<?php

session_start(); 
$mer_ID= $_SESSION["mer_ID"];

 include "../Model/model_add_merchant_store.php";
 include "../Model/model_promotions.php";



 $all_owned_stores_array = get_merchant_stores($mer_ID); //get promotions for store 52

//var_dump($all_owned_stores_array);
//exit;


 $all_owned_stores_array = get_merchant_stores($mer_ID); //get promotions for store 52
 //var_dump($all_owned_stores_array);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.individual_store
{
    background-color:none;
    padding:10px;
    width: 990px;
    height: 504px;
    margin-left:200px;
    margin-top:100px;
    border-bottom: 2px solid black;
}

.logo_top_div
{
float:left;
background-color:#D5F317;

width: 635px;
height: 200px;

}
.logo_bottom_div
{
    position:absolute;
    float:left;
width: 320px;
height: 244px;
margin-top:185px;
background: #D5F317;
}
.total_subs_display
{
    float:left;
width: 302px;
height: 200px;
margin-left:18px;

background: #20E5DA;

}
.view_all_customers
{
    margin-top:20px;
    background: #209EE5;
    float:left;
    width: 293px;
    height: 208px;
    margin-left:340px;

}
.lost_subs_display
{
    margin-left:20px;
    margin-top:20px;
    
    width: 302px;
    height: 208px;

    float:left;
    background: #FD1313;
}

</style>
<body>

<div id="all_content"></div>

</body>
</html>

<?php foreach ($all_owned_stores_array as $row): ?>
              
    
    <?php echo "saiemr";?>
    <script>
    var all_content_stores_div = document.querySelector("#all_content")
    var each_unique_store =  document.createElement("div");
              each_unique_store.setAttribute("class","individual_store");  //UNIQUE


              var logo_top_div =  document.createElement("div");
              logo_top_div.setAttribute("class","logo_top_div"); //STORE TITLE

              var total_subs_display =  document.createElement("div");
              total_subs_display.setAttribute("class","total_subs_display");  // MIDDLE SECTION FOR TITLES


              var logo_bottom_div =  document.createElement("div");
              logo_bottom_div.setAttribute("class","logo_bottom_div"); //ACTIVE TITLES

              var a_tag =  document.createElement("a");
              a_tag.setAttribute("href","view_customers.php?store=<?php echo $row['store_ID'];?>"); //ACTIVE TITLES

              var view_all_customers =  document.createElement("div");
              view_all_customers.setAttribute("class","view_all_customers"); //INACTIVE TITLE

              var lost_subs_display =  document.createElement("div");
              lost_subs_display.setAttribute("class","lost_subs_display"); //ACTIVE PROMOTION

              all_content_stores_div.appendChild(each_unique_store);
              each_unique_store.appendChild(logo_top_div);
              each_unique_store.appendChild(total_subs_display);
              each_unique_store.appendChild(logo_bottom_div);

              a_tag.appendChild(view_all_customers);
              each_unique_store.appendChild(a_tag);
              
              each_unique_store.appendChild(lost_subs_display);
              

              
            



              //active_title_div.innerHTML = "Acttive";
              //inactive_title_div.innerHTML = "Inacttive";
              //each_unique_div.appendChild(active_promotions_div);
              //each_unique_div.appendChild(inactive_promotions_div);


             // middle_section_title_div.appendChild(active_title_div);
             // middle_section_title_div.appendChild(inactive_title_div);
            //console.log("sdasdsad");
            // store_ID, store_name, store_category, store_day_created, store_img_logo, mer_ID
           // store_name_section_div.innerHTML = "<?php echo $row['store_name'];?>";


    </script>
   
 <?php endforeach; ?>

