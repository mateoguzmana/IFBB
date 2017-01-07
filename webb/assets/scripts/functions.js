$("#header").load("header.html");
$("#footer").load("footer.html");

var $ = jQuery;
 

// Responsive Menu

jQuery(document).ready(function(){
	jQuery('.cs-main-nav>ul').slicknav({
		closedSymbol: '<i class="icon-plus-circle"><i>',
        openedSymbol: '<i class="icon-minus-circle"><i>',
	});
});

// Menu Items Limit

var maxItems = 9; // Change Number of Items here
var totalItems = jQuery('.navigation>ul').find('>li').length;
if(totalItems > maxItems){
	jQuery('.navigation>ul>li:nth-child('+maxItems+') ~ li').wrapAll('<li></li>').wrapAll('<ul class="sub-dropdown"></ul>');
	jQuery('.navigation>ul>li:last-child').prepend('<a href="#">More</a>');
}

// Main Slider

jQuery(function () {
if( jQuery("#slider4").length != '' ){
  jQuery("#slider4").responsiveSlides({
    auto: true,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      jQuery('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      jQuery('.events').append("<li>after event fired.</li>");
    }
  });
}
});

// Carousel Auto-Cycle
  jQuery(document).ready(function() {
  if( jQuery(".carousel").length != '' ){
	jQuery('.carousel').carousel({
	  interval: 6000
	});
	}
  });
		  

// Counter JS

window.jQuery(function (jQuery) {
    "use strict";
if( jQuery(".alt-1").length != '' ){
    jQuery('time').countDown({
        with_separators: false
    });
    jQuery('.alt-1').countDown({
        css_class: 'countdown-alt-1'
    });
}
});


// Ticker new

jQuery(function () {
	if( jQuery("#newsList").length != '' ){
		jQuery('#newsList').newsTicker();
	}
});


/* Blog Masnery */

jQuery(document).ready(function($) {
	if( jQuery(".mas-isotope > .row").length != '' ){
      var container = jQuery(".mas-isotope > .row").imagesLoaded(function() {
        container.isotope()
      });
      jQuery(window).resize(function() {
        setTimeout(function() {
          jQuery(".mas-isotope > .row").isotope()
        }, 600)
      });
  	}
     });

 
// var userList = new List('#users', options);

jQuery(document).ready(function () {
	if( jQuery(".responsive-calendar").length != '' ){
        jQuery(".responsive-calendar").responsiveCalendar({
          time: '2014-05',
          events: {
            "2014-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2014-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2014-05-03":{"number": 1}, 
            "2014-06-12": {}}
        });
        }
      });

/* ---------------------------------------------------------------------------
*	Search Toggle Function
* --------------------------------------------------------------------------- */
  
   
   jQuery(document).ready(function(){
       jQuery('.search-sec').on('click', 'a', function(e){
        e.preventDefault();
        jQuery(this).siblings('form').toggle();
       });
      });

	
	/* ---------------------------------------------------------------------------
   * Toggle Function sermon
* --------------------------------------------------------------------------- */
	
//Fit Video Fram Funtion

jQuery(function () {
if( jQuery("body").length != '' ){
  jQuery(document).ready(function($) {
    jQuery("body").fitVids();
});
}
});


jQuery(document).ready(function(){
	if( jQuery(".skillbar").length != '' ){
      jQuery('.skillbar').each(function() {
        $(this).waypoint(function(direction) {
          jQuery(this).find('.skillbar-bar').animate({
            width: jQuery(this).attr('data-percent')
          }, 2000);
        }, {
          offset: "100%",
          triggerOnce: true
        });
      });
	}
  });


     /* ---------------------------------------------------------------------------
    * Counter Integers Function
    * --------------------------------------------------------------------------- */

jQuery(document).ready(function() {
if( jQuery(".custom-counter").length != '' ){
      jQuery('.custom-counter').counterUp({
        delay: 10,
        time: 1000
      });

}
  });

jQuery(function () {
if( jQuery(".client-slider").length != '' ){
jQuery('.client-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}
});
jQuery(function () {
if( jQuery("ul.twitter-slide").length != '' ){
$('ul.twitter-slide').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
});
}
});
jQuery(function () {
if( jQuery("ul.cs-tweet-list").length != '' ){
$('ul.cs-tweet-list').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
});
}
});
 

//Tool Tip

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});


//Music Hide Show Toggle

jQuery(document).ready(function(){
	jQuery(".cs-hide").hide();
    jQuery(".cs-show").click(function(){
        jQuery(".cs-hide").toggle(400);
    });
});
 jQuery(document).ready(function() {
  if( jQuery(".sermons-slider").length != '' ){	
$('.sermons-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots:true,
  arrows:false,
});	
  }
 });
  jQuery(document).ready(function() {
  if( jQuery(".slides").length != '' ){	
$('.slides').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots:true,
  arrows:true,
});	
  }
 });
    jQuery(document).ready(function() {
  if( jQuery(".cs-slides").length != '' ){	
$('.cs-slides').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots:true,
  arrows:true,
});	
  }
 });
  jQuery(document).ready(function() {
  if( jQuery(".newslist").length != '' ){	
$('.newslist').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots:false,
  arrows:true,
});	
  }
 }); 
