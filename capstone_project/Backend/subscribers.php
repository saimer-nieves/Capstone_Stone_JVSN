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
height: 228px;
margin-top:200px;
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

.subs_count_styling
{
    position:absolute;
    font-family: Arial Black, Arial, Helvetica;
    color:white;
    font-size: 25px;
  
    text-align:center;
    margin-left:66px;
    margin-top:34px;
    //text-transform: uppercase;
}

.store_logo_styling
{
    width:300px;
    height:180px;
    
  
float:left;
    margin-left:20px;
    margin-top:10px;

    box-shadow: -5px 5px 5px black;
/* Center and scale the image nicely */
background-position: center  !important;
background-repeat: no-repeat   !important;
background-size: cover   !important;
}

.store_title_design
{
    float:left;
    position:absolute;
    font-family: Arial Black, Arial, Helvetica;
    color:black;
    font-size: 30px;

    margin-left:370px;
     margin-top:70px;
    text-align:right;
    background-color: none;
    text-transform: uppercase;
    width:250px;
}

.u_title_large
{
    white-space: nowrap;
    font-size: 0.6em;
}

.u_title_small
{
    white-space: nowrap;
    font-size: 0.9em;
}

.storeTextInfo{

    font-family: Arial Black, Arial, Helvetica;
    color:black;
    font-size: 10px;
    
    text-transform: uppercase;

}

.text_info_styling
{
    
   
    font-family: Arial Black, Arial, Helvetica;
    color:black;
    font-size: 10px;
   
  
    text-transform: uppercase;
   

}

td{ padding:10px;}

.store_label
{
    text-align:right;
   
}
</style>
<body>

<div  class="storeTextInfo">

    <table>

        <tr> <td class="store_label">store ID:</td>  <td class="text_info_styling">  52 </td></tr>
        <tr> <td class="store_label">active promotions:</td>  <td class="text_info_styling" > 3 promotions   </td></tr>
        <tr> <td class="store_label">store category:</td>  <td class="text_info_styling" > Clothing  </td></tr>
        <tr> <td class="store_label">Days Running:</td>  <td class="text_info_styling" >  3 Days  </td></tr>

    </table>
   
  

</div>

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
                var logo_INNER_img_div =  document.createElement("div");
                logo_INNER_img_div.setAttribute("class","sam"); //STORE TITLE
                logo_INNER_img_div.innerHTML="<div class='store_logo_styling' style='background-image:url(uploaded_files/<?php echo $row['store_img_logo'];?>)'> </div>"; //STORE TITLE
                logo_top_div.appendChild(logo_INNER_img_div);
                var store_title_text_div =  document.createElement("div");
                store_title_text_div.setAttribute("class","sam"); //STORE TITLE
                var nameCount = '<?php echo $row['store_name'];?>';
                console.log(nameCount.length)
                if(nameCount.length >= 10)
                {
                    store_title_text_div.innerHTML="<h3 class='store_title_design'><u class='u_title_large'><?php echo $row['store_name'];?></u> <br> Subscripers</h3>"; //STORE TITLE
                }
                else
                {
                    store_title_text_div.innerHTML="<h3 class='store_title_design'><u class='u_title_small'><?php echo $row['store_name'];?></u> <br> Subscripers</h3>"; //STORE TITLE
                }
              
               
                logo_top_div.appendChild(store_title_text_div);


              var total_subs_display =  document.createElement("div");
              total_subs_display.setAttribute("class","total_subs_display");  // MIDDLE SECTION FOR TITLES
                var total_subs_INNER_text =  document.createElement("h4");
                total_subs_INNER_text.setAttribute("class","subs_count_styling"); //STORE TITLE
                total_subs_INNER_text.innerHTML="Total <br> Subscribers: <br><br> 400,000"; //STORE TITLE
                total_subs_display.appendChild(total_subs_INNER_text);



              var logo_bottom_div =  document.createElement("div");
              logo_bottom_div.setAttribute("class","logo_bottom_div"); //ACTIVE TITLES
              var storeINNER_textinfo =  document.createElement("div");
              storeINNER_textinfo.innerHTML=" junior"; //STORE TITLE
              logo_bottom_div.appendChild(storeINNER_textinfo);


              var a_tag =  document.createElement("a");
              a_tag.setAttribute("href","view_customers.php?store=<?php echo $row['store_ID'];?>"); //ACTIVE TITLES

              var view_all_customers =  document.createElement("div");
              view_all_customers.setAttribute("class","view_all_customers"); //INACTIVE TITLE

              var lost_subs_display =  document.createElement("div");
              lost_subs_display.setAttribute("class","lost_subs_display"); //ACTIVE PROMOTION
                var lost_subs_INNER_text =  document.createElement("h4");
                lost_subs_INNER_text.setAttribute("class","subs_count_styling"); //STORE TITLE
                lost_subs_INNER_text.innerHTML="Lost <br> Subscribers: <br><br> 587"; //STORE TITLE
                lost_subs_display.appendChild(lost_subs_INNER_text);


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

