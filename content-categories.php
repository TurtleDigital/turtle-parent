<?php $wpblog_fetrdimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


<div class="blog-post">

	<img src="<?php echo $wpblog_fetrdimg; ?>"/>

	<h3><?php the_title(); ?></h3>

	<small class="sub-text">Posted on: <?php the_time('F j, 20y');?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></small>

	<br>

	<p><?php the_excerpt() ?></p>

	<a href="<?php echo get_post_permalink(); ?>" class="blog-link">Read More</a>

</div>
