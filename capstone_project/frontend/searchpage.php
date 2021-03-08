
<?php

include "../includes/header.php";

//include (__DIR__ .'/../model/model_EmployeeLogins.php');


$store_name_searched = $_GET["selectedStore"];
// var_dump($action_type);
// exit;
$answer_all_stores_array = get_searched_stores($store_name_searched);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .allSearch_result
    {
    background-color: red;
    width: 100%;
    height: 600px;
    margin-top: 200px;
    }

   .oneSearch_result
   {
    border-top: 20px solid #53C68C;
    background-color: yellow;
    width: 100%;
    height: 300px;
    float:left;
   }

   .leftStoreContent
{
    background-color: pink;
    width: 800px;
    height: 100%;
    float:  left;
}

.rightStoreContent
{
    background-color: brown;
    width: 400px;
    height: 100%;
    float:  left;
    margin-left: 200px;
}

.storeFoundLogo
{
    width: 340px;
    height: 180px;
    margin-left: 100px;
    margin-right:75px;
    margin-top: 30px;
    float: left;
}

.storeTitle
{
    font-family: Arial Black, Arial, Helvetica;
    color:black;
    font-size: 35px; 
    text-decoration: underline;     
    text-decoration-color: black;   
    text-transform: uppercase;

}

.storeType
{
    font-family:  Arial, Helvetica;
    color:black;
    font-size: 15px;   
    text-transform: uppercase;
}

.textContent
{
    margin-top: 50px;
    padding-left: 50px;
}

.delete_btn_design
{
    padding: 10px;
    border: none;
    background: #53C68C;
    border-radius:10px;
   
    font-family: Arial Black, Arial, Helvetica;
    color:white;
    font-size: 14px;
    text-align:center;
    text-transform: uppercase;
    border-bottom: black 1px solid;
    border-right: black 1px solid;
    margin-top: 110px;
    margin-left: 210px;
    
 
}

.trash_img
{

  height:15px;
  padding:0px;
  margin:0px;

}


    
    </style>
</head>
<body>
    <div class="allSearch_result">
        


      
    </div>
</body>
</html>
<?php foreach ($answer_all_stores_array as $col):?>                  

    <script>
        var allSearch_result = document.querySelector(".allSearch_result");
        var oneSearch_result = document.createElement("div");
        oneSearch_result.setAttribute("class","oneSearch_result");

        var leftStoreContent =  document.createElement("div");
        leftStoreContent.setAttribute("class","leftStoreContent");

            var store_logo_img =  document.createElement("img");
            store_logo_img.setAttribute("src","../Backend/uploaded_files/<?php echo $col['store_img_logo'];?>");
            store_logo_img.setAttribute("class","storeFoundLogo");

            var textContent_div =  document.createElement("div");
            textContent_div.setAttribute("class","textContent");

                var h5_storeTitle =  document.createElement("div");
                h5_storeTitle.setAttribute("class","storeTitle");
                h5_storeTitle.innerHTML = '<?php echo $col['store_name'];?>';


                var h6_storeType =  document.createElement("div");
                h6_storeType.setAttribute("class","storeType");
                h6_storeType.innerHTML = '<?php echo $col['store_category'];?>';



        var rightStoreContent =  document.createElement("div");
        rightStoreContent.setAttribute("class","rightStoreContent");

        var subscription_btn =  document.createElement("button");
        subscription_btn.setAttribute("name","unsubscribe_btn");
        subscription_btn.setAttribute("class","delete_btn_design");
        subscription_btn.innerHTML = "Subscribe <img src='../images/plus_icon.png' class='trash_img'>"



        leftStoreContent.appendChild(store_logo_img);
        leftStoreContent.appendChild(textContent_div);
            textContent_div.appendChild(h5_storeTitle);
            textContent_div.appendChild(h6_storeType);

        rightStoreContent.appendChild(subscription_btn);
        


        oneSearch_result.appendChild(leftStoreContent);
        oneSearch_result.appendChild(rightStoreContent);

        allSearch_result.appendChild(oneSearch_result);


    </script>

<?php endforeach;?>
