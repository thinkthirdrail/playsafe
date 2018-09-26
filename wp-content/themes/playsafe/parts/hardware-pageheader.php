 <section class="hardware-first-section">
      	<div class="container">
      		<div class="row align-items-center">
            <?php if ( have_rows( 'left_side' ) ) : ?>
              <div class="col-md-6">
      				<?php while ( have_rows( 'left_side' ) ) : the_row(); ?>
                <div class="section-image">
        					<?php $image = get_sub_field( 'image' ); ?>
        					<?php if ( $image ) { ?>
        						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        					<?php } ?>
                </div>
      				<?php endwhile; ?>
              </div>
      			<?php endif; ?>


      			<div class="col-md-6">
              <?php if ( have_rows( 'right_side' ) ) : ?>
              	<div class="section-content">
          				<?php while ( have_rows( 'right_side' ) ) : the_row(); ?>

                    <?php if ( get_sub_field( 'description_title' ) ): ?>
                			<h2><?php the_sub_field( 'description_title' ); ?></h2>
                    <?php endif; ?>

                    <?php if ( get_sub_field( 'description_content' ) ): ?>
                			<?php the_sub_field( 'description_content' ); ?>
                    <?php endif; ?>

          				<?php endwhile; ?>
                </div>
        			<?php endif; ?>
      			</div>
      		</div>
      	</div>
      	<div class="vertical-bar"></div>
      </section>