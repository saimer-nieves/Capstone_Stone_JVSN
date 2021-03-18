<?php
session_start();

include "../includes/back_side_nav.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    #table_box {

        width: 1000px;
        margin-left: 200px;
        border: #000000;
        background-color: white;
        margin-top:200px;
        
    }

    #table_title {
        margin-left: 1050px;
        background-color: #53C68C;
        width: 150px;
        height: 50px;
    }


    th
    {
        background-color: #53C68C;
        width: 300px;
    }

    td{
        column-width: 40px;
    }

    </style>

</head>
<body>

<div style='width:270px; height:100px; background-color:#53c68c; margin-top:90px;margin-left:930px; position:absolute;'> <h4 style='font-family: Arial Black, Arial, Helvetica;color:white;font-size: 20px;text-align:center; padding-top:20px'>Your Subscribers</h4></div>


<div id="table_box">

    <table class="table table-sm" style='width:1000px; '>
    <thead>
        <tr>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Subscription Date</th>
        </tr>
    </thead>
    <tbody>
    <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr> <tr>
    
    <td>Mark</td>
    <td>Otto</td>
    <td>Junior@gmail.com</td>
    <td>401-999-4521</td>
    <td>2021-02-25</td>
   
    </tr>
    </tbody>
    </table>
</div>
</body>
</html>