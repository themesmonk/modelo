<?php  get_modelo_headers(); ?>
<?php if (get_theme_mod('modelo_homepage_Slider_hide') == '1') : else: ?>
    <section id="home-slider">
      
            <div id="sliders-wrap" class="flexslider-home">
              <!-- Wrapper for slides -->
              <ul class="slides">
			  
				<?php if (get_theme_mod('modelo_homepage_slider_image1') == '') : ?>
                <li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="Slider Image" />
					<div class="flex-caption hide1">
						<h2 class="caption-head"><?php esc_html_e( 'Winter Fashion', 'modelo' ); ?></h2>
						<div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								<h3 class="top-sub-head"><?php esc_html_e( 'New Collection', 'modelo' ); ?></h3>
								<h2 class="caption-head2"><?php esc_html_e( 'Winter Fashion', 'modelo' ); ?></h2>
								<p class="caption-desc"><?php esc_html_e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', 'modelo' ); ?></p>
								<a href="#" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link2')); ?></a>
							</div>
						</div>
					</div>
					</div>
                </li>
				<?php else: ?>
				<li>
                  <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image1')); ?>" alt="Slider Image" />
				  
					<div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								<!-- Caption Sub Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_tshead1') == '') : else: ?>
									<h3 class="top-sub-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_tshead1')); ?></h3>
								<?php endif; ?><!-- Caption Sub Heading Ends -->
								
								<!-- Caption Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_heading1') == '') : else: ?>
									<h2 class="caption-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_heading1')); ?></h2>
								<?php endif; ?><!-- Caption Heading Ends -->
								
								<!-- Caption Description -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc1') == '') : else: ?>
									<p class="caption-desc"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_desc1')); ?></p>
								<?php endif; ?><!-- Caption Description Ends -->
								
								<!-- Caption Button -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc1') == '') : else: ?>
									<a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link1')); ?>" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_button_text1')); ?></a>
								<?php endif; ?><!-- Caption Button Ends -->
							</div><!-- /col-md-12 -->
						</div><!-- /container -->
					</div><!-- /flex-caption hide1 -->
                </li>
				<?php endif; ?>
				
				
				<?php if (get_theme_mod('modelo_homepage_slider_image2') == '') : else: ?>
				<li>
                  <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image2')); ?>" alt="Slider Image" />
				  
				  <div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								
								<!-- Caption Sub Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_tshead2') == '') : else: ?>
									<h3 class="top-sub-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_tshead2')); ?></h3>
								<?php endif; ?><!-- Caption Sub Heading Ends -->
								
								<!-- Caption Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_heading2') == '') : else: ?>
									<h2 class="caption-head2"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_heading2')); ?></h2>
								<?php endif; ?><!-- Caption Heading Ends -->
								
								<!-- Caption Description -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc2') == '') : else: ?>
									<p class="caption-desc"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_desc2')); ?></p>
								<?php endif; ?><!-- Caption Description Ends -->
								
								<!-- Caption Button -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc2') == '') : else: ?>
									<a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link2')); ?>" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_button_text2')); ?></a>
								<?php endif; ?><!-- Caption Button Ends -->
								
							</div>
							
						</div>
					</div>
                </li>
				<?php endif; ?>

				
				<?php if (get_theme_mod('modelo_homepage_slider_image3') == '') : else: ?>
				<li>
                  <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image3')); ?>" alt="Slider Image" />
				  
					<div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								<!-- Caption Sub Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_tshead3') == '') : else: ?>
									<h3 class="top-sub-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_tshead3')); ?></h3>
								<?php endif; ?><!-- Caption Sub Heading Ends -->
								
								<!-- Caption Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_heading3') == '') : else: ?>
									<h2 class="caption-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_heading3')); ?></h2>
								<?php endif; ?><!-- Caption Heading Ends -->
								
								<!-- Caption Description -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc3') == '') : else: ?>
									<p class="caption-desc"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_desc3')); ?></p>
								<?php endif; ?><!-- Caption Description Ends -->
								
								<!-- Caption Button -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc3') == '') : else: ?>
									<a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link3')); ?>" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_button_text3')); ?></a>
								<?php endif; ?><!-- Caption Button Ends -->
							</div><!-- /col-md-12 -->
						</div><!-- /container -->
					</div><!-- /flex-caption hide1 -->
                </li>
				<?php endif; ?>

				
				<?php if (get_theme_mod('modelo_homepage_slider_image4') == '') : else: ?>
				<li>
                  <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image4')); ?>" alt="Slider Image" />

					<div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								<!-- Caption Sub Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_tshead4') == '') : else: ?>
									<h3 class="top-sub-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_tshead4')); ?></h3>
								<?php endif; ?><!-- Caption Sub Heading Ends -->
								
								<!-- Caption Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_heading4') == '') : else: ?>
									<h2 class="caption-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_heading4')); ?></h2>
								<?php endif; ?><!-- Caption Heading Ends -->
								
								<!-- Caption Description -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc4') == '') : else: ?>
									<p class="caption-desc"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_desc4')); ?></p>
								<?php endif; ?><!-- Caption Description Ends -->
								
								<!-- Caption Button -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc4') == '') : else: ?>
									<a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link4')); ?>" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_button_text4')); ?></a>
								<?php endif; ?><!-- Caption Button Ends -->
							</div><!-- /col-md-12 -->
						</div><!-- /container -->
					</div><!-- /flex-caption hide1 -->
					
                </li>
				<?php endif; ?>

				
				<?php if (get_theme_mod('modelo_homepage_slider_image5') == '') : else: ?>
				<li>
                  <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image5')); ?>" alt="Slider Image" />

					<div class="flex-caption hide1">
						<div class="container">
							<div class="col-md-12">
								<!-- Caption Sub Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_tshead5') == '') : else: ?>
									<h3 class="top-sub-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_tshead5')); ?></h3>
								<?php endif; ?><!-- Caption Sub Heading Ends -->
								
								<!-- Caption Heading -->
								<?php if (get_theme_mod('modelo_homepage_slider_heading5') == '') : else: ?>
									<h2 class="caption-head"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_heading5')); ?></h2>
								<?php endif; ?><!-- Caption Heading Ends -->
								
								<!-- Caption Description -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc5') == '') : else: ?>
									<p class="caption-desc"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_desc5')); ?></p>
								<?php endif; ?><!-- Caption Description Ends -->
								
								<!-- Caption Button -->
								<?php if (get_theme_mod('modelo_homepage_slider_desc5') == '') : else: ?>
									<a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_image_link5')); ?>" class="caption-button hvr-sweep-to-right"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_button_text5')); ?></a>
								<?php endif; ?><!-- Caption Button Ends -->
							</div><!-- /col-md-12 -->
						</div><!-- /container -->
					</div><!-- /flex-caption hide1 -->
				  
                </li>
				<?php endif; ?>

				
                
              </ul>
      </div><!-- .container -->
    </section><!-- .slider -->
	<?php endif; ?>

	
	<?php if (get_theme_mod('modelo_homepage_shopcat_hide') == '1') : else: ?>
    <section id="home-imagecat">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="imagecat-inner">
              <ul class="cat-list list-inline">

                <li class="first wow fadeInUp" data-wow-delay=".5s" data-wow-offset="200">
                  <div class="item-imgcat">
				  
					<?php if (get_theme_mod('modelo_homepage_shopcat_image1') == '') :?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cat-img-first.jpg">
					<?php else: ?>
                    <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_image1')); ?>">
					<?php endif; ?>
					
                    <span id="overlay" class="cat-overlay"></span>
					<?php if (get_theme_mod('modelo_homepage_shopcat_text1') == '') :?>
                    <span class="capbutton fadeInUp text-center"><a href="#" class=""><?php _e('Fashion', 'modelo'); ?></a></span>
					<?php else: ?>
                    <span class="capbutton fadeInUp text-center"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_link1')); ?>" class=""><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_text1')); ?></a></span>
					<?php endif; ?>
					
                  </div><!-- .item-imgcat -->
                </li>

                <li class="second wow fadeInDown" data-wow-delay=".7s" data-wow-offset="200">
                  <div class="item-imgcat">
				  
					<?php if (get_theme_mod('modelo_homepage_shopcat_image2') == '') :?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cat-img-second.jpg">
					<?php else: ?>
                    <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_image2')); ?>">
					<?php endif; ?>
					
                    <span id="overlay" class="cat-overlay"></span>
					<?php if (get_theme_mod('modelo_homepage_shopcat_text2') == '') :?>
                    <span class="capbutton fadeInUp text-center"><a href="#" class=""><?php _e('Bags', 'modelo'); ?></a></span>
					<?php else: ?>
                    <span class="capbutton fadeInUp text-center"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_link2')); ?>" class=""><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_text2')); ?></a></span>
					<?php endif; ?>
				 
                  </div><!-- .item-imgcat -->
                </li>

                <li class="third wow fadeInRight" data-wow-delay=".9s" data-wow-offset="200">
                  <div class="item-imgcat">
				  
					<?php if (get_theme_mod('modelo_homepage_shopcat_image3') == '') :?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cat-img-third.jpg">
					<?php else: ?>
                    <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_image3')); ?>">
					<?php endif; ?>
					
                    <span id="overlay" class="cat-overlay"></span>
					<?php if (get_theme_mod('modelo_homepage_shopcat_text3') == '') :?>
                    <span class="capbutton fadeInUp text-center"><a href="#" class=""><?php _e('Shirts', 'modelo'); ?></a></span>
					<?php else: ?>
                    <span class="capbutton fadeInUp text-center"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_link3')); ?>" class=""><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_text3')); ?></a></span>
					<?php endif; ?>

                  </div><!-- .item-imgcat -->
                </li>

                <li class="fourth wow fadeInUp" data-wow-delay="1s" data-wow-offset="50">
                  <div class="item-imgcat">
				  
					<?php if (get_theme_mod('modelo_homepage_shopcat_image4') == '') :?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cat-img-fourth.jpg">
					<?php else: ?>
                    <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_image4')); ?>">
					<?php endif; ?>
					
                    <span id="overlay" class="cat-overlay"></span>
					<?php if (get_theme_mod('modelo_homepage_shopcat_text4') == '') :?>
                    <span class="capbutton fadeInUp text-center"><a href="#" class=""><?php _e('Footware', 'modelo'); ?></a></span>
					<?php else: ?>
                    <span class="capbutton fadeInUp text-center"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_link4')); ?>" class=""><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_text4')); ?></a></span>
					<?php endif; ?>
				  
                  </div><!-- .item-imgcat -->
                </li>

                <li class="fifth wow fadeInRight" data-wow-delay="1.2s" data-wow-offset="50">
                  <div class="item-imgcat">
				  
					<?php if (get_theme_mod('modelo_homepage_shopcat_image5') == '') :?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cat-img-fifth.jpg">
					<?php else: ?>
                    <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_image5')); ?>">
					<?php endif; ?>
					
                    <span id="overlay" class="cat-overlay"></span>
					<?php if (get_theme_mod('modelo_homepage_shopcat_text5') == '') :?>
                    <span class="capbutton fadeInUp text-center"><a href="#" class=""><?php _e('Pants', 'modelo'); ?></a></span>
					<?php else: ?>
                    <span class="capbutton fadeInUp text-center"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_link5')); ?>" class=""><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shopcat_text5')); ?></a></span>
					<?php endif; ?>
					
                  </div><!-- .item-imgcat -->
                </li>



              </ul><!-- /.cat-list .list-inline -->
            </div><!-- /.imagecat-inner -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.home-image-cat -->
	<?php endif; ?>

	
	
<?php if ( class_exists( 'WooCommerce' ) ):
 if (is_active_sidebar('product-widget-1')): ?>
    <!-- This is Product 1 Section !-->
    <section id="feature-products" class="prod1-slider" data-stellar-background-ratio="0.1" style="background-image:url(<?php if (get_theme_mod('modelo_homepage_slider_crousel') == '') : echo get_template_directory_uri(); ?>/img/city-woman-view-blue-sky.jpeg<?php else: echo modelo_escape_html(get_theme_mod('modelo_homepage_slider_crousel')); endif; ?>);background-position: 50% 0;background-attachment: fixed;background-repeat: no-repeat;position: relative;">
        <div class="ak-container">
            <?php dynamic_sidebar('product-widget-1'); ?>
        </div>
    </section><!-- end product-slider wrapper-->
<?php endif; endif; ?>
	
	
	
	
	<?php if ( class_exists( 'WooCommerce' ) ): ?>
	<?php if (get_theme_mod('modelo_homepage_shop_hide') == '1') : else: ?>
    <section id="feature-products">
      <div class="container">
	  
		<?php if (get_theme_mod('modelo_homepage_shoplink_hide') == '1') : else: ?>
        <div class="row">
            <div class="category-title">
              <div class="col-md-6">
				
				<?php if (get_theme_mod('modelo_homepage_shop_text1') == '') :?>
				<div class="text-left"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_link1')); ?>"><?php _e('Trending this week.', 'modelo'); ?></a></div>
				<?php else:?>
                <div class="text-left"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_link1')); ?>"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_text1')); ?></a></div>
				<?php endif; ?>

              </div>
              <div class="col-md-6">
			  
				<?php if (get_theme_mod('modelo_homepage_shop_text2') == '') :?>
                <div class="text-right"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_link2')); ?>"><?php _e('View all products.', 'modelo'); ?></a></div>
				<?php else:?>
                <div class="text-right"><a href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_link2')); ?>"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_shop_text2')); ?></a></div>
				<?php endif; ?>
              </div>
            </div><!-- /.category-title -->
        </div><!-- /.row -->
		<?php endif; ?>
		
        <div class="row">
          <div class="col-md-12">
              <ul class="woo-products list-inline">
				
				<?php
				$count = 0;
				$noproducts = modelo_escape_html(get_theme_mod('modelo_homepage_shop_noofproduct'));
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => $noproducts
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post(); 
						$count+=0.1;
						?>
						
                <li class="item type-product wow fadeIn" data-wow-delay="<?php echo $count ?>s">
                  
				<?php if($product->is_on_sale() ) {?>
					<span class="onsale"><?php _e('Sale!', 'modelo'); ?></span>
				<?php } else {} ?>
				
                  <div class="shop-thumb text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a></div><!-- /.shop-thumb -->
                  <div class="product-bottom">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php echo $product->get_categories( ', ', '<span class="product-cat">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'modelo' ) . ' ', '.</span>' ); ?>
					
					<?php global $product;
							if ( $price_html = $product->get_price_html() ) :?>
                    <a class="pricing" href="#"><?php echo $price_html; ?></a>
					<?php endif; ?>
					
					<div class="product-rating">
						<?php if ( $rating_html = $product->get_rating_html() ) { ?>
							<?php echo $rating_html; ?>
						<?php } else {
						echo '<div class="star-rating" title="Rated 5.00 out of 5"></div>' ;
						}?>
					</div>
                    <div class="cwqbox wow fadeInRight">
                      <ul class="list-inline">
                        <li class="cart"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></li>
                        
                        <li class="quickview"><a href="#" class="button yith-wcqv-button" data-product_id="<?php echo get_the_ID(); ?>" style="zoom: 1;"><i class="fa fa-eye"></i></a></li>						
                      </ul><!-- /.list-inline -->
                    </div><!-- /.cwqbox -->
                  </div><!-- /.product-bottom -->
                </li><!-- /.item type-product -->
				
				<?php endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata(); ?>
				
              </ul><!-- /.woo-products .list-inline -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.site-content /#content -->
	<?php endif; endif; ?>
	
	<?php if (get_theme_mod('modelo_homepage_bottom_banner_hide') == '1') : else: ?>
    <section id="two-col-banner" data-stellar-background-ratio="0.1" style="background-image:url(<?php if (get_theme_mod('modelo_homepage_bb_parallax') == '') : echo get_template_directory_uri(); ?>/img/pexels-photo.jpeg<?php else: echo modelo_escape_html(get_theme_mod('modelo_homepage_bb_parallax')); endif; ?>);background-position: 50% 0;background-attachment: fixed;background-repeat: no-repeat;position: relative;">
      <div class="container">
        <div class="row">
		
          <div class="col-md-6 nogap left">
		  
			<?php if (get_theme_mod('modelo_homepage_btmbnner_image1') == ''): ?>
            <div class="banner-left text-center">
              <span class="overlay"></span>
			  <?php if (get_theme_mod('modelo_homepage_bottombanner_text1') == ''): ?>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link1')); ?>"><span class="button-colbanner"><?php _e('Men&#39;s Collection', 'modelo'); ?></span></a></span>
			  <?php else: ?>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link1')); ?>"><span class="button-colbanner"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_text1')); ?></span></a></span>
			  <?php endif; ?>
			  
              <img src="<?php echo get_template_directory_uri(); ?>/img/banner-left.jpg" alt="banner-left">
            </div><!-- /.banner-left text-center -->
			<?php else: ?>
			
			<div class="banner-left text-center">
              <span class="overlay"></span>
			  
			  <?php if (get_theme_mod('modelo_homepage_bottombanner_text1') == ''): ?>
              <span class="inner-border"><a class="banner-text" href="#"><span class="button-colbanner"><?php _e('Men&#39;s Collection', 'modelo'); ?></span></a></span>
			  <?php else: ?>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link1')); ?>">
			  <span class="button-colbanner"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_text1')); ?></span></a></span>
			  <?php endif; ?>
			  
              <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_btmbnner_image1')); ?>" alt="banner-left">
			  
            </div><!-- /.banner-left text-center -->
			<?php endif; ?>
			
			
          </div><!-- /.col-md-6 nogap left -->
		  
          <div class="col-md-6 nogap right">
		  
			<?php if (get_theme_mod('modelo_homepage_btmbnner_image2') == ''): ?>
            <div class="banner-right text-center">
              <span class="overlay"></span>
			  
			  <?php if (get_theme_mod('modelo_homepage_bottombanner_text2') == ''): ?>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link2')); ?>"><span class="button-colbanner"><?php _e('Women&#39;s Collection', 'modelo'); ?></span></a></span>
			  <?php else: ?>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link2')); ?>"><span class="button-colbanner"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_text1')); ?></span></a></span>
			  <?php endif; ?>
			  
              <img src="<?php echo get_template_directory_uri(); ?>/img/banner-right.jpg" alt="banner-right">
            </div><!-- /.banner-right text-center -->
			
			<?php else: ?>
			
			<div class="banner-right text-center">
              <span class="overlay"></span>
              <span class="inner-border"><a class="banner-text" href="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_link2')); ?>"><span class="button-colbanner"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_bottombanner_text2')); ?></span></a></span>
              <img src="<?php echo modelo_escape_html(get_theme_mod('modelo_homepage_btmbnner_image2')); ?>" alt="banner-right">
            </div><!-- /.banner-right text-center -->
			<?php endif; ?>
			
          </div><!-- /.col-md-6 nogap right -->
		  
        </div>
      </div>
    </section><!-- /#two-col-banner -->
	<?php endif; ?>

<?php if (get_theme_mod('modelo_homepage_blog_hide') == '1') : else: ?>	
<section id="tm-blog">
	<div class="container">
	
		<?php if (get_theme_mod('modelo_homepage_blogsection_title') == ''): else:?>
		<div class="row">
			<div class="col-md-12">
				<div class="text-left blog-title"><a class="prod-title"><?php echo modelo_escape_html(get_theme_mod('modelo_homepage_blogsection_title')); ?></a></div>
			</div><!-- col-md-12 -->
		</div><!-- row -->
		<?php endif; ?>
		
		<div class="row">
			<?php
			$post_count = get_theme_mod('modelo_homepage_blogpost_count');
			if ($post_count=='') {
				$latest = new WP_Query('showposts=3');
			} else {
			$latest = new WP_Query('showposts=' . $post_count . ''); }?>
			<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="tm-blog-post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
					<div class="tm-post-thumb" itemprop="image">
						<?php if ( has_post_thumbnail() ) {?>
						<img src="<?php the_post_thumbnail_url( 'featured-thumb2' );?>" alt="<?php the_title(); ?>"/>
						<?php } else {?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placehold-360x245.png" alt="<?php the_title(); ?>"/> 
						<?php } ?>
					</div>
					<div class="tm-post-bottom-content">
						<h2 itemprop="headline"><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p class="tm-excerpt">
							<?php echo modelo_excerpt(20);?>
						</p>
						<ul class="tm-meta">
							<li class="tm-date-time"><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_time('F j, Y') ?></span></li>
							<li class="tm-comments pull-right"><a href="<?php comments_link(); ?>"><i class="fa fa-comments-o" aria-hidden="true"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a></li>
						</ul>
					</div><!-- /.tm-post-bottom-content -->
				</div><!-- /.tm-blog-post -->
			</div><!-- /.col-md-4 -->
			<?php endwhile; ?>
			
			
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.tm-blog -->
<?php endif; ?>	
	
<?php get_footer(); ?>