
<?php
session_start();
include('menu/cn.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My First Project For CSE-39</title>
<link rel="stylesheet" type="text/css" href="roni.css">


<link rel="stylesheet" type="text/css" href="sharma.css">

<!---
<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	

<script src="js/jquery.js" type="text/javascript"></script>
<script scr="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>---


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>--->

</head>

<body>
	<div class="header">
    		<div class="topmenu">
				<?php include('menu/topmenu.php');?>
            </div>
            <div class="photo">
            <img src="bu.jpg" width="110" height="120" alt=""/>
            </div>
    	<b>BANGLADESH UNIVERSITY</b>
        <p>Department of CSE</p>
        <p><a href="?p=home">39th  Batch</a></p>
    </div>
    
 <div class="main">
    	<div class="menu">
        	<?php include('menu/menu.php'); ?>
        </div>		

		
		
		
  		<div class="content">
        	<?php
            	include('menu/controler.php');
           ?>            
        </div>
 </div>
    
    <div class="footer">
    	@copywrite:<?php print date('Y');?><br>
Roni Sharma.. 
ronicse2021@gmail.com   

    </div>

</body>
</html>