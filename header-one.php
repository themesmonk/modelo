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
	
  <header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
  
<?php if (get_theme_mod('show_top_infobar') == '1') : else: ?>
    <div id="top-infobar2">
      <div class="container">
        <div class="row">
          

          <div class="col-md-6 col-sm-4">
			<div class="dl-mobile-menu">
				<div id="dl-menu" class="dl-menuwrapper" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
					<a class="dl-trigger" href="#"><i class="fa fa-bars"></i><span><?php _e('SHOP BY BRANDS', 'modelo'); ?></span></a>
					<?php wp_nav_menu( array( 'theme_location' => 'tophead', 'container' =>'ul', 'menu_class' => 'dl-menu' ) ); ?>
				</div><!-- /dl-menuwrapper -->
			</div><!-- /.dl-mobile-menu -->
          </div><!-- /.col-md-6 -->

          <div class="col-md-6 col-sm-8">
              <ul class="top-right-info2 list-inline pull-right">
			  <?php if (get_theme_mod('show_signup_login') == '1') : else: ?>
					<?php if ( is_user_logged_in() ) { ?>
					<li><span class="text-uppercase"><a href="<?php echo get_edit_user_link(); ?>"><i class="fa fa-user"></i><?php $current_user = wp_get_current_user(); printf( 'Hello %s !', esc_html( $current_user->user_firstname ) ); ?></a></span></li>
					<?php } else { ?>
					<li><span class="text-uppercase"><a href="<?php echo modelo_escape_html(get_theme_mod('login_page_url')); ?>"><i class="fa fa-user"></i><?php _e(' Login', 'modelo'); ?></a> | <a href="<?php echo modelo_escape_html(get_theme_mod('signup_page_url')); ?>"><i class="fa fa-user-plus"></i><?php _e(' Signup', 'modelo'); ?></a></span></li>
					<?php } ?>
				<?php endif; ?>
				<?php if (get_theme_mod('show_phone_number') == '1') : else: ?>
					<li><i class="fa fa-headphones"></i> <span><?php if (get_theme_mod('phone_number_text') == '') :?><?php _e('+123 - 456 - 789 - 876', 'modelo'); ?><?php else: ?><?php echo modelo_escape_html(get_theme_mod('phone_number_text')); ?><?php endif; ?></span></li>
				<?php endif; ?>
              </ul>
          </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /#top-infobar -->
<?php endif; ?>
	

    <div id="logo-block" class="header-default">
      <div class="container">
        <div class="row">
			<div class="col-md-4">	
				<div class="logo">

				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
					</a>
				<?php else: // End header image check. ?>

				<h1 class="site-title"  itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				<?php endif; // End header image check. ?>
				</div>
			</div>
			
			<div class="col-md-8">
				<div class="head-items">
				
					<?php if (class_exists( 'WooCommerce' )): ?>
					<div class="woo-wishlist"><a href="#"><i class="fa fa-heart"></i><?php _e(' Wishlist (0)', 'modelo'); ?></a></div>
					<div class="woo-cart2 hvr-sweep-to-right">
					<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-bag"></i><?php echo sprintf (_n( ' %d item', ' %d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
					</div>
					<?php else: endif; ?>
					
					<div class="search-wrap2">
						<div class="search-main2">
						  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
							<i class="fa fa-search"></i>
								<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
								<input type="search" class="search-field"
									placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
									value="<?php echo get_search_query() ?>" name="s"
									title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
							<button type="submit" class="search-submit"
								value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /><?php _e('Search', 'modelo'); ?></button>
						</form><!-- .search-form -->
						</div><!-- .search-main2 -->
					</div><!-- .search wrap2 -->
					
					</div><!-- .head-items -->
            </div><!-- .col-md-8 -->
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /#logo-block -->


    <div id="menu-2-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
			<div id="dl-menu2" class="dl-menuwrapper">
			  <a class="dl-trigger" href="#"><i class="fa fa-bars"></i><span><?php _e('MENU', 'modelo'); ?></span></a>
			  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' =>'ul', 'menu_class' => 'dl-menu' ) ); ?>
			  </div><!-- /dl-menuwrapper -->
            <nav id="site-navigation" class="main-navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_id' => 'primary-menu', 'container_class' => 'menu', 'menu_class' => 'nav-menu' ) ); ?><!-- .primary-menu -->
            </nav><!-- #site-navigation -->
          </div><!-- .col-md-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .menu-2-wrap -->
  </header><!-- #masthead -->