<?php
session_start(); 
include '../Model/model_add_merchant_store.php';



$testing_this = add_admin_stores('jess Collection', 'Clothing', date('Y-m-d'), 'cured_collection_logo.jpg');



// if ( ($_POST['name']!="") && ($_POST['email']!="")){
 
// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];

// var_dump($name);
// exit;
// $to = "youremail@yourdomain.com";
// $subject = "AllPHPTricks Contact Form Email";
// $message = "<p>New email is received from $name.</p>
// <p>$message</p>";

// // Always set content-type when sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= "From: <".$email.">" . "\r\n";
// $sent = mail($to,$subject,$message,$headers);
// if($sent){
// 	echo "<span style='color:green; font-weight:bold;'>
// 	Thank you for contacting us, we will get back to you shortly.
// 	</span>";
// }
// else{
// 	echo "<span style='color:red; font-weight:bold;'>
// 	Sorry! Your form submission is failed.
// 	</span>";
// 	}
// }
?>