<?php
/*
Template Name: Contact
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery-1.4.1.js"></script>

	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/misc.js"></script>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery.js"></script>
    <script type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">
$(function() {
	$('.gallery a').lightBox(); // Select all links in object with gallery ID
});
</script>
		<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorplugin.js"></script>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorscript.js"></script>
	<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/contact-style.css"></link>
	<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/jquery.lightbox-0.5.css"></link>
		<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/footer.css"></link>
	<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Contact</title>
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
	
		<div id="padding">
	
	

		


		</div>
	
	<div id="stuff">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			

		</div>
		


		<?php endwhile; endif; ?>


	</div>
		
		<div id="bottom_pic">
	
	
		


		</div>

	</div>
	

</body>
<?php get_footer(); ?>
</html>
