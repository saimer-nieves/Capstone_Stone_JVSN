<?php 

session_start(); 
$mer_ID= 4;

include "../includes/back_customer_nav.php";

include "../Model/model_add_merchant_store.php";
include "../Model/model_promotions.php";
include "../Model/model_subscriptions.php";

//change 3 to 1
//change 2 to 3
//change 1 to 2
$all_owned_stores_array =  get_subscriptions(5); //get promotions for store 52


//echo "<br><br><br><br><br><br>".sizeof($all_owned_stores_array);

$total_items = sizeof($all_owned_stores_array);

 

//get_promotions($store_ID)

$seven = 7; //WE WILL GET STORE ID HERE TO GET THE APPROPRIATE PROMOTIONS ON THE DIV THE SLIDES DOWN
$eight = 8;

$index_number = 0;
$promotion_btn_num = 0;

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




.new_store_text_div
{
  
  
  background-color:rgba(44,41,41,0.8);
  position:absolute;
  margin-top:50px;
  padding:100px 30px 0px 30px;
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



.new_promotion
{
  width:200px;
  height:150px;
  background-color:blue;
  float:left;
  margin:5px;
//  border: 2px solid red;
  border-radius: 2px;

  display:none;
  
}



  .store_p_btn_styling
  {
    
    width: 320px;
    height: 100%;
    margin-right:30px;
  

    float:left;

    
    background: #D5F317;  
    margin-bottom:20px;
    z-index: 1;
    border: black 2px solid ;
    
  }

  .store_slide_promotions
  {
   
    width: 1070px;
    height: 339px;
    
    
    background: #C4C4C4;
    
    float:left;
    display:none;
    
  }

  #all_container1
  {
    background-color:none;
    height:200px;
    width:355px;
    margin-left:20px;
    float:left;

  }
  .all_container
  {
    background-color:blue;
 
    width:1070px;
    height:149px;
    float:left;
    margin-bottom:10px;

  }
  .every_container
  {
    background-color:blue;
 
    width:1070px;
    height:149px;
    float:left;
    margin-top:10px;
    margin-bottom:10px;

    
  }
  #all_container_test
  {
    background-color:blue;
 
 width:1070px;
 height:200px;
 float:left;
 
  }

  #box
  {
    margin-left:150px;
    width:1070px;
    height:800px;
    background-color:orange;
    

  }
  .middle_col_slide
  {
    
    background-color:red;
    
  }
  .pid0{ background-color:red;}
  .pid1{ background-color:yellow;}
  .pid2{ background-color:purple;}
  .right_col_slide
  {
    margin-left:-750px;
    background-color:green;
  }
  .promotion_div_box
  {
    
    
  
    background-color:green;
    float:left;

    width: 1070px;
    height: 339px;
    
    
   
   
  }

  .all_promotion_divs
  {

    background-color:green;
    float:left;

    width: 1070px;
    height: 339px;
    
    display:none;
    
   
 
   
  }

  .unique_inner_promotions_styling
  {
    width:100%;
    height:339px;
    background-color:black;

    display:none;
    margin-top:10px;
    
  }
  .unique_inner_promotions0 {background-color:red;}
  .unique_inner_promotions1 {background-color:purple;}
  .unique_inner_promotions2 {background-color:yellow;}


  .new_store_delete_div
{
  background-color:none;
  height:50px;
  text-align:right;
  position:absolute;
  margin-left:100px;
  margin-top:5px;
}


.delete_btn_design
{
  padding: 7px;
border: none;
background: #53C68C;
border-radius:4px;
margin-left:150px;
height:32px;
font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 10px;
  text-align:center;
  text-transform: uppercase;
  border-bottom: black 1px solid;
  border-right: black 1px solid;
  display:none;
}

.delete_btn_design_unsub
{
  padding: 10px;
border: none;
background: #FD4141;
border-radius:4px;
margin-left:160px;

font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 7px;
  text-align:center;
  text-transform: uppercase;
  border-bottom: black 1px solid;
  border-right: black 1px solid;

}


.trash_img
{

  height:11px;
  padding:0px;
  margin:0px;
}


.merchant_logo_settings
{
  width:100%;
  height:150px;
  border: 5px solid  #53C68C;
  border-radius: 15px;
  background-size: 60% 60%;
  background-position: center center;


}

.outside_logo_display
{
  margin: 0;
 
  height: 125px; 

/* Center and scale the image nicely */
background-position: center  !important;
background-repeat: no-repeat   !important;
background-size: cover   !important;
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


.new_store_text_div_promotion
{
  
  background-color: none;
  font-family: Arial Black, Arial, Helvetica;
  color:rgba(0,0,0,0.7);
 
  text-align: center;
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



  
  </style>
</head>
<body>


<div id="box">


  <div class="all_container">
  

   
  </div>
  <div class="promotion_div_box0 all_promotion_divs">
  

  </div>



 


</div>


  
</body>
</html>


<?php foreach ($all_owned_stores_array as $col):?>

  <script>
var clicks<?php echo $index_number;?>= 0;
      var first_promotion_box = document.querySelector(".promotion_div_box0") 
      var subscribed_store_div = document.createElement("div");
      var unique_inner_promotions = document.createElement("div");
          
      
      var catching_store_container;
      var catching_unique_promotion_container;

 
    if(<?php echo $index_number;?> < 3 )
      {
        console.log("saimer index");
        var all_new_store_container = document.querySelector(".all_container");
        catching_store_container = all_new_store_container;

        catching_unique_promotion_container = first_promotion_box
        
        
        
      }
      
       if(<?php echo $index_number;?> %3 ==0  &&  <?php echo $index_number;?> !=0 )
         {
          <?php if( $index_number %3 ==0  && $index_number !=0)
              {
               
               $promotion_btn_num++;

              }
               ?>
            
              var box_ = document.querySelector("#box")

              //New store container for the new 3 stores coming up
              var all_new_store_container2 = document.createElement("div");
              all_new_store_container2.setAttribute("class","all_container<?php echo $index_number;?> every_container");
              var catching_store_container = all_new_store_container2;
              
              //all_new promotions div created to take promotions for the next 3 sets of stores promotion
              var all_new_promotion_div = document.createElement("div");
              all_new_promotion_div.setAttribute("class","promotion_div_box<?php echo $promotion_btn_num;?> all_promotion_divs");
              catching_unique_promotion_container = all_new_promotion_div;

              
              box_.appendChild(catching_store_container);
              box_.appendChild(all_new_promotion_div);

            
                 
         }
         catching_unique_promotion_container.appendChild(unique_inner_promotions);
         unique_inner_promotions.setAttribute("class","unique_inner_promotions<?php echo $index_number;?> unique_inner_promotions_styling");
         
         subscribed_store_div.setAttribute("class","store_p_btn<?php echo $index_number;?> promotion_div_btn<?php echo $promotion_btn_num;?> store_p_btn_styling");
         


         <?php $all_store_promotions_array =  get_merchant_stores_with_storesID( $col['store_ID']);?>
         
         
         
         <?php foreach($all_store_promotions_array as $pro):?>
         
            subscribed_store_div.innerHTML= "<div class='outside_logo_display' style='background-image:url(../Backend/uploaded_files/<?php echo $pro['store_img_logo'];?>); height:100%; width:100%;'>      <div class='new_store_delete_div' >   <form method='post'>  <input type='hidden' name=hidden_storeID value='<?php  echo $pro["store_ID"];?>'> <button name='unsubscribe_btn' class='delete_btn_design' > Subscribe <img src='../images/plus_icon.png' class='trash_img'></button>   <button name='unsubscribe_btn' class='delete_btn_design_unsub' > X </button> </form></div>          <div class='new_store_text_div' ><?php  echo $pro["store_name"];?> </div>                                </div>";
         
         
        <?php endforeach;?>

        
          
     
         
         
         
          
          catching_store_container.appendChild(subscribed_store_div);
          
         //all_new_promotion_div.appendChild(subscribed_store_div);  THIS IS WHERE NEW PROMOTIONS WILL BE REDIRECRED
       


         
         
        $( ".store_p_btn<?php echo $index_number;?>" ).click( 
          function() {
            

            var unique_inner_promotions_styling = document.querySelectorAll(".unique_inner_promotions_styling");

            


                          if(clicks<?php echo $index_number;?> == 0)
                          {
                           

                            $( ".unique_inner_promotions_styling" ).slideUp( 200, function() {

                              


                            });

                            $( ".all_promotion_divs" ).slideUp( 200, function() {

                              $( ".unique_inner_promotions<?php echo $index_number;?>" ).slideDown( 200, function() {

                              // Animation complete.

                              });


                             

                            });
                            $( ".promotion_div_box<?php echo $promotion_btn_num;?> " ).slideDown( 200, function() {


                                                            
                            });


                           
                             
                            clicks<?php echo $index_number;?> ++;
                              console.log(clicks<?php echo $index_number;?>);
                              
                          }
                          else
                          {
                            console.log("clicks is not zero <?php echo $index_number;?>")

                              
                            $( ".unique_inner_promotions_styling" ).slideUp( 200, function() {

                              


                              });

                              $( ".all_promotion_divs" ).slideUp( 200, function() {

                             
                              });














                            clicks<?php echo $index_number;?>=0;
                            return;
                          }
                          
                            

            

                         
                    

                         
                       
                      }
        );



    


    </script>

    







  

<?php $index_number++;?>
<?php endforeach ;?>



<?php 
$index_store_number = 0;
foreach ($all_owned_stores_array as $col):?>
        <script>

          var all_new_active_promotion = document.querySelectorAll('.unique_inner_promotions_styling')
                  console.log(all_new_active_promotion)

        </script>
          <?php 
          $store_ID_FOUND = $col['store_ID'];
          $active_results_array =  get_promotions_active( $store_ID_FOUND);
         
          foreach ($active_results_array as $col):?>
            <script>
                                var new_promotion_OUTERSHELL =  document.createElement("div");
                                var new_promotion_INNERSHELL =  document.createElement("div");
                                var new_promotion_text_div =  document.createElement("div");
                                
                                
                                new_promotion_OUTERSHELL.setAttribute('class','all_new_active_promotion') ;
                                <?php if ($col['promotion_type'] == "coupon" ) :?>
                                  new_promotion_INNERSHELL.setAttribute('class','new_promotion_coupon') ;
                                <?php endif;?>
                                <?php if ($col['promotion_type'] == "big sale" ) :?>
                                  new_promotion_INNERSHELL.setAttribute('class','new_promotion_big_sale ') ;
                                <?php endif;?>
                                new_promotion_text_div.setAttribute('class','new_store_text_div_promotion') ;
                                new_promotion_text_div.innerHTML= "<?php echo $col['promotion_type'] ;?>  <br>   <?php echo $col['promotion_title'] ;?> <br>  <?php echo $index_store_number.  $col['store_ID'];?>"
                                
                                

                                console.log(all_new_active_promotion)
                                new_promotion_INNERSHELL.appendChild(new_promotion_text_div);
                                new_promotion_OUTERSHELL.appendChild(new_promotion_INNERSHELL);
                                all_new_active_promotion[<?php echo $index_store_number;?>].appendChild(new_promotion_OUTERSHELL);

    //********************************************************************* */

                                console.log("saimer plus");
                                
                                
          // $promotion_title = $row['promotion_title'];
            //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
            //store_name_section_div.innerHTML += "<?php //echo $col['promotion_ID'];?> <?php// echo $col['promotion_title'];?>";
            </script>
      <?php endforeach; ?>


  
<?php $index_store_number++;?>

<?php endforeach;?>


















