<?php
/**
 * modelo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package modelo
 */
/* ------------------------------------ *
 *  Theme Setup
/* ------------------------------------ */
if ( ! function_exists( 'modelo_setup' ) ) :

function modelo_setup() {
	// Load theme language
	load_theme_textdomain( 'modelo', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable title tag
	add_theme_support( 'title-tag' );
	
	// Enable Woocommerce
	add_theme_support( 'woocommerce' );

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-thumb1', 505, 379, true );
	add_image_size( 'featured-thumb2', 360, 245, true );
	
	// Enable automatic feed links
	add_theme_support( 'automatic-feed-links' );

	// Custom Menu
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'modelo' ),
		'tophead' => esc_html__( 'Top Header', 'modelo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	//Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'modelo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'modelo_setup' );

	// Content width
	function modelo_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'modelo_content_width', 800 );
	}
add_action( 'after_setup_theme', 'modelo_content_width', 0 );

/* ------------------------------------ *
 *  Register widget area.
/* ------------------------------------ */
function modelo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'modelo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'modelo' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget First', 'modelo' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Second', 'modelo' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Third', 'modelo' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Fourth', 'modelo' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'modelo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Product Crousel Homepage Widget 1', 'modelo' ),
		'id'            => 'product-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="text-left crousel-title"><a class="prod-title">',
		'after_title'   => '</a></div>',
		) );
	
}
add_action( 'widgets_init', 'modelo_widgets_init' );


/* --------------------------------------------- *
 *  Load theme files. Enqueue scripts and styles.
/* --------------------------------------------- */
function modelo_scripts() {
	wp_enqueue_style( 'modelo-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'modelo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'modelo-google-fonts-raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,400italic,500,600,700,800,900,700italic,600italic,500italic' );
	wp_enqueue_style( 'modelo-google-fonts-lato', 'https://fonts.googleapis.com/css?family=Lato:400,900,700,300,400italic' );
	wp_enqueue_style( 'modelo-google-fonts-dancing-script', 'https://fonts.googleapis.com/css?family=Dancing+Script:400,700' );
	wp_enqueue_style( 'modelo-animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'modelo-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'modelo-flexslider', get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'modelo-slick-css', get_template_directory_uri() . '/css/slick.css' );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'modelo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), false );
	wp_enqueue_script( 'modelo-modernize-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), false );
	wp_enqueue_script( 'modelo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false );
	wp_enqueue_script( 'modelo-dlmenu', get_template_directory_uri() . '/js/jquery.dlmenu.js', array(), true );
	wp_enqueue_script( 'modelo-flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), false );
	wp_enqueue_script( 'modelo-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false );
	wp_enqueue_script( 'modelo-wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), false );
	wp_enqueue_script( 'modelo-steller', get_template_directory_uri() . '/js/steller.js', array(), true );
	wp_enqueue_script( 'modelo-custom', get_template_directory_uri() . '/js/custom.js', '', true );

	wp_enqueue_script( 'modelo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'modelo_scripts' );

/* Conditional polyfills
 * --------------------------*/
	$conditional_scripts = array(
		'html5shiv'           => get_template_directory_uri(). '/js/html5shiv.min.js',
		'html5shiv-printshiv'           => get_template_directory_uri(). '/js/html5shiv-printshiv.js',
		'respond'             => get_template_directory_uri(). '/js/respond.min.js'
	);
	foreach ( $conditional_scripts as $handle => $src ) {
		wp_enqueue_script( $handle, $src, array(), '', false );
	}
	add_filter( 'script_loader_tag', function( $tag, $handle ) use ( $conditional_scripts ) {
		if ( array_key_exists( $handle, $conditional_scripts ) ) {
			$tag = "<!--[if lt IE 9]>$tag<![endif]-->";
		}
		return $tag;
	}, 10, 2 );


/*  Implement the Custom Header feature.
/* ------------------------------------------ */
require get_template_directory() . '/inc/custom-header.php';

/*  Custom template tags for this theme.
/* ------------------------------------------ */
require get_template_directory() . '/inc/template-tags.php';

/*  Custom functions that act independently of the theme templates.
/* ------------------------------------------ */
require get_template_directory() . '/inc/extras.php';

/* Customizer additions.
/* ------------------------------------------ */
require get_template_directory() . '/inc/customizer.php';

/* Load Jetpack compatibility file.
/* ------------------------------------------ */
require get_template_directory() . '/inc/jetpack.php';

/* Include widget fields in the dashboard
 * ------------------------------------------ */
require get_template_directory() . '/inc/widget-fields.php';

/* Include helper functions that display widget fields in the dashboard
 * ------------------------------------------ */
require get_template_directory() . '/inc/widget-product1.php';

/* --------------------------------------------- *
 *  TGMPA.
/* --------------------------------------------- */
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'modelo_require_plugins' );
 
function modelo_require_plugins() {
 
    $plugins = array(
		array(
			'name' 				=> 'Regenerate Thumbnails',
			'slug' 				=> 'regenerate-thumbnails',
			'required'			=> false,
			'force_activation' 	=> false,
			'force_deactivation'=> false,
		),
		array(
			'name' 				=> 'Woocommerce',
			'slug' 				=> 'woocommerce',
			'required'			=> false,
			'force_activation' 	=> false,
			'force_deactivation'=> false,
		),
		array(
			'name' 				=> 'YITH Woocommerce Quick View',
			'slug' 				=> 'yith-woocommerce-quick-view',
			'required'			=> false,
			'force_activation' 	=> false,
			'force_deactivation'=> false,
		)
		
	);
    $config = array(
		'id'           => 'modelo-tgmpa', // your unique TGMPA ID
		'default_path' => get_stylesheet_directory() . '/lib/plugins/', // default absolute path
		'menu'         => 'modelo-install-required-plugins', // menu slug
		'has_notices'  => true, // Show admin notices
		'dismissable'  => false, // the notices are NOT dismissable
		'dismiss_msg'  => 'I really, really need you to install these plugins, okay?', // this message will be output at top of nag
		'is_automatic' => true, // automatically activate plugins after installation
		'message'      => '<!--Hey there.-->', // message to output right before the plugins table
		'strings'      => array() // The array of message strings that TGM Plugin Activation uses
	);
 
    tgmpa( $plugins );
}


/* --------------------------------------------- *
 *  Add SoundCloud oEmbed.
/* --------------------------------------------- */
function modelo_add_oembed_soundcloud(){
wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}
add_action('init','modelo_add_oembed_soundcloud');
/*---------------------------------------------------*/
/* nofollow to next/previous links
/*---------------------------------------------------*/
function modelo_pagination_add_nofollow($content) {
    return 'rel="nofollow"';
}
add_filter('next_posts_link_attributes', 'modelo_pagination_add_nofollow' );
add_filter('previous_posts_link_attributes', 'modelo_pagination_add_nofollow' );

/*--------------------------------------------------*/
/* Nofollow to category links
/*--------------------------------------------------*/
add_filter( 'the_category', 'modelo_add_nofollow_cat' ); 
function modelo_add_nofollow_cat( $text ) {
$text = str_replace('rel="category tag"', 'rel="nofollow"', $text); return $text; }

/*----------------------------------------------------*/ 
/* nofollow post author link
/*---------------------------------------------------*/
add_filter('the_author_posts_link', 'modelo_nofollow_the_author_posts_link');
function modelo_nofollow_the_author_posts_link ($link) {
return str_replace('<a href=', '<a rel="nofollow" href=',$link); }

/*-------------------------------------------------------*/ 
/* nofollow to reply links
/*-------------------------------------------------------*/
function modelo_add_nofollow_to_reply_link( $link ) {
return str_replace( '")\'>', '")\' rel=\'nofollow\'>', $link );
}
add_filter( 'comment_reply_link', 'modelo_add_nofollow_to_reply_link' );
    
/*-----------------------------------------------------------*/
/* Removes Trackbacks from the comment count
/*-----------------------------------------------------------*/
add_filter('get_comments_number', 'modelo_comment_count', 0);
function modelo_comment_count( $count ) {
    if ( ! is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}
/* --------------------------------------------- *
 *  Paginate links.
/* --------------------------------------------- */
function modelo_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="post-nav navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

/* --------------------------------------------- *
 *  Post format videos.
/* --------------------------------------------- */
function theme_oembed_videos() {

    global $post;

    if ( $post && $post->post_content ) {

        global $shortcode_tags;
        // Make a copy of global shortcode tags - we'll temporarily overwrite it.
        $theme_shortcode_tags = $shortcode_tags;

        // The shortcodes we're interested in.
        $shortcode_tags = array(
            'video' => $theme_shortcode_tags['video'],
            'embed' => $theme_shortcode_tags['embed']
        );
        // Get the absurd shortcode regexp.
        $video_regex = '#' . get_shortcode_regex() . '#i';

        // Restore global shortcode tags.
        $shortcode_tags = $theme_shortcode_tags;

        $pattern_array = array( $video_regex );

        // Get the patterns from the embed object.
        if ( ! function_exists( '_wp_oembed_get_object' ) ) {
            include ABSPATH . WPINC . '/class-oembed.php';
        }
        $oembed = _wp_oembed_get_object();
        $pattern_array = array_merge( $pattern_array, array_keys( $oembed->providers ) );

        // Or all the patterns together.
        $pattern = '#(' . array_reduce( $pattern_array, function ( $carry, $item ) {
            if ( strpos( $item, '#' ) === 0 ) {
                // Assuming '#...#i' regexps.
                $item = substr( $item, 1, -2 );
            } else {
                // Assuming glob patterns.
                $item = str_replace( '*', '(.+)', $item );
            }
            return $carry ? $carry . ')|('  . $item : $item;
        } ) . ')#is';

        // Simplistic parse of content line by line.
        $lines = explode( "\n", $post->post_content );
        foreach ( $lines as $line ) {
            $line = trim( $line );
            if ( preg_match( $pattern, $line, $matches ) ) {
                if ( strpos( $matches[0], '[' ) === 0 ) {
                    $ret = do_shortcode( $matches[0] );
                } else {
                    $ret = wp_oembed_get( $matches[0] );
                }
                return $ret;
            }
        }
    }
}


/* --------------------------------------------- *
 *  Modelo Excerpt.
/* --------------------------------------------- */
function modelo_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/* --------------------------------------------- *
 *  Audio Post Format.
/* --------------------------------------------- */
 add_action("admin_init", "audio_init");
    add_action('save_post', 'save_audio_link');
    function audio_init(){
            add_meta_box("mp3-audio", "MP3 AUDIO", "audio_link", "post", "normal", "low");
            }
    function audio_link(){
            global $post;
            $custom  = get_post_custom($post->ID);
            $link    = $custom["link"][0];
            $count   = 0;
            echo '<div class="link_header">';
            $query_audio_args = array(
                    'post_type' => 'attachment',
                    'post_mime_type' =>'audio',
                    'post_status' => 'inherit',
                    'posts_per_page' => -1,
                    );
            $query_audio = new WP_Query( $query_audio_args );
            $audio = array();
            echo '<select name="link">';
            echo '<option class="audio_select">SELECT AUDIO FILE</option>';
            foreach ( $query_audio->posts as $file) {
               if($link == $audio[]= $file->guid){
                  echo '<option value="'.$audio[]= $file->guid.'" selected="true">'.$audio[]= $file->guid.'</option>';
                     }else{
                  echo '<option value="'.$audio[]= $file->guid.'">'.$audio[]= $file->guid.'</option>';
                     }
                    $count++;
            }
            echo '</select><br /></div>';
            echo '<p>Selecting an audio file from the above list to attach to this post.</p>';
            echo '<div class="audio_count"><span>Files:</span> <b>'.$count.'</b></div>';
    }
    function save_audio_link(){
            global $post;
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){ return $post->ID; }
            update_post_meta($post->ID, "link", $_POST["link"]);
    }
    add_action( 'admin_head', 'audio_css' );
    function audio_css() {
            echo '<style type="text/css">
            .audio_select{
                    font-weight:bold;
                    background:#e5e5e5;
                    }
            .audio_count{
                    font-size:9px;
                    color:#0066ff;
                    text-transform:uppercase;
                    background:#f3f3f3;
                    border-top:solid 1px #e5e5e5;
                    padding:6px 6px 6px 12px;
                    margin:0px -6px -8px -6px;
                    -moz-border-radius:0px 0px 6px 6px;
                    -webkit-border-radius:0px 0px 6px 6px;
                    border-radius:0px 0px 6px 6px;
                    }
            .audio_count span{color:#666;}
                    </style>';
    }
    function audio_file_url(){
            global $wp_query;
            $custom = get_post_custom($wp_query->post->ID);
            echo $custom['link'][0];
    }
/* --------------------------------------------- *
 *  Author Box.
/* --------------------------------------------- */
function wptuts_contact_methods( $contactmethods ) {
 
    // Remove we what we don't want
    unset( $contactmethods[ 'aim' ] );
    unset( $contactmethods[ 'yim' ] );
    unset( $contactmethods[ 'jabber' ] );
 
    // Add some useful ones
    $contactmethods[ 'twitter' ] = 'Twitter Username';
    $contactmethods[ 'facebook' ] = 'Facebook Profile URL';
    $contactmethods[ 'linkedin' ] = 'LinkedIn Public Profile URL';
    $contactmethods[ 'googleplus' ] = 'Google+ Profile URL';
 
    return $contactmethods;
}
 
add_filter( 'user_contactmethods', 'wptuts_contact_methods' );
/* --------------------------------------------- *
 *  Post Format Link.
/* --------------------------------------------- */
function get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
/* --------------------------------------------- *
 *  Sanitization.
/* --------------------------------------------- */	

/* Text sanitize
/* ------------------------ */
function modelo_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
/* Checkbox sanitize
/* ------------------------ */
function modelo_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
/* Radio Button sanitize
/* ------------------------ */
function modelo_sanitize_header_styles( $input ) {
    $valid = array(
        'one' => 'One',
        'two' => 'Two',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
function modelo_sanitize_layout( $input ) {
    $valid = array(
		'left' => 'Left Sidebar',
		'right' => 'Right Sidebar',
		'no' => 'No Sidebar',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/* Escape the html
   ----------------------------*/
function modelo_escape_html($text) {
    return wp_kses($text, array(
        'a' => array(
            'href' => array(),
            'title' => array(),
        ),
        'br' => array(),
        'em' => array(),
        'strong' => array(),
        'p' => array(),
        'h1' => array(),
    ));
}

/* --------------------------------------------- *
 *  Modelo Headers.
/* --------------------------------------------- */	
function get_modelo_headers() {
    $example_position = get_theme_mod( 'modelo_change_header' );
    if( $example_position != '' ) {
        switch ( $example_position ) { 
            case 'one':
                get_header('one');
				break;
            case 'two':
                get_header();
                break;
			case '':
                get_header();
                break;			
        }
    } else { get_header(); }
}

/* ---------------------------------------------------------------------- *
 * Ensure cart contents update when products are added to the cart via AJAX
/* --------------------------------------------------------------------- */	
 
function modelo_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><span class="item-count"><?php if ( $count > 0 ) echo '' . $count . ''; ?></span><?php
 
    $fragments['span.item-count'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'modelo_add_to_cart_fragment' );

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'modelo' ); ?>"><i class="fa fa-shopping-bag"></i><?php echo sprintf (_n( ' %d Item', ' %d Items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( '', 'woocommerce' );
 
}
/* --------------------------------------------- *
 *  Radio Meta box.
/* --------------------------------------------- */	
function modelo_post_single_layout() {
add_meta_box('modelo_post_single_layout', 'Post Layout', 'modelo_post_single_layout_meta', 'post' ); //you can change the 4th paramter i.e. post to custom post type name, if you want it for something else
 
}
 
add_action( 'add_meta_boxes', 'modelo_post_single_layout' );
function modelo_post_single_layout_meta( $post ) {
 wp_nonce_field( 'modelo_post_single_layout', 'modelo_post_single_layout_nonce' );
 $value = get_post_meta( $post->ID, 'modelo_post_single_layout', true ); //modelo_post_single_layout is a meta_key. Change it to whatever you want
?>
<label class="left-label post-layout">
	<input type="radio" name="image_align" value="left" <?php checked( $value, 'left' ); ?> ><br/>
	<img src="<?php echo get_template_directory_uri(); ?>/img/left-sidebar.png" alt="Left Sidebar"/><br/>
<?php esc_html_e( 'Left Sidebar', 'modelo' ); ?>
</label>

<label class="right-label post-layout">
<input type="radio" name="image_align" value="right" <?php checked( $value, 'right' ); ?> ><br/>
<img src="<?php echo get_template_directory_uri(); ?>/img/right-sidebar.png" alt="Left Sidebar"/><br/>
<?php esc_html_e( 'Right Sidebar', 'modelo' ); ?>
</label>

<label class="fullwidth post-layout">
<input type="radio" name="image_align" value="full" <?php checked( $value, 'full' ); ?> ><br/>
<img src="<?php echo get_template_directory_uri(); ?>/img/fullwidth.png" alt="Left Sidebar"/><br/>
<?php esc_html_e( 'Full Width', 'modelo' ); ?>
</label>
<?php
}
 
function modelo_save_meta_box_data( $post_id ) {
 
        /*
         * We need to verify this came from our screen and with proper authorization,
         * because the save_post action can be triggered at other times.
         */
 
        // Check if our nonce is set.
        if ( !isset( $_POST['modelo_post_single_layout_nonce'] ) ) {
                return;
        }
 
        // Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['modelo_post_single_layout_nonce'], 'modelo_post_single_layout' ) ) {
                return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
 
        // Check the user's permissions.
        if ( !current_user_can( 'edit_post', $post_id ) ) {
                return;
        }
 
 
        // Sanitize user input.
        $new_meta_value = ( isset( $_POST['image_align'] ) ? sanitize_html_class( $_POST['image_align'] ) : '' );
 
        // Update the meta field in the database.
        update_post_meta( $post_id, 'modelo_post_single_layout', $new_meta_value );
 
}
 
add_action( 'save_post', 'modelo_save_meta_box_data' );

/* --------------------------------------------- *
 *  Page Sidebar.
/* --------------------------------------------- */	
function modelo_page_sidebar_toggle() {
add_meta_box('modelo_page_sidebar_toggle', 'Toggle Sidebar', 'modelo_post_sidebar_meta', 'page' ); //you can change the 4th paramter i.e. post to custom post type name, if you want it for something else
 
}
 
add_action( 'add_meta_boxes', 'modelo_page_sidebar_toggle' );
function modelo_post_sidebar_meta( $post ) {
 wp_nonce_field( 'modelo_page_sidebar_toggle', 'modelo_post_sidebar_toggle_nonce' );
 $value = get_post_meta( $post->ID, 'modelo_page_sidebar_toggle', true ); //modelo_page_sidebar_toggle is a meta_key. Change it to whatever you want
?>
<label class="left-label post-layout">
	<input type="radio" name="image_align" value="blog" <?php checked( $value, 'blog' ); ?> ><br/>
	<i class="fa fa-file-text" aria-hidden="true"></i><br/>
<?php esc_html_e( 'Blog Sidebar', 'modelo' ); ?>
</label>

<label class="right-label post-layout">
<input type="radio" name="image_align" value="shop" <?php checked( $value, 'shop' ); ?> ><br/>
<i class="fa fa-shopping-basket" aria-hidden="true"></i><br/>
<?php esc_html_e( 'Shop Sidebar', 'modelo' ); ?>
</label>

<?php
}

function modelo_save_meta_box_data2( $post_id ) {
 
        /*
         * We need to verify this came from our screen and with proper authorization,
         * because the save_post action can be triggered at other times.
         */
 
        // Check if our nonce is set.
        if ( !isset( $_POST['modelo_post_sidebar_toggle_nonce'] ) ) {
                return;
        }
 
        // Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['modelo_post_sidebar_toggle_nonce'], 'modelo_page_sidebar_toggle' ) ) {
                return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
 
        // Check the user's permissions.
        if ( !current_user_can( 'edit_post', $post_id ) ) {
                return;
        }
 
 
        // Sanitize user input.
        $new_meta_value2 = ( isset( $_POST['image_align'] ) ? sanitize_html_class( $_POST['image_align'] ) : '' );
 
        // Update the meta field in the database.
        update_post_meta( $post_id, 'modelo_page_sidebar_toggle', $new_meta_value2 );
 
}
 
add_action( 'save_post', 'modelo_save_meta_box_data2' );

/* --------------------------------------------- *
 *  Dashboard Styles.
/* --------------------------------------------- */
add_action('admin_head', 'modelo_custom_admin_style');
function modelo_custom_admin_style() {
  echo '<style>
    label.post-layout {
		display: inline-block;
	    margin-top: 10px;
		position: relative;
		width: 60px;
	}
	label.post-layout input[type=radio] {
		border: 1px solid #D8D8D8;
		border-radius: 0;
		width: 55px;
		height: 46px;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	label.post-layout input[type=radio]:checked {
		border: 3px solid #3090BD;
	}
	label.post-layout input[type=radio]:checked:before {
		content: "";
		background-color: rgba(0, 0, 0, 0);
	}
	label.post-layout img {
		padding-left: 5px;
		padding-top: 1px;
		position: absolute;
		top: 0;
	}
	label.post-layout i {
		color: #BABABA;
		padding-left: 12px;
		padding-top: 5px;
		position: absolute;
		top: 0;
		font-size: 26px;
	}
	
  </style>';
}

/**
 * This function adds some styles to the WordPress Customizer
 */
function modelo_customizer_styles() { ?>
	<style>
		/* customizer*/
		li#customize-control-modelo_layout_sidebar_position label input[type="radio"] {
			width: 54px;
			height: 44px;
			border-radius: 0;
		}
		li#customize-control-modelo_layout_sidebar_position label input[type="radio"]:checked:before {
			content: "";
			background-color: rgba(0, 0, 0, 0);
		}
		li#customize-control-modelo_layout_sidebar_position label input[type="radio"]:checked{
			border: 4px solid #000;
		}
		li#customize-control-modelo_layout_sidebar_position label:nth-child(2) input[type="radio"] {
			background: url(<?php echo get_template_directory_uri(); ?>/img/left-sidebar.png) no-repeat center;
		}
		li#customize-control-modelo_layout_sidebar_position label:nth-child(3) input[type="radio"] {
			background: url(<?php echo get_template_directory_uri(); ?>/img/right-sidebar.png) no-repeat center;
		}
		li#customize-control-modelo_layout_sidebar_position label:nth-child(4) input[type="radio"] {
			background: url(<?php echo get_template_directory_uri(); ?>/img/fullwidth.png) no-repeat center;
		}
		
	</style>
	<?php

}

/* --------------------------------------------- *
 *  RGBA filter.
/* --------------------------------------------- */
function modelo_hex2rgba($hex) {
  	$hex = str_replace("#", "", $hex);
  	if(strlen($hex) == 3) {
    	  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
    	  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
    	  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
 	} else {
    	  $r = hexdec(substr($hex,0,2));
    	  $g = hexdec(substr($hex,2,2));
    	  $b = hexdec(substr($hex,4,2));
   	}
   	$rgb = array($r, $g, $b);
   	return implode(",", $rgb); // returns the rgb values separated by commas
   	//return $rgb; // returns an array with the rgb values
}
/* --------------------------------------------- *
 *  Custom Color Scheme.
/* --------------------------------------------- */
function modelo_theme_color_scheme() {
	
	?>
		<style type="text/css">
			#logo-block .woo-wishlist a, #logo-block .woo-cart2 a, #logo-block .search-main2 button.search-submit, .dl-menuwrapper button:hover, .dl-menuwrapper button.dl-active, .dl-menuwrapper ul, .site-content .content-area .post-excerpt-block .entry-content.excerpt .entry-meta.exercpt, button, input[type="button"], input[type="reset"], input[type="submit"], #menu-2-wrap .main-navigation ul li:hover, #menu-2-wrap .main-navigation .current_page_item {
				background: <?php echo get_theme_mod( 'modelo_color_scheme' ); ?>;
			}
			#home-imagecat .item-imgcat span.capbutton a, #two-col-banner span.button-colbanner {
				background: rgba(<?php echo modelo_hex2rgba(get_theme_mod( 'modelo_color_scheme' ))?>,0.69);
			}
			#logo-block .search-main2 input.search-field {
				border: 1px solid <?php echo get_theme_mod( 'modelo_color_scheme' ); ?>;
			}
			#feature-products .category-title a, .crousel-title a, #tm-blog .blog-title.text-left a {
				border-bottom: 2px solid <?php echo get_theme_mod( 'modelo_color_scheme' ); ?>;
			}
			ul.products li.item.type-product a.pricing, #secondary .widget_recent_entries li:before, #secondary .widget_archive li:before, #secondary .widget_recent_comments li:before, #secondary .widget_categories li:before, #secondary .widget_pages li:before, #secondary .widget_nav_menu li:before, #feature-products li.item.type-product a.pricing, #feature-products li.item.type-product .product-bottom h3 a:hover, #secondary.widget-area li a:hover, #tm-blog .tm-blog-post i, #tm-blog .tm-blog-post h2 a, .site-content .content-area .post-excerpt-block .entry-content.excerpt h2 a:hover {
				color: <?php echo get_theme_mod( 'modelo_color_scheme' ); ?>;
			}
			<?php echo get_theme_mod( 'modelo_custom_css_block' ); ?>
		</style>
	<?php
}
add_action( 'wp_head', 'modelo_theme_color_scheme' );
/* --------------------------------------------- *
 *  Custom Color Scheme.
/* --------------------------------------------- */
function modelo_custom_css() {
	
	?>
		<style type="text/css">
			<?php echo modelo_escape_html(get_theme_mod('modelo_custom_css_block')); ?>
		</style>
	<?php
}
add_action( 'wp_head', 'modelo_custom_css' );