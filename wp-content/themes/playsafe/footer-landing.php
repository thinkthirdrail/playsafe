<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package playsafe
 */

 $logoid = get_theme_mod( 'custom_logo' );
 $logopaysafe = wp_get_attachment_image_src( $logoid , 'full' );

?>

	<section class="footer-section" style="background: url('<?php echo playsafe_featured_image() ?>');">
		<div class="footer-overlay"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 align-self-end" data-aos="fade-right" data-aos-duration="800" data-aos-anchor-placement="center-bottom">
					<div class="footer-copyright">
						<img src="<?php echo $logopaysafe[0]; ?>" width="140" class="footer-logo" alt="<?php bloginfo( 'name' ); ?>">
						<h6>COPYRIGHT PLAYSAFE SYSTEMS 2018. </h6>
					</div>
				</div>
				<div class="col-md-6 align-self-end">
          <div class="svgfooter-container">
            <svg version="1.1" id="Layer_footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="-541 291.7 196.5 218.3" style="enable-background:new -541 291.7 196.5 218.3;" xml:space="preserve">
              <style type="text/css">
              	.ju0{fill:none;}
              	.ju1{fill:#FFFFFF;}
              </style>
              <g class="svg-footer">
              	<g>
              		<path class="ju0" d="M-448.6,362.5L-448.6,362.5L-448.6,362.5C-448.5,362.5-448.6,362.5-448.6,362.5z"/>
              		<path class="ju0" d="M-506.8,323.9c-3.2-7.6-4.9-15.9-4.9-24.6v63.2h63.1c-13,0-25.2-4-35.3-10.8
              			C-493.9,344.9-502,335.2-506.8,323.9z"/>
              		<path class="ju0" d="M-469.4,348.8c6.4,2.7,13.5,4.2,20.9,4.2v-53.7h-53.8c0,11.1,3.4,21.4,9.2,30
              			C-487.3,337.9-479,344.7-469.4,348.8z"/>
              		<path class="ju1" d="M-448.5,353c-7.4,0-14.5-1.5-20.9-4.2c-9.6-4.1-17.9-10.9-23.7-19.5c-5.8-8.6-9.2-18.9-9.2-30h-9.4
              			c0,8.7,1.7,17,4.9,24.6c4.8,11.3,12.9,21,22.9,27.8c10.1,6.8,22.3,10.8,35.3,10.8c0,0,0.1,0,0.1,0V353z"/>
              	</g>
              	<g>
              		<path class="ju0" d="M-493.6,318.4c-2.5-5.8-3.9-12.3-3.9-19c0,0,0-0.1,0-0.1h-14.2v63.2h63.2v-14.2c-10.2,0-19.6-3.1-27.4-8.4
              			C-483.7,334.6-489.9,327.1-493.6,318.4z"/>
              		<path class="ju0" d="M-463.9,335.7c4.7,2,9.8,3.1,15.4,3.1v-39.5H-488c0,8.2,2.5,15.8,6.7,22.1C-477,327.7-471,332.7-463.9,335.7z
              			"/>
              		<path class="ju1" d="M-463.9,335.7c-7.1-3-13.1-8-17.4-14.3c-4.2-6.3-6.7-13.9-6.7-22.1h-9.5c0,0,0,0.1,0,0.1
              			c0,6.7,1.4,13.2,3.9,19c3.7,8.7,9.9,16.2,17.7,21.5c7.8,5.3,17.2,8.4,27.4,8.4v-9.5C-454.1,338.8-459.2,337.7-463.9,335.7z"/>
              	</g>
              	<g>
              		<path class="ju0" d="M-458.4,322.6c3,1.3,6.3,2,9.8,2c0,0,0.1,0,0.1,0v-25.3h-25.3c0,5.2,1.6,10.1,4.3,14.1
              			C-466.8,317.5-462.9,320.7-458.4,322.6z"/>
              		<path class="ju0" d="M-480.5,312.8c-1.7-4.2-2.7-8.7-2.7-13.5h-28.5v63.2h63.2V334c-7.2,0-13.9-2.2-19.4-5.9
              			C-473.4,324.3-477.8,319-480.5,312.8z"/>
              		<path class="ju1" d="M-448.6,324.6c-3.5,0-6.8-0.7-9.8-2c-4.5-1.9-8.4-5.1-11.1-9.2c-2.7-4-4.3-8.9-4.3-14.1h-9.4
              			c0,4.8,1,9.3,2.7,13.5c2.7,6.2,7.1,11.5,12.6,15.3c5.5,3.7,12.2,5.9,19.4,5.9L-448.6,324.6C-448.5,324.6-448.6,324.6-448.6,324.6z
              			"/>
              	</g>
              	<g>
              		<path class="ju0" d="M-467.3,307.2c-1-2.4-1.6-5.1-1.6-7.9h-42.8v63.2h63.2v-42.8c-4.2,0-8.1-1.3-11.4-3.5
              			C-463.2,314-465.8,310.9-467.3,307.2z"/>
              		<path class="ju0" d="M-452.8,309.4c1.3,0.6,2.8,0.9,4.3,0.9v-11h-11c0,2.3,0.7,4.3,1.9,6.1C-456.5,307.2-454.8,308.6-452.8,309.4z
              			"/>
              		<path class="ju1" d="M-452.8,309.4c-2-0.8-3.7-2.2-4.8-4c-1.2-1.8-1.9-3.8-1.9-6.1h-9.4c0,2.8,0.6,5.5,1.6,7.9
              			c1.5,3.7,4.1,6.8,7.4,9c3.3,2.2,7.2,3.5,11.4,3.5v-9.4C-450,310.3-451.5,310-452.8,309.4z"/>
              	</g>
              </g>
            </svg>
          </div>
				</div>
			</div>
		</div>
	</section>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>

/* Check if Mobile */
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ;

/* DOCUMENT READY */
$(document).ready(function(){

  /* Show Banner Logo and Content */
  setTimeout(function(){
    $('.banner-logo').fadeIn(1000);
    $('.banner-content').fadeIn(1000);
  }, 1000);

  /* Change Banner Title */
  setTimeout(function(){
    $('.banner-title h3').fadeOut(1000, function(){
      $(this).text('<?php the_field( 'slogan_after' ); ?>').fadeIn(1000);
    });
    $('.banner-description').delay(2000).fadeIn(function(){
      $(this).css("opacity", "1").dequeue();
    });
  }, 3900);

  /* Show SVG in Order */
  setTimeout(function(){
    $('.svg-first').addClass('svg-animate');
    $('.svg-second').delay(500).fadeIn(function(){
      $(this).addClass('svg-animate').dequeue();
    });
    $('.svg-fourth').delay(1000).fadeIn(function(){
      $(this).addClass('svg-animate').dequeue();
    });
    $('.svg-third').delay(1500).fadeIn(function(){
      $(this).addClass('svg-animate').dequeue();
    });
    $('.svg-fifth').delay(2000).fadeIn(function(){
      $(this).addClass('svg-animate').dequeue();
    });
  }, 1700);

  if(!isMobile) {

    /* Parallax */
    function parallaxScroll(){
      var scrolledY = $(window).scrollTop();
      $('.banner-section').css('background-position','center -'+((scrolledY*0.2))+'px');
      $('.textseparator-section').css('background-position','center -'+((scrolledY*0.1))+'px');
      $('.vertical-bar').css('bottom',' -'+((scrolledY*0.05))+'px');
      $('.vertical-bar-two').css('top',' -'+((scrolledY*0.03))+'px');
    }

    /* Show Banner Arrow */
    setTimeout(function(){

      /* Run Parallax Function */
      $(window).bind('scroll',function(e){
        parallaxScroll();
      });

    }, 7600);

    /* Show Banner Arrow */
    setTimeout(function(){
      $('.banner-arrow').fadeIn(1200);
      $('body').addClass('mobile-scroll');
    }, 6300);
  };

  /* AOS INIT */
  AOS.init({
    duration: 800,
    disable: 'mobile'
  });

  /* Smooth Scroll */
  $('a[href*="#"]')

  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {

    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {

        if ( this.hash.slice(1) == 'cashdesk' || this.hash.slice(1) == 'quantumsystem' || this.hash.slice(1) == 'performance' || this.hash.slice(1) == 'loyaltysystem' || this.hash.slice(1) == 'redemption' || this.hash.slice(1) == 'tito' ) {

          event.preventDefault();
          $('html, body').animate({
            scrollTop: $('#tabContent').offset().top - 105
          }, 800, function() {

            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              return false;
            } else {
              $target.attr('tabindex','-1');
              $target.focus();
            };
          });

        }else {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - 89.31
          }, 800, function() {

            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              return false;
            } else {
              $target.attr('tabindex','-1');
              $target.focus();
            };
          });
        }
      }
    }
  });
});
</script>

</body>
</html>
