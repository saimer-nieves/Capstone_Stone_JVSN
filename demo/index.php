<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Submit Form Without Page Refresh Using Ajax, jQuery and PHP - AllPHPTricks.com</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body {width:50%; margin:0 auto;}
</style>
</head>
<body>
<h1>Submit Form Without Page Refresh Using Ajax, jQuery and PHP</h1>

<form name="ContactForm" method="post" action="">

<label for="name">Name:</label>
<input type="text" class="form-control name">


<label for="email">Email Address:</label>
<input type="email" class="form-control email">


<label for="message">Message:</label>
<textarea name="message" class="form-control message"></textarea>

<button type="submit" class="btn btn-default">Submit</button>
</form>

<div class="message_box" style="margin:10px 0px;">
</div>

<br /><br />
<a href="https://www.allphptricks.com/submit-form-without-page-refresh-using-ajax-jquery-and-php/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>

<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() {
	var delay = 2000;
	$('.btn-default').click(function(e){
		e.preventDefault();
		var name = $('.name').val();
       
		
		var email = $('.email').val();
       
			
		var message = $('.message').val();
    
					
			$.ajax
			({
             type: "POST",
			 url: "ajax.php",
             data: "name="+name+"&email="+email+"&message="+message,
			 beforeSend: function() {
			 $('.message_box').html(
			 '<img src="Loader.gif" width="25" height="25"/>'
			 );
			 },		 
             success: function(data)
			 {
				 setTimeout(function() {
                    $('.message_box').html(data);
                }, delay);
			
             }
			 });
	});
			
});

//Email validation Function	
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
</script>
</body>
</html>