<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package playsafe
 */

get_header();
?>

	<div class="modal fade modal-enquire" id="enquireModal<?php the_title(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php $slidecount; ?>" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel<?php echo $slidecount; ?>">Enquire - <?php the_title(); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="345" title="Enquire Hardware"]'); ?>
				</div>
			</div>
		</div>
	</div>

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

	<section class="singlehardware-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="singlehardware-image">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="singlehardware-description">
						<div class="product-title">
							<h5><?php the_title(); ?></h5>
						</div>
						<div class="products-description">
							<?php echo get_field( 'product_description'); ?>
						</div>
						<div class="product-links">
							<a href="#" data-toggle="modal" data-target="#enquireModal<?php echo $slidecount; ?>" class="enquire">Enquire</a>
							<?php $spech_sheet = get_field( 'spech_sheet' ); ?>
							<?php if ( $spech_sheet ) { ?>
								<a href="<?php echo $spech_sheet['url']; ?>" target="_blank" class="specsheet">Spec Sheet</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="singlehardware-features">
						<?php the_field( 'product_features' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
