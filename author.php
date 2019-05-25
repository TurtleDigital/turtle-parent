<?php get_header();?>
 
<h2 class="category-title">Posts by <?php the_author();?></h2>
<hr>

		<div class="content">
		
			<?php if (have_posts()) : while (have_posts()) : the_post();

			get_template_part('content', get_post_format());
		
		endwhile; ?>
		
	<div class="blog-nav-container">
				
		<p class="nav-page"><?php previous_posts_link(); ?></p>
		
		<p class="nav-page"><?php next_posts_link(); ?></p>
	
	</div>
		
	<?php endif;?>
			
		</div>

<?php get_footer(); ?>