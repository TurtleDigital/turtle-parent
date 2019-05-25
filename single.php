<?php 

get_header();

/* SINGLE BLOG POST PAGE */

$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '');
list($url, $width, $height, $is_intermediate) = $thumbnail;
?>

<div class='blog-banner' style="height:<?php echo $height; ?>px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;">
	
	<div class="blog-overlay">
	
		<h1><?php the_title(); ?></h1>
		
		<p class="blog-excerpt"><?php the_excerpt(); ?></p>
		
		<small class="sub-text">Posted on: <?php the_time('F j, 20y');?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></small>
		
		<p><?php the_category() ?></p>
		
	</div>
	
</div>

<div class='content narrow-page'>

	<?php
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
			<div class="blog-content"><?php the_content(); ?></div>
			
			<?php the_tags( 'Tags: ', ' • ', '<br />' ); ?>
		
		<?php endwhile;
		
	endif;
			
	?>
	
</div>

<?php get_footer(); ?>