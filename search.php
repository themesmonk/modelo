<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'modelo' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
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
get_sidebar();
get_footer();
