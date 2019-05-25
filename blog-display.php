<div class="blog-post-container" style="max-height: 550px;">

	<div class="overlay">

		<div class="blog-post">

			<h2><?php the_title(); ?></h2>

			<small class="sub-text">Posted on: <?php the_time('F j, 20y');?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></small>

			<br>

			<p><?php the_excerpt() ?></p>

			<a href="<?php echo get_post_permalink(); ?>" class="blog-link">Read More</a> <?php the_category() ?>

		</div>

	</div>

	<div class="blog-thumb">
		<a href="<?php echo get_post_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"/></a>
	</div>

</div>
