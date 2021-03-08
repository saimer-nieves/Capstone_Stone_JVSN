<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<input onclick="change()" type="button" value="Subscribe" id="myButton1"></input>

</body>
</html>

<script>
function change() // no ';' here
{
    var elem = document.getElementById("myButton1");
    if (elem.value=="Subscribe  ") elem.value = "Unscubscribe";
    else elem.value = "Close Curtain";
}


</script>