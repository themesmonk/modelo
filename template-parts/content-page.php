<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package modelo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?> >

	  <div class="entry-content single">
		  
		  <header class="entry-header">
			<?php the_title( '<h2 class="entry-title single text-center"  itemprop="headline">', '</h2>' ); ?>
		  </header>
		 
		<div class="entry-post-content" itemprop="text">
		  <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'modelo' ),
				'after'  => '</div>',
			) );
		?>

		</div><!-- .entry-post-content-->
		
		<div class="page-links"></div>
	  </div><!-- .entry-content single-->
	</article><!-- #post-## -->
