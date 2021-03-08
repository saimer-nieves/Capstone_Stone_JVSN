
<?php

include "../includes/header.php";

//include (__DIR__ .'/../model/model_EmployeeLogins.php');


$action_type = $_GET["selectedStore"];
// var_dump($action_type);
// exit;
$answer_all_stores_array = 'function_get_allstores';



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
        <div class="oneSearch_result">
            
            <div class="leftStoreContent">

                <img src="../images/ae_logo.png" class="storeFoundLogo">
                <div class="textContent">
                    <h5 class="storeTitle">Gamestop</h5>
                    <h6 class="storeType">Video Games</h6>
                </div>
            </div>

            <div class="rightStoreContent">
            <button name="unsubscribe_btn" class="delete_btn_design"> Subscribe <img src="../images/plus_icon.png" class="trash_img"></button>


            </div>


        </div>
      
    </div>
</body>
</html>