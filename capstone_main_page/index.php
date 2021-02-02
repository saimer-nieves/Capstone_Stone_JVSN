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
        <a href=""><?='';?></a>
        <a href=""><?='';?></a>
        
        </div>
        </div> 
      
        <a href="git_sources.php"><?='';?></a>
        <a href="https://github.com/saimer-nieves/SE266"><?='';?></a>
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
            <center><h1><?='Capstone Project Origin Mall';?></h1>
            
            <p>Welcome our Capstone Page for Junior Voltaire and Saimer Nieves</p>
            
            
            <div id="left_window">
                <h2><?='Assignment Overview';?></h2>
               

                <h4>Completed Assignments</h4>
                <table id="table_">
                    <tbody>
                         <tr>
                            <td><?='Proposal';?></td>
                            <td><a href="Proposal_Origin_Websites.pdf"  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view " id="btn1" class="buttons"></a></td>
                        </tr>
                            <tr>
                                <td><?='Status Report 1';?></td>  
                                <td><a href="STATUS_REPORT_W1.pdf"  onmouseover="" onmouseout="mouseOut()" ><input type="button" value="view " class="buttons"></a></td>
                            </tr> 



                        <tr>
                            <td><?='Prototype';?></td>
                            <td><a href="ORIGIN MALL PROJECT SNJV.pdf"  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view " id="btn1" class="buttons"></a></td>
                        </tr>
                            <tr>
                                <td><?='Status Report 2';?></td>  
                                <td><a href="STATUS_REPORT_W2.pdf"  onmouseover="" onmouseout="mouseOut()" ><input type="button" value="view " class="buttons"></a></td>
                            </tr> 

                        <tr>
                            <td><?='Database design and Implementation';?></td>  
                            <td><a href="Capstone_DB_Design_1.PNG"  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view " id="btn1" class="buttons"></a></td>
                        </tr>
                        <tr>
                            <td><?='Technical Design';?></td>  
                            <td><a href="Capstone_Technical_Design.pdf"  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view " id="btn1" class="buttons"></a></td>
                        </tr>
                        <tr>
                             <td><?='Status Report 3';?></td>  
                            <td><a href="STATUS_REPORT_W3.pdf"  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view " id="btn1" class="buttons"></a></td>
                        </tr>
                        
                      
                           
                                
                                
                                
                                
                                
                                
                                
                        
                                
                                
                                
                                
                            
                                
                        
              
                    </tbody>
                    
                
                </table >
                <h4>Pending Assignments</h4>
                <table id="table_">
                    <tbody>
                         <tr>
                            <td><?='Status Report 4';?></td>
                            <td><a href=""  onmouseover="" onmouseout="mouseOut()"><input type="button" value="view" id="btn1" class="buttons"></a></td>
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


                <center><h2></h3>
                
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