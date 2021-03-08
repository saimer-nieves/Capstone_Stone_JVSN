<!DOCTYPE html> 
<html> 

<head> 
	<title>How to create slide left and 
	right toggle effect using jQuery?</title> 
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"> 
</script> 
	<style type="text/css"> 
		.box { 
			float: left; 
			overflow: hidden; 
			background: #32a852; 
			height: 0px; 
			padding: 0px;
			position: relative; 
			z-index: 900;
			
		} 
		/* Add padding and border to inner content 
	for better animation effect */ 
		
		.box-inner { 
			height: 400px; 
			padding: 0px; 
			border: 1px solid #000000; 
		} 
		#store
		{
			margin-left:200px;
			background-color:red;
			width:200px;
			height:100px;
			float: left; 
			position: relative;
		}

		#store2
		{

			background-color:green;
			width:200px;
			height:100px;
			float: left; 
			position: relative;
			z-index: -1;
		}

		#store3
		{

			background-color:blue;
			width:200px;
			height:100px;
			float: left; 
			position: relative;
			z-index: -1;
		}

		#store4
		{
		
			background-color:yellow;
			width:200px;
			height:100px;
			float: left; 
			position: relative;
		}
		#store5
		{
	
			background-color:red;
			width:200px;
			height:100px;
			float: left; 
			position: relative;
		}
	</style> 
</head> 

<body> 
	<center> 
		<h1 style="color:green;"> 
		GeeksForGeeks 
	</h1> 
		<div id="store">
		
		
		
		</div>
		<div class="box"> 
			<div class="box-inner"> 
				<h4>.animate() method is used</h4> 
				<p>GEEKSFORGEEKS - A computer 
				science portal for geeks.</p> 
			</div> 
		</div> 

		<div id="store2">
		
		
		
		</div>
		<div id="store3">
		
		
		
		</div>
		<div id="store4">
		
		
		
		</div>
		<div id="store5">
		
		
		
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
			$("#store").click(function() { 
					$(".box").animate({ 
								height: 400 
								},
								2000,
								); 
							}
					
							); 
						});
		</script> 
	</center> 
</body> 
  <div id="form">
    
    <div><label>Customer name: <input></label></div>
  <div><label>Telephone: <input type=tel></label></div>
  <div><label>E-mail address: <input type=email></label></div>
  
  </div>



</html> 
