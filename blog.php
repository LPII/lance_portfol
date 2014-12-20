<?php
/*
Template Name: Blog3
*/
?>
<?php get_header(); ?>
	<div id="wrap">
				

							<div id="container">

									<div id="padding">



									</div>
								
									<div id="stuff">
										<div id="bar">
										<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
										</div>
									
				

						<?php $temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=5'.'&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
								
								 <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory');?>/images/more_bg.png" border="0"/></a>
								
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
