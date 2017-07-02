<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
	  <span class="screen-reader-text"><?php _e('Search for:', 'modelo'); ?></span>
	  <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search for:">
	</label>
	<button type="submit" class="search-submit fa fa-search" value="<?php echo esc_attr_x( 'Search', 'Submit' ); ?>"></button>
</form><!-- .search-form -->