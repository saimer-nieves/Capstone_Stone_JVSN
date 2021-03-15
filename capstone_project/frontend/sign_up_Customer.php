<?php


//include (__DIR__ .'/../model/model_EmployeeLogins.php');
include "../includes/functions.php";
include "../Model/model_sign_ups.php";
include "../Model/model_logins.php";





$login_error = "";
//$action_type = $_GET["action"];

if((isset($_POST["sign_up_btn_cus"])))
{


      $cus_fname = filter_input(INPUT_POST, 'cus_fname');
      $cus_lname = filter_input(INPUT_POST, 'cus_lname');
      $cus_email = filter_input(INPUT_POST, 'cus_email');
      $cus_phone = filter_input(INPUT_POST, 'cus_phone');
   
      $cus_password = filter_input(INPUT_POST, 'cus_password');


      $results = add_customers( $cus_fname, $cus_lname, $cus_email, $cus_phone, SHA1($cus_password));
     
      header('Location: sign_up_Customer.php');


}



if((isset($_POST["login_btn"])))
{


      $txt_email = filter_input(INPUT_POST, 'txt_email');
      $txt_password = filter_input(INPUT_POST, 'txt_password');

     
        $results = check_customer_login($txt_email, $txt_password);

        if($results == 1)
        {
           //
          //header('Location: ../Backend/customer_main_panel.php'); //


          $array_info = check_customer_login_return_info($txt_email, $txt_password);

          $_SESSION["cus_ID"] = $array_info["cus_ID"];
          $_SESSION["cus_fname"] = $array_info["cus_fname"];
          $_SESSION["cus_lname"] = $array_info["cus_lname"];
          $_SESSION["cus_email"] = $array_info["cus_email"];
          $_SESSION["cus_phone"] = $array_info["cus_phone"];

          //echo $_SESSION["cus_ID"].$_SESSION["cus_fname"] .$_SESSION["cus_lname"] .$_SESSION["cus_email"] .$_SESSION["cus_phone"] ;
         


          header('Location: ../Backend/customer_profile.php');


        }
        else if ($results == 0)
        {
          //TODO -- when there is an error leave user here for them to fix password and errors
        //  header('Location: sign_up.php?action=customer');
          $login_error = "*Invalid";
        }

      
    
        

      


}



















?>
<?php

include "../includes/header_signup.php";

?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets_login/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets_login/img/favicon.png" />


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- CSS Files -->
	<link href="assets_login/css/bootstrap.min.css" rel="stylesheet" /> <!-- -->
	<link href="assets_login/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets_login/css/demo.css" rel="stylesheet" />

    <style>
    
    .form_boxes
{
  margin-left:50px;

  margin-top:40px;
}



label
{
  
  font-family: Arial Black, Arial, Helvetica;
  color:black;
  font-size: 8px;
  
}
h3
{
  
  font-family: Arial Black, Arial, Helvetica;
  color:black;
 
  
}

.our_textbox_sizing
{
    //width:200px;
}



.button_style_by_us
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  background-color:#53C68C;
  font-size: 12px;
  border-radius:20px;

  padding:20px;
  border: none;
  outline:none;
 

}

#message_to_viewer
{
  background-color:#53C68C;
  width: 400px;
height: 230px;
  position:absolute;
  margin-top:530px;
  padding:10px;

  
 
}

#msg_p_tag
{
  font-family: Arial Black, Arial, Helvetica;
  color:white;
  height:300px;
  font-size:30px;
  padding-top:40px;
  
}

#cus_photo_clean
{
  position:absolute;
  height:400px;
  margin-left:150px;
  margin-top:120px;

}

.validation_text
{
  position:absolute;
  color:red;
}

    
    
    </style>
</head>

<body style="background-color:#E6FFFA ;" >
	<div style="background-color:#E6FFFA ">
	   
    <img src="../images/cus_display2.png" alt="cus_login_photo" id="cus_photo_clean">
    <div id="message_to_viewer">
      <p id="msg_p_tag">
    UNLIMITED <br><br>
    PROMOTIONS<br><br>
    AT YOUR FINGERTIPS</p>

    </div>




	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container" style="width:500px; margin-left:400px; ">
		                <div class="card wizard-card" data-color="red" id="wizard" style=" height:750px;   border-style: solid; border-color: #3DEFCC;border-width: 2px; ">
		                   
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">LOGIN</a></li>
			                            <li><a href="#captain" data-toggle="tab">SIGN UP</a></li>
			                    
			                        </ul>
								</div>

		                        <div class="tab-content">


                                <!--ONE SECTION HERE-->
		                            <div class="tab-pane" id="details">
                                <div id="login_container" style="margin-top:100px;">
                                            <form method="post" action = "<?php $_PHP_SELF ?>">

                                        <center> <h3>Customer Login</h3></center><br><br><br>
                                            
                                                <div class="form-group row">
                                                    <label  class="col-sm-3 col-form-label" >EMAIL: </label>
                                                    <div class="col-sm-8">
                                                    <input type="text" class="form-control our_textbox_sizing"  placeholder="email" name="txt_email" id="username">
                                                    <span id="email_error" ><?= $login_error;?></span> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-sm-3 col-form-label" >PASSWORD: </label>
                                                    <div class="col-sm-8">
                                                    <input type="password" class="form-control our_textbox_sizing" " placeholder="password" name="txt_password" id="password">
                                                    <span id="password_error"><?= $login_error;?></span>
                                                    </div>
                                                </div>

                                               
		


                                        
                                            <button name="login_btn" type="submit" class=" button_style_by_us"  href="#" style="width:150px;   margin-left:160px; margin-top:50px;">Login</i></button>
                                                        

                                            </form>
                                         </div>


		                            </div>
                                     <!--END ONE SECTION HERE-->
                                      <!--TWO SECTION HERE-->
		                            <div class="tab-pane" id="captain" active>
                                  <form method="post" action = "<?php $_PHP_SELF ?>">

                                        

                                    <center> <h3>Customer Sign Up</h3></center><br>

                                          <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label" >FIRSTNAME: </label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control our_textbox_sizing firstnametxtbox"  placeholder="Firstname" name="cus_fname" >
                                              <label class='validation_text errorFirstNamelbl' style='color:red;'></label>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label" >Lastname: </label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control our_textbox_sizing lastnametxtbox"  placeholder="Lastname" name="cus_lname" >
                                              <label class='validation_text errorLastNamelbl'   style='color:red;'></label>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label" >Email: </label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control our_textbox_sizing emailtxtbox" placeholder="Email"  name="cus_email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' >
                                              <label class='validation_text errorEmaillbl'   style='color:red;'></label>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label" >Phone: </label>
                                              <div class="col-sm-8">
                                              <input type="phone" class="form-control our_textbox_sizing phonetxtbox"  placeholder="Phone"  name="cus_phone" >
                                              <label class='validation_text errorPhonelbl'   style='color:red;'></label>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" >Password: </label>
                                              <div class="col-sm-8">
                                              <input type="password"  maxlength = 255 class="form-control our_textbox_sizing passwordtxtbox" placeholder="Password"  name="cus_password" >
                                              <label class='validation_text errorPasswordlbl'   style='color:red;'></label>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" >Confirm-Password: </label>
                                              <div class="col-sm-8">
                                              <input type="password" maxlength = 255 class="form-control our_textbox_sizing confirmPasswordtxtbox"  placeholder="ConfirmPassword" name="cus_password_confirmed" >
                                              <label class='validation_text errorConfirmPasswordlbl'   style='color:red;'></label>
                                              </div>
                                          </div>
                                        


                                          <input type='button' value='javacsript' class='button_style_by_us javascript_submit_btn'>
                                          <button name="sign_up_btn_cus" type="submit" class=" bg-success button_style_by_us submit_btn" style="margin-top:50px; margin-left:180px; width:150px;" href="#">Sign up</i></button>
                                                  

                                  </form>
                                        

		                            </div>
		                           
		                        </div>
	                        	<div class="wizard-footer">
	                            
	                              
	                                <div class="clearfix"></div>
	                        	</div>
		                 
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	   
	</div>
    <footer id="footer" style="margin-top:100px; background-color:#53C68C">

  

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Copyright <strong><span>Junior V| Saimer N</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by Junior V. & Saimer N NEIT</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->
</body>
	<!--   Core JS Files   -->
	<script src="assets_login/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets_login/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets_login/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets_login/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets_login/js/jquery.validate.min.js"></script>
</html>

<script>

    var firstnametxt = document.querySelector(".firstnametxtbox");
    var lastnametxt = document.querySelector(".lastnametxtbox");
    var emailtxt = document.querySelector(".emailtxtbox");
    var phonetxt = document.querySelector(".phonetxtbox");
    var passwordtxt = document.querySelector(".passwordtxtbox");
    var confirmPasswordtxt = document.querySelector(".confirmPasswordtxtbox");
    var javascript_submit_btn = document.querySelector(".javascript_submit_btn")


    var errorFirstNamelbl = document.querySelector(".errorFirstNamelbl");
    var errorLastNamelbl = document.querySelector(".errorLastNamelbl");
    var errorEmaillbl = document.querySelector(".errorEmaillbl");
    var errorPhonelbl = document.querySelector(".errorPhonelbl");
    var errorPasswordlbl = document.querySelector(".errorPasswordlbl");
    var errorConfirmPasswordlbl = document.querySelector(".errorConfirmPasswordlbl");
    var javascript_submit_btn = document.querySelector(".javascript_submit_btn")


    javascript_submit_btn.addEventListener("click", function()
    {
      console.log(firstnametxt.value.length)

      if(firstnametxt.value.length == 0)
      {
        errorFirstNamelbl.innerText = '*ERROR ADD FIRST NAME'
      }
      else
      {
        errorFirstNamelbl.innerText = ''
      }

      if(lastnametxt.value.length == 0)
      {
        errorLastNamelbl.innerText = '*ERROR ADD LAST NAME'
      }
      else
      {
        errorLastNamelbl.innerText = ''
      }


      if(emailtxt.value.length == 0)
      {
        errorEmaillbl.innerText = '*ERROR ADD EMAIL '
      }
      else
      {
        errorEmaillbl.innerText = ''
      }
      





      if(phonetxt.value.length == 0)
      {
        errorPhonelbl.innerText = '*ERROR ADD PHONE'
      }
      else
      {
        errorPhonelbl.innerText = ''
      }
      
      if(passwordtxt.value.length == 0)
      {
        errorPasswordlbl.innerText = '*ERROR ADD PASSWORD'
      }
      else
      {
        errorPasswordlbl.innerText = ''
      }




      if(confirmPasswordtxt.value.length == 0)
      {
        errorConfirmPasswordlbl.innerText = '*ERROR ADD CONFIRM-PASSWORD'
      }
      else
      {
        errorConfirmPasswordlbl.innerText = ''
      }


      if((passwordtxt.value  != confirmPasswordtxt.value))
      {
        errorPasswordlbl.innerText = '*ERROR MAKE SURE PASSWORDS MATCH'
        errorConfirmPasswordlbl.innerText = '*ERROR MAKE SURE PASSWORDS MATCH'
      }
      else if((confirmPasswordtxt.value.length == 0) && (passwordtxt.value.length == 0))
      {
        errorPasswordlbl.innerText = '*ERROR ADD PASSWORD'
        errorConfirmPasswordlbl.innerText = '*ERROR ADD CONFIRM-PASSWORD'
      }
      else
      {
        errorPasswordlbl.innerText = ''
        errorConfirmPasswordlbl.innerText = ''
      }
    



   


    }
    );
    

</script>