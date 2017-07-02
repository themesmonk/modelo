<?php
/**
 * The template for displaying archive pages.
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
					<div class="<?php if (get_theme_mod('modelo_layout_sidebar_position') == 'no'): echo 'col-md-12'; else: echo 'col-md-9'; endif; ?> <?php if (get_theme_mod('modelo_layout_sidebar_position') == 'left'): echo 'col-md-push-3'; endif; ?>">
						<?php
							if ( have_posts() ) : ?>

								<header class="page-header">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile;

								the_posts_navigation();

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
