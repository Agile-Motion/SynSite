<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text hidden"><?php echo _x( 'Search for:', 'label', 'synsite' ) ?></span>
		<input type="search" class="search-field"
		       placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'synsite' ) ?>"
		       value="<?php echo get_search_query() ?>" name="s"
		       title="<?php echo esc_attr_x( 'Search for:', 'label', 'synsite' ) ?>"/>
		<span class="dashicons dashicons-search search-icon"></span>
	</label>
</form>