<?php 

get_header(); ?>

<div class="top-block"></div>

<h1 class="category-title"><?php single_cat_title() ?></h1>

<div class="content">

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>

			<?php get_template_part('content', get_post_format()); ?>
		
		<?php endwhile;
		
	endif;
			
	?>
	
</div>

<?php get_footer(); ?>