<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorplugin.js"></script>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/colorscript.js"></script>
	<script language="Javascript" type="text/javascript" src="/wp-content/themes/BLANK-Theme/js/misc.js"></script>
	<script language="Javascript" type="text/javascript">

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
    setInterval( "slideSwitch()", 5000 );
});
	</script>
	
	<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/search.css"></link>
		<link rel="Stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/footer.css"></link>
	<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>test</title>
</head>

<body>
	<div id="wrap">
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
										<div id="bar">
										<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
										</div>
									
				

							<?php while (have_posts()) : the_post(); ?>

							<div class="whole" id="post-<?php the_ID(); ?>">

								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

								<div class="entry">
									<?php the_excerpt(); ?> 
								</div>

								<div class="postmetadata">
									<?php the_tags('', ', ', '<br />'); ?>
									
								</div>
								
								<div class="more">
								
								 <a href="<?php the_permalink() ?>"><img src="/wp-content/themes/BLANK-Theme/images/more_bg.png" border="0"/></a>
								
								</div>

							</div>

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					

						<?php$wp_query = null; $wp_query = $temp;?>
						</div>
						</div>
	
	</div>
	
</body>
<?php get_footer(); ?>
</html>
