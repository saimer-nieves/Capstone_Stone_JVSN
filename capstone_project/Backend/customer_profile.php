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

/*border-bottom: aqua 10px solid; */


.new_store_text_div
{
  
  
  background-color:rgba(44,41,41,0.8);
  //position:absolute;
  
  
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  font-size: 17px;
  
  
  width:150px;
  font-family:sans-serif;
 // text-shadow:5px 5px 20px #53C68C;
  text-align: center;
  text-transform: uppercase;
  padding-top:15px;
  padding-bottom:15px;

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

    
    background: none;  
    margin-bottom:20px;
    z-index: 1;
    
    
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
    background-color:none;
 
    width:1070px;
    height:149px;
    float:left;
    margin-bottom:10px;

  }
  .every_container
  {
    background-color:none;
 
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
    background-color:none;
    

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

    background-color:rgba(15,249,52,0.1);
    float:left;

    width: 1070px;
    height: 339px;
    
    display:none;

    
   
 
   
  }

  .unique_inner_promotions_styling
  {
    width:100%;
    height:339px;
    background-color:none;

    display:none;
    margin-top:10px;
    
  }
  .unique_inner_promotions0 {background-color:none;}
  .unique_inner_promotions1 {background-color:none;}
  .unique_inner_promotions2 {background-color:none;}


  .new_store_delete_div
{
  background-color:none;
  height:50px;
  text-align:right;
 // position:absolute;
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


.mouse_will_be_hand
{
  cursor: pointer;
}




#center_view_flip
{
  background-color:red;
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
  background-color:#53C68C ;
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


.border_bottom_only
{
  border-bottom: 25px solid red;
}



  
  </style>
</head>
<body>



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
         
            subscribed_store_div.innerHTML= "<div onclick='myborder_bottom()' class='outside_logo_display outside_logo_display<?php echo $index_number;?>' style='background-image:url(../Backend/uploaded_files/<?php echo $pro['store_img_logo'];?>); height:100%; width:100%;'>      <div class='new_store_delete_div' >   <form method='post' class='form_box_container'>  <input type='hidden' name=hidden_storeID value='<?php  echo $pro["store_ID"];?>'> <button name='unsubscribe_btn' class='delete_btn_design' > Subscribe <img src='../images/plus_icon.png' class='trash_img'></button>   <button name='unsubscribe_btn' class='delete_btn_design_unsub' > X </button> </form></div>          <div class='new_store_text_div' ><?php  echo $pro["store_name"];?> </div>                                </div>";
         
            
         
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

                          var selected_store_div = document.querySelector(".unique_inner_promotions<?php echo $index_number;?>")

                    

                          
                            

            

                         
                    

                         
                       
                      }
        );


        
        

       




    


    </script>

    







  

<?php $index_number++;?>
<?php endforeach ;?>



<?php 
$index_store_number = 0;
$index_promotion_count = 0;
foreach ($all_owned_stores_array as $col):?>
        <script>

function myborder_bottom() {
              var element = document.querySelector(".outside_logo_display<?php echo $index_store_number;?>")
              console.log(element)
              }
         

          var all_new_active_promotion = document.querySelectorAll('.unique_inner_promotions_styling')
                  console.log(all_new_active_promotion)

        </script>
          <?php 
          $store_ID_FOUND = $col['store_ID'];
          $active_results_array =  get_promotions_active( $store_ID_FOUND);
         
          foreach ($active_results_array as $col):?>
            <script>
                                var btn_form_ = document.querySelector('.form_box_container')
                                var new_promotion_OUTERSHELL =  document.createElement("div");
                                var a_tag_bridge = document.createElement("a");

                                a_tag_bridge.setAttribute("class","a_tags_to_view<?php echo $index_promotion_count;?> mouse_will_be_hand");
                                a_tag_bridge.setAttribute("id","a_id<?php echo $index_promotion_count;?>");

                                var new_promotion_INNERSHELL =  document.createElement("div");
                                var new_promotion_text_div =  document.createElement("div");

                                var hidden_p_Promotion_type = document.createElement("p");
                                var hidden_p_Promotion_Title = document.createElement("p");
                                var hidden_p_Subheading = document.createElement("p");
                                var hidden_p_Address = document.createElement("p");
                                var hidden_p_exp_date = document.createElement("p");
                                var hidden_p_description = document.createElement("p");
                                var hidden_p_code = document.createElement("p");
                                    

                                    hidden_p_Promotion_type.setAttribute("class","hidden_Promotion_type<?php echo $index_promotion_count;?>  make_hidden");
                                hidden_p_Promotion_Title.setAttribute("class","hidden_promotion_title<?php echo $index_promotion_count;?> make_hidden");
                                hidden_p_Subheading.setAttribute("class","hidden_promotion_subheading<?php echo $index_promotion_count;?> make_hidden");
                                hidden_p_Address.setAttribute("class","hidden_promotion_address<?php echo $index_promotion_count;?> make_hidden");
                                hidden_p_exp_date.setAttribute("class","hidden_promotion_date<?php echo $index_promotion_count;?> make_hidden");
                                hidden_p_description.setAttribute("class","hidden_promotion_description<?php echo $index_promotion_count;?> make_hidden");
                                hidden_p_code.setAttribute("class","hidden_promotion_code<?php echo $index_promotion_count;?> make_hidden");


                                hidden_p_Promotion_type.innerHTML = "<?php echo $col['promotion_type'];?>";
                                hidden_p_Promotion_Title.innerHTML = "<?php echo $col['promotion_title'];?>";
                                hidden_p_Subheading.innerHTML = "<?php echo $col['promotion_subheading'];?>";
                                hidden_p_Address.innerHTML = "<?php echo $col['promotion_address'];?>";
                                hidden_p_exp_date.innerHTML = "<?php echo $col['promotion_exp_date'];?>";
                                hidden_p_description.innerHTML = "<?php echo $col['promotion_description'];?>";
                                hidden_p_code.innerHTML = "<?php echo $col['promotion_code'];?>";

                                btn_form_.appendChild(hidden_p_Promotion_type);
                                btn_form_.appendChild(hidden_p_Promotion_Title);
                                btn_form_.appendChild(hidden_p_Subheading);
                                btn_form_.appendChild(hidden_p_Address);
                                btn_form_.appendChild(hidden_p_exp_date);
                                btn_form_.appendChild(hidden_p_description);
                                btn_form_.appendChild(hidden_p_code);




                                
                                new_promotion_OUTERSHELL.setAttribute('class','all_new_active_promotion') ;
                                <?php if ($col['promotion_type'] == "coupon" ) :?>
                                  new_promotion_INNERSHELL.setAttribute('class','new_promotion_coupon') ;
                                <?php endif;?>
                                <?php if ($col['promotion_type'] == "big sale" ) :?>
                                  new_promotion_INNERSHELL.setAttribute('class','new_promotion_big_sale ') ;
                                <?php endif;?>
                                <?php if ($col['promotion_type'] == "info" ) :?>
                                  new_promotion_INNERSHELL.setAttribute('class','new_promotion_info ') ;
                                <?php endif;?>
                                new_promotion_text_div.setAttribute('class','new_store_text_div_promotion') ;
                                new_promotion_text_div.innerHTML= "<?php echo $col['promotion_type'] ;?>  <br>   <?php echo $col['promotion_title'] ;?> <br>  <?php echo $index_store_number.  $col['store_ID'];?>"
                                
                                

                                console.log(all_new_active_promotion)
                                new_promotion_INNERSHELL.appendChild(new_promotion_text_div);
                                a_tag_bridge.appendChild(new_promotion_INNERSHELL);
                                new_promotion_OUTERSHELL.appendChild(a_tag_bridge);
                                all_new_active_promotion[<?php echo $index_store_number;?>].appendChild(new_promotion_OUTERSHELL);

    //********************************************************************* */

                                console.log("saimer plus");
                                
                                
          // $promotion_title = $row['promotion_title'];
            //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
            //store_name_section_div.innerHTML += "<?php //echo $col['promotion_ID'];?> <?php// echo $col['promotion_title'];?>";
            </script>

        <?php $index_promotion_count++;?>
      <?php endforeach; ?>


  
<?php $index_store_number++;?>

<?php endforeach;?>









<!-- ANIMATION MIDDLE BOX-->




<?php for ( $x=0; $x<$index_promotion_count; $x++):?>

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

            
            flip_card_front.innerHTML = all_new_active_promotion_array_OUTERSHELL["<?php echo $x;?>"].innerHTML;
            center_view_flip.style.display="block";
            flip_close_div.style.display="block";

            var p_tag_ID =  document.querySelector(".hidden_p<?php echo $x;?>");
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
            big_sale_template.style.display="block";
            coupon_template.style.display="none";
            info_template.style.display="none";




        
            var title2 =  document.querySelector("#title2");
           
            var expire2 =  document.querySelector("#expire2");
            var description2 =  document.querySelector("#description2");
            var address2 =  document.querySelector("#address2");
           
            
            title2.innerHTML= p_tag_Title.innerHTML;
            expire2.innerHTML= p_tag_Date.innerHTML;
            description2.innerHTML= p_tag_Description.innerHTML;
            address2.innerHTML= p_tag_Address.innerHTML;
           
           }




           if(promotion_type == "info")
           {

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

<?php endfor;?>








