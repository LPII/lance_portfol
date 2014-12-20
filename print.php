<?php
/*
Template Name: Print
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	
	<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory');?>/js/misc.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">
$(function() {
	$('.gallery a').lightBox(); // Select all links in object with gallery ID
});
</script>
		<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory');?>/js/colorplugin.js"></script>
	<script language="Javascript" type="text/javascript" src="<?php bloginfo('template_directory');?>/js/colorscript.js"></script>
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/print-style.css"></link>
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/footer.css"></link>
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/jquery.lightbox-0.5.css"></link>
	<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Print</title>
<link rel="icon" href="<?php bloginfo('template_directory');?>/images/fav.png" type="image/png">
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

	<div id="container">
	
	
		<div id="select">
			
			<div id="sel_men">
			
				<div id="abs_all">
				
					<a href="/portfolio/"></a> 
				
				</div>
				
				<div id="abs_brand">
				
					<a href="/branding/"></a> 
				
				</div>
				
				<div id="abs_print">
				
					<a href="/print/"></a> 
				
				</div>
				
				<div id="abs_web">
				
					<a href="/web/"></a> 
				
				</div>
				
				<div id="abs_misc">
				
					<a href="/misc/"></a> 
				
				</div>
			
			</div>
		
		</div>
		
				<div id="tile">
		
			 
					 <div class="gallery" id="1">

								<ul>

									<li>
										
											<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/RLE_1.jpg" title="Rocky Loves Emily Concert Poster">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/RLE_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/RLE_2.jpg" title="Rocky Loves Emily Concert Poster"/>
															
										</a>
										

									</li>

									<li>

												<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/SKY_1.jpg" title="Sky Club Promotional Poster">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/SKY_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/SKY_2.jpg" title="Sky Club Promotional Poster"/>
															
										</a>

									</li>

									<li>
										
								<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/DMD_1.jpg" title="Dani & Micah Wedding Magnet/Postcards">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/DMD_thumb.jpg" width="72" height="72" alt="" />
															
										</a>

									</li>

									<li id="last">

										<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/STOP_1.jpg" title="Big Stosh's Brand Collateral ">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/STOP_thumb.jpg" width="72" height="72" alt="" />
															
										</a>

									</li>


								</ul>

			</div><!-- / gallery -->
						 <div class="gallery" id="2">

								<ul>

					
				<li>
										
									<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/thumb_imageCS.png" width="72" height="72" alt="CS" />
															
										</a>
										

									</li>

								


								</ul>

			</div><!-- / gallery -->



		</div>

	</div>

</body>
<?php get_footer(); ?>
</html>