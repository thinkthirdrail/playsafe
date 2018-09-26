<?php
/**
 * Template Name: Visual Composer Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playsafe
 */

get_header();

?>
<section class="innerbanner-section" style="background-image: url('<?php echo playsafe_featured_image(); ?>')">
  <div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="zoom-in">
				<?php if ( have_rows( 'left_side' ) ) : ?>
					<div class="description-container">
						<?php while ( have_rows( 'left_side' ) ) : the_row(); ?>
							<div class="description-content">
								<h1><?php the_sub_field( 'banner_title' ); ?></h1>
								<h3><?php the_sub_field( 'banner_subtitle' ); ?></h3>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if ( have_rows( 'right_side' ) ) : ?>
				<div class="col-md-6" data-aos="zoom-in">
					<?php while ( have_rows( 'right_side' ) ) : the_row(); ?>
						<?php $section_image = get_sub_field( 'section_image' ); ?>
						<?php if ( $section_image ): ?>
							<img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['filename']; ?>">
						<?php else: ?>
							<?php the_sub_field( 'section_video' ); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="visual-composer">
	<div class="container">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



</div>
</section>

<?php
get_footer();
