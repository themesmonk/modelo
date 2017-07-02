<?php
/**
 *Template Name: Page Fullwidth
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
					<div class="col-md-12">
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
				</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
  </div><!-- /.site-content /#content -->
<?php
get_footer();
