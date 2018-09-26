<?php
/**
 * Template Name: Software Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playsafe
 */

get_header();

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => 111,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

$currentpage = $post->ID;

?>

<?php if ( playsafe_featured_image() ): ?>
  <section class="innerbanner-section" style="background-image: url('<?php echo playsafe_featured_image(); ?>')">
<?php else: ?>
  <section class="innerbanner-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/assets/images/banner-image.jpg')">
<?php endif; ?>
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
              <div class="software-image">
                <img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['filename']; ?>">
              </div>
            <?php endif; ?>

            <?php if ( get_sub_field( 'section_video' ) ): ?>
              <?php the_sub_field( 'section_video' ); ?>
            <?php endif; ?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php if ( $parent->have_posts() ) : ?>

<section class="submenu-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'software',
              'menu_class'      => 'submenu-nav',
            )
          );
        ?>
			</div>
		</div>
	</div>
</section>

<?php endif; wp_reset_postdata(); ?>

<section class="first-section">
	<div class="container">
		<div class="row align-items-center">
      <?php if ( have_rows( 'left_side_first' ) ) : ?>
  			<div class="col-md-3">
          <?php while ( have_rows( 'left_side_first' ) ) : the_row(); $background_image_1 = get_sub_field( 'background_image' ); $software_icon = get_sub_field( 'software_icon' ); ?>
    				<div class="section-image">
              <?php if ( is_page('113') ): ?>
                <?php if ( $background_image_1 ): ?>
                  <?php echo file_get_contents( get_template_directory_uri() . '/assets/images/CashDesk-icon-01.svg' ); ?>
                  <div class="icon-svg">
                    <img src="<?php echo $software_icon['url']; ?>" alt="<?php echo $software_icon['alt']; ?>" />
                  </div>
                <?php endif; ?>
              <?php elseif( is_page('119') ): ?>
                <?php if ( $background_image_1 ): ?>
                  <div class="loyalty-svg">
                    <?php echo file_get_contents( $background_image_1['url'] ); ?>
                  </div>
                  <div class="icon-svg">
                    <img src="<?php echo $software_icon['url']; ?>" alt="<?php echo $software_icon['alt']; ?>" />
                  </div>
                <?php endif; ?>
              <?php else: ?>
                <?php if ( $background_image_1 ): ?>
                  <?php echo file_get_contents( $background_image_1['url'] ); ?>
                  <div class="icon-svg">
        						<img src="<?php echo $software_icon['url']; ?>" alt="<?php echo $software_icon['alt']; ?>" />
        					</div>
                <?php endif; ?>
              <?php endif; ?>
    				</div>
          <?php endwhile; ?>
  			</div>
      <?php endif; ?>
			<div class="col-md-7 offset-md-1">
        <?php if ( have_rows( 'right_side_first' ) ) : ?>
  				<div class="section-content">
            <?php while ( have_rows( 'right_side_first' ) ) : the_row(); ?>

              <?php if ( get_sub_field( 'section_title' ) ): ?>
                <h2><?php the_sub_field( 'section_title' ); ?></h2>
              <?php endif; ?>

              <?php if ( get_sub_field( 'section_description' ) ): ?>
                <?php the_sub_field( 'section_description' ); ?>
              <?php endif; ?>

            <?php endwhile; ?>
  				</div>
        <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="vertical-bar"></div>
</section>

<section class="second-section">
	<div class="container">
		<div class="row">
      <?php if ( get_field( 'both_sides_text_second' ) == 1 ): ?>

        <?php if ( have_rows( 'both_sides_second' ) ) : ?>
        	<?php while ( have_rows( 'both_sides_second' ) ) : the_row(); ?>

            <?php if ( is_page(119) ): ?>

              <div class="col-md-5" data-aos="zoom-in-left">
                <div class="section-content">

                  <?php if ( get_sub_field( 'section_title' ) ): ?>
                    <h4><?php the_sub_field( 'section_title' ); ?></h4>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'section_description_left' ) ): ?>
                    <?php the_sub_field( 'section_description_left' ); ?>
                  <?php endif; ?>

                </div>
              </div>
              <div class="col-md-5 offset-md-2" data-aos="zoom-in-right">
                <div class="section-content">

                  <?php if ( get_sub_field( 'section_title' ) ): ?>
                    <h4 class="d-none d-sm-block"><?php the_sub_field( 'section_title' ); ?></h4>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'section_description_right' ) ): ?>
                    <?php the_sub_field( 'section_description_right' ); ?>
                  <?php endif; ?>

                </div>
              </div>

            <?php else: ?>

              <div class="col-md-5" data-aos="zoom-in-left">
                <div class="section-content">

                  <?php if ( get_sub_field( 'section_title' ) ): ?>
                    <h2><?php the_sub_field( 'section_title' ); ?></h2>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'section_description_left' ) ): ?>
                    <?php the_sub_field( 'section_description_left' ); ?>
                  <?php endif; ?>

                </div>
              </div>
              <div class="col-md-5 offset-md-2" data-aos="zoom-in-right">
                <div class="section-content">

                  <?php if ( get_sub_field( 'section_description_right' ) ): ?>
                    <?php the_sub_field( 'section_description_right' ); ?>
                  <?php endif; ?>

                </div>
              </div>

            <?php endif; ?>
        	<?php endwhile; ?>
        <?php endif; ?>

      <?php elseif( get_field( 'flip_sides_second' ) == 1 ): ?>

        <div class="col-md-6" data-aos="zoom-in-left">
          <?php if ( have_rows( 'right_side_second' ) ) : ?>
    				<div class="section-content">
              <?php while ( have_rows( 'right_side_second' ) ) : the_row(); ?>

                <?php if ( get_sub_field( 'section_title' ) ): ?>
                  <h2><?php the_sub_field( 'section_title' ); ?></h2>
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ): ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>

              <?php endwhile; ?>
    				</div>
          <?php endif; ?>
  			</div>
        <div class="col-md-6" data-aos="zoom-in-right">
          <?php if ( have_rows( 'left_side_second' ) ) : ?>
    				<div class="section-image">
              <?php while ( have_rows( 'left_side_second' ) ) : the_row(); $background_image = get_sub_field( 'background_image' ); ?>

                <?php if ( $background_image ): ?>
                  <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['filename'] ?>">
                <?php endif; ?>

              <?php endwhile; ?>
    				</div>
          <?php endif; ?>
  			</div>

      <?php else: ?>

        <div class="col-md-5" data-aos="zoom-in-left">
          <?php if ( have_rows( 'left_side_second' ) ) : ?>
    				<div class="section-image">
              <?php while ( have_rows( 'left_side_second' ) ) : the_row(); $background_image = get_sub_field( 'background_image' ); ?>

                <?php if ( is_page(113) ): ?>
                  <?php if ( $background_image ): ?>
                    <?php echo file_get_contents( $background_image['url'] ); ?>
                  <?php endif; ?>
                <?php else: ?>
                  <?php if ( $background_image ): ?>
                    <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['filename'] ?>">
                  <?php endif; ?>
                <?php endif; ?>

              <?php endwhile; ?>
    				</div>
          <?php endif; ?>
  			</div>
  			<div class="col-md-5 offset-md-2" data-aos="zoom-in-right">
          <?php if ( have_rows( 'right_side_second' ) ) : ?>
    				<div class="section-content">
              <?php while ( have_rows( 'right_side_second' ) ) : the_row(); ?>

                <?php if ( get_sub_field( 'section_title' ) ): ?>
                  <h2><?php the_sub_field( 'section_title' ); ?></h2>
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ): ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>

              <?php endwhile; ?>
    				</div>
          <?php endif; ?>
  			</div>

      <?php endif; ?>
		</div>
	</div>
</section>

<?php if ( get_field( 'enable_section_third' ) == 1 ): ?>
  <section class="third-section">
    <div class="container">
      <div class="row align-items-center">

        <?php if ( get_field( 'flip_sides_third' ) == 1 ): ?>

          <div class="col-md-5">
            <?php if ( have_rows( 'right_side_third' ) ) : ?>
            	<?php while ( have_rows( 'right_side_third' ) ) : the_row(); ?>
            		<?php $section_image = get_sub_field( 'section_image' ); ?>
            		<?php if ( $section_image ): ?>
            			<img src="<?php echo $section_image['url']; ?>" style="transform: scale(1.1);" alt="<?php echo $section_image['alt']; ?>" />
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ): ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>
            	<?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="col-md-6 offset-md-1">
            <?php if ( have_rows( 'left_side_third' ) ) : ?>
      				<div class="section-description">
                <?php while ( have_rows( 'left_side_third' ) ) : the_row(); $sectiontitle = get_sub_field( 'section_title' ); ?>
                  <?php if ( $sectiontitle ) : ?>
        					  <h4><?php echo $sectiontitle; ?></h4>
                  <?php endif; ?>
                  <?php if ( get_sub_field( 'section_description' ) ) : ?>
        					  <?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>
                  <?php if ( get_sub_field( 'download_url' ) ): ?>
              			<a class="box-link" href="<?php the_sub_field( 'download_url' ); ?>">Download PDF</a>
                  <?php endif; ?>
                <?php endwhile; ?>
      				</div>
            <?php endif; ?>
          </div>

        <?php else: ?>

          <div class="col-md-5">
            <?php if ( have_rows( 'left_side_third' ) ) : ?>
      				<div class="section-description">
                <?php while ( have_rows( 'left_side_third' ) ) : the_row(); $sectiontitle = get_sub_field( 'section_title' ); ?>
                  <?php if ( $sectiontitle ) : ?>
        					  <h4><?php echo $sectiontitle; ?></h4>
                  <?php endif; ?>
                  <?php if ( get_sub_field( 'section_description' ) ) : ?>
        					  <?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>
                  <?php if ( get_sub_field( 'download_url' ) ): ?>
              			<a class="box-link" href="<?php the_sub_field( 'download_url' ); ?>">Download PDF</a>
                  <?php endif; ?>
                <?php endwhile; ?>
      				</div>
            <?php endif; ?>
          </div>

          <div class="col-md-6 offset-md-1">
            <?php if ( have_rows( 'right_side_third' ) ) : ?>
            	<?php while ( have_rows( 'right_side_third' ) ) : the_row(); ?>
            		<?php $section_image = get_sub_field( 'section_image' ); ?>
            		<?php if ( $section_image ): ?>
            			<img src="<?php echo $section_image['url']; ?>" style="transform: scale(1.1);" alt="<?php echo $section_image['alt']; ?>" />
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ): ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>
            	<?php endwhile; ?>
            <?php endif; ?>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ( get_field( 'enable_section_third' ) == 1 ): ?>
  <section class="fourth-section fourth-section-plus">
<?php else: ?>
  <section class="fourth-section">
<?php endif; ?>
	<div class="container">
		<div class="row align-items-center">
      <?php if ( get_field( 'flip_sides_fourth' ) == 1 ): ?>

        <?php if ( get_field( 'quote_fourth' ) == 1 ): ?>

          <div class="col-md-5" data-aos="zoom-in-left">
            <div class="quote-content" >
              <?php if ( have_rows( 'right_side_fourth' ) ) : ?>
              	<?php while ( have_rows( 'right_side_fourth' ) ) : the_row(); ?>
                  <div class="quote-container">
                    <div class="quotes-left"></div>

                      <?php if ( get_sub_field( 'quote_text' ) ) : ?>
            					  <h2><?php the_sub_field( 'quote_text' ); ?></h2>
                      <?php endif; ?>

                    <div class="quotes-right"></div>
                  </div>
                  <div class="quotecredits-container">

                    <?php if ( get_sub_field( 'quote_autor' ) ) : ?>
                      <h6><?php the_sub_field( 'quote_autor' ); ?></h6>
                    <?php endif; ?>

                  </div>
              	<?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-md-5 offset-md-1" data-aos="zoom-in-right">
            <?php if ( have_rows( 'left_side_fourth' ) ) : ?>
            	<?php while ( have_rows( 'left_side_fourth' ) ) : the_row(); ?>



                <?php if ( get_sub_field( 'section_title' ) ) : ?>
                  <h4><?php the_sub_field( 'section_title' ); ?></h4>
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ) : ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>

            	<?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php else: ?>

          <div class="col-md-5" data-aos="zoom-in-left">
            <?php if ( have_rows( 'right_side_fourth' ) ) : ?>
            	<?php while ( have_rows( 'right_side_fourth' ) ) : the_row(); ?>

            		<?php $section_image = get_sub_field( 'section_image' ); ?>
                <?php if ( $section_image ): ?>
                  <img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>" />
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ): ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>

            	<?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="col-md-6 offset-md-1" data-aos="zoom-in-right">
            <?php if ( have_rows( 'left_side_fourth' ) ) : ?>
      				<div class="section-description">
                <?php while ( have_rows( 'left_side_fourth' ) ) : the_row(); $sectiontitle = get_sub_field( 'section_title' ); ?>

                  <?php if ( $sectiontitle ) : ?>
        					  <h4><?php echo $sectiontitle; ?></h4>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'section_description' ) ) : ?>
        					  <?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'download_url' ) ) : ?>
        					  <a class="box-link" href="<?php the_sub_field( 'download_url' ); ?>">Download PDF</a>
                  <?php endif; ?>

                <?php endwhile; ?>
      				</div>
            <?php endif; ?>
          </div>

        <?php endif; ?>

      <?php else: ?>

        <?php if ( get_field( 'quote_fourth' ) == 1 ): ?>

          <div class="col-md-5" data-aos="zoom-in-right">
            <?php if ( have_rows( 'left_side_fourth' ) ) : ?>
            	<?php while ( have_rows( 'left_side_fourth' ) ) : the_row(); ?>



                <?php if ( get_sub_field( 'section_title' ) ) : ?>
                  <h4><?php the_sub_field( 'section_title' ); ?></h4>
                <?php endif; ?>

                <?php if ( get_sub_field( 'section_description' ) ) : ?>
                  <?php the_sub_field( 'section_description' ); ?>
                <?php endif; ?>

            	<?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="col-md-5 offset-md-1" data-aos="zoom-in-left">
            <div class="quote-content" >
              <?php if ( have_rows( 'right_side_fourth' ) ) : ?>
              	<?php while ( have_rows( 'right_side_fourth' ) ) : the_row(); ?>
                  <div class="quote-container">
                    <div class="quotes-left"></div>

                      <?php if ( get_sub_field( 'quote_text' ) ) : ?>
            					  <h2><?php the_sub_field( 'quote_text' ); ?></h2>
                      <?php endif; ?>

                    <div class="quotes-right"></div>
                  </div>
                  <div class="quotecredits-container">

                    <?php if ( get_sub_field( 'quote_autor' ) ) : ?>
                      <h6><?php the_sub_field( 'quote_autor' ); ?></h6>
                    <?php endif; ?>

                  </div>
              	<?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>

        <?php else: ?>

          <?php if ( is_page('113') ): ?>
            <div class="col-md-6" data-aos="zoom-in-left">
          <?php else: ?>
            <div class="col-md-5" data-aos="zoom-in-left">
          <?php endif; ?>
            <?php if ( have_rows( 'left_side_fourth' ) ) : ?>
      				<div class="section-description">
                <?php while ( have_rows( 'left_side_fourth' ) ) : the_row(); $sectiontitle = get_sub_field( 'section_title' ); ?>
                  <?php if ( $sectiontitle ) : ?>
        					  <h4><?php echo $sectiontitle; ?></h4>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'section_description' ) ) : ?>
        					  <?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>

                  <?php if ( get_sub_field( 'download_url' ) ): ?>
              			<a class="box-link" href="<?php the_sub_field( 'download_url' ); ?>">Download PDF</a>
                  <?php endif; ?>

                <?php endwhile; ?>
      				</div>
            <?php endif; ?>
    			</div>
    			<?php if ( is_page('113') ): ?>
            <div class="col-md-5 offset-md-1" data-aos="zoom-in-right">
      				<div class="circle-background">
      					<img class="cash-svg" src="<?php echo get_template_directory_uri() . '/assets/images/cash-01.svg' ?>" alt="">
      					<img class="wallet-svg" src="<?php echo get_template_directory_uri() . '/assets/images/wallet-01.svg' ?>" alt="">
      				</div>
            </div>
          <?php elseif ( is_page('117') ): ?>
            <div class="col-md-6 offset-md-1" data-aos="zoom-in-right">
              <?php if ( have_rows( 'right_side_fourth' ) ) : ?>
              	<?php while ( have_rows( 'right_side_fourth' ) ) : the_row(); $section_image = get_sub_field( 'section_image' ); ?>
              		<?php if ( $section_image ): ?>
              			<img src="<?php echo $section_image['url']; ?>" style="margin-bottom: 50px; width: 80%;" alt="<?php echo $section_image['alt']; ?>" />
              		<?php endif; ?>

                  <?php if ( get_sub_field( 'section_description' ) ): ?>
              			<?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>

              	<?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php else: ?>
            <div class="col-md-6 offset-md-1" data-aos="zoom-in-right">
              <?php if ( have_rows( 'right_side_fourth' ) ) : ?>
              	<?php while ( have_rows( 'right_side_fourth' ) ) : the_row(); $section_image = get_sub_field( 'section_image' ); ?>
              		<?php if ( $section_image ): ?>
              			<img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>" />
              		<?php endif; ?>

                  <?php if ( get_sub_field( 'section_description' ) ): ?>
              			<?php the_sub_field( 'section_description' ); ?>
                  <?php endif; ?>

              	<?php endwhile; ?>
              <?php endif; ?>
            </div>
    			<?php endif; ?>

        <?php endif; ?>

      <?php endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
