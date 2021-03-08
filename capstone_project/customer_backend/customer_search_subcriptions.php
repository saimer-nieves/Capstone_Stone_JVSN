
<?php

include "..include/customer"

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CSS Overlaying One DIV over Another DIV</title>
<style> 
    .container{
        width: 200px;
        height: 200px;
        position: relative;
        margin: 20px;
        margin-left:200px;
        margin-top:600px;
    }
    .box{
        width: 100%;
        height: 100%;            
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0.8;  /* for demo purpose  */
    }
    .stack-top{
        z-index: -1;
        margin: 20px; /* for demo purpose  */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="box stack-top" style="background: red;"></div>
        <div class="box " style="background: blue;"></div>
    </div>
</body>
</html>