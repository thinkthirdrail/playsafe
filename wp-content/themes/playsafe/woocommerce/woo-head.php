<?php 
if ( is_product_category() ){
    global $wp_query;

    // get the query object
    $cat = $wp_query->get_queried_object();

    // get the thumbnail id using the queried category term_id
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 

    // get the image URL
    $bnRimage = wp_get_attachment_url( $thumbnail_id ); 

    
}


if( playsafe_featured_image() ):
	$bannerImg = playsafe_featured_image();	
elseif( $bnRimage ):
        $bannerImg = $bnRimage; 
else:
	$bannerImg = get_template_directory_uri() . '/assets/images/banner-image.jpg';
endif;

?>

<section class="innerbanner-section" style="background-image: url('<?php echo $bannerImg ?>')">
  <div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="zoom-in">

					<div class="description-container">
			
							<div class="description-content">
								
		                                                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	
								<h3><?php woocommerce_breadcrumb(); ?></h3>
							</div>
							
					</div>
					<?php do_action( 'woocommerce_archive_description' ); ?>
			</div>
			
				<div class="col-md-6" data-aos="zoom-in">
					
						<?php //do_action( 'woocommerce_archive_description' ); ?>
						
				</div>
		
		</div>
	</div>
</section>