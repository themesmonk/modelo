<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package modelo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt-block'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<div class="entry-thumbnail"  itemprop="image" style="background-image: url(<?php if ( has_post_thumbnail() ) {  the_post_thumbnail_url( 'featured-thumb1' ); } else { echo get_template_directory_uri(); ?>/img/placehold-505x379.png <?php } ?>) ;">
	<?php get_template_part( 'inc/post-formats' ); ?>

	</div><!-- .entry-thumbnail -->

	<div class="entry-content excerpt blog1" itemprop="text">
	  <h2 class="entry-title" itemprop="headline"><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<p class="exer-par"><?php echo modelo_excerpt(40);?></p>
		<a href="<?php echo esc_url( get_permalink()) ?>" class="readmore"><?php _e('Continue reading..', 'modelo'); ?></a>
	  
	  <div class="entry-meta exercpt" itemprop="datePublished">
		<p class="date"><?php the_time('j') ?></p>
		<p class="month"><?php the_time('M') ?></p>
	  </div>
	  <?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'modelo' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->





