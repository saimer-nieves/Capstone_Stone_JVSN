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
            <button class="dropbtn" onclick="dropDown()">Assignments
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
            <a href="../week1/fizz_buzz.php"><?='Week 1 - Fizz Buzz';?></a>
            
              
              <a href="../week2/patient.php"><?='Assignment 2 - Patient Intake';?></a>
              <a href="../week3/atm.php"><?='Assignment 3 - ATM';?></a>
              <a href="../week4/index.php"><?='Assignment 4';?></a>
              <a href="../week5/index.php"><?='Assignment 5';?></a>
              <a href="../week6/index.php"><?='Assignment 6';?></a>
              <a href="../week7/index.php"><?='Assignment 7';?></a>
              <a href="../week8/index.php"><?='Assignment 8';?></a>
              <a href="../week9/index.php"><?='Assignment 9';?></a>
              <a href="../week10/index.php"><?='Assignment 10';?></a> 
            </div>
          </div> 
          <a href="heroku_sources.php"><?='Things Enjoyed';?></a>
          <a href="php_sources.php"><?='PHP Resources';?></a>
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
            <center><h1><?='Things I Enjoy';?></h1>
            <?='Here are some things I like.';?>
            </center>

            <input type="button" value="Previous Hobby" id="previous_btn">
            <input type="button" value="Next Hobby" id="next_btn">
            <center>
            <div id="slideshow">
            <a href="https://www.netflix.com/"><h4 id="img_label"><?='1. Watching Netflix';?></h4></a>
              <img src="images/netflix.jpg" id="slideshow_box">

                            
              
            </div>
            </center>
            
            
            























        
        </div>
        <div id="footer"><center><hr><?='File last updated October 08 2020 7:31:52 P.M  ';?></center></div>
        
        <script>
          var btn_previous = document.querySelector("#previous_btn")
          var btn_next = document.querySelector("#next_btn")
          var img_label_ = document.querySelector("#img_label")
          var slide_image = document.querySelector("#slideshow_box")

          var img_num = 1


          btn_previous.addEventListener("click",execute)

          function execute()
          {
            if(img_num != 1)
              {
                img_num -= 1
              }


            console.log(img_num)
            if(img_num == 1)
            {
              slide_image.src="images/netflix.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.netflix.com/">1. Watching Netflix</a></h4>'
                
            }
            if(img_num == 2)
            {
              slide_image.src="images/volleyball.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.britannica.com/sports/volleyball">2. Play VolleyBall</a></h4>'
            }
            if(img_num == 3)
            {
              slide_image.src="images/cod.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.callofduty.com/">3. Playing Call of Duty Games</a></h4>'
            }
          }

          btn_next.addEventListener("click",execute1)

          function execute1()
          {
            if(img_num != 3)
                {
                  img_num +=1
                }
            
            console.log(img_num)
            if(img_num == 1)
            {
              
              slide_image.src="images/netflix.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.netflix.com/">1. Watching Netflix</a></h4>'
              
            }
            if(img_num == 2)
            {
              slide_image.src="images/volleyball.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.britannica.com/sports/volleyball">2. Play VolleyBall</a></h4>'
            }
            if(img_num == 3)
            {
              slide_image.src="images/cod.jpg"
              img_label_.innerHTML='<h4 id="img_label"><a href="https://www.callofduty.com/">3. Playing Call of Duty Games</a></h4>'
            }
          }


        </script>
        
        
       
</body>


</html>