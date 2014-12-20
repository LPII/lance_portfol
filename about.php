<?php
/*
Template Name: About
*/
?><?php get_header(); ?>



	<div id="container">
	
		<div id="padding">
	
	

		


		</div>
	
		<div id="stuff">
	
			<div id="about">
	
			<p>I'm a New Jersey native and current Michigan resident. I live in a world of ideas and practical solutions and like spending time finding new perspectives to consider. I believe that an action devoid of passion can not be done well, which is why I consider myself to be a passionate designer that leaves a piece of who I am in every project. Design is a phenomena that is much bigger than me so I'm always trying to become more well rounded, but I have a sweet spot for branding and web design. Regardless of the field or concentration I view the act of designing as problem solving and always like to take the approach that I'm solving a puzzle by finding the right solution. While you're here take a look at some of my work or read more about me and my thoughts on my blog. Thank you for taking the time to view my portfolio.</p>
		
		<div id="resume">
		<a href="https://docs.google.com/file/d/0B3UOBFG3z6KrMGlJS2RmRFp5Tkk/edit?usp=sharing" target="_blank"></a>
		</div>


			</div>
			
				<div id="connect">
	
							<p>Whether you are a potential employer or fellow designer you can reach me in a variety of ways. Lets build our networks together.</p>
								
								<div class="conbtn1">
								<a href="https://plus.google.com/u/0/103349617589806371663/about "target="_blank"></a>
								</div>
								<div class="conbtn2">
								<a href="https://twitter.com/LancePGD "target="_blank"></a>
								</div>

								<div class="conbtn3">
								<a href="http://www.behance.net/LancePorter" target="_blank"></a>
								</div>


				</div>
		
	
		<div id="contact">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
					<div class="post" id="post-<?php the_ID(); ?>">

						

						<div class="entry">

							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						</div>

						

					</div>
					


					<?php endwhile; endif; ?>
		</div>


		</div>
		
		<div id="bottom_pic">
	
	
		


		</div>

	</div>
	

</body>
<?php get_footer(); ?>
</html>