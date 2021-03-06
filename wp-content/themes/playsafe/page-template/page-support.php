<?php
/**
 * Template Name: Support Page Template
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
			<div class="banner-svg-mobile">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="-541 291.7 196.5 218.3" style="enable-background:new -541 291.7 196.5 218.3;" xml:space="preserve">
          <style type="text/css">
            .yh0{fill:none;}
            .yh1{fill:#FFFFFF;}
          </style>
          <g class="svg-first">
            <g>
              <path class="yh0" d="M-448.6,362.5L-448.6,362.5L-448.6,362.5C-448.5,362.5-448.6,362.5-448.6,362.5z"/>
              <path class="yh0" d="M-506.8,323.9c-3.2-7.6-4.9-15.9-4.9-24.6v63.2h63.1c-13,0-25.2-4-35.3-10.8
                C-493.9,344.9-502,335.2-506.8,323.9z"/>
              <path class="yh0" d="M-469.4,348.8c6.4,2.7,13.5,4.2,20.9,4.2v-53.7h-53.8c0,11.1,3.4,21.4,9.2,30
                C-487.3,337.9-479,344.7-469.4,348.8z"/>
              <path class="yh1" d="M-448.5,353c-7.4,0-14.5-1.5-20.9-4.2c-9.6-4.1-17.9-10.9-23.7-19.5c-5.8-8.6-9.2-18.9-9.2-30h-9.4
                c0,8.7,1.7,17,4.9,24.6c4.8,11.3,12.9,21,22.9,27.8c10.1,6.8,22.3,10.8,35.3,10.8c0,0,0.1,0,0.1,0V353z"/>
            </g>
            <g>
              <path class="yh0" d="M-493.6,318.4c-2.5-5.8-3.9-12.3-3.9-19c0,0,0-0.1,0-0.1h-14.2v63.2h63.2v-14.2c-10.2,0-19.6-3.1-27.4-8.4
                C-483.7,334.6-489.9,327.1-493.6,318.4z"/>
              <path class="yh0" d="M-463.9,335.7c4.7,2,9.8,3.1,15.4,3.1v-39.5H-488c0,8.2,2.5,15.8,6.7,22.1C-477,327.7-471,332.7-463.9,335.7z
                "/>
              <path class="yh1" d="M-463.9,335.7c-7.1-3-13.1-8-17.4-14.3c-4.2-6.3-6.7-13.9-6.7-22.1h-9.5c0,0,0,0.1,0,0.1
                c0,6.7,1.4,13.2,3.9,19c3.7,8.7,9.9,16.2,17.7,21.5c7.8,5.3,17.2,8.4,27.4,8.4v-9.5C-454.1,338.8-459.2,337.7-463.9,335.7z"/>
            </g>
            <g>
              <path class="yh0" d="M-458.4,322.6c3,1.3,6.3,2,9.8,2c0,0,0.1,0,0.1,0v-25.3h-25.3c0,5.2,1.6,10.1,4.3,14.1
                C-466.8,317.5-462.9,320.7-458.4,322.6z"/>
              <path class="yh0" d="M-480.5,312.8c-1.7-4.2-2.7-8.7-2.7-13.5h-28.5v63.2h63.2V334c-7.2,0-13.9-2.2-19.4-5.9
                C-473.4,324.3-477.8,319-480.5,312.8z"/>
              <path class="yh1" d="M-448.6,324.6c-3.5,0-6.8-0.7-9.8-2c-4.5-1.9-8.4-5.1-11.1-9.2c-2.7-4-4.3-8.9-4.3-14.1h-9.4
                c0,4.8,1,9.3,2.7,13.5c2.7,6.2,7.1,11.5,12.6,15.3c5.5,3.7,12.2,5.9,19.4,5.9L-448.6,324.6C-448.5,324.6-448.6,324.6-448.6,324.6z
                "/>
            </g>
            <g>
              <path class="yh0" d="M-467.3,307.2c-1-2.4-1.6-5.1-1.6-7.9h-42.8v63.2h63.2v-42.8c-4.2,0-8.1-1.3-11.4-3.5
                C-463.2,314-465.8,310.9-467.3,307.2z"/>
              <path class="yh0" d="M-452.8,309.4c1.3,0.6,2.8,0.9,4.3,0.9v-11h-11c0,2.3,0.7,4.3,1.9,6.1C-456.5,307.2-454.8,308.6-452.8,309.4z
                "/>
              <path class="yh1" d="M-452.8,309.4c-2-0.8-3.7-2.2-4.8-4c-1.2-1.8-1.9-3.8-1.9-6.1h-9.4c0,2.8,0.6,5.5,1.6,7.9
                c1.5,3.7,4.1,6.8,7.4,9c3.3,2.2,7.2,3.5,11.4,3.5v-9.4C-450,310.3-451.5,310-452.8,309.4z"/>
            </g>
          </g>
          <g class="svg-second">
            <g>
              <path class="yh0" d="M-423.6,338.6c-6.4-2.7-13.4-4.2-20.8-4.2v53.7h53.7c0-11.1-3.4-21.4-9.2-30
                C-405.7,349.5-414,342.7-423.6,338.6z"/>
              <path class="yh0" d="M-444.4,324.9c13,0,25.2,4,35.3,10.8c10.1,6.8,18.1,16.5,22.9,27.8c3.2,7.6,5,15.9,5,24.6v-63.2H-444.4z"/>
              <path class="yh1" d="M-409.1,335.7c-10.1-6.8-22.3-10.8-35.3-10.8v9.5c7.4,0,14.4,1.5,20.8,4.2c9.6,4.1,17.9,10.9,23.7,19.5
                c5.8,8.6,9.2,18.9,9.2,30h9.5c0-8.7-1.8-17-5-24.6C-391,352.2-399,342.5-409.1,335.7z"/>
            </g>
            <g>
              <path class="yh0" d="M-429.1,351.7c-4.8-2-9.8-3.1-15.3-3.1v39.5h39.5c0-8.2-2.5-15.8-6.8-22.1C-416,359.7-422,354.7-429.1,351.7z
                "/>
              <path class="yh0" d="M-444.4,324.9v14.3c10.2,0,19.5,3.1,27.3,8.4c7.8,5.2,14,12.7,17.7,21.5c2.5,5.8,3.9,12.3,3.9,19h14.3v-63.2
                H-444.4z"/>
              <path class="yh1" d="M-417.1,347.6c-7.8-5.3-17.1-8.4-27.3-8.4v9.4c5.5,0,10.5,1.1,15.3,3.1c7.1,3,13.1,8,17.4,14.3
                c4.3,6.3,6.8,13.9,6.8,22.1h9.4c0-6.7-1.4-13.2-3.9-19C-403.1,360.3-409.3,352.8-417.1,347.6z"/>
            </g>
            <g>
              <path class="yh0" d="M-434.6,364.8c-3-1.3-6.3-2-9.8-2v25.3h25.2c0-5.2-1.6-10.1-4.3-14.1C-426.2,369.9-430.1,366.7-434.6,364.8z"
                />
              <path class="yh0" d="M-444.4,324.9v28.6c7.2,0,13.8,2.2,19.3,5.9c5.6,3.7,10,9,12.6,15.3c1.7,4.2,2.7,8.6,2.7,13.4h28.6v-63.2
                H-444.4z"/>
              <path class="yh1" d="M-425.1,359.4c-5.5-3.7-12.1-5.9-19.3-5.9v9.3c3.5,0,6.8,0.7,9.8,2c4.5,1.9,8.4,5.1,11.1,9.2
                c2.7,4,4.3,8.9,4.3,14.1h9.4c0-4.8-1-9.2-2.7-13.4C-415.1,368.4-419.5,363.1-425.1,359.4z"/>
            </g>
            <g>
              <path class="yh0" d="M-440.1,378c-1.3-0.6-2.8-0.9-4.3-0.9v11h11c0-2.3-0.7-4.3-1.9-6.1C-436.4,380.2-438.1,378.8-440.1,378z"/>
              <path class="yh0" d="M-444.4,324.9v42.8c4.2,0,8.1,1.3,11.4,3.5c3.2,2.2,5.8,5.3,7.4,9c1,2.4,1.6,5.1,1.6,7.9h42.8v-63.2H-444.4z"
                />
              <path class="yh1" d="M-433,371.2c-3.3-2.2-7.2-3.5-11.4-3.5v9.4c1.5,0,3,0.3,4.3,0.9c2,0.8,3.7,2.2,4.8,4c1.2,1.8,1.9,3.8,1.9,6.1
                h9.4c0-2.8-0.6-5.5-1.6-7.9C-427.2,376.5-429.8,373.4-433,371.2z"/>
            </g>
          </g>
          <g class="svg-third">
            <g>
              <path class="yh0" d="M-385.4,435.9c8.4,5.7,18.7,9.1,29.6,9.2v-53.8h-53.3c0,7.4,1.5,14.5,4.2,20.9
                C-400.8,421.9-394,430.1-385.4,435.9z"/>
              <path class="yh0" d="M-418.6,391.3L-418.6,391.3C-418.6,391.4-418.6,391.3-418.6,391.3L-418.6,391.3z"/>
              <path class="yh0" d="M-380,449.6c-11.3-4.8-21-12.8-27.8-22.9c-6.8-10.1-10.8-22.2-10.8-35.3v63.1h59.7
                C-366.3,454.1-373.4,452.4-380,449.6z"/>
              <path class="yh1" d="M-380,449.6c6.6,2.8,13.7,4.5,21.1,4.9h3.1v-9.4c-10.9-0.1-21.2-3.5-29.6-9.2c-8.6-5.8-15.4-14-19.5-23.7
                c-2.7-6.4-4.2-13.5-4.2-20.9h-9.5c0,0,0,0.1,0,0.1v0c0,13.1,4,25.2,10.8,35.3C-401,436.8-391.3,444.8-380,449.6z"/>
            </g>
            <g>
              <path class="yh0" d="M-374.4,436.4c-8.8-3.7-16.2-9.9-21.5-17.7c-5.3-7.8-8.4-17.3-8.4-27.4h-14.3v63.2h62.8v-14.2
                C-362.4,440.2-368.6,438.8-374.4,436.4z"/>
              <path class="yh0" d="M-377.5,424.1c6.2,4.2,13.7,6.7,21.7,6.8v-39.6h-39.1c0,5.5,1.1,10.7,3.1,15.4
                C-388.8,413.8-383.8,419.8-377.5,424.1z"/>
              <path class="yh1" d="M-374.4,436.4c5.8,2.4,12,3.8,18.6,3.9v-9.4c-8-0.1-15.5-2.6-21.7-6.8c-6.3-4.3-11.3-10.3-14.3-17.4
                c-2-4.7-3.1-9.9-3.1-15.4h-9.4c0,10.1,3.1,19.6,8.4,27.4C-390.6,426.5-383.2,432.7-374.4,436.4z"/>
            </g>
            <g>
              <path class="yh0" d="M-378.7,401.2c2,4.5,5.2,8.4,9.2,11.1c3.9,2.6,8.6,4.2,13.7,4.3v-25.3h-24.9c0,0,0,0.1,0,0.1
                C-380.7,394.9-380,398.2-378.7,401.2z"/>
              <path class="yh0" d="M-368.8,423.3c-6.3-2.7-11.6-7-15.3-12.6c-3.7-5.5-5.9-12.2-5.9-19.4h-28.6v63.2h62.8V426
                C-360.4,425.9-364.7,425-368.8,423.3z"/>
              <path class="yh1" d="M-368.8,423.3c4.1,1.7,8.4,2.6,13,2.7v-9.4c-5.1-0.1-9.8-1.7-13.7-4.3c-4-2.7-7.2-6.6-9.2-11.1
                c-1.3-3-2-6.3-2-9.8c0,0,0-0.1,0-0.1h-9.3c0,7.2,2.2,13.9,5.9,19.4C-380.4,416.3-375.1,420.6-368.8,423.3z"/>
            </g>
            <g>
              <path class="yh0" d="M-363.3,410.1c-3.7-1.5-6.8-4.1-9-7.4c-2.2-3.2-3.5-7.2-3.5-11.4h-42.8v63.2h62.8v-42.8
                C-358.5,411.6-361,411.1-363.3,410.1z"/>
              <path class="yh0" d="M-361.5,400.4c1.6,1.1,3.6,1.8,5.7,1.9v-11h-10.6c0,1.6,0.3,3,0.9,4.3C-364.7,397.5-363.3,399.2-361.5,400.4z
                "/>
              <path class="yh1" d="M-363.3,410.1c2.3,1,4.8,1.5,7.5,1.6v-9.4c-2.1-0.1-4.1-0.8-5.7-1.9c-1.8-1.2-3.2-2.9-4-4.8
                c-0.6-1.3-0.9-2.7-0.9-4.3h-9.4c0,4.2,1.3,8.2,3.5,11.4C-370.1,406-367,408.6-363.3,410.1z"/>
            </g>
          </g>
          <g class="svg-fourth">
            <g>
              <path class="yh0" d="M-473.1,372.9c7.6-3.3,15.9-5,24.6-5v0h-63.2v63.2c0-13,4-25.2,10.8-35.3
                C-494.1,385.7-484.5,377.7-473.1,372.9z"/>
              <path class="yh0" d="M-498,410.2c-2.7,6.4-4.2,13.5-4.2,20.9h53.7v-53.8c-11.1,0-21.4,3.4-30,9.2
                C-487.1,392.3-493.9,400.6-498,410.2z"/>
              <path class="yh1" d="M-498,410.2c4.1-9.6,10.9-17.9,19.5-23.7c8.6-5.8,18.9-9.2,30-9.2v-9.4c-8.7,0-17,1.7-24.6,5
                c-11.4,4.8-21,12.8-27.8,22.9c-6.8,10.1-10.8,22.3-10.8,35.3h9.5C-502.2,423.7-500.7,416.6-498,410.2z"/>
            </g>
            <g>
              <path class="yh0" d="M-470.7,398.4c-6.3,4.3-11.3,10.3-14.3,17.4c-2,4.8-3.1,9.8-3.1,15.3h39.6v-39.5c0,0-0.1,0-0.1,0
                C-456.8,391.6-464.4,394.1-470.7,398.4z"/>
              <path class="yh0" d="M-467.6,386c5.8-2.5,12.3-3.9,19-3.9c0,0,0.1,0,0.1,0v-14.2h-63.2v63.2h14.2c0-10.2,3.1-19.6,8.4-27.4
                C-483.8,395.9-476.4,389.7-467.6,386z"/>
              <path class="yh1" d="M-485,415.8c3-7.1,8-13.1,14.3-17.4s13.9-6.8,22.1-6.8c0,0,0.1,0,0.1,0v-9.5c0,0-0.1,0-0.1,0
                c-6.7,0-13.2,1.4-19,3.9c-8.8,3.7-16.2,9.9-21.5,17.7c-5.3,7.8-8.4,17.2-8.4,27.4h9.4C-488.1,425.6-487,420.6-485,415.8z"/>
            </g>
            <g>
              <path class="yh0" d="M-471.8,421.2c-1.3,3-2,6.3-2,9.8c0,0,0,0.1,0,0.1h25.3v-25.3c-5.2,0-10.1,1.6-14.1,4.3
                C-466.7,412.8-469.9,416.7-471.8,421.2z"/>
              <path class="yh0" d="M-462,399.1c4.2-1.7,8.7-2.7,13.5-2.7v-28.5h-63.2v63.2h28.5c0-7.2,2.2-13.9,5.9-19.4
                C-473.5,406.2-468.2,401.8-462,399.1z"/>
              <path class="yh1" d="M-473.8,431c0-3.5,0.7-6.8,2-9.8c1.9-4.5,5.1-8.4,9.2-11.1c4-2.7,8.9-4.3,14.1-4.3v-9.4
                c-4.8,0-9.3,1-13.5,2.7c-6.2,2.7-11.5,7.1-15.3,12.6c-3.7,5.5-5.9,12.2-5.9,19.4L-473.8,431C-473.8,431.1-473.8,431-473.8,431z"/>
            </g>
            <g>
              <path class="yh0" d="M-456.4,412.3c2.4-1,5.1-1.6,7.9-1.6v-42.8h-63.2v63.2h42.8c0-4.2,1.3-8.2,3.5-11.4
                C-463.3,416.4-460.1,413.8-456.4,412.3z"/>
              <path class="yh0" d="M-454.7,422c-1.8,1.2-3.2,2.8-4,4.8c-0.6,1.3-0.9,2.8-0.9,4.3h11.1v-11c0,0-0.1,0-0.1,0
                C-450.9,420.1-452.9,420.8-454.7,422z"/>
              <path class="yh1" d="M-458.7,426.8c0.8-2,2.2-3.6,4-4.8s3.8-1.9,6.1-1.9c0,0,0.1,0,0.1,0v-9.4c-2.8,0-5.5,0.6-7.9,1.6
                c-3.7,1.5-6.9,4.1-9,7.4c-2.2,3.2-3.5,7.2-3.5,11.4h9.3C-459.6,429.6-459.3,428.1-458.7,426.8z"/>
            </g>
          </g>
          <g class="svg-fifth">
            <g>
              <path class="yh0" d="M-492,464.4c5.8-8.5,9.2-18.9,9.2-30h-52.1v53.7c6.8-0.2,13.3-1.7,19.2-4.2C-506,479.8-497.8,473-492,464.4z"
                />
              <path class="yh0" d="M-478.3,459c-4.8,11.4-12.8,21-23,27.8c-9.7,6.5-21.2,10.4-33.6,10.8v0h61.6v-63.2
                C-473.3,443.1-475.1,451.4-478.3,459z"/>
              <path class="yh1" d="M-478.3,459c3.2-7.6,5-15.9,5-24.6h-9.5c0,11.1-3.4,21.5-9.2,30c-5.8,8.6-14,15.4-23.7,19.5
                c-5.9,2.5-12.4,3.9-19.2,4.2v9.5c12.4-0.3,23.9-4.3,33.6-10.8C-491.1,480-483.1,470.4-478.3,459z"/>
            </g>
            <g>
              <path class="yh0" d="M-503.9,456.6c4.3-6.3,6.8-13.9,6.8-22.1c0,0,0-0.1,0-0.1h-37.8V474c4.8-0.2,9.4-1.3,13.6-3.1
                C-514.2,467.9-508.2,462.9-503.9,456.6z"/>
              <path class="yh0" d="M-487.6,434.4c0,0,0,0.1,0,0.1c0,6.7-1.4,13.1-3.9,19c-3.7,8.8-9.9,16.2-17.7,21.5c-7.4,5-16.2,8-25.7,8.4
                v14.2h61.6v-63.2H-487.6z"/>
              <path class="yh1" d="M-491.5,453.5c2.5-5.9,3.9-12.3,3.9-19c0,0,0-0.1,0-0.1h-9.5c0,0,0,0.1,0,0.1c0,8.2-2.5,15.8-6.8,22.1
                c-4.3,6.3-10.3,11.3-17.4,14.3c-4.2,1.8-8.8,2.8-13.6,3.1v9.4c9.5-0.3,18.3-3.4,25.7-8.4C-501.4,469.7-495.2,462.3-491.5,453.5z"
                />
            </g>
            <g>
              <path class="yh0" d="M-501.9,434.4c0,4.8-0.9,9.3-2.7,13.5c-2.7,6.3-7.1,11.6-12.6,15.3c-5.1,3.4-11.1,5.5-17.7,5.8v28.6h61.6
                v-63.2H-501.9z"/>
              <path class="yh0" d="M-515.6,448.5c2.7-4,4.3-8.9,4.3-14.1h-23.6v25.2c2.9-0.2,5.7-0.8,8.2-1.9
                C-522.2,455.7-518.3,452.5-515.6,448.5z"/>
              <path class="yh1" d="M-504.6,447.9c1.8-4.2,2.7-8.7,2.7-13.5h-9.4c0,5.2-1.6,10.1-4.3,14.1c-2.7,4-6.6,7.2-11.1,9.2
                c-2.5,1.1-5.3,1.8-8.2,1.9v9.4c6.6-0.3,12.6-2.4,17.7-5.8C-511.7,459.5-507.3,454.2-504.6,447.9z"/>
            </g>
            <g>
              <path class="yh0" d="M-516.1,434.4L-516.1,434.4c0,2.8-0.6,5.5-1.6,7.9c-1.6,3.7-4.1,6.8-7.4,9c-2.9,1.9-6.3,3.1-9.8,3.4v42.9
                h61.6v-63.2H-516.1z"/>
              <path class="yh0" d="M-527.4,440.5c1.2-1.7,1.9-3.8,1.9-6.1h-9.4v10.9c1-0.1,1.9-0.4,2.7-0.8
                C-530.3,443.7-528.6,442.3-527.4,440.5z"/>
              <path class="yh1" d="M-517.7,442.3c1-2.4,1.6-5.1,1.6-7.9v0h-9.4c0,2.3-0.7,4.4-1.9,6.1c-1.2,1.8-2.9,3.2-4.8,4
                c-0.8,0.4-1.7,0.6-2.7,0.8v9.5c3.5-0.3,6.9-1.5,9.8-3.4C-521.8,449.1-519.3,446-517.7,442.3z"/>
            </g>
          </g>
        </svg>
			</div>
			<div class="col-md-6 d-none d-sm-block" data-aos="zoom-in">
				<div class="banner-svg">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="-541 291.7 196.5 218.3" style="enable-background:new -541 291.7 196.5 218.3;" xml:space="preserve">
            <style type="text/css">
              .yh0{fill:none;}
              .yh1{fill:#FFFFFF;}
            </style>
            <g class="svg-first">
              <g>
                <path class="yh0" d="M-448.6,362.5L-448.6,362.5L-448.6,362.5C-448.5,362.5-448.6,362.5-448.6,362.5z"/>
                <path class="yh0" d="M-506.8,323.9c-3.2-7.6-4.9-15.9-4.9-24.6v63.2h63.1c-13,0-25.2-4-35.3-10.8
                  C-493.9,344.9-502,335.2-506.8,323.9z"/>
                <path class="yh0" d="M-469.4,348.8c6.4,2.7,13.5,4.2,20.9,4.2v-53.7h-53.8c0,11.1,3.4,21.4,9.2,30
                  C-487.3,337.9-479,344.7-469.4,348.8z"/>
                <path class="yh1" d="M-448.5,353c-7.4,0-14.5-1.5-20.9-4.2c-9.6-4.1-17.9-10.9-23.7-19.5c-5.8-8.6-9.2-18.9-9.2-30h-9.4
                  c0,8.7,1.7,17,4.9,24.6c4.8,11.3,12.9,21,22.9,27.8c10.1,6.8,22.3,10.8,35.3,10.8c0,0,0.1,0,0.1,0V353z"/>
              </g>
              <g>
                <path class="yh0" d="M-493.6,318.4c-2.5-5.8-3.9-12.3-3.9-19c0,0,0-0.1,0-0.1h-14.2v63.2h63.2v-14.2c-10.2,0-19.6-3.1-27.4-8.4
                  C-483.7,334.6-489.9,327.1-493.6,318.4z"/>
                <path class="yh0" d="M-463.9,335.7c4.7,2,9.8,3.1,15.4,3.1v-39.5H-488c0,8.2,2.5,15.8,6.7,22.1C-477,327.7-471,332.7-463.9,335.7z
                  "/>
                <path class="yh1" d="M-463.9,335.7c-7.1-3-13.1-8-17.4-14.3c-4.2-6.3-6.7-13.9-6.7-22.1h-9.5c0,0,0,0.1,0,0.1
                  c0,6.7,1.4,13.2,3.9,19c3.7,8.7,9.9,16.2,17.7,21.5c7.8,5.3,17.2,8.4,27.4,8.4v-9.5C-454.1,338.8-459.2,337.7-463.9,335.7z"/>
              </g>
              <g>
                <path class="yh0" d="M-458.4,322.6c3,1.3,6.3,2,9.8,2c0,0,0.1,0,0.1,0v-25.3h-25.3c0,5.2,1.6,10.1,4.3,14.1
                  C-466.8,317.5-462.9,320.7-458.4,322.6z"/>
                <path class="yh0" d="M-480.5,312.8c-1.7-4.2-2.7-8.7-2.7-13.5h-28.5v63.2h63.2V334c-7.2,0-13.9-2.2-19.4-5.9
                  C-473.4,324.3-477.8,319-480.5,312.8z"/>
                <path class="yh1" d="M-448.6,324.6c-3.5,0-6.8-0.7-9.8-2c-4.5-1.9-8.4-5.1-11.1-9.2c-2.7-4-4.3-8.9-4.3-14.1h-9.4
                  c0,4.8,1,9.3,2.7,13.5c2.7,6.2,7.1,11.5,12.6,15.3c5.5,3.7,12.2,5.9,19.4,5.9L-448.6,324.6C-448.5,324.6-448.6,324.6-448.6,324.6z
                  "/>
              </g>
              <g>
                <path class="yh0" d="M-467.3,307.2c-1-2.4-1.6-5.1-1.6-7.9h-42.8v63.2h63.2v-42.8c-4.2,0-8.1-1.3-11.4-3.5
                  C-463.2,314-465.8,310.9-467.3,307.2z"/>
                <path class="yh0" d="M-452.8,309.4c1.3,0.6,2.8,0.9,4.3,0.9v-11h-11c0,2.3,0.7,4.3,1.9,6.1C-456.5,307.2-454.8,308.6-452.8,309.4z
                  "/>
                <path class="yh1" d="M-452.8,309.4c-2-0.8-3.7-2.2-4.8-4c-1.2-1.8-1.9-3.8-1.9-6.1h-9.4c0,2.8,0.6,5.5,1.6,7.9
                  c1.5,3.7,4.1,6.8,7.4,9c3.3,2.2,7.2,3.5,11.4,3.5v-9.4C-450,310.3-451.5,310-452.8,309.4z"/>
              </g>
            </g>
            <g class="svg-second">
              <g>
                <path class="yh0" d="M-423.6,338.6c-6.4-2.7-13.4-4.2-20.8-4.2v53.7h53.7c0-11.1-3.4-21.4-9.2-30
                  C-405.7,349.5-414,342.7-423.6,338.6z"/>
                <path class="yh0" d="M-444.4,324.9c13,0,25.2,4,35.3,10.8c10.1,6.8,18.1,16.5,22.9,27.8c3.2,7.6,5,15.9,5,24.6v-63.2H-444.4z"/>
                <path class="yh1" d="M-409.1,335.7c-10.1-6.8-22.3-10.8-35.3-10.8v9.5c7.4,0,14.4,1.5,20.8,4.2c9.6,4.1,17.9,10.9,23.7,19.5
                  c5.8,8.6,9.2,18.9,9.2,30h9.5c0-8.7-1.8-17-5-24.6C-391,352.2-399,342.5-409.1,335.7z"/>
              </g>
              <g>
                <path class="yh0" d="M-429.1,351.7c-4.8-2-9.8-3.1-15.3-3.1v39.5h39.5c0-8.2-2.5-15.8-6.8-22.1C-416,359.7-422,354.7-429.1,351.7z
                  "/>
                <path class="yh0" d="M-444.4,324.9v14.3c10.2,0,19.5,3.1,27.3,8.4c7.8,5.2,14,12.7,17.7,21.5c2.5,5.8,3.9,12.3,3.9,19h14.3v-63.2
                  H-444.4z"/>
                <path class="yh1" d="M-417.1,347.6c-7.8-5.3-17.1-8.4-27.3-8.4v9.4c5.5,0,10.5,1.1,15.3,3.1c7.1,3,13.1,8,17.4,14.3
                  c4.3,6.3,6.8,13.9,6.8,22.1h9.4c0-6.7-1.4-13.2-3.9-19C-403.1,360.3-409.3,352.8-417.1,347.6z"/>
              </g>
              <g>
                <path class="yh0" d="M-434.6,364.8c-3-1.3-6.3-2-9.8-2v25.3h25.2c0-5.2-1.6-10.1-4.3-14.1C-426.2,369.9-430.1,366.7-434.6,364.8z"
                  />
                <path class="yh0" d="M-444.4,324.9v28.6c7.2,0,13.8,2.2,19.3,5.9c5.6,3.7,10,9,12.6,15.3c1.7,4.2,2.7,8.6,2.7,13.4h28.6v-63.2
                  H-444.4z"/>
                <path class="yh1" d="M-425.1,359.4c-5.5-3.7-12.1-5.9-19.3-5.9v9.3c3.5,0,6.8,0.7,9.8,2c4.5,1.9,8.4,5.1,11.1,9.2
                  c2.7,4,4.3,8.9,4.3,14.1h9.4c0-4.8-1-9.2-2.7-13.4C-415.1,368.4-419.5,363.1-425.1,359.4z"/>
              </g>
              <g>
                <path class="yh0" d="M-440.1,378c-1.3-0.6-2.8-0.9-4.3-0.9v11h11c0-2.3-0.7-4.3-1.9-6.1C-436.4,380.2-438.1,378.8-440.1,378z"/>
                <path class="yh0" d="M-444.4,324.9v42.8c4.2,0,8.1,1.3,11.4,3.5c3.2,2.2,5.8,5.3,7.4,9c1,2.4,1.6,5.1,1.6,7.9h42.8v-63.2H-444.4z"
                  />
                <path class="yh1" d="M-433,371.2c-3.3-2.2-7.2-3.5-11.4-3.5v9.4c1.5,0,3,0.3,4.3,0.9c2,0.8,3.7,2.2,4.8,4c1.2,1.8,1.9,3.8,1.9,6.1
                  h9.4c0-2.8-0.6-5.5-1.6-7.9C-427.2,376.5-429.8,373.4-433,371.2z"/>
              </g>
            </g>
            <g class="svg-third">
              <g>
                <path class="yh0" d="M-385.4,435.9c8.4,5.7,18.7,9.1,29.6,9.2v-53.8h-53.3c0,7.4,1.5,14.5,4.2,20.9
                  C-400.8,421.9-394,430.1-385.4,435.9z"/>
                <path class="yh0" d="M-418.6,391.3L-418.6,391.3C-418.6,391.4-418.6,391.3-418.6,391.3L-418.6,391.3z"/>
                <path class="yh0" d="M-380,449.6c-11.3-4.8-21-12.8-27.8-22.9c-6.8-10.1-10.8-22.2-10.8-35.3v63.1h59.7
                  C-366.3,454.1-373.4,452.4-380,449.6z"/>
                <path class="yh1" d="M-380,449.6c6.6,2.8,13.7,4.5,21.1,4.9h3.1v-9.4c-10.9-0.1-21.2-3.5-29.6-9.2c-8.6-5.8-15.4-14-19.5-23.7
                  c-2.7-6.4-4.2-13.5-4.2-20.9h-9.5c0,0,0,0.1,0,0.1v0c0,13.1,4,25.2,10.8,35.3C-401,436.8-391.3,444.8-380,449.6z"/>
              </g>
              <g>
                <path class="yh0" d="M-374.4,436.4c-8.8-3.7-16.2-9.9-21.5-17.7c-5.3-7.8-8.4-17.3-8.4-27.4h-14.3v63.2h62.8v-14.2
                  C-362.4,440.2-368.6,438.8-374.4,436.4z"/>
                <path class="yh0" d="M-377.5,424.1c6.2,4.2,13.7,6.7,21.7,6.8v-39.6h-39.1c0,5.5,1.1,10.7,3.1,15.4
                  C-388.8,413.8-383.8,419.8-377.5,424.1z"/>
                <path class="yh1" d="M-374.4,436.4c5.8,2.4,12,3.8,18.6,3.9v-9.4c-8-0.1-15.5-2.6-21.7-6.8c-6.3-4.3-11.3-10.3-14.3-17.4
                  c-2-4.7-3.1-9.9-3.1-15.4h-9.4c0,10.1,3.1,19.6,8.4,27.4C-390.6,426.5-383.2,432.7-374.4,436.4z"/>
              </g>
              <g>
                <path class="yh0" d="M-378.7,401.2c2,4.5,5.2,8.4,9.2,11.1c3.9,2.6,8.6,4.2,13.7,4.3v-25.3h-24.9c0,0,0,0.1,0,0.1
                  C-380.7,394.9-380,398.2-378.7,401.2z"/>
                <path class="yh0" d="M-368.8,423.3c-6.3-2.7-11.6-7-15.3-12.6c-3.7-5.5-5.9-12.2-5.9-19.4h-28.6v63.2h62.8V426
                  C-360.4,425.9-364.7,425-368.8,423.3z"/>
                <path class="yh1" d="M-368.8,423.3c4.1,1.7,8.4,2.6,13,2.7v-9.4c-5.1-0.1-9.8-1.7-13.7-4.3c-4-2.7-7.2-6.6-9.2-11.1
                  c-1.3-3-2-6.3-2-9.8c0,0,0-0.1,0-0.1h-9.3c0,7.2,2.2,13.9,5.9,19.4C-380.4,416.3-375.1,420.6-368.8,423.3z"/>
              </g>
              <g>
                <path class="yh0" d="M-363.3,410.1c-3.7-1.5-6.8-4.1-9-7.4c-2.2-3.2-3.5-7.2-3.5-11.4h-42.8v63.2h62.8v-42.8
                  C-358.5,411.6-361,411.1-363.3,410.1z"/>
                <path class="yh0" d="M-361.5,400.4c1.6,1.1,3.6,1.8,5.7,1.9v-11h-10.6c0,1.6,0.3,3,0.9,4.3C-364.7,397.5-363.3,399.2-361.5,400.4z
                  "/>
                <path class="yh1" d="M-363.3,410.1c2.3,1,4.8,1.5,7.5,1.6v-9.4c-2.1-0.1-4.1-0.8-5.7-1.9c-1.8-1.2-3.2-2.9-4-4.8
                  c-0.6-1.3-0.9-2.7-0.9-4.3h-9.4c0,4.2,1.3,8.2,3.5,11.4C-370.1,406-367,408.6-363.3,410.1z"/>
              </g>
            </g>
            <g class="svg-fourth">
              <g>
                <path class="yh0" d="M-473.1,372.9c7.6-3.3,15.9-5,24.6-5v0h-63.2v63.2c0-13,4-25.2,10.8-35.3
                  C-494.1,385.7-484.5,377.7-473.1,372.9z"/>
                <path class="yh0" d="M-498,410.2c-2.7,6.4-4.2,13.5-4.2,20.9h53.7v-53.8c-11.1,0-21.4,3.4-30,9.2
                  C-487.1,392.3-493.9,400.6-498,410.2z"/>
                <path class="yh1" d="M-498,410.2c4.1-9.6,10.9-17.9,19.5-23.7c8.6-5.8,18.9-9.2,30-9.2v-9.4c-8.7,0-17,1.7-24.6,5
                  c-11.4,4.8-21,12.8-27.8,22.9c-6.8,10.1-10.8,22.3-10.8,35.3h9.5C-502.2,423.7-500.7,416.6-498,410.2z"/>
              </g>
              <g>
                <path class="yh0" d="M-470.7,398.4c-6.3,4.3-11.3,10.3-14.3,17.4c-2,4.8-3.1,9.8-3.1,15.3h39.6v-39.5c0,0-0.1,0-0.1,0
                  C-456.8,391.6-464.4,394.1-470.7,398.4z"/>
                <path class="yh0" d="M-467.6,386c5.8-2.5,12.3-3.9,19-3.9c0,0,0.1,0,0.1,0v-14.2h-63.2v63.2h14.2c0-10.2,3.1-19.6,8.4-27.4
                  C-483.8,395.9-476.4,389.7-467.6,386z"/>
                <path class="yh1" d="M-485,415.8c3-7.1,8-13.1,14.3-17.4s13.9-6.8,22.1-6.8c0,0,0.1,0,0.1,0v-9.5c0,0-0.1,0-0.1,0
                  c-6.7,0-13.2,1.4-19,3.9c-8.8,3.7-16.2,9.9-21.5,17.7c-5.3,7.8-8.4,17.2-8.4,27.4h9.4C-488.1,425.6-487,420.6-485,415.8z"/>
              </g>
              <g>
                <path class="yh0" d="M-471.8,421.2c-1.3,3-2,6.3-2,9.8c0,0,0,0.1,0,0.1h25.3v-25.3c-5.2,0-10.1,1.6-14.1,4.3
                  C-466.7,412.8-469.9,416.7-471.8,421.2z"/>
                <path class="yh0" d="M-462,399.1c4.2-1.7,8.7-2.7,13.5-2.7v-28.5h-63.2v63.2h28.5c0-7.2,2.2-13.9,5.9-19.4
                  C-473.5,406.2-468.2,401.8-462,399.1z"/>
                <path class="yh1" d="M-473.8,431c0-3.5,0.7-6.8,2-9.8c1.9-4.5,5.1-8.4,9.2-11.1c4-2.7,8.9-4.3,14.1-4.3v-9.4
                  c-4.8,0-9.3,1-13.5,2.7c-6.2,2.7-11.5,7.1-15.3,12.6c-3.7,5.5-5.9,12.2-5.9,19.4L-473.8,431C-473.8,431.1-473.8,431-473.8,431z"/>
              </g>
              <g>
                <path class="yh0" d="M-456.4,412.3c2.4-1,5.1-1.6,7.9-1.6v-42.8h-63.2v63.2h42.8c0-4.2,1.3-8.2,3.5-11.4
                  C-463.3,416.4-460.1,413.8-456.4,412.3z"/>
                <path class="yh0" d="M-454.7,422c-1.8,1.2-3.2,2.8-4,4.8c-0.6,1.3-0.9,2.8-0.9,4.3h11.1v-11c0,0-0.1,0-0.1,0
                  C-450.9,420.1-452.9,420.8-454.7,422z"/>
                <path class="yh1" d="M-458.7,426.8c0.8-2,2.2-3.6,4-4.8s3.8-1.9,6.1-1.9c0,0,0.1,0,0.1,0v-9.4c-2.8,0-5.5,0.6-7.9,1.6
                  c-3.7,1.5-6.9,4.1-9,7.4c-2.2,3.2-3.5,7.2-3.5,11.4h9.3C-459.6,429.6-459.3,428.1-458.7,426.8z"/>
              </g>
            </g>
            <g class="svg-fifth">
              <g>
                <path class="yh0" d="M-492,464.4c5.8-8.5,9.2-18.9,9.2-30h-52.1v53.7c6.8-0.2,13.3-1.7,19.2-4.2C-506,479.8-497.8,473-492,464.4z"
                  />
                <path class="yh0" d="M-478.3,459c-4.8,11.4-12.8,21-23,27.8c-9.7,6.5-21.2,10.4-33.6,10.8v0h61.6v-63.2
                  C-473.3,443.1-475.1,451.4-478.3,459z"/>
                <path class="yh1" d="M-478.3,459c3.2-7.6,5-15.9,5-24.6h-9.5c0,11.1-3.4,21.5-9.2,30c-5.8,8.6-14,15.4-23.7,19.5
                  c-5.9,2.5-12.4,3.9-19.2,4.2v9.5c12.4-0.3,23.9-4.3,33.6-10.8C-491.1,480-483.1,470.4-478.3,459z"/>
              </g>
              <g>
                <path class="yh0" d="M-503.9,456.6c4.3-6.3,6.8-13.9,6.8-22.1c0,0,0-0.1,0-0.1h-37.8V474c4.8-0.2,9.4-1.3,13.6-3.1
                  C-514.2,467.9-508.2,462.9-503.9,456.6z"/>
                <path class="yh0" d="M-487.6,434.4c0,0,0,0.1,0,0.1c0,6.7-1.4,13.1-3.9,19c-3.7,8.8-9.9,16.2-17.7,21.5c-7.4,5-16.2,8-25.7,8.4
                  v14.2h61.6v-63.2H-487.6z"/>
                <path class="yh1" d="M-491.5,453.5c2.5-5.9,3.9-12.3,3.9-19c0,0,0-0.1,0-0.1h-9.5c0,0,0,0.1,0,0.1c0,8.2-2.5,15.8-6.8,22.1
                  c-4.3,6.3-10.3,11.3-17.4,14.3c-4.2,1.8-8.8,2.8-13.6,3.1v9.4c9.5-0.3,18.3-3.4,25.7-8.4C-501.4,469.7-495.2,462.3-491.5,453.5z"
                  />
              </g>
              <g>
                <path class="yh0" d="M-501.9,434.4c0,4.8-0.9,9.3-2.7,13.5c-2.7,6.3-7.1,11.6-12.6,15.3c-5.1,3.4-11.1,5.5-17.7,5.8v28.6h61.6
                  v-63.2H-501.9z"/>
                <path class="yh0" d="M-515.6,448.5c2.7-4,4.3-8.9,4.3-14.1h-23.6v25.2c2.9-0.2,5.7-0.8,8.2-1.9
                  C-522.2,455.7-518.3,452.5-515.6,448.5z"/>
                <path class="yh1" d="M-504.6,447.9c1.8-4.2,2.7-8.7,2.7-13.5h-9.4c0,5.2-1.6,10.1-4.3,14.1c-2.7,4-6.6,7.2-11.1,9.2
                  c-2.5,1.1-5.3,1.8-8.2,1.9v9.4c6.6-0.3,12.6-2.4,17.7-5.8C-511.7,459.5-507.3,454.2-504.6,447.9z"/>
              </g>
              <g>
                <path class="yh0" d="M-516.1,434.4L-516.1,434.4c0,2.8-0.6,5.5-1.6,7.9c-1.6,3.7-4.1,6.8-7.4,9c-2.9,1.9-6.3,3.1-9.8,3.4v42.9
                  h61.6v-63.2H-516.1z"/>
                <path class="yh0" d="M-527.4,440.5c1.2-1.7,1.9-3.8,1.9-6.1h-9.4v10.9c1-0.1,1.9-0.4,2.7-0.8
                  C-530.3,443.7-528.6,442.3-527.4,440.5z"/>
                <path class="yh1" d="M-517.7,442.3c1-2.4,1.6-5.1,1.6-7.9v0h-9.4c0,2.3-0.7,4.4-1.9,6.1c-1.2,1.8-2.9,3.2-4.8,4
                  c-0.8,0.4-1.7,0.6-2.7,0.8v9.5c3.5-0.3,6.9-1.5,9.8-3.4C-521.8,449.1-519.3,446-517.7,442.3z"/>
              </g>
            </g>
          </svg>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="support-first-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( have_rows( 'section_left_side' ) ) : ?>
					<?php while ( have_rows( 'section_left_side' ) ) : the_row(); ?>
						<div class="first-container">
							<?php if ( get_sub_field( 'title' ) ): ?>
								<h2><?php the_sub_field( 'title' ); ?></h2>
							<?php endif; ?>

							<?php if ( get_sub_field( 'subtitle' ) ): ?>
								<h5><?php the_sub_field( 'subtitle' ); ?></h5>
							<?php endif; ?>

							<?php if ( get_sub_field( 'description' ) ): ?>
								<p><?php the_sub_field( 'description' ); ?></p>
							<?php endif; ?>

              <?php if ( get_sub_field( 'button_url' ) ): ?>
                <a href="<?php the_sub_field( 'button_url' ); ?>" class="box-link">CONTACT SUPPORT</a>
              <?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="support-vertical-bar"></div>
			<div class="col-md-5 offset-md-1">
				<?php if ( have_rows( 'section_right_side' ) ) : ?>
					<?php while ( have_rows( 'section_right_side' ) ) : the_row(); ?>
						<div class="second-container">

							<?php if ( get_sub_field( 'title' ) ): ?>
								<h5><?php the_sub_field( 'title' ); ?></h5>
							<?php endif; ?>

							<?php if ( get_sub_field( 'description' ) ): ?>
								<?php the_sub_field( 'description' ); ?>
							<?php endif; ?>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="support-second-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<?php if ( have_rows( 'top_side' ) ) : ?>
					<?php while ( have_rows( 'top_side' ) ) : the_row(); ?>
						<div class="support-team-content">

							<?php if ( get_sub_field( 'title' ) ): ?>
								<h2><?php the_sub_field( 'title' ); ?></h2>
							<?php endif; ?>

							<?php if ( get_sub_field( 'description' ) ): ?>
								<?php the_sub_field( 'description' ); ?>
							<?php endif; ?>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="row team-row">
			<?php  if ( have_rows( 'team_members' ) ) : ?>
				<?php while ( have_rows( 'team_members' ) ) : the_row(); ?>

						<div class="col-md-4 five-col">
							<div class="team-container">
								<div class="team-image">
									<?php $member_photo = get_sub_field( 'member_photo' ); ?>
									<?php if ( $member_photo ) { ?>
										<img src="<?php echo $member_photo['url']; ?>" alt="<?php echo $member_photo['alt']; ?>" />
									<?php } ?>
								</div>
								<div class="team-name">
									<?php if ( get_sub_field( 'member_name' ) ): ?>
										<h6><?php the_sub_field( 'member_name' ); ?></h6>
									<?php endif; ?>
									<?php if ( get_sub_field( 'member_role' ) ): ?>
										<span class='memberRole'><?php the_sub_field( 'member_role' ); ?></span>
									<?php endif; ?>
								</div>
								<div class="team-description">
									<?php if ( get_sub_field( 'member_bio' ) ): ?>
										<p><?php the_sub_field( 'member_bio' ); ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>

				<?php  endwhile; ?>
			<?php else : ?>
				<h3>Add new team members</h3>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="submenu-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'support',
              'menu_class'      => 'submenu-nav',
            )
          );
        ?>
				<!-- <ul class="submenu-nav">
					<li> <a href="#" class="nav-link active">FAQ's</a> </li>
					<li> <a href="#" class="nav-link">Knowledge base</a> </li>
					<li> <a href="#" class="nav-link">Downloads</a> </li>
				</ul> -->
			</div>
		</div>
	</div>
</section>

<section class="support-third-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>FREQUENTLY ASKED QUESTIONS</h2>
			</div>
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">

					<?php $count = 0; if ( have_rows( 'questions' ) ) : ?>
						<?php while ( have_rows( 'questions' ) ) : the_row(); ?>
							<div class="card">
						    <div class="card-header" id="heading<?php echo $count; ?>">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">

											<?php if ( get_sub_field( 'question' ) ): ?>
												<?php the_sub_field( 'question' ); ?>
											<?php endif; ?>

						        </button>
						      </h5>
						    </div>
								<?php if($count == 0): ?>
									<div id="collapse<?php echo $count; ?>" class="collapse show" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
								<?php else: ?>
									<div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
								<?php endif; ?>

						      <div class="card-body">

										<?php if ( get_sub_field( 'question_response' ) ): ?>
											<?php the_sub_field( 'question_response' ); ?>
										<?php endif; ?>

						      </div>
						    </div>
						  </div>
						<?php $count++; endwhile; ?>
					<?php else : ?>
						<h3>Add questions</h3>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
