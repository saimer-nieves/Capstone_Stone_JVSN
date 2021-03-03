<!DOCTYPE html> 
<html> 

<head> 
	<title>How to create slide left and 
	right toggle effect using jQuery?</title> 
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"> 
</script> 
	<style type="text/css"> 
		.box { 
			float: center; 
			overflow: hidden; 
			background: #32a852; 
			width: 400px; 
			padding: 0px; 
		} 
		/* Add padding and border to inner content 
	for better animation effect */ 
		
		.box-inner { 
			width: 400px; 
			padding: 0px; 
			border: 1px solid #000000; 
		} 
	</style> 
</head> 

<body> 
	<center> 
		<h1 style="color:green;"> 
		GeeksForGeeks 
	</h1> 
		<h3>jQuery | How to create slide 
		left and right toggle effect?</h3> 
		<hr> 
		<div class="box"> 
			<div class="box-inner"> 
				<h4>.animate() method is used</h4> 
				<p>GEEKSFORGEEKS - A computer 
				science portal for geeks.</p> 
			</div> 
		</div> 
		<hr> 
		<button type="button" class="slide-left"> 
		Click to Slide-Left 
	</button> 
		<button type="button" class="slide-right"> 
		Click to Slide-Right 
	</button>
  
  
		<script type="text/javascript"> 
			$(document).ready(function() { 
				var boxWidth = $(".box").width(); 
				$(".slide-left").hover(
          
          function() 
          { 
            $(".box").animate
            (
              { 
              width: 0 
              }
            ); 
          }
,
          function() 
          { 
					  $(".box").animate
            (
              { 
						  width: boxWidth 
					    }
            ); 
          }
        ); 
      });
		</script> 
	</center> 
</body> 

</html> 
