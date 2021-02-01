<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP Class SN</title>
</head>
<body>
    

                
        <div class="navbar">

                    
        <img src="images/php_logo.png" id="logo">
        <a href="index.php"id="btn_home">Home</a>
        <div class="dropdown">
        <button class="dropbtn" onclick="dropDown()">Resources
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
        <a href="http://se266-php-nieves-s-2020.herokuapp.com/PHP_Pract_1_SN/"><?='Table';?></a>
        <a href="http://se266-php-nieves-s-2020.herokuapp.com/PHP_Pract_2_SN/"><?='Protoype';?></a>
        
        </div>
        </div> 
      
        <a href="git_sources.php"><?='Git Resources';?></a>
        <a href="https://github.com/saimer-nieves/SE266"><?='My GitHub Repo';?></a>
        </div>

                
        
        <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function dropDown() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
        </script>    
        <div id="middle">
            <center><h1><?='PHP and MySQL - Saimer Nieves';?></h1>
            
            <p>Welcome to my PHP and MySQL page. You can find an overview of all my working PHP projects along with my code test code</p>
            
            
            <div id="left_window">
                <h2><?='Assignment Overview';?></h2>
               


                <table id="table_">
                    <tbody>
                        <tr>
                            <td><?='File Layouts';?></td>
                            <td><a href="Capstone_Technical_Design.pdf"  onmouseover="mouseOver1()" onmouseout="mouseOut()"><input type="button" value="view PHP P 1" id="btn1" class="buttons"></a></td>
                        </tr>
                            <tr>
                                <td><?='Week 1 - PHP Pract 2';?></td>  
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/PHP_Pract_2_SN/"  onmouseover="mouseOver2()" onmouseout="mouseOut()" ><input type="button" value="view PHP P 2" class="buttons"></a></td>
                            </tr> 
                            <tr>
                                <td><?='Week 1 - PHP Pract 3';?></td> 
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/PHP_Pract_3_SN/" onmouseover="mouseOver3()" onmouseout="mouseOut()"><input type="button" value="view PHP P 3" class="buttons"></a></td>
                            </tr>       
                            <tr>
                                <td><?='Week 1 - PHP Pract 4';?></td>   
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/PHP_Pract_4_SN/" onmouseover="mouseOver4()" onmouseout="mouseOut()"><input type="button" value="view PHP P 4" class="buttons"></a></td>
                            </tr>     
                            <tr>
                                <td><?='Week 1 - (Fizz Buzz)';?></td>  
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/Fizz_Buzz/" onmouseover="mouseOver5()" onmouseout="mouseOut()"><input type="button" value="view Fizz Buzz" class="buttons"></a></td> 
                            </tr>     
                            <tr>
                                <td><?='Week 2 - (Patient Intake) ';?></td>  
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/Form/"  onmouseover="mouseOver6()" onmouseout="mouseOut()"><input type="button" value="view Patient Int." class="buttons"></a></td>
                            </tr>      
                            <tr>
                                <td><?='Week 3 - (ATM)';?></td> 
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/ATM/account.php" onmouseover="mouseOver7()" onmouseout="mouseOut()"><input type="button" value="view ATM" class="buttons"></a></td> 
                            </tr>      
                            <tr>
                                <td><?='Week 4 - Patients V/Add';?></td> 
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/teams_folder/" onmouseover="mouseOver8()" onmouseout="mouseOut()"><input type="button" value="view Patients " class="buttons"></a></td>
                            </tr>       
                            <tr>
                                <td><?='Week 5 - Pats. UPD/Del';?></td>
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/Week5/view.php" onmouseover="mouseOver9()" onmouseout="mouseOut()"><input type="button" value="view P UPD|DEL" class="buttons"></a></td> 
                            </tr>       
                            <tr>
                                <td><?='Week 6 - Schools';?></td> 
                                <td><a href="http://se266-php-nieves-s-2020.herokuapp.com/Schools/login.php" onmouseover="mouseOver10()" onmouseout="mouseOut()"><input type="button" value="view Schools" class="buttons"></a></td> 
                            </tr>       
                            <tr><td><?='<b>Final Project</b>';?></td> 
                                <td><a  onmouseover="mouseOver11()" onmouseout="mouseOut()"><input type="button" value="view Final Project" class="buttons"></a></td> </tr>      
                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        
                                
                                
                                
                                
                            
                                
                            </ul></td>
                        </tr>
                    </tbody>
                
                </table >
                    
                    

                <div id="secret_project" style="margin-left:200px; margin-top:30px; display:none;">
                    <label>Final Project</label>
                    <table style="margin-left:100px; margin-top:20px; width:250px;">
                        <tr>
                            <td style="width:200px;">| Proposal |</td>  <td><a href="pdf_files/Proposal.pdf" onmouseover="mouseOver12()" onmouseout="mouseOut()"><input type="button" value="view Proposal" class="buttons"></a></td> 
                        
                        </tr>
                        <tr>
                            <td style="width:200px;">| Prototype |</td>  <td><a href="pdf_files/Prototype.pdf"  onmouseover="mouseOver13()" onmouseout="mouseOut()"><input type="button" value="view Prototype" class="buttons"></a></td> 
                        
                        </tr>
                        <tr>
                            <td style="width:200px;">| Table Design |</td>  <td><a href="pdf_files/SQL.pdf"  onmouseover="mouseOver14()" onmouseout="mouseOut()"><input type="button" value="view SQL Tab" class="buttons"></a></td> 
                        
                        </tr>
                        <tr>
                            <td style="width:200px;">| Tech Spec |</td>  <td><a href="pdf_files/Tech_spec.pdf" onmouseover="mouseOver15()" onmouseout="mouseOut()"><input type="button" value="view Tech SP." class="buttons"></a></td> 
                        
                        </tr>
                    </table>
                
                </div>
            
                    
                
            </div>   
            <div id="right_window">


                <center><h2>Hover over Button to view Here | Click button to Visit Site</h3>
                
                <img src="images/php_logo.png" id="view_image_spot">
            </center>
            </div> 

        </center>
        </div>
        <div id="footer"><center><hr><?='File last updated October 08 2020 7:31:52 P.M  ';?></center></div>
        
          
        
        <script>

    var secret_div = document.querySelector("#secret_project") 
    var buttons_ = document.querySelectorAll("input[type='button']") // The array
    var display_img = document.querySelector("#view_image_spot")
    
    i = 0;
    console.log(buttons_[10])
    buttons_[10].addEventListener("click", displaysecret)
    function displaysecret()
    {
        i = i+ 1;
        if (i % 2 == 0)
        {
            secret_div.style.display = "none"
        }
        else
        {
            secret_div.style.display = "block"
        }
        //console.log("You presed me")
       // all_terms_divs[0].style.display = "none"
      //  all_termstitles[0].style.display="block"
       
    }
        
    
      //display_img.src = "Images" + "/" + this.dataset.img //
    
    
   
    function mouseOver1(){display_img.src = "images" + "/week1_site_img.PNG"}
    function mouseOver2(){display_img.src = "images" + "/week1B_site_img.PNG"}
    function mouseOver3(){display_img.src = "images" + "/week2_site_img.PNG"}
    function mouseOver4(){display_img.src = "images" + "/week3_site_img.PNG"}
    function mouseOver5(){display_img.src = "images" + "/week4_site_img.PNG"}
    function mouseOver6(){display_img.src = "images" + "/week5_site_img.PNG"}
    function mouseOver7(){display_img.src = "images" + "/ATM_site_img.PNG"}
    function mouseOver8(){display_img.src = "images" + "/week7_site_img.PNG"}
    function mouseOver9(){display_img.src = "images" + "/week8B_site_img.PNG"}
    function mouseOver10(){display_img.src = "images" + "/week9B_site_img.PNG"}
    function mouseOver11(){display_img.src = "images" + "/week10_site_img.PNG"}

    function mouseOver12(){display_img.src = "images" + "/proposal.PNG"}
    function mouseOver13(){display_img.src = "images" + "/prototype.PNG"}
    function mouseOver14(){display_img.src = "images" + "/tables.PNG"}
    function mouseOver15(){display_img.src = "images" + "/tech.PNG"}
//
    
    function mouseOut()
    {
        display_img.src = "images" + "/php_logo.png"
       
    }

</script>
<?php


?>
       
</body>

</html>