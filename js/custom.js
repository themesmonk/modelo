/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();


/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, subMenus, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();

// Button Ripple effect
(function (window, $) {
  
  $(function() {
    
    
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);

//staller JS
jQuery(function(){
		jQuery.stellar({
			horizontalScrolling: false,
			verticalOffset: 40
		});
	});
//Slideout menu
jQuery(function() {
	jQuery("#dl-menu ul ul.children, #dl-menu2 ul ul.children, #dl-menu3 ul ul.children").each(function(){
	jQuery(this).removeClass('children').addClass('sub-menu');
	});
	jQuery( '#dl-menu' ).dlmenu();
	jQuery( '#dl-menu2' ).dlmenu();
	jQuery( '#dl-menu3' ).dlmenu();
	});
	

//add remove class on hover


 jQuery(".item-imgcat").hover(function(){
    jQuery(this).addClass("hover");
    jQuery(this).children(".capbutton").addClass("animated");
    },function(){
    jQuery(this).removeClass("hover");
    jQuery(this).children(".capbutton").removeClass("animated");
});
//Bootstrap tool tip
 jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip(); 
});

// Can also be used with $(document).ready()
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
	smoothHeight: true
  });
});



//slick crousel
jQuery(document).ready(function(){
	jQuery('.new-prod-slide').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: false,
	  autoplaySpeed: 2000,
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
	
	
	    new WOW().init();
});


//flex - home
jQuery(window).load(function(){
      jQuery('.flexslider-home').flexslider({
    animation: "slide",
	smoothHeight: true,
    before: function(slider){
      jQuery(slider).find(".flex-active-slide").find('.flex-caption').each(function(){
       jQuery(this).removeClass("animated fadeInUp").addClass("hide1");
       jQuery(this).addClass("animated slideOutDown");
       jQuery(this).find(".caption-button").addClass("animated fadeInRight");
       jQuery(this).find(".caption-desc").addClass("animated fadeInUp");
       jQuery(this).find(".caption-head").addClass("animated fadeInUp");
       jQuery(this).find(".caption-head2").addClass("animated zoomIn");
       jQuery(this).find(".top-sub-head").addClass("animated fadeInDown");
       });
	   
     },
    after: function(slider){
          jQuery(slider).find(".flex-active-slide").find('.flex-caption').addClass("animated fadeIn").removeClass("slideOutDown hide1");
      },
	  start: function(slider){
          jQuery('body').removeClass('loading');
		  jQuery(slider).find(".flex-active-slide").find('.flex-caption').removeClass("hide1").addClass("animated fadeIn");
		  jQuery(slider).find(".caption-button").addClass("animated fadeInRight");
		  jQuery(slider).find(".caption-desc").addClass("animated fadeInUp");
		  jQuery(slider).find(".caption-head").addClass("animated fadeInUp");
		  jQuery(slider).find(".top-sub-head").addClass("animated fadeInDown");
		  jQuery(slider).find(".caption-head2").addClass("animated zoomIn");
		  
        }

	});
});

// Random color to tags
jQuery(document).ready(function() {
 
/*Colors you need to add for your anchor tags*/
var colors = ['#21759B', '#464646', '#D54E21', '#000000', 'gray'];
 
/*Minimum & Maximum font Size*/
var minFontSize = 10;
var maxFontSize = 40;
 
/*Finding all the links inside a Div*/
jQuery('.tagcloud').find('a').each(function(e) {
/*Applying font size
$(this).css("fontSize", randomNumberGenerator(minFontSize, maxFontSize));*/
/*Applying font color*/
jQuery(this).css("color", colors[Math.floor(Math.random() * colors.length)]);
});
 
/*Random Number Generator function*/
function randomNumberGenerator(min,max)
{
return Math.floor(Math.random()*(max-min+1)+min);
}
});


