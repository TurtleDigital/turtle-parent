<?php get_header(); ?>
<div style="height: 70px"></div>
<?php

$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '');
list($url, $width, $height, $is_intermediate) = $thumbnail;

?>

<h1 class="category-title">Latest Posts</h1>

<div class="blog-search"><?php get_search_form(); ?></div>

<div class="content">


	<div class="blog-categories">

		<div class="blog-cat">

			<?php
			query_posts( 'category_name=Surf&posts_per_page=1' );
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part('content-categories', get_post_format());
				endwhile;
			endif;
			wp_reset_query();
			?>


		</div>

		<div class="blog-cat">

			<?php
			query_posts( 'category_name=Lifestyle&posts_per_page=1' );
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part('content-categories', get_post_format());
				endwhile;
			endif;
			wp_reset_query();
			?>

		</div>

		<div class="blog-cat">

			<?php
			query_posts( 'category_name=Travel&posts_per_page=1' );
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part('content-categories', get_post_format());
				endwhile;
			endif;
			wp_reset_query();
			?>

		</div>

	</div>


	<h1 class="category-title">All Posts</h1>

		<?php

			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part('content', get_post_format());
				endwhile;
			endif;

		?>



	<div class="blog-nav-container">

		<p class="nav-page"><?php previous_posts_link(); ?></p>

		<p class="nav-page"><?php next_posts_link(); ?></p>

	</div>


</div>

<?php get_footer(); ?>
