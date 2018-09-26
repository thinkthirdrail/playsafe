<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package playsafe
 */

 $logoid = get_theme_mod( 'custom_logo' );
 $logopaysafe = wp_get_attachment_image_src( $logoid , 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700" rel="stylesheet">
  <!-- Google Chrome Colors -->
  <meta name="theme-color" content="#45637e">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVIQwewUKl6-o2PLxDmMLtiVxQLquPJm0"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="loading-container">
    <div class="loading-svg">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="-541 291.7 196.5 218.3" style="enable-background:new -541 291.7 196.5 218.3;" xml:space="preserve">
        <style type="text/css">
          .ld0{clip-path:url(#SVGID_2_);fill:#FFFFFF;}
          .ld1{clip-path:url(#SVGID_4_);fill:#FFFFFF;}
          .ld2{clip-path:url(#SVGID_6_);fill:#FFFFFF;}
          .ld3{clip-path:url(#SVGID_8_);fill:#FFFFFF;}
          .ld4{clip-path:url(#SVGID_10_);fill:#FFFFFF;}
          .ld5{clip-path:url(#SVGID_12_);fill:#FFFFFF;}
          .ld6{clip-path:url(#SVGID_14_);fill:#FFFFFF;}
          .ld7{clip-path:url(#SVGID_16_);fill:#FFFFFF;}
        </style>
        <g class="first-loading">
          <g>
            <defs>
              <rect id="SVGID_1_" x="-511.7" y="299.3" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_2_">
              <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld0" d="M-498.1,278.4c4.1-9.6,10.9-17.9,19.5-23.7c8.6-5.8,18.9-9.2,30-9.2c7.4,0,14.5,1.5,20.9,4.2
              c9.6,4.1,17.9,10.9,23.7,19.5s9.2,18.9,9.2,30c0,7.4-1.5,14.5-4.2,20.9c-4.1,9.6-10.9,17.9-19.5,23.7c-8.6,5.8-18.9,9.2-30,9.2
              c-7.4,0-14.5-1.5-20.9-4.2c-9.6-4.1-17.9-10.9-23.7-19.5c-5.8-8.6-9.2-18.9-9.2-30C-502.3,291.9-500.8,284.8-498.1,278.4
               M-506.8,323.9c4.8,11.3,12.9,21,22.9,27.8c10.1,6.8,22.3,10.8,35.3,10.8c8.7,0,17-1.8,24.6-5c11.3-4.8,21-12.8,27.8-22.9
              s10.8-22.3,10.8-35.3c0-8.7-1.8-17-5-24.6c-4.8-11.3-12.8-21-22.9-27.8c-10.1-6.8-22.3-10.8-35.3-10.8c-8.7,0-17,1.8-24.6,5
              c-11.3,4.8-21,12.8-27.8,22.9c-6.7,10.1-10.7,22.2-10.7,35.3C-511.7,308-510,316.3-506.8,323.9"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_3_" x="-511.7" y="299.3" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_4_">
              <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld1" d="M-484.9,283.9c3-7.1,8-13.1,14.3-17.4c6.3-4.3,13.9-6.8,22.1-6.8c5.5,0,10.6,1.1,15.4,3.1
              c7.1,3,13.1,8,17.4,14.3c4.3,6.3,6.8,13.9,6.8,22.1c0,5.5-1.1,10.6-3.1,15.4c-3,7.1-8,13.1-14.3,17.4c-6.3,4.3-13.9,6.8-22.1,6.8
              c-5.6,0-10.8-1.1-15.5-3.1c-7.1-3-13.1-8-17.4-14.3c-4.2-6.3-6.7-13.9-6.7-22.1C-488,293.9-486.9,288.7-484.9,283.9 M-475.9,339.9
              c7.8,5.3,17.2,8.4,27.4,8.4c6.7,0,13.2-1.4,19-3.9c8.8-3.7,16.3-9.9,21.5-17.7c5.3-7.8,8.4-17.2,8.4-27.4c0-6.7-1.4-13.2-3.9-19
              c-3.7-8.8-9.9-16.3-17.7-21.5c-7.8-5.3-17.2-8.4-27.4-8.4c-6.7,0-13.2,1.4-19,3.9c-8.8,3.7-16.3,9.9-21.5,17.7
              c-5.3,7.8-8.4,17.2-8.4,27.4c0,6.7,1.4,13.2,3.9,19C-489.9,327.1-483.7,334.6-475.9,339.9"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_5_" x="-511.7" y="299.3" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_6_">
              <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld2" d="M-471.8,289.5c1.9-4.5,5.1-8.4,9.2-11.1c4-2.7,8.9-4.3,14.1-4.3c3.5,0,6.8,0.7,9.8,2
              c4.5,1.9,8.4,5.1,11.1,9.2c2.7,4,4.3,8.9,4.3,14.1c0,3.5-0.7,6.8-2,9.8c-1.9,4.5-5.1,8.4-9.2,11.1c-4,2.7-8.9,4.3-14.1,4.3
              c-3.5,0-6.8-0.7-9.8-2c-4.5-1.9-8.4-5.1-11.1-9.2c-2.7-4-4.3-8.9-4.3-14.1C-473.8,295.8-473.1,292.5-471.8,289.5 M-467.9,328.1
              c5.5,3.7,12.2,5.9,19.4,5.9c4.8,0,9.3-1,13.5-2.7c6.2-2.6,11.5-7,15.3-12.6c3.7-5.5,5.9-12.2,5.9-19.4c0-4.8-1-9.3-2.7-13.5
              c-2.6-6.2-7-11.5-12.6-15.3c-5.5-3.7-12.2-5.9-19.4-5.9c-4.8,0-9.3,1-13.5,2.7c-6.2,2.6-11.5,7-15.3,12.6
              c-3.7,5.6-5.9,12.2-5.9,19.4c0,4.8,1,9.3,2.7,13.5C-477.8,319-473.4,324.3-467.9,328.1"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_7_" x="-511.7" y="299.3" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_8_">
              <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld3" d="M-458.6,295c0.8-2,2.2-3.7,4-4.8c1.8-1.2,3.8-1.9,6.1-1.9c1.5,0,3,0.3,4.3,0.9c2,0.8,3.6,2.2,4.8,4
              c1.2,1.8,1.9,3.8,1.9,6.1c0,1.5-0.3,3-0.9,4.3c-0.8,2-2.2,3.6-4,4.8c-1.8,1.2-3.8,1.9-6.1,1.9c-1.5,0-3-0.3-4.3-0.9
              c-2-0.8-3.7-2.2-4.8-4c-1.2-1.8-1.9-3.8-1.9-6.1C-459.5,297.8-459.2,296.3-458.6,295 M-459.9,316.2c3.3,2.2,7.2,3.5,11.4,3.5
              c2.8,0,5.5-0.6,7.9-1.6c3.7-1.6,6.8-4.1,9-7.4c2.2-3.3,3.5-7.2,3.5-11.4c0-2.8-0.6-5.5-1.6-7.9c-1.6-3.7-4.1-6.8-7.4-9
              c-3.3-2.2-7.2-3.5-11.4-3.5c-2.8,0-5.5,0.6-7.9,1.6c-3.7,1.6-6.8,4.1-9,7.4c-2.2,3.3-3.5,7.2-3.5,11.4c0,2.8,0.6,5.5,1.6,7.9
              C-465.8,310.9-463.2,314-459.9,316.2"/>
          </g>
        </g>
        <g class="second-loading">
          <g>
            <defs>
              <rect id="SVGID_9_" x="-444.4" y="324.9" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_10_">
              <use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld4" d="M-394.9,409c-4.1,9.6-10.9,17.9-19.5,23.7s-18.9,9.2-30,9.2c-7.4,0-14.5-1.5-20.9-4.2
              c-9.6-4.1-17.9-10.9-23.7-19.5s-9.2-18.9-9.2-30c0-7.4,1.5-14.5,4.2-20.9c4.1-9.6,10.9-17.9,19.5-23.7c8.6-5.8,18.9-9.2,30-9.2
              c7.4,0,14.5,1.5,20.9,4.2c9.6,4.1,17.9,10.9,23.7,19.5s9.2,18.9,9.2,30C-390.7,395.6-392.2,402.6-394.9,409 M-386.2,363.5
              c-4.8-11.3-12.8-21-22.9-27.8s-22.3-10.8-35.3-10.8c-8.7,0-17,1.8-24.6,5c-11.4,4.8-21,12.8-27.8,22.9
              c-6.8,10.1-10.8,22.3-10.8,35.3c0,8.7,1.8,17,5,24.6c4.8,11.3,12.8,21,22.9,27.8c10.1,6.8,22.3,10.8,35.3,10.8
              c8.7,0,17-1.8,24.6-5c11.3-4.8,21-12.8,27.8-22.9c6.8-10.1,10.8-22.3,10.8-35.3C-381.2,379.4-383,371.1-386.2,363.5"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_11_" x="-444.4" y="324.9" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_12_">
              <use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld5" d="M-408,403.5c-3,7.1-8,13.1-14.3,17.4c-6.3,4.3-13.9,6.8-22.1,6.8c-5.5,0-10.6-1.1-15.4-3.1
              c-7.1-3-13.1-8-17.4-14.3c-4.3-6.3-6.8-13.9-6.8-22.1c0-5.5,1.1-10.6,3.1-15.4c3-7.1,8-13.1,14.3-17.4c6.3-4.3,13.9-6.8,22.1-6.8
              c5.5,0,10.6,1.1,15.4,3.1c7.1,3,13.1,8,17.4,14.3s6.8,13.9,6.8,22.1C-404.9,393.6-406,398.8-408,403.5 M-417.1,347.6
              c-7.8-5.3-17.2-8.4-27.4-8.4c-6.7,0-13.2,1.4-19,3.9c-8.8,3.7-16.3,9.9-21.5,17.7c-5.3,7.8-8.4,17.2-8.4,27.4
              c0,6.7,1.4,13.2,3.9,19c3.7,8.8,9.9,16.3,17.7,21.5c7.8,5.3,17.2,8.4,27.4,8.4c6.7,0,13.2-1.4,19-3.9c8.8-3.7,16.3-9.9,21.5-17.7
              c5.3-7.8,8.4-17.2,8.4-27.4c0-6.7-1.4-13.2-3.9-19C-403.1,360.3-409.3,352.8-417.1,347.6"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_13_" x="-444.4" y="324.9" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_14_">
              <use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld6" d="M-421.2,397.9c-1.9,4.5-5.1,8.4-9.2,11.1c-4,2.7-8.9,4.3-14.1,4.3c-3.5,0-6.8-0.7-9.8-2
              c-4.5-1.9-8.4-5.1-11.1-9.2c-2.7-4-4.3-8.9-4.3-14.1c0-3.5,0.7-6.8,2-9.8c1.9-4.5,5.1-8.4,9.2-11.1c4-2.7,8.9-4.3,14.1-4.3
              c3.5,0,6.8,0.7,9.8,2c4.5,1.9,8.4,5.1,11.1,9.2c2.7,4,4.3,8.9,4.3,14.1C-419.2,391.6-419.9,394.9-421.2,397.9 M-425.1,359.4
              c-5.5-3.7-12.2-5.9-19.4-5.9c-4.8,0-9.3,1-13.5,2.7c-6.2,2.6-11.5,7-15.3,12.6c-3.7,5.5-5.9,12.2-5.9,19.4c0,4.8,1,9.3,2.7,13.5
              c2.6,6.2,7,11.5,12.6,15.3c5.5,3.7,12.2,5.9,19.4,5.9c4.8,0,9.3-1,13.5-2.7c6.2-2.6,11.5-7,15.3-12.6c3.7-5.5,5.9-12.2,5.9-19.4
              c0-4.8-1-9.3-2.7-13.5C-415.1,368.4-419.5,363.1-425.1,359.4"/>
          </g>
          <g>
            <defs>
              <rect id="SVGID_15_" x="-444.4" y="324.9" width="63.2" height="63.2"/>
            </defs>
            <clipPath id="SVGID_16_">
              <use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
            </clipPath>
            <path class="ld7" d="M-434.3,392.4c-0.8,2-2.2,3.7-4,4.8c-1.8,1.2-3.8,1.9-6.1,1.9c-1.5,0-3-0.3-4.3-0.9c-2-0.8-3.6-2.2-4.8-4
              s-1.9-3.8-1.9-6.1c0-1.5,0.3-3,0.9-4.3c0.8-2,2.2-3.7,4-4.8c1.8-1.2,3.8-1.9,6.1-1.9c1.5,0,3,0.3,4.3,0.9c2,0.8,3.7,2.2,4.8,4
              c1.2,1.8,1.9,3.8,1.9,6.1C-433.5,389.7-433.8,391.1-434.3,392.4 M-433,371.2c-3.3-2.2-7.2-3.5-11.4-3.5c-2.8,0-5.5,0.6-7.9,1.6
              c-3.7,1.6-6.8,4.1-9,7.4c-2.2,3.3-3.5,7.2-3.5,11.4c0,2.8,0.6,5.5,1.6,7.9c1.6,3.7,4.1,6.8,7.4,9c3.3,2.2,7.2,3.5,11.4,3.5
              c2.8,0,5.5-0.6,7.9-1.6c3.7-1.6,6.8-4.1,9-7.4c2.2-3.2,3.5-7.2,3.5-11.4c0-2.8-0.6-5.5-1.6-7.9
              C-427.2,376.5-429.8,373.4-433,371.2"/>
          </g>
        </g>
      </svg>
    </div>
  </div>

  <div class="rotate-device">
    <div class="rotate-content">
      <div class="rotate-icon">
        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
      </div>
      <div class="rotate-text">
        Rotate Your Device
      </div>
    </div>
  </div>

	<div id="page" class="site ">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'playsafe' ); ?></a>

		<nav class="navbar fixed-top navbar-light">
			<?php if ($logopaysafe): ?>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
			    <img src="<?php echo $logopaysafe[0]; ?>" width="160" alt="<?php bloginfo( 'name' ); ?>">
			  </a>
			<?php else: ?>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>

      <div class="login-menu">
        <a href="https://playsafeperformance.azurewebsites.net/" target="_blank" class="login-button">performance-login</a>
      </div>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <div class="bars"></div>
				<div class="bars"></div>
				<div class="bars"></div>
		  </button>

			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new WP_Bootstrap_Navwalker(),
				)
			); ?>
		</nav>
