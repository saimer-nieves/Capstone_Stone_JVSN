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



  .store_p_btn
  {
    
    width: 355px;
    height: 129px;

    float:left;

    
    background: #D5F317;  
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
  #all_container2
  {
    background-color:blue;
 
    width:1070px;
    height:129px;
    float:left;
    
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
  #promotion_div_box
  {
    
    
  
    background-color:green;
    float:left;

    width: 1070px;
    height: 339px;
    
    
   
    display:none;
   
  }
  </style>
</head>
<body>


<div id="box">


  <div id="all_container2">
    <!--<div class="store_p_btn bid8"></div>
    <div class="store_slide_promotions pid8 bg-danger middle_col_slide"></div>
-->
   
  </div>
  <div id="promotion_div_box">
  
  </div>

  <div id="all_container_test">
    <!--<div class="store_p_btn bid8"></div>
    <div class="store_slide_promotions pid8 bg-danger middle_col_slide"></div>
-->
   
  </div>

 


</div>


  
</body>
</html>
<?php for ($x = 0; $x < sizeof($all_owned_stores_array); $x++) :?>


  <?php  $array_index = array_search($all_owned_stores_array[$x], $all_owned_stores_array);?>
  <?php  $array_index_plus1 = $array_index + 1;?>
    <script>

var bid1 = document.querySelector(".bid7")
var bid2 = document.querySelector(".bid8")
var bid3 = document.querySelector(".bid9")
    //get array[k]
                if (<?php echo $array_index_plus1 ;?>%2==0  )
                {
                  
                  
                    if (<?php echo $array_index_plus1 ;?>%3==0)
                    {
                      //send to div 3
                      console.log("got 3")
                      bid3.innerHTML += "got <?php echo $array_index_plus1 ;?>"
                    }
                    else
                    {
                      //send to div 2
                      console.log("got 2")
                      
                      bid2.innerHTML += "got <?php echo $array_index_plus1 ;?>"
                    }
                
                    
                }
                if (<?php echo $array_index_plus1 ;?>%3==0 && <?php echo $array_index_plus1 ;?>%2!=0 )
                {
                  //send to div 3 
                  bid3.innerHTML += "got <?php echo $array_index_plus1 ;?>"
                }
                if(<?php echo $array_index_plus1 ;?>%2!=0 && (<?php echo $array_index_plus1 ;?>%3!=0 ))
                {
                  //send  TO DIV 1
                  bid1.innerHTML += "got <?php echo $array_index_plus1 ;?>"
                }
    </script>
<?php endfor;?>

<?php $array_content_1=array();?>
<?php $array_content_2=array();?>
<?php $array_content_3=array();?>
<?php for ($x = 0; $x < sizeof($all_owned_stores_array); $x++) :?>


  <?php  $array_index = array_search($all_owned_stores_array[$x], $all_owned_stores_array);?>
  <?php  $array_index_plus1 = $array_index + 1;?>
              <?php if ($array_index_plus1 %2==0):?>
                            
                                
                            <?php if ($array_index_plus1 %3==0):?>
                            
                            
                              <?php array_push($array_content_3,$array_index_plus1);?>

                              
                            <?php else:?>
                            
                              
                              <?php array_push($array_content_2,$array_index_plus1);?>
                              
                            <?php endif;?>
                        
                            
              <?php endif;?>
                        
              
                      <?php if ($array_index_plus1 %3==0 && ($array_index_plus1%2!=0 )):?>
                        
                        
                        
                        <?php array_push($array_content_3,$array_index);?>
                        
                        

                      <?php endif;?>



                        <?php if ($array_index_plus1 %2!=0 && ($array_index_plus1%3!=0 )):?>
                        
                        
                        
                        <?php array_push($array_content_1,$array_index);?>
                        
                        

                      <?php endif;?>

              <?php endfor;?>

              <?php var_dump($array_content_1);?>
              
             

<!--55555555555555555555555555555555555555555555555555555555555555555555555-->
<?php $index_num = 0;?>
<!--THIS IS THE RIGHT SIDE-->


<!--THIS IS THE LEFT-->
<?php foreach ($all_owned_stores_array as $array_row):?>
    
                <script>
                  //var box = document.querySelector("#box");
                  var all_container2 = document.querySelector("#all_container2");
                  var all_container_test = document.querySelector("#all_container_test");
                  var promotion_div_box = document.querySelector("#promotion_div_box");

                  var new_store_btn_div =  document.createElement("div");
                  var new_slide_promotion_div =  document.createElement("div");

                  new_store_btn_div.setAttribute("class","store_p_btn bid<?php echo $index_num;?> ");
                  //new_store_btn_div.setAttribute("class","store_p_btn");

                  new_slide_promotion_div.setAttribute("class","store_slide_promotions pid<?php echo $index_num;?> all_pid middle_col_slide");
                 
                  if((<?php echo $index_num;?>)< 3)
                  {
                    all_container2.appendChild(new_store_btn_div);
                  }
                  else if((<?php echo $index_num;?>)< 6)
                  {
                    all_container_test.appendChild(new_store_btn_div);
                  }
                  //**************************************************************************************** */
                  <?php $active_results_array = get_promotions_active($array_row["store_ID"]);?>
                  <?php foreach ($active_results_array as $col):?>
                
                                      var new_store_div =  document.createElement("div");
                                      var new_store_text_div =  document.createElement("div");
                                      var new_img =  document.createElement("img");


                                      new_store_div.setAttribute("class","new_promotion");
                                      new_store_text_div.setAttribute("class","new_store_text_div");

                                    // new_img.setAttribute("src","../Backend/uploaded_files/<?php ?>");
                                    // new_img.setAttribute("class","merchant_logo_settings");


                                      new_store_text_div.innerHTML += "<?php echo $col['promotion_type'];?><br> <?php echo $col['promotion_title'];?>";
                                      //new_store_div.css("background-image", "url(../images/cheesecake_logo.jpg)");
                                      new_store_div.appendChild(new_store_text_div);
                                      //new_store_div.appendChild(new_img);
                                      

                                      new_slide_promotion_div.appendChild(new_store_div);


                                      console.log("saimer plus");
                // $promotion_title = $row['promotion_title'];
                  //promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID
                  //store_name_section_div.innerHTML += "<?php //echo $col['promotion_ID'];?> <?php// echo $col['promotion_title'];?>";
                <?php endforeach; ?>
                  //**************************************************************************************** */





                  <?php $value= $array_row["store_ID"];?>
                  new_slide_promotion_div.innerHTML += "<?php echo  $value  ;?>";
                  promotion_div_box.appendChild(new_slide_promotion_div);

                  //box.appendChild(all_container1);


                </script>
      <?php $index_num++;?>

<?php endforeach;?>
<!--THIS IS THE MIDDLE-->


<?php for ( $x=0; $x<10; $x++):?>
      <script>  

      var new_promotion_box = document.querySelector(".new_promotion");
        $(document).ready(function(){
          var count = 0;
          $(".bid<?php echo $x;?>").click(function(){
            
            $(".all_pid").slideUp();
            
            
            if(count == 0)
            {
            
              $(".new_promotion").slideDown(500);
              $(".new_store_text_div").slideDown(500);
              $(".pid<?php echo $x;?>").slideDown(500);
              $("#promotion_div_box").slideDown(500);
              
              
              
              if(new_promotion_box.style.opacity < 1)
              {
                var opacity= opacity + 0.01;
                new_promotion_box.style.opacity= opacity;
              }
              
              
              
              
              
              count++;





            }
            else if(count == 1)
            {
            
              if(new_promotion_box.style.opacity > 0)
              {
                var opacity= opacity - 0.1;
                new_promotion_box.style.opacity= opacity;
              }
              $(".new_promotion").slideUp(500);
              $(".new_store_text_div").slideUp(500);
              $(".pid<?php echo $x;?>").slideUp();
              $("#promotion_div_box").slideUp();
              count--;
            }
          });

          
        
        
        })
        </script>
<?php endfor;?>

<?php $all_owned_stores_array = get_merchant_stores($mer_ID); //get promotions for store 52;?>


<?php  $time=0;?>
<?php foreach ($all_owned_stores_array as $array_row):?>
  
    <?php $regular_index=   array_search($all_owned_stores_array[$time], $all_owned_stores_array);?>
                <script>
                //find a location
                var location_spot = document.querySelector(".bid<?php echo $regular_index;?>")

                console.log(location_spot)

                //append in that location

                location_spot.innerHTML="<?php echo $array_row["store_name"];?>"


                </script>
    <?php var_dump($regular_index);?>
<?php $time++;?>
<?php endforeach;?>

<script>
var all_container1 = document.querySelector(".bid0");


</script>