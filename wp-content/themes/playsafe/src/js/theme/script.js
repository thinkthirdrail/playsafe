//@prepros-prepend googlemaps.js

/* IF MOBILE */
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ;

/* DOCUMENT READY */
$(document).ready(function(){

  if ( !isMobile ) {
    /* Menu Hover */
    $('li.dropdown').mouseover( function(e){
      e.preventDefault();
      //console.log('hover the dropdown');
      var dropdownChildren = $(this).children('.dropdown-menu');
      dropdownChildren.addClass('show');
      if ( $('.dropdown-menu').not(dropdownChildren).hasClass('show') ){
        //console.log('other dropdown is showing, remove it');
        $('.dropdown-menu').not(dropdownChildren).removeClass('show');
      }
    });

    $('li.dropdown').mouseleave( function(e){
      e.preventDefault();
      $('.dropdown-menu').removeClass('show');
    });

    $('#main-menu').mouseleave( function(e){
      e.preventDefault();
      $('.dropdown-menu').removeClass('show');
    });
  }else {

    $('.dropdown-toggle').each(function(){
      var i = 0;
      var droplink = $(this);
      var droplinkChilderen = $(this).next('.dropdown-menu');
      $(droplink).on('click', function(e){
        if ( $('.dropdown-menu').not(droplinkChilderen).hasClass('show') ) {
          $('.dropdown-menu').not(droplinkChilderen).removeClass('show');
          if ( i == 0) {
            e.preventDefault();
            $(droplink).next('.dropdown-menu').addClass('show');
            //console.log('open dropdown');
          }else {
            //console.log('go to link');
          }
          i++;
        }else {
          if ( i == 0) {
            e.preventDefault();
            $(droplink).next('.dropdown-menu').addClass('show');
            //console.log('open dropdown');
          }else {
            //console.log('go to link');
          }
          i++;
        }
      });
    });

  }

  /* ACF MAPS */
  $('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

  /* Remove Loading Screen */
  setTimeout(function(){
    $('.loading-container').css('opacity', '0').delay(800).queue(function(next){
      $(this).css('z-index', '-10');
      next();
    });
    $('body').css('overflow', 'auto');
    AOS.init({
      duration: 800,
      disable: 'mobile'
    });
  }, 800);

  /* Navbar Collapse Animation */
  $('.navbar-toggler').on("click", function(){
    var expanded = $(this).attr('aria-expanded');

    if (expanded == "true") {
      setTimeout(function(){
        $('#navbarNavDropdown').removeClass('collapse');
      }, 800)
    }

  });

});

if (!isMobile) {

  /* FUNCTIONS */
  function parallaxScroll(){
    var scrolledY = $(window).scrollTop();
    $('.innerbanner-section').css('background-position','center '+((scrolledY*0.2))+'px');
    $('.vertical-bar').css('bottom',' -'+((scrolledY*0.06))+'px').css('bottom','-=7%');
    $('.support-vertical-bar').css('bottom',' -'+((scrolledY*0.10))+'px').css('bottom','-=50%');
  }

  $(window).bind('scroll',function(e){

    /* Run Parallax Function */
    parallaxScroll();

  });

}

$(window).bind('scroll',function(e){

  /* Change Navbar Background Color */
  var scroll = $(window).scrollTop();
  if (scroll > 50) {
    $('.navbar').addClass('navbar-psbackground');
  }else{
    $('.navbar').removeClass('navbar-psbackground ');
  }

});
