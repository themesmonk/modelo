<?php if ( has_post_format( 'video' )) {
	
		echo theme_oembed_videos();
		
} else if ( has_post_format( 'quote' )) { ?>

		<?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('featured-thumb1'); ?>
			<?php } else { ?><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><img src="<?php echo get_template_directory_uri(); ?>/img/placehold-505x379.png" alt="blog image"></a><?php } ?>
			
	  <?php $content = trim(get_the_content());
       // Make sure content isn't empty
       if (!$content == "") {
           // Take each new line and put into an array (for multiple quotes)
           $quote_array = explode( "\n", $content);
           // Get the first quote and do something with it
           $first_quote = array_shift( $quote_array ); ?>
		   <div class="tm_blockquote">
				<div class="tm_helper">
					<div class="tm_middle">
						<div>							
							<?php echo $first_quote; ?>	
						</div>
					</div>
				</div>
			</div>
        <?php }
		
} else if (has_post_format('audio')) { ?>

        <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('featured-thumb1'); ?>
			<?php } else { ?><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><img src="<?php echo get_template_directory_uri(); ?>/img/placehold-505x379.png" alt="blog image"></a><?php } ?>
			<div class="audio-player">
				<?php $audio_url = get_post_meta($post->ID, 'link', true); //this is getting your custom field url ?>
				<?php $attr = array(
					'src'      => $audio_url,
					'loop'     => '',
					'autoplay' => '',
					'preload' => 'none'
					);
				echo wp_audio_shortcode( $attr ); ?>
				<?php do_shortcode('[audio URL=". $audio_url ."]') ?>
			</div>

<?php } else if (has_post_format('gallery')) {
?>
		<div class="flexslider">
			<?php
				 // Retrieve all galleries of this post
				$galleries = get_post_galleries_images( $post );

				$image_list = '<ul class="slides">';

				// Loop through all galleries found
				foreach( $galleries as $gallery ) {

					// Loop through each image in each gallery
					foreach( $gallery as $image ) {

						$image_list .= '<li><img src=' . $image . '></li>';

					}

				}

				$image_list .= '</ul>';
				echo $image_list;
			?>
	</div><!-- #slider -->
	
<?php  } else if (has_post_format('link')) {
	
   if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('featured-thumb1', array('class' => 'formataimg')); ?>
			<?php } else { ?><a class="formataimg" href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><img src="<?php echo get_template_directory_uri(); ?>/img/placehold-505x379.png" alt="blog image"></a><?php }?>
			<div class="theLink text-center">
				<div class="tm_helper">
					<div class="tm_middle">
						<a href="<?php echo get_link_url(); ?>"><?php echo get_link_url(); ?></a>
					</div>
				</div>
			</div>
<?php }else {
   if ( has_post_thumbnail() ) { ?>
			<a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><?php the_post_thumbnail('featured-thumb1'); ?></a><?php
		} else { ?><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><img src="<?php echo get_template_directory_uri(); ?>/img/placehold-505x379.png" alt="blog image"></a><?php }
}