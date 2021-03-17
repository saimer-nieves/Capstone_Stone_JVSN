<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
}

echo $name;
echo $email;
echo $message;
?>