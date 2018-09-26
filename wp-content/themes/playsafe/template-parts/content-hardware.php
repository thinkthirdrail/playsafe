<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playsafe
 */

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

?>

<div class="col-md-4">
	<a href="<?php the_permalink() ?>">
		<div class="hardware-container">
			<div class="hardware-image">
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
			</div>
			<div class="hardware-title">
				<h6><?php the_title(); ?></h6>
			</div>
		</div>
	</a>
</div>
