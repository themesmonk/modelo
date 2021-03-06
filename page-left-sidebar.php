<?php
/**
 *Template Name: Page Left Sidebar
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package modelo
 */

 get_modelo_headers(); ?>
  <div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<?php
							while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							endwhile; // End of the loop.
						?>
	
					</div><!-- .col-md-8 -->
					
					<div class="col-md-3 col-md-pull-9">
						<?php if ( get_post_meta( get_the_ID(), 'modelo_page_sidebar_toggle', true )=='shop' ): ?>
							<?php get_sidebar('shop'); ?>
							<?php else: ?>
							<?php get_sidebar(); ?>
						<?php endif; ?>
					</div><!-- .col-md-3 -->
					
				</div><!-- .row -->
				
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
  </div><!-- /.site-content /#content -->
<?php
get_footer();
