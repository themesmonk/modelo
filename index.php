<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				<div class="<?php if (get_theme_mod('modelo_layout_sidebar_position') == 'no'): echo 'col-md-12'; else: echo 'col-md-9'; endif; ?> <?php if (get_theme_mod('modelo_layout_sidebar_position') == 'left'): echo 'col-md-push-3'; endif; ?>">
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
					
					<?php if (get_theme_mod('modelo_layout_sidebar_position') == 'no'): else: ?>
					<div class="col-md-3 <?php if (get_theme_mod('modelo_layout_sidebar_position') == 'left'): echo 'col-md-pull-9'; endif; ?>">
						<?php get_sidebar(); ?>
					</div><!-- .col-md-3 -->
					<?php endif; ?>
					
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
      

  </div><!-- /.site-content /#content -->

<?php
get_footer();















