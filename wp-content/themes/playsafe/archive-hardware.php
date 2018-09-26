<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playsafe
 */

get_header();
?>

<section class="innerbanner-section" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-image.jpg')">
  <div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="zoom-in">
				<?php if ( have_rows( 'left_side', 571 ) ) : ?>
					<div class="description-container">
						<?php while ( have_rows( 'left_side', 571 ) ) : the_row(); ?>
							<div class="description-content">

                <?php if ( get_sub_field( 'banner_title' ) ): ?>
            			<h1><?php the_sub_field( 'banner_title' ); ?></h1>
                <?php endif; ?>

                <?php if ( get_sub_field( 'banner_subtitle' ) ): ?>
            			<h3><?php the_sub_field( 'banner_subtitle' ); ?></h3>
                <?php endif; ?>

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

<section class="archive-section">
	<div class="container">
		<div class="row">
				<?php if ( have_posts() ) : ?>
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
		</div>
	</div>
</section>

<?php
get_footer();
