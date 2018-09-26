<?php
/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playsafe
 */

get_header();

?>

<?php if ( playsafe_featured_image() ): ?>
  <section class="innerbanner-section" style="background-image: url('<?php echo playsafe_featured_image(); ?>')">
<?php else: ?>
  <section class="innerbanner-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/assets/images/banner-image.jpg')">
<?php endif; ?>
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="zoom-in">
				<?php if ( have_rows( 'left_side' ) ) : ?>
					<div class="description-container">
						<?php while ( have_rows( 'left_side' ) ) : the_row(); ?>
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

<section class="contactcontent-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( have_rows( 'section_left_side' ) ) : ?>
					<?php while ( have_rows( 'section_left_side' ) ) : the_row(); ?>
						<div class="map-contrainer">
							<?php $address_no1 = get_sub_field( 'address_no1' ); ?>
							<?php if ( $address_no1 ) { ?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $address_no1['lat']; ?>" data-lng="<?php echo $address_no1['lng']; ?>"></div>
								</div>
							<?php } ?>
						</div>
						<div class="map-contrainer">
							<?php $address_no2 = get_sub_field( 'address_no2' ); ?>
							<?php if ( $address_no2 ) { ?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $address_no2['lat']; ?>" data-lng="<?php echo $address_no2['lng']; ?>"></div>
								</div>
							<?php } ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<div class="contactdescription-container">
					<?php if ( have_rows( 'section_right_side' ) ) : ?>
						<?php while ( have_rows( 'section_right_side' ) ) : the_row(); ?>
              <?php if ( get_sub_field( 'phone_number' ) ): ?>
                <div class="icon-content">
  								<div class="icon">
  									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-01.png" width="26" alt="Phone Number">
  								</div>
  								<div class="content">
  									<a href="tel:<?php the_sub_field( 'phone_number' ); ?>"><?php the_sub_field( 'phone_number' ); ?></a>
  								</div>
  							</div>
              <?php endif; ?>
              <?php if ( get_sub_field( 'email' ) ): ?>
                <div class="icon-content">
  								<div class="icon">
  									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-01.png" width="26" alt="Mail">
  								</div>
  								<div class="content">
  									<a href="mailto:<?php the_sub_field( 'email' ); ?>"><?php the_sub_field( 'email' ); ?></a>
  								</div>
  							</div>
              <?php endif; ?>
              <?php if ( get_sub_field( 'address_no1' ) ): ?>
                <div class="icon-content">
  								<div class="icon">
  									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-01.png" width="40" alt="Location">
  								</div>
  								<div class="content">
  									<p><?php the_sub_field( 'address_no1' ); ?></p>
  								</div>
  							</div>
              <?php endif; ?>
    					<?php if( get_sub_field( 'address_no2' ) ): ?>
    							<div class="icon-content">
    								<div class="icon">
    									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-01.png" width="40" alt="Location">
    								</div>
    								<div class="content">
    									<p><?php the_sub_field( 'address_no2' ); ?></p>
    								</div>
    							</div>
    					<?php endif; ?>
              <?php if ( get_sub_field( 'support_hours' ) ): ?>
                <div class="support-content">
  								<?php the_sub_field( 'support_hours' ); ?>
  							</div>
              <?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
