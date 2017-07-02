/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Theme color Scheme.	
	wp.customize( 'modelo_color_scheme', function( value ) {
        value.bind( function( to ) {
            $( '#logo-block .woo-wishlist a, #logo-block .woo-cart2 a, #logo-block .search-main2 button.search-submit, .dl-menuwrapper button:hover, .dl-menuwrapper button.dl-active, .dl-menuwrapper ul, #home-imagecat .item-imgcat span.capbutton a, #two-col-banner span.button-colbanner, .site-content .content-area .post-excerpt-block .entry-content.excerpt .entry-meta.exercpt, button, input[type="button"], input[type="reset"], input[type="submit"], #menu-2-wrap .main-navigation ul li:hover, #menu-2-wrap .main-navigation .current_page_item' ).css( 'background', to );
        } );
    });
	// Border color.
	wp.customize( 'modelo_color_scheme', function( value ) {
        value.bind( function( to ) {
            $( '#logo-block .search-main2 input.search-field, #feature-products .category-title a, .crousel-title a' ).css( 'border-color', to );
        } );
    });
	wp.customize( 'modelo_color_scheme', function( value ) {
        value.bind( function( to ) {
            $( 'ul.products li.item.type-product a.pricing, #secondary .widget_recent_entries li:before, #secondary .widget_archive li:before, #secondary .widget_recent_comments li:before, #secondary .widget_categories li:before, #secondary .widget_pages li:before, #secondary .widget_nav_menu li:before, #feature-products li.item.type-product a.pricing, #feature-products li.item.type-product .product-bottom h3 a:hover, #secondary.widget-area li a:hover' ).css( 'color', to );
        } );
    });
	
	
} )( jQuery );
