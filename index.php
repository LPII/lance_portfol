<!--
folio site
Lance Porter II
v.2.1.2
6/11-7/11

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
	Home
	</title>
<link rel="icon" href="/wp-content/themes/BLANK-Theme/images/fav.png" type="image/png">

	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery.lwtCountdown-1.0.js"></script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/misc.js"></script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/iesucks.js"></script>
	<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow IMG.active');
 
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
 
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');
 
    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );
 
 
    $active.addClass('last-active');
 
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
 
$(function() {
    setInterval( "slideSwitch()", 6800 );
});
	</script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorplugin.js"></script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorscript.js"></script>
	<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/style.css"></link>
	<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/footer.css"></link>
	
	

</head>

<body>

	<div id="header">

	<div id="headcon">
	
		<div id="logo">



		</div>
		
		<div id="menu">


			
				<div id="abs_home">

					<a href="/"></a> 

				</div>
				
				<div id="abs_port">

					<a href="/portfolio"></a> 

				</div>
				
				<div id="abs_about">

					<a href="/about"></a> 

				</div>
				
			<div id="abs_blog">

						<a href="/blog"></a>

				</div>
			

		</div>
	
	


		</div>

	</div>
<div id="gallery_bg">


		</div>
	
	
	
	
	
	<!--000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
	
	
	<div id="container">
		<div id="banner">



		</div>
			<div id="gal_con">

<div id="slideshow"> 
     <img src="/wp-content/themes/BLANK-Theme/images/gal_1.jpg" alt="" class="active"/> 
	<img src="/wp-content/themes/BLANK-Theme/images/gal_2.jpg" alt="ME"  /> 


</div> 

		</div>

		<div id="gallery">


		</div>
		
			
		
		<div id="net">

			<div id="net_link1">

			<a href="https://plus.google.com/u/0/103349617589806371663/posts/p/pub" target="_blank"></a> 

		</div>
		
		<div id="net_link2">

			<a href="https://twitter.com/LancePGD" target="_blank"></a> 

		</div>
		
		<div id="net_link3">

			<a href="http://www.behance.net/LancePorter" target="_blank"></a> 

		</div>
		


		</div>


	</div>
	
	
</body>
<?php get_footer(); ?>
</html>