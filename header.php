<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modelo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'modelo' ); ?></a>
	
  <header id="masthead" class="site-header">
  
<?php if (get_theme_mod('show_top_infobar') == '1') : else: ?>
    <div id="top-infobar">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="top-socialicons">
              <ul class="social-icons list-inline">
			  
				<?php if (get_theme_mod('model_socialicon_facebook') == '') :  else: ?>
					<li class="facebook"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_googleplus') == '') :  else: ?>
					<li class="googleplus"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_googleplus')); ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_twitter') == '') :  else: ?>
					<li class="twitter"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_linkedin') == '') :  else: ?>
					<li class="linkedin"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_linkedin')); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				
                <?php if (get_theme_mod('model_socialicon_pinterest') == '') :  else: ?>
					<li class="pinterest"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_pinterest')); ?>"><i class="fa fa-pinterest-p"></i></a></li>
				<?php endif; ?>
				
                <?php if (get_theme_mod('model_socialicon_youtube') == '') :  else: ?>
					<li class="youtube"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_youtube')); ?>"><i class="fa fa-youtube-play"></i></a></li>
				<?php endif; ?>
				
              </ul><!-- /.social-icons -->
            </div><!-- /.top-socialicons -->
          </div><!-- /.col-md-4 -->

          <div class="col-md-8">
              <ul class="top-right-info list-inline pull-right">
				<?php if (get_theme_mod('show_phone_number') == '1') : else: ?>
					<li><i class="fa fa-headphones"></i> <span><?php if (get_theme_mod('phone_number_text') == '') :?><?php _e('+123 - 456 - 789 - 876', 'modelo'); ?><?php else: ?><?php echo modelo_escape_html(get_theme_mod('phone_number_text')); ?><?php endif; ?></span></li>
				<?php endif; ?>
                <?php if (get_theme_mod('show_signup_login') == '1') : else: ?>
				
					<?php if ( is_user_logged_in() ) { ?>
					<li><span class="text-uppercase"><a href="<?php echo get_edit_user_link(); ?>"><i class="fa fa-user"></i><?php $current_user = wp_get_current_user(); printf( 'Hello %s !', esc_html( $current_user->user_firstname ) ); ?></a> </span></li>
					<?php } else { ?>
					<li><span class="text-uppercase"><a href="<?php echo modelo_escape_html(get_theme_mod('login_page_url')); ?>"><i class="fa fa-user"></i><?php _e(' Login', 'modelo'); ?></a> | <a href="<?php echo modelo_escape_html(get_theme_mod('signup_page_url')); ?>"><i class="fa fa-user-plus"></i><?php _e(' Signup', 'modelo'); ?></a></span></li>
					<?php } ?>
					
				<?php endif; ?>
				<?php if (class_exists( 'WooCommerce' )): ?>
					<li class="cart-button hvr-sweep-to-right">
					<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-bag"></i><?php echo sprintf (_n( ' %d item', ' %d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
					</li>
				<?php else: endif; ?>

              </ul>
          </div><!-- /.col-md-8 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /#top-infobar -->
<?php endif; ?>

    <div class="main-header">
      <div class="container">

        <div class="row">

          <div class="col-md-3">
            <div class="site-branding">
			<?php if ( get_header_image() ) : ?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
				</h1>
			<?php else: // End header image check. ?>
			
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			<?php endif; // End header image check. ?>
	
              </div><!-- .site-branding -->
            </div><!-- .col-md-3 -->

            <div class="col-md-6">
			
				<div id="dl-menu3" class="dl-menuwrapper">
					<a class="dl-trigger" href="#"><i class="fa fa-bars"></i><span><?php _e('MENU', 'modelo'); ?></span></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' =>'ul', 'menu_class' => 'dl-menu' ) ); ?>
				</div><!-- /dl-menuwrapper -->
			
              <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Mobile Menu', 'modelo' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_id' => 'primary-menu', 'container_class' => 'menu', 'menu_class' => 'nav-menu' ) ); ?>
              </nav><!-- #site-navigation -->
              </div><!-- .col-md-6 -->
<div class="clearfix"></div>
          <div class="col-md-3">
            <div class="search-main">
              <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label>
                  <span class="screen-reader-text"><?php _e('Search for:', 'modelo'); ?></span>
                  <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search for:">
                </label>
                <button type="submit" class="search-submit fa fa-search" value="<?php echo esc_attr_x( 'Search', 'Submit' ); ?>"></button>
              </form><!-- .search-form -->
            </div><!-- .search-main -->
          </div><!-- .col-md-3 -->

        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .main-header -->
  </header><!-- #masthead -->	
  
	
	
	
	
	
	
	
	

