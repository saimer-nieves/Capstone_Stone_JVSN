<?php

include "../includes/header.php";
//include (__DIR__ .'/../model/model_EmployeeLogins.php');
include "../includes/functions.php";

   
$feedback = "";
session_start();
session_unset();
if (isPostRequest()) {
    //Obtaining Text from textbox
    $log_username = filter_input(INPUT_POST, 'username');
    $log_password = filter_input(INPUT_POST, 'password');

    header('Location: index.php');
    
    // your logic here
    //$Allow_user = checkLogin ($log_username, $log_password); //this will return Whether login credentials is true or false
    

    if(($log_username == "manager" && $log_password == "manager") || ($log_username == "employee" && $log_password == "employee")) //if they have a valid login
    {
        

        $_SESSION["username"] = $log_username;
        $_SESSION["password"] = $log_password;
        //send them to control.php
        header('Location: control_panel.php');
        //$usergroups = checkEmployeeLogin("Erik", "NEIT");


    }
    else
    {
        $feedback .= " Invalid Login";
        header('Location: index.php');

    }
//testing push
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    #sign_upForm
    {
        width:500px;
        margin-left:500px;
        background-color:yellow;
    }
    
    </style>
</head>
<body>
    








<div id="sign_upForm">
    <form method="post" action="sign_up.php">
            <div id="form_application">
                            <center>
                         
                            

                            <hr>
                                
                           


                                             
                                    


                                
                    
                                    
                                    
                                 
                                </div>
                                















                                <div id="form_info">

                                    <div id="left_form">
                                    
                                        <label> <h5>Company: </h5></label>
                                        <input type="text" maxlength = 40  class="form-control text_box" name="fName" required>
                                   

                                        <br>

                                       
                                        <br>

                                        <label> <h5>First Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="mName" >
                                      
                                        <br>
                                        <br>

                                        <label> <h5>Last Name: </h5></label>
                                        <input type="text" maxlength = 80 class="form-control text_box"  name="lName" required>
                                        
                                        <br>
                                        <br>
                                        <br> <label> <h5>Email: abc@abc.abc  </h5></label>
                                        <input type="email"  class="form-control text_box" name="email" pattern ='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$' required>
                               
                                        <br>
                                        <br> <label> <h5>Phone : (###) ###-####</h5></label>
                                        <input type="tel" maxlength = 20 id="phone" name="phone" placeholder="(###) ###-####"  pattern="[(][0-9]{3}[)][ ][0-9]{3}-[0-9]{4}" class="form-control text_box" required >
                                  
                                        <br>

                                        <label> <h5>Username </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="addr1" required>
                                    

                                        <br>
                                        <br>

                                        <label> <h5>Password : </h5></label>
                                        <input type="text" maxlength = 255 class="form-control text_box" name="addr2" >
                                        

                                        <br>
                                        <br>

                                        <label> <h5>Confirm Password: </h5></label>
                                        <input type="text" maxlength = 100 class="form-control text_box"  name="city" required>
                                      
                                    </div>




                                
                                </div>
                                
                              

                                    <button name="sign_up" type="submit" class=" bg-success" style="margin-top:50px; margin-left:50px; height:50px; width:200px;font-weight:bold;" href="#">Sign Up</i></button>
                     
                               










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