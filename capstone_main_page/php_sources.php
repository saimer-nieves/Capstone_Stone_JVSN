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
        <center><h1>LEARN PHP SECTION</h1>
            <p>Here are so resources for PHP.</p>
            <a href="https://www.codecademy.com/learn/learn-php"><h4> Code Academy PHP</h4></a>
            <a href="https://www.w3schools.com/php/DEFAULT.asp"><h4> W3 Schools PHP</h4></a>
            <a href="https://www.tutorialspoint.com/php/index.htm"><h4> Tutorials Point PHP</h4></a>
            
            
        </center>
        </div>
        <div id="footer"><center><hr><?='File last updated October 08 2020 7:31:52 P.M  ';?></center></div>
        
          
        
        
       
</body>


</html>