<?php
/*
Template Name:Web
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
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/web-style.css"></link>
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/footer.css"></link>
	<link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/jquery.lightbox-0.5.css"></link>
	<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Web</title>
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
										
												<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/HEW_1.jpg" title="hyprEVO website">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/HEW_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/HEW_2.jpg" title="hyprEVO website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/HEW_3.jpg" title="hyprEVO website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/HEW_4.jpg" title="hyprEVO website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/HEW_5.jpg" title="hyprEVO website"/>
															
										</a>
										

									</li>

									<li>

													<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/DMW_1.jpg" title="Dani & Micah Wedding website">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/DMW_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/DMW_2.jpg" title="Dani & Micah Wedding website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/DMW_3.jpg" title="Dani & Micah Wedding website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/DMW_4.jpg" title="Dani & Micah Wedding website"/>
										</a>

									</li>

									<li>
										
										<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/SYFGW_1.jpg" title="Start Young Financial Group website">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/SYFGW_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/SYFGW_2.jpg" title="Start Young Financial Group website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/SYFGW_3.jpg" title="Start Young Financial Group website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/SYFGW_4.jpg" title="Start Young Financial Group website"/>
															
										</a>

									</li>

									<li id="last">

													<!--first image--><a href="<?php bloginfo('template_directory');?>/photos/AMP_1.jpg" title="AMP Music Festival website">

											<!--thumbnail--><img src="<?php bloginfo('template_directory');?>/photos/AMP_thumb.jpg" width="72" height="72" alt="" />
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/AMP_2.jpg" title="AMP Music Festival website"/>
										<!--second image--><a href="<?php bloginfo('template_directory');?>/photos/AMP_3.jpg" title="AMP Music Festival website"/>
															
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