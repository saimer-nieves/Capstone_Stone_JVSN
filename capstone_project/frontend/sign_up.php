<?php

include "../includes/header.php";
//include (__DIR__ .'/../model/model_EmployeeLogins.php');
include "../includes/functions.php";
include "../Model/model_businessO_login.php";

   
$feedback = "";
session_start();
session_unset();
if (isPostRequest()) {
    //Obtaining Text from textbox
   
    $company = filter_input(INPUT_POST, 'company');
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $bo_username = filter_input(INPUT_POST, 'bo_username');
    $bo_password = filter_input(INPUT_POST, 'bo_password');


        $results = add_businessO( $company, $fname, $lname, $email, $phone, $bo_username, $bo_password);
    header('Location: outside_index.php');
                                 
    
    // your logic here
    //$Allow_user = checkLogin ($log_username, $log_password); //this will return Whether login credentials is true or false
    

  //  if(($log_username == "manager" && $log_password == "manager") || ($log_username == "employee" && $log_password == "employee")) //if they have a valid login
 //   {
        

  //      $_SESSION["username"] = $log_username;
  //      $_SESSION["password"] = $log_password;
        //send them to control.php
  //      header('Location: control_panel.php');
        //$usergroups = checkEmployeeLogin("Erik", "NEIT");


   // }
   // else
   // {
   //     $feedback .= " Invalid Login";
    //    header('Location: index.php');

   // }
//testing push





























}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
    #sign_upForm_merchants
    {
        width:800px;
        
        background-color:yellow;
        margin-top:100px;
        position:absolute;

        top:20px;
        left:600px;
        display:none;
        
    
    }

    #sign_upForm_customer
    {
        width:800px;
        
        background-color:yellow;
        margin-top:100px;
        position:absolute;

        top:20px;
        left:300px;
        display:none;
        
    
    }
    html
    {
     //overflow: hidden;
    }
    html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
   
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #8ebf42; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/a3df023f124a8bec3b213347404fe0a7318161de.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      p.top-info {
      margin: 10px 0;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: white;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 8px 0 white;
      color: white;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: white;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio] {
      width: 0;
      visibility: hidden;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 25px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid white;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
     
      left: 5px;
      background: transparent;
      border: 3px solid white;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
   
      button:hover {
      background: white;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }








      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
    opacity: 0.7;
    margin-top:200px;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
  z-index: 2;
  
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.9;
}

.login input[type=button]:active{
	opacity: 0.7;
}

.login input[type=text]:focus{
	outline: none;
  border: 1px solid white

}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid white;
}


.login input[type=password]:focus{
	outline: none;
	border: 1px solid white;
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

#log_in
{
    background-color:none;
    margin-top:200px;
    height:500px;
    


}

#images_holder
{
  height:100px;
  width:600px;
  background-color:none;
  transform: rotate3d(20, 20, 5,55deg);
  margin-left:850px;
  margin-top:100px;


 
}
#divider_Cus_Bus
{transform: rotate3d(20, 20, 5,50deg);
  height:200px;
  width:700px;
  background-color:red;
 position:absolute;
 left:0px;
 top:175px;
}
#divider_Cus_Bus_bottom
{transform: rotate3d(20, 20, 5,50deg);
  height:200px;
  width:700px;
  background-color:red;
 position:absolute;
 left:720px;
 top:425px;
}

.img_design
{ border: 1px solid;

    box-shadow: 1px 10px 10px black;

  height:70px;
  float:left;
  margin:5px 5px 10px 0px;

}

#txt_background
{
  background-color:red;
  height:200px;
  width:600px;
  position:absolute;
  top:300px;
  left:400px;
  border-radius:50px;

  
}

    </style>
</head>
<body>
    


<div id="images_holder"> 
  <img src="../images/ae_logo.png" class="img_design">
  <img src="../images/childrenplace_logo.jpg" class="img_design">
  <img src="../images/cheesecake_logo.jpg" class="img_design">
  <img src="../images/gamestop_logo.png" class="img_design">
  <img src="../images/cured_collection_logo.jpg" class="img_design">
  
  <img src="../images/dave_buster_logo2.jpg" class="img_design">

  <img src="../images/gap_logo.jpeg" class="img_design">
  <img src="../images/JC_logo.jpg" class="img_design">

  <img src="../images/nike_logo1.jpg" class="img_design">
  <img src="../images/vans_logo.png" class="img_design">
  


</div>
<div id="divider_Cus_Bus"></div>
<div id="divider_Cus_Bus_bottom"></div>

<div id="txt_background"></div>




<div id="log_in">
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Origin Mall</div> <!--TODO ADD SOME PHP HERE FOR CHANGING NAME-->
		</div>
		<br>
		<div class="login">
      
				<input type="text" placeholder="username" name="user" id="username"><br>
				<input type="password" placeholder="password" name="password" id="username"><br>
        <input type="button" value="Login">
        <br>
        <h6 id="a_form_link" style="margin-left:70px; color:white;">Click here to Sing Up</h6>
        
		</div>

</div>

<div id="sign_upForm_merchants">
    
    <form method="post" action="sign_up.php">

    
            <div id="form_application">
                            <center>
                         
                            

                            <hr>
                                
                           


                                             
                                    


                                
                    
                                    
                                    
                                 
                                </div>
                                















                             

                                    <div id="left_form">
                                    <a href="sign_up.php"><img src="../images/left_return_arrow.png" style="width:30px;"></a></br><br><br>
                                    <input type="hidden" maxlength = 80 class="form-control text_box"  name="userID" >
                                        <label> <h5>Company: </h5></label>
                                        <input type="text" maxlength = 40  class="form-control text_box" name="company" required>
                                   

                                        <br>

                                       
                                        <br>

                                       
                                        <label> <h5>First Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="fname" >
                                      
                                        <br>
                                        <br>

                                        <label> <h5>Last Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="lname" required>
                                        
                                        <br> 
                                        <br>
                                        <br> <label> <h5>Email: abc@abc.abc  </h5></label>
                                        <input type="email"  class="form-control text_box" name="email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' required>
                               
                                        <br>
                                        <br> <label> <h5>Phone : (###) ###-####</h5></label>
                                        <input type="tel" maxlength = 20 id="phone" name="phone" placeholder="(###) ###-####"  pattern="[(][0-9]{3}[)][ ][0-9]{3}-[0-9]{4}" class="form-control text_box" required >
                                  
                                        <br>
                                     
                                        <label> <h5>Username </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="bo_username" required>
                                    

                                        <br>
                                        <br>

                                        <label> <h5>Password : </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="bo_password" >
                                        

                                        <br>
                                        <br>

                                        <label> <h5>Confirm Password: </h5></label>
                                        <input type="text" maxlength = 100 class="form-control text_box"  name="city" required>
                                      
                                    </div>



                                    <button name="sign_up" type="submit" class=" bg-success" style="margin-top:50px; margin-left:50px; height:50px; width:200px;font-weight:bold;" href="#">Sign Up</i></button>
                     
                               
                                
                                </div>
                                
                              

                                  










                </form>
                     







                </div>
</div>



<div id="sign_upForm_customer">
    <form method="post" action="sign_up.php">
            <div id="form_application">
                            <center>
                            <hr>
                                
                                </div>
                                
                                    <div id="left_form">
                                    <a href="sign_up.php"><img src="../images/left_return_arrow.png" style="width:30px;"></a></br><br><br>
                                    <input type="hidden" maxlength = 80 class="form-control text_box"  name="userID" >
                                        <label> <h5>Company: </h5></label>
                                        <input type="text" maxlength = 40  class="form-control text_box" name="company" required>
                                  
                                        <br>
                                        <br>
                                        <label> <h5>First Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="fname" >
                                      
                                        <br>
                                        <br>

                                        <label> <h5>Last Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="lname" required>
                                        
                                        <br> 
                                        <br>
                                        <br> <label> <h5>Email: abc@abc.abc  </h5></label>
                                        <input type="email"  class="form-control text_box" name="email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' required>
                               
                                        <br>
                                        <br> <label> <h5>Phone : (###) ###-####</h5></label>
                                        <input type="tel" maxlength = 20 id="phone" name="phone" placeholder="(###) ###-####"  pattern="[(][0-9]{3}[)][ ][0-9]{3}-[0-9]{4}" class="form-control text_box" required >
                                  
                                        <br>
                                     
                                        <label> <h5>Username </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="bo_username" required>
                                    

                                        <br>
                                        <br>

                                        <label> <h5>Password : </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="bo_password" >
                                        

                                        <br>
                                        <br>

                                        <label> <h5>Confirm Password: </h5></label>
                                        <input type="text" maxlength = 100 class="form-control text_box"  name="city" required>
                                      
                                    </div>



                                    <button name="sign_up" type="submit" class=" bg-success" style="margin-top:50px; margin-left:50px; height:50px; width:200px;font-weight:bold;" href="#">Sign Up</i></button>
                     
                               
                                
                                </div>
                                
                              

                                  










                </form>
                     







                </div>
</div>














                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
                <script>

                var form_signup_link = document.querySelector("#a_form_link");
                var form_div_merchants = document.querySelector("#sign_upForm_merchants");
                var form_div_customer = document.querySelector("#sign_upForm_customer");
                var login_div = document.querySelector("#log_in");


                form_signup_link.addEventListener("click", echo_voice);

                function echo_voice()
                {
                  console.log("saimer you are getting close");
                  form_div_merchants.style.display="block";
                  login_div.style.display="none";
                }

                function openForm() {
                document.getElementById("memoform").style.display = "block";
                }

                function closeForm() {
                document.getElementById("memoform").style.display = "none";
                }

               <?php if(isset($_POST["submitmemo_btn"]) ):?>

                    document.getElementById("memoform").style.display = "none";
               <?php endif;?>
    
                </script>

        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>




</body>
</html>




</body>
</html>