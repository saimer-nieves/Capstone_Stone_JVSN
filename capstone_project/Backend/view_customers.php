<?php

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

        width: 800px;
        margin-left: 400px;
        border: #000000;
        background-color: white;
        
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

<div id="table_title"></div>
    
<div id="table_box">

    <table class="table table-sm">
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
        <td scope="row">1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
       
        </tr>
        <tr>
        <td scope="row">2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        
        </tr>
        <tr>
        <td scope="row">3</td>
        <td colspan="2">Larry</td>
        <td>@twitter</td>
        <td>Otto</td>
        
        </tr>
    </tbody>
    </table>
</div>
</body>
</html>