
<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?> >

	  <div class="entry-content single">
		  <div class="entry-meta single">
			<ul class="list-inline text-center">
			  <li class="entry-meta-date" itemprop="datePublished"><a href="#"><?php the_time('F j, Y') ?></a><i class="fa fa-circle"></i></li>
			  <li class="entry-meta-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php _e('BY ', 'modelo'); ?><?php the_author(); ?></a><i class="fa fa-circle"></i></li>
			  <li class="entry-meta-comments"><a href="#"><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></a></li>
			</ul>
		  </div>
		  <header class="entry-header">
			<h1 class="entry-title single text-center"  itemprop="headline"><a href="<?php echo esc_url( get_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		  </header>
		  <div class="header-social">
			<ul class="social-icons list-inline text-center">
			  <li><a href="//www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink()) ?>" class="facebook" target="_blank"><?php _e('Facebook ', 'modelo'); ?><span class="share-count"></span></a></li>
			  <li><a href="//plus.google.com/share?url=<?php echo esc_url( get_permalink()) ?>" class="google-plus" target="_blank"><?php _e('Google +1', 'modelo'); ?></a></li>
			  <li><a href="//twitter.com/share?url=<?php echo esc_url( get_permalink()) ?>" class="twitter" target="_blank"><?php _e('Twitter ', 'modelo'); ?><span class="share-count"></span></a></li>
			  <li><a href="//pinterest.com/pin/create/button/?url=<?php echo esc_url( get_permalink()) ?>&media={MEDIA}&description=<?php echo modelo_excerpt(40);?>" class="pinterest" target="_blank"><?php _e('Pinterest ', 'modelo'); ?><span class="share-count"></span></a></li>
			</ul>
		  </div>
		<div class="entry-post-content" itemprop="text">
		  <?php the_content(); ?>

		</div><!-- .entry-post-content-->
		
		<div class="page-links"></div>
	  </div><!-- .entry-content single-->
	</article><!-- #post-## -->

	<div class="author-bio" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author">
	  <div class="author-image">
	  <?php echo get_avatar( get_the_author_meta( 'ID' ), '100' ); ?>
	  </div>
	  <div class="author-info">
		<div class="author-name">
		  <span itemprop="name"><a class="h4" rel="nofollow" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Posts by <?php the_author(); ?>"><?php printf( esc_attr__( 'About %s', 'modelo' ), get_the_author() );?></a></span></div>
		  <div class="author-desc" itemprop="description"><?php echo wp_kses( get_the_author_meta( 'description' ), null ); ?>
		</div>
		<div class="author-social">
		  <ul class="list-inline">
		  
		<?php if ( get_the_author_meta( 'twitter' ) != '' )  { ?>
            <li><a class="twitter-link" href="https://twitter.com/<?php echo wp_kses( get_the_author_meta( 'twitter' ), null ); ?>"><i class="fa fa-twitter"></i></a></li>
        <?php } ?>
 
        <?php if ( get_the_author_meta( 'facebook' ) != '' )  { ?>
            <li><a class="facebook-link" href="<?php echo esc_url( get_the_author_meta( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
        <?php } ?>
 
        <?php if ( get_the_author_meta( 'linkedin' ) != '' )  { ?>
            <li><a class="linkedin-link" href="<?php echo esc_url( get_the_author_meta( 'linkedin' ) ); ?>"><i class="fa fa-linkedin"></i></a></li>
        <?php } ?>
 
        <?php if ( get_the_author_meta( 'googleplus' ) != '' )  { ?>
            <li><a class="google-link" href="<?php echo esc_url( get_the_author_meta( 'googleplus' ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
        <?php } ?>
		  </ul>
		</div>
	  </div>
	</div>