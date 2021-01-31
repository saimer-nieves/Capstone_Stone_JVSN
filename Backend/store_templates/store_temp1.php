<?php


include "../../includes/all_boostraps.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
    body
    {
        background-color:grey;

    }
    #temp_main
    {
        background-color:white;
        width:900px;
        height:1200px;
        margin-left:200px;
    }
    .navbar-new-top{
    background: none;
    margin-top:0px;
    }
    .navbar-brand{
        font-weight: 600;
    }
    .navbar-brand img{
        width: 20%;
    }
    .navbar-new-top ul{
        margin-right: 9%;
    }
    .navbar-new-top ul li{
        margin-right: 8%;
    }
    .navbar-new-bottom{
        background-color: none;
        box-shadow: 0 5px 6px -2px rgba(0,0,0,.3);
        border-top: 1px solid #e0e0e0;
    
        height: 40px;
    }
    .navbar-new-bottom ul li{
        margin-left: 2%;
        margin-right: 2%;
    }
    .navbar-nav .nav-item a {
        color: #333;
        font-size: 14px;
        font-weight: 600;
        transition: 1s ease;
    }
    .navbar-nav .nav-item a:hover{
        color: #0062cc;
    }
    .dropdown-menu.show{
        background: #f8f9fa;
        border-radius: 0;
    }
    .header-btn{
        width: 161%;
        border: none;
        border-radius: 1rem;
        padding: 8%;
        background: #0062cc;
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
    }






























    

#main_store1
{
  background-color:none;
  width:100%;
  padding:10px;
  position:absolute;
}

.store_sizing
{
    height:150px;
    width:100px;
    margin-left:40px;
    margin-bottom:40px;
}
.store_logo
{
  width:100%;
  height:100%;
  padding:0px;
  margin:0px;
}

.store_detail_sizing
{
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}


.store1{

    background-color:yellow;


    float:left;
 
   
    
}

#store1_detail1
{
  display:none;
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}

#store1_detail2
{
  display:none;
  width:300px;
  height:100px;
  background-color:red;
  position:absolute;
  margin-left:340px;
}



.store2{

    background-color:orange;
    float:left;
  
   
}
.store3{

    background-color:blue;
    float:left;

}
.store4{

    background-color:#ddd;
    float:left;

}

.store5{

    background-color:#999;
    float:left;

}
.store6{

    background-color:yellow;
    float:left;

}

.store7{

    background-color:orange;
    float:left;

}
.store8{

    background-color:white;
    float:left;

}


* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
 // background: #EEE;
}

.gallery-cell {
  width: 900px;
  height: 400px;
  margin-right: 10px;
  background: #8C8;
  padding:50px;
  
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  
  line-height: 200px;
  font-size: 80px;
  color: white;
}


.store_pic_ad
{
  width:730px;

}
    </style>
</head>
<body>
    

    <div id="temp_main">



     




        <div id="header">
                  
   

            <nav class="navbar  navbar-expand-md flex-nowrap navbar-new-top">
                        <a href="/" class="navbar-brand"><img src="#" alt=""/>Bootstrap 4</a>
                        <ul class="nav navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item">
                                <a class="nav-link px-2">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2">Link</a>
                            </li>
                            <li class="nav-item">
                                <button type="button"  class="header-btn">Button</button>
                            </li>
                        </ul>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <nav class="navbar  navbar-expand-md navbar-new-bottom">
                        <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

                            <ul class="navbar-nav w-100 justify-content-center px-3">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Link</a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Link</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
        </div>


        <div id="main_content">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner" style="height:300px;">
                    <div class="carousel-item active">
                    <img
                        src="https://mdbootstrap.com/img/new/slides/041.jpg"
                        class="d-block w-100"
                        alt="..."
                    />
                    </div>
                    <div class="carousel-item">
                    <img
                        src="https://mdbootstrap.com/img/new/slides/042.jpg"
                        class="d-block w-100"
                        alt="..."
                    />
                    </div>
                    <div class="carousel-item">
                    <img
                        src="https://mdbootstrap.com/img/new/slides/043.jpg"
                        class="d-block w-100"
                        alt="..."
                    />
                    </div>
                </div>
            </div>

            <!-- Flickity HTML init -->
            <div class="gallery js-flickity"
                    data-flickity-options='{ "wrapAround": true }' style="background-color:red; ">
                    <div class="gallery-cell" > 
                        
                            <div class="store1 store_sizing"  onmouseover="mouseOver10()" onmouseout="fade_exit()" >
                            <img src="../images/JC_logo.jpg" class="store_logo">
                        
                        </div>
                            
                        

                            <div class="store2 store_sizing"  onclick="myFunction()"  >2  </div>
                            <div class="store3 store_sizing"  onclick="myFunction()" >3</div>
                            <div class="store4 store_sizing"  onclick="myFunction()">4</div>
                      

                    </div>
                    <div class="gallery-cell">


                    <div class="store1 store_sizing"  onmouseover="mouseOver100()" onmouseout="fade_exit()" ></div>
                            <div id="store1_detail2">Jc Penny store</div>
                        

                            <div class="store2 store_sizing" style="background-color:red;"  onclick="myFunction()"  >2  </div>
                            <div class="store3 store_sizing"  onclick="myFunction()" >3</div>
                            <div class="store4 store_sizing"  onclick="myFunction()">4</div>
                            <div class="store5 store_sizing" >5</div>
                            <div class="store6 store_sizing">6</div>
                            <div class="store7 store_sizing" >7</div>
                            <div class="store8 store_sizing">8</div>






                    </div>
                    <div class="gallery-cell"></div>
                    <div class="gallery-cell"></div>
                    <div class="gallery-cell"></div>
                    </div>
                
                
                </div>


            




        </div>


        <div id="footer">
        
        
        </div>
        

    
    
    
    </div>



</body>
</html>        
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->
             <!-- jQuery -->
   <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

