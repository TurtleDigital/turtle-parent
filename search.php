<?php

get_header(); ?>

<div class="top-block"></div>

<h1 class="category-title">Search Results</h1>

<div class="content">

	<?php



		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				if (is_search() && $post -> post_type=='post') :
					get_template_part('content', get_post_format());
				endif;
			endwhile;
		endif;

	?>

</div>

<?php get_footer(); ?>
