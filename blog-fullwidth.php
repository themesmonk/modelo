<?php
/**
 *Template Name: Blog Fullwidth
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package modelo
 */
 get_modelo_headers();
?>

  <div id="content" class="site-content">
    
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
          <div class="container">
            <div class="row">
				<div class="col-md-12">
					<?php
						if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						modelo_numeric_posts_nav();

						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>

					</div><!-- .col-md-12 -->					
					
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
      

  </div><!-- /.site-content /#content -->

<?php
get_footer();
