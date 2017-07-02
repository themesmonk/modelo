<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package modelo
 */

 get_modelo_headers(); ?>

  <div id="content" class="site-content">
    
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
          <div class="container">
            <div class="row">
				<div class="<?php if ( get_post_meta( get_the_ID(), 'modelo_post_single_layout', true )=='full' ) : echo 'col-md-12';?><?php else:?>col-md-9<?php endif; ?> <?php if ( get_post_meta( get_the_ID(), 'modelo_post_single_layout', true )=='left' ) : echo 'pull-right'; endif; ?>">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'single' ); ?>
							
							<div class="post-nav single navigation">
								<?php $prevPost = get_previous_post(true);
										if($prevPost) { ?>
							  <div class="nav-box previous">
								<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" rel="prev">
								<span class="pnav"><?php _e('Previous Post', 'modelo'); ?></span>
								  <?php previous_post_link('%link',"$prevthumbnail  <span class='h4'>%title</span>", TRUE); ?>
								</a>
							  </div>
							  <?php } $nextPost = get_next_post(true);
							  
							  if($nextPost) { ?>
							  <div class="nav-box next text-right">
								<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" rel="next">
								  <span class="pnav"><?php _e('Next Post', 'modelo'); ?></span>
								  <?php next_post_link('%link',"$nextthumbnail  <span class='h4'>%title</span>", TRUE); ?>
								</a>
							  </div>
							  <?php } ?>
							</div><!-- .post-nav .navigation -->

							<?php 

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div><!-- .col-md-9 -->
					
					<?php if ( get_post_meta( get_the_ID(), 'modelo_post_single_layout', true )=='full' ): else: ?>
					<div class="col-md-3">
						<?php get_sidebar(); ?>
					</div><!-- .col-md-3 -->
					<?php endif;?>
					
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
      

  </div><!-- /.site-content /#content -->

<?php
get_footer();