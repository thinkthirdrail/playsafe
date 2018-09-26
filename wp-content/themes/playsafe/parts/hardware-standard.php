 <?php $select_category_ids = get_sub_field( 'select_category' ); ?>
 
 <section class="hardware-products">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-container">
                    <h1><?php the_sub_field( 'section_title' ); ?></h1>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="product-slider product-slider-<?php echo $countslider; ?>">
                    <?php
                      $args = array(
                        'post_type' => 'hardware',
                        'tax_query' => array(
                          array(
                              'taxonomy' => 'hardware_category',
                              'field' => 'ID', //can be set to ID
                              'terms' => $select_category_ids //if field is ID you can reference by cat/term number
                          )
                        )
                      );
                      $query= null;
                      $query = new WP_Query($args);
                    ?>
                    <?php $slidecount = 0; if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="product-slide">
                      <div class="slide-image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                      </div>
                      <div class="slide-description">
                        <div class="product-title">
                          <h5><?php the_title(); ?></h5>
                        </div>
                        <div class="products-description">
                          <?php echo get_field( 'product_description' ); ?>
                        </div>
                        <div class="product-links">
                          <a href="#" data-toggle="modal" data-target="#enquire<?php echo $slidecount; ?>Modal<?php echo $countslider; ?>" class="enquire">Enquire</a>
                          <?php $spech_sheet = get_field( 'spech_sheet' ); ?>
                          <?php if ( $spech_sheet ) { ?>
                          	<a href="<?php echo $spech_sheet['url']; ?>" target="_blank" class="specsheet">Spec Sheet</a>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="slide-features">
                        <div class="product-features">
                          <?php the_field( 'product_features' ); ?>
                        </div>
                      </div>
                    </div>
                  <?php $slidecount++; endwhile; endif; wp_reset_query();?>
                  </div>
                  <?php
                    $args = array(
                      'post_type' => 'hardware',
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'hardware_category',
                            'field' => 'ID', //can be set to ID
                            'terms' => $select_category_ids //if field is ID you can reference by cat/term number
                        )
                      )
                    );
                    $query= null;
                    $query = new WP_Query($args);
                  ?>
                  <?php $slidecount = 0; if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="modal fade modal-enquire" id="enquire<?php echo $slidecount; ?>Modal<?php echo $countslider; ?>" tabindex="-1" role="dialog" aria-labelledby="enquire<?php echo $slidecount; ?>ModalLabel<?php echo $countslider; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="enquire<?php echo $slidecount; ?>ModalLabel<?php echo $countslider; ?>">Enquire - <?php the_title(); ?></h5>
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
                  <?php $slidecount++; endwhile; endif; wp_reset_query();?>
                </div>
              </div>
              <div class="row">
                <div class="tumbnail-container">
                  <?php
                    $args = array(
                      'post_type' => 'hardware',
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'hardware_category',
                            'field' => 'ID', //can be set to ID
                            'terms' => $select_category_ids //if field is ID you can reference by cat/term number
                        )
                      )
                    );
                    $query= null;
                    $query = new WP_Query($args);
                  ?>
                  <?php $slidecount = 0; if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-4 col-sm-3">
                      <div class="thumbnail-content thumbnail-content-<?php echo $countslider; ?>" data-class="product-slider-<?php echo $countslider; ?>" data-slide="<?php echo $slidecount; ?>">
                        <div class="thumbnail-image">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="thumbnail-title">
                          <h6><?php the_title(); ?>  <?php echo $select_category_ids ?></h6>
                        </div>
                        <div class="thumbnail-desc">
                          <?php echo wp_trim_words(get_field( 'products_short_description' )); ?>
                        </div>
                      </div>
                    </div>
                  <?php $slidecount++; endwhile; endif; wp_reset_query();?>
                </div>
              </div>
            </div>
          </section>

          <script>
            /* Hardware Featurd Slider */
            $('.product-slider-<?php echo $countslider; ?>').slick({
              nextArrow: '',
              prevArrow: '',
              dots: true
            });

            $('.thumbnail-content-<?php echo $countslider; ?>[data-slide]').click(function(e) {
              e.preventDefault();
              var slideno = $(this).data('slide');
              $('.product-slider-<?php echo $countslider; ?>').slick('slickGoTo', slideno);
              //$('.thumbnail-content').removeClass('active');
              //$(this).addClass('active');
              $('html, body').animate({
                   scrollTop: $('.product-slider-<?php echo $countslider; ?>').offset().top - 200
               }, 1000);
            });
          </script>